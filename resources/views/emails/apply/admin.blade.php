<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>New financing application</title>
</head>
<body style="font-family: Arial, sans-serif; color:#111;">
  <h2 style="margin-bottom:8px;">New financing application received</h2>
  <p style="margin-top:0;">Summary:</p>
  <ul>
    <li>Amount: €{{ number_format($summary['amount'], 2, ',', ' ') }}</li>
    <li>Duration: {{ $summary['months'] }} months</li>
    <li>Annual rate: {{ $summary['annual_rate'] }}%</li>
    <li>Monthly payment: €{{ number_format($summary['monthly_payment'], 2, ',', ' ') }}</li>
    <li>Total interest: €{{ number_format($summary['total_interest'], 2, ',', ' ') }}</li>
    <li>Total payment: €{{ number_format($summary['total_payment'], 2, ',', ' ') }}</li>
  </ul>

  <p>Applicant:</p>
  <ul>
    <li>Name: {{ $data['civility'] }} {{ $data['first_name'] }} {{ $data['last_name'] }}</li>
    <li>Email: {{ $data['email'] }}</li>
    <li>Phone: {{ $data['phone'] }}</li>
    <li>Employment: {{ $data['employment_status'] }}</li>
    <li>Monthly income: €{{ number_format($data['monthly_income'], 2, ',', ' ') }}</li>
    @if(!empty($data['address']))
    <li>Address: {{ $data['address'] }}</li>
    @endif
  </ul>

  <p>Loan:</p>
  <ul>
    <li>Type: {{ $data['loan_type'] }}</li>
    <li>Purpose: {{ $data['purpose'] ?? '-' }}</li>
  </ul>

  <p>--<br>{{ setting('SITE_NAME', config('app.name')) }}</p>
</body>
</html>
