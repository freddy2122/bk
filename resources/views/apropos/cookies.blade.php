@extends('layouts.index')
@section('content')
<section class="bg-dark position-relative py-5" style="margin-top: 80px;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background:  #448c74"></div>
  <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .03);"></div>
  <div class="container position-relative z-2 py-5 mb-4 mb-sm-5" data-bs-theme="dark">
    <div class="row pb-5 mb-2 mb-sm-0 mb-lg-3">
      <div class="col-lg-10 col-xl-9">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb justify-content-center">
            <li class="breadcrumb-item">
              <a href="/">Startseite</a>
            </li>
            <li class="breadcrumb-item active text-center" aria-current="page">Cookie-Verwaltung
            </li>
          </ol>
        </nav>

        <h1 class=" pb-2 pb-sm-3 " style="color: black;">Cookie-Verwaltung
        </h1>

      </div>
    </div>
  </div>
</section>
<section class="container py-5">
  <div class="row">
    <aside class="col-lg-4 col-xl-3 d-none d-lg-block">
      <div class="card border-0 shadow-sm position-sticky" style="top: 6rem;">
        <div class="card-body p-3">
          <h6 class="mb-3">Inhalt</h6>
          <nav id="toc" class="nav nav-pills flex-column gap-1 small">
            <a class="nav-link" href="#definitions">Begriffe und Geltungsbereich</a>
            <a class="nav-link" href="#quoi">Was ist ein Cookie?</a>
            <a class="nav-link" href="#types">Verwendete Cookie-Arten</a>
            <a class="nav-link" href="#finalites">Zwecke und Rechtsgrundlage</a>
            <a class="nav-link" href="#consentement">Einwilligungsverwaltung</a>
            <a class="nav-link" href="#parametrage">Cookie-Einstellungen</a>
            <a class="nav-link" href="#duree">Speicherdauer</a>
            <a class="nav-link" href="#tiers">Cookies von Drittanbietern</a>
            <a class="nav-link" href="#securite">Sicherheit</a>
            <a class="nav-link" href="#droits">Ihre Rechte</a>
            <a class="nav-link" href="#contact">Kontakt</a>
            <a class="nav-link" href="#maj">Aktualisierungen</a>
          </nav>
          <hr>
        </div>
      </div>
    </aside>

    <div class="col-lg-8 col-xl-9">
      <div data-bs-spy="scroll" data-bs-target="#toc" data-bs-offset="80" tabindex="0">

        <section id="definitions" class="pb-5">
          <h2 class="h3 mb-3">Begriffe und Geltungsbereich</h2>
          <p class="text-body-secondary mb-0">Diese Richtlinie erläutert die Verwendung von Cookies und ähnlichen Technologien, die beim Besuch unserer Website auf Ihrem Endgerät gespeichert werden. Sie gilt für alle über die Website bereitgestellten Dienste.</p>
        </section>

        <section id="quoi" class="pb-5">
          <h2 class="h3 mb-3">Was ist ein Cookie?</h2>
          <p class="text-body-secondary mb-0">Ein Cookie ist eine kleine Textdatei, die beim Besuch einer Website auf Ihrem Endgerät gespeichert werden kann. Sie ermöglicht es insbesondere, Ihren Browser während der Gültigkeitsdauer des Cookies wiederzuerkennen und bestimmte Informationen zu speichern.</p>
        </section>

        <section id="types" class="pb-5">
          <h2 class="h3 mb-3">Verwendete Cookie-Arten</h2>
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <ul class="mb-0">
                <li class="mb-2"><span class="fw-semibold">Unbedingt erforderliche Cookies</span> – unerlässlich für den Betrieb der Website und die Bereitstellung der Dienste.</li>
                <li class="mb-2"><span class="fw-semibold">Analyse-Cookies</span> – helfen uns zu verstehen, wie die Website genutzt wird, um sie zu verbessern.</li>
                <li class="mb-2"><span class="fw-semibold">Funktionale Cookies</span> – speichern Ihre Einstellungen, um das Nutzungserlebnis zu verbessern.</li>
                <li class="mb-2"><span class="fw-semibold">Werbe-Cookies</span> – personalisieren die Anzeige von Inhalten und Werbung (falls zutreffend).</li>
                <li class="mb-0"><span class="fw-semibold">Cookies von Drittanbietern</span> – von Partnern für bestimmte Zwecke gesetzt (siehe eigener Abschnitt).</li>
              </ul>
            </div>
          </div>
        </section>

        <section id="finalites" class="pb-5">
          <h2 class="h3 mb-3">Zwecke und Rechtsgrundlage</h2>
          <p class="text-body-secondary mb-0">Je nach Fall werden Cookies auf Grundlage Ihrer Einwilligung oder unseres berechtigten Interesses gesetzt (z. B. die für die Bereitstellung des Dienstes unbedingt erforderlichen). Soweit erforderlich, wird Ihre Einwilligung vor dem Setzen eingeholt.</p>
        </section>

        <section id="consentement" class="pb-5">
          <h2 class="h3 mb-3">Einwilligungsverwaltung</h2>
          <p class="text-body-secondary mb-0">Sie können Ihre Einwilligung jederzeit erteilen, verweigern oder widerrufen. Der Widerruf berührt nicht die Rechtmäßigkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten Verarbeitung.</p>
        </section>

        <section id="parametrage" class="pb-5">
          <h2 class="h3 mb-3">Cookie-Einstellungen</h2>
          <p class="text-body-secondary">Sie können Ihren Browser so einstellen, dass er Cookies akzeptiert oder ablehnt oder Sie benachrichtigt, wenn ein Cookie gesetzt wird. Diese Einstellungen können Ihr Nutzungserlebnis und den Zugang zu bestimmten Diensten beeinflussen.</p>
          <div class="row g-3">
            <div class="col-md-6">
              <div class="border rounded-3 p-3 h-100">
                <div class="fw-semibold mb-1">Beispiele für Hilfeseiten</div>
                <ul class="fs-sm mb-0">
                  <li>Chrome</li>
                  <li>Firefox</li>
                  <li>Safari</li>
                  <li>Edge</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded-3 p-3 h-100">
                <div class="fw-semibold mb-1">Auswirkungen</div>
                <p class="fs-sm text-body-secondary mb-0">Die Ablehnung bestimmter Cookies kann die Nutzungsqualität beeinträchtigen und den Zugang zu einigen Funktionen einschränken.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="duree" class="pb-5">
          <h2 class="h3 mb-3">Speicherdauer</h2>
          <p class="text-body-secondary mb-0">Die Lebensdauer von Cookies hängt von ihrem Zweck ab. Sie überschreitet nicht die im Hinblick auf die verfolgten Ziele und die geltenden gesetzlichen Anforderungen erforderliche Dauer.</p>
        </section>

        <section id="tiers" class="pb-5">
          <h2 class="h3 mb-3">Cookies von Drittanbietern</h2>
          <p class="text-body-secondary mb-0">Partner können über unsere Website Cookies für bestimmte Zwecke setzen (Reichweitenmessung, Werbung, externe Inhalte usw.). Bitte lesen Sie deren eigene Richtlinien für weitere Informationen.</p>
        </section>

        <section id="securite" class="pb-5">
          <h2 class="h3 mb-3">Sicherheit</h2>
          <p class="text-body-secondary mb-0">Wir setzen geeignete technische und organisatorische Maßnahmen ein, um die Sicherheit der mit Cookies verbundenen Informationen zu gewährleisten.</p>
        </section>

        <section id="droits" class="pb-5">
          <h2 class="h3 mb-3">Ihre Rechte</h2>
          <p class="text-body-secondary mb-0">Gemäß den geltenden Vorschriften haben Sie das Recht auf Auskunft, Berichtigung, Widerspruch, Löschung, Einschränkung und Datenübertragbarkeit. Sie können außerdem Verfügungen über den Umgang mit Ihren Daten nach Ihrem Tod festlegen.</p>
        </section>

        <section id="contact" class="pb-5">
          <h2 class="h3 mb-3">Kontakt</h2>
          <p class="text-body-secondary">Bei Fragen zu dieser Richtlinie oder zur Ausübung Ihrer Rechte können Sie uns kontaktieren.</p>
          <p class="mb-0"><a href="mailto:contact@example.com">contact@example.com</a> · <a href="{{ route('contact') }}">Kontaktformular</a></p>
        </section>

        <section id="maj" class="pb-2">
          <h2 class="h3 mb-3">Aktualisierungen der Richtlinie</h2>
          <p class="text-body-secondary mb-0">Diese Richtlinie kann sich ändern. Wesentliche Änderungen werden Ihnen auf geeignete Weise mitgeteilt.</p>
        </section>

      </div>
    </div>
  </div>
</section>
@endsection