<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <title>@lang('TRD021')</title>
</head>
<body style="font-family: Arial, sans-serif; color:#111;">
  <h2 style="margin-bottom:8px;">@lang('TRD021')</h2>
  <p style="margin-top:0;">@lang('TRD022')</p>

  <ul>
    <li>@lang('TRD001'): €{{ number_format($summary['amount'], 2, ',', ' ') }}</li>
    <li>@lang('TRD002'): {{ $summary['months'] }} @lang('TRD003')</li>
    <li>@lang('TRD004'): {{ $summary['annual_rate'] }}%</li>
    <li>@lang('TRD005'): €{{ number_format($summary['monthly_payment'], 2, ',', ' ') }}</li>
    <li>@lang('TRD006'): €{{ number_format($summary['total_interest'], 2, ',', ' ') }}</li>
    <li>@lang('TRD007'): €{{ number_format($summary['total_payment'], 2, ',', ' ') }}</li>
  </ul>

  <p>@lang('TRD023')</p>

  <p style="margin-top:24px;">
    @lang('TRD024')<br>{{ setting('SITE_NAME', config('app.name')) }}
  </p>
</body>
</html>
