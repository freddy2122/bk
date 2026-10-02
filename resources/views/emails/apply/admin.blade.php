<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Neuer Finanzierungsantrag</title>
</head>
<body style="font-family: Arial, sans-serif; color:#111;">
  <h2 style="margin-bottom:8px;">Neuer Finanzierungsantrag eingegangen</h2>
  <p style="margin-top:0;">Zusammenfassung:</p>
  <ul>
    <li>Betrag: €{{ number_format($summary['amount'], 2, ',', ' ') }}</li>
    <li>Laufzeit: {{ $summary['months'] }} Monate</li>
    <li>Jahreszins: {{ $summary['annual_rate'] }}%</li>
    <li>Monatsrate: €{{ number_format($summary['monthly_payment'], 2, ',', ' ') }}</li>
    <li>Gesamtzinsen: €{{ number_format($summary['total_interest'], 2, ',', ' ') }}</li>
    <li>Gesamtbetrag: €{{ number_format($summary['total_payment'], 2, ',', ' ') }}</li>
    <li>Bearbeitungsgebühr: €{{ number_format($summary['processing_fee'], 2, ',', ' ') }}</li>
    <li>Gesamtkosten inkl. Bearbeitungsgebühr: €{{ number_format($summary['total_cost'], 2, ',', ' ') }}</li>
  </ul>

  <p>Antragsteller:</p>
  <ul>
    <li>Name: {{ $data['civility'] }} {{ $data['first_name'] }} {{ $data['last_name'] }}</li>
    <li>E-Mail: {{ $data['email'] }}</li>
    <li>Telefon: {{ $data['phone'] }}</li>
    <li>Beschäftigung: {{ __(['salarie' => 'TRD131', 'independant' => 'TRD132', 'etudiant' => 'TRD133', 'retraite' => 'TRD134', 'demandeur' => 'TRD135'][$data['employment_status']] ?? $data['employment_status']) }}</li>
    <li>Monatliches Einkommen: €{{ number_format($data['monthly_income'], 2, ',', ' ') }}</li>
    @if(!empty($data['address']))
    <li>Adresse: {{ $data['address'] }}</li>
    @endif
  </ul>

  <p>Kredit:</p>
  <ul>
    <li>Art: {{ __(['conso' => 'TRD104', 'travaux' => 'TRD105', 'immobilier' => 'TRD106', 'rachat' => 'TRD107', 'credit-bail' => 'TRD108', 'etudiant' => 'TRD109'][$data['loan_type']] ?? $data['loan_type']) }}</li>
    <li>Verwendungszweck: {{ $data['purpose'] ?? '-' }}</li>
  </ul>

  <p>--<br>{{ setting('SITE_NAME', config('app.name')) }}</p>
</body>
</html>
