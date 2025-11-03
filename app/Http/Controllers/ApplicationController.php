<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use App\Mail\ApplicationReceivedUser;
use App\Mail\ApplicationReceivedAdmin;

class ApplicationController extends Controller
{
    public function showStep1()
    {
        return view('apply.step1');
    }

    public function postStep1(Request $request)
    {
        $validated = $request->validate([
            'loan_type' => 'required|string',
            'amount' => 'required|numeric|min:500',
            'duration' => 'required|integer|min:6|max:120',
            'purpose' => 'nullable|string|max:255',
        ]);

        $request->session()->put('apply.step1', $validated);

        return redirect()->route('apply.step2', ['locale' => app()->getLocale()]);
    }

    public function showStep2(Request $request)
    {
        if (!$request->session()->has('apply.step1')) {
            return redirect()->route('apply.step1', ['locale' => app()->getLocale()]);
        }

        $step1 = $request->session()->get('apply.step1');
        $annualRate = $this->getAnnualRate();
        $summary = $this->buildSummary((float) $step1['amount'], (int) $step1['duration'], $annualRate);

        return view('apply.step2', [
            'step1' => $step1,
            'summary' => $summary,
        ]);
    }

    public function postStep2(Request $request)
    {
        if (!$request->session()->has('apply.step1')) {
            return redirect()->route('apply.step1', ['locale' => app()->getLocale()]);
        }

        $validated = $request->validate([
            'civility' => 'required|string|in:Mme,M.',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:30',
            'employment_status' => 'required|string',
            'monthly_income' => 'required|numeric|min:0',
            'address' => 'nullable|string|max:255',
            'accept_terms' => 'accepted',
        ]);

        $data = array_merge($request->session()->get('apply.step1', []), $validated);

        $annualRate = $this->getAnnualRate();
        $summary = $this->buildSummary((float) $data['amount'], (int) $data['duration'], $annualRate);

        // Clear session step data
        $request->session()->forget('apply.step1');

        // Notifications
        try {
            // User localized email
            $userMail = new ApplicationReceivedUser($data, $summary);
            $userMail->locale(App::getLocale());
            Mail::to($data['email'])->send($userMail);

            // Admin email (non localized)
            $adminEmail = function_exists('setting') ? setting('SITE_EMAIL', env('ADMIN_EMAIL', 'admin@example.com')) : env('ADMIN_EMAIL', 'admin@example.com');
            if (!empty($adminEmail)) {
                Mail::to($adminEmail)->send(new ApplicationReceivedAdmin($data, $summary));
            }
        } catch (\Throwable $e) {
            // Silently ignore mail failures to not block UX; logs can capture the exception
        }

        $schedule = $this->buildSchedule((float) $data['amount'], (int) $data['duration'], $annualRate);

        return view('apply.complete', ['data' => $data, 'summary' => $summary, 'schedule' => $schedule]);
    }

    protected function buildSummary(float $amount, int $months, float $annualRate): array
    {
        $rate = max($annualRate, 0.0);
        $monthlyRate = $rate / 12.0;
        if ($monthlyRate > 0) {
            $payment = $amount * ($monthlyRate) / (1 - pow(1 + $monthlyRate, -$months));
        } else {
            $payment = $amount / max($months, 1);
        }
        $total = $payment * $months;
        $interestTotal = $total - $amount;
        return [
            'annual_rate' => round($rate * 100, 2),
            'monthly_rate' => round($monthlyRate * 100, 4),
            'monthly_payment' => round($payment, 2),
            'total_payment' => round($total, 2),
            'total_interest' => round($interestTotal, 2),
            'amount' => round($amount, 2),
            'months' => $months,
        ];
    }

    protected function getAnnualRate(): float
    {
        $raw = null;
        if (function_exists('setting')) {
            $raw = setting('TEAG', null);
            if ($raw === null) {
                $raw = setting('INTEREST_RATE', null);
            }
        }
        if ($raw === null && defined('TEAG')) {
            $raw = TEAG;
        }
        return $this->parseRateValue($raw, 0.02); // default 2%
    }

    protected function parseRateValue($value, float $default = 0.02): float
    {
        if ($value === null) return $default;
        if (is_numeric($value)) {
            $num = (float) $value;
            return $num > 1 ? $num / 100.0 : $num;
        }
        $str = trim((string) $value);
        $str = str_replace(',', '.', $str);
        // Keep digits and dot only
        $clean = preg_replace('/[^0-9.]/', '', $str) ?? '';
        if ($clean === '') return $default;
        $num = (float) $clean;
        return $num > 1 ? $num / 100.0 : $num;
    }

    protected function buildSchedule(float $amount, int $months, float $annualRate): array
    {
        $schedule = [];
        $rate = max($annualRate, 0.0);
        $monthlyRate = $rate / 12.0;
        $balance = $amount;
        if ($months <= 0) {
            return $schedule;
        }
        if ($monthlyRate > 0) {
            $payment = $amount * ($monthlyRate) / (1 - pow(1 + $monthlyRate, -$months));
        } else {
            $payment = $amount / $months;
        }
        // Work with 2-decimals monetary rounding on presentation, keep computation internally
        for ($m = 1; $m <= $months; $m++) {
            $interest = $monthlyRate > 0 ? $balance * $monthlyRate : 0.0;
            // Round values for presentation
            $interestRounded = round($interest, 2);
            $principalRounded = round($payment - $interestRounded, 2);
            if ($principalRounded > $balance || $m === $months) {
                // Adjust last installment to clear balance
                $principalRounded = round($balance, 2);
                $interestRounded = round($payment - $principalRounded, 2);
                if ($interestRounded < 0) $interestRounded = 0.0;
                $paymentRounded = round($principalRounded + $interestRounded, 2);
            } else {
                $paymentRounded = round($payment, 2);
            }
            $newBalance = round($balance - $principalRounded, 2);
            if ($newBalance < 0) { $newBalance = 0.0; }

            $schedule[] = [
                'month' => $m,
                'payment' => $paymentRounded,
                'interest' => $interestRounded,
                'principal' => $principalRounded,
                'balance' => $newBalance,
            ];

            $balance = $newBalance;
        }
        return $schedule;
    }
}
