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
              <a href="/">@lang('TRD030')</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">@lang('TRD036')</li>
          </ol>
        </nav>

        <h1 class=" pb-2 pb-sm-3 " style="color: black;">@lang('TRD036')</h1>

      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row g-4">
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 44px; height: 44px;">1</div>
            <h3 class="h5 mb-0">Online-Registrierung</h3>
          </div>
          <p class="text-body-secondary mb-0">Füllen Sie Ihren Antrag in wenigen Minuten aus und laden Sie Ihre Nachweise hoch.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 44px; height: 44px;">2</div>
            <h3 class="h5 mb-0">Bearbeitung Ihres Antrags</h3>
          </div>
          <p class="text-body-secondary mb-0">Ihr Antrag wird von unseren Teams geprüft. Wir melden uns schnell mit einer Antwort.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 44px; height: 44px;">3</div>
            <h3 class="h5 mb-0">Tilgungsplan-Angebot</h3>
          </div>
          <p class="text-body-secondary mb-0">Erhalten Sie ein Angebot und einen auf Ihre Situation und Ihr Vorhaben abgestimmten Tilgungsplan.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center me-3" style="width: 44px; height: 44px;">4</div>
            <h3 class="h5 mb-0">Vertragsunterzeichnung</h3>
          </div>
          <p class="text-body-secondary mb-0">Unterzeichnen Sie Ihren Vertrag online und erhalten Sie die Auszahlung gemäß den vereinbarten Bedingungen.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container pb-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body p-4 p-md-5">
          <h2 class="h3 mb-3">Voraussetzungen</h2>
          <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-start mb-2">
              <i class="ai-check-alt text-primary me-2 mt-1"></i>
              <span>Volljährig sein und einen gültigen Ausweis besitzen.</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <i class="ai-check-alt text-primary me-2 mt-1"></i>
              <span>Einen Wohnsitznachweis und Ihre Bankverbindung (IBAN) vorlegen.</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <i class="ai-check-alt text-primary me-2 mt-1"></i>
              <span>Ein regelmäßiges Einkommen nachweisen.</span>
            </li>
            <li class="d-flex align-items-start">
              <i class="ai-check-alt text-primary me-2 mt-1"></i>
              <span>Je nach Ihrer Situation können weitere Unterlagen oder Bedingungen verlangt werden.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
        <img src="/assets/img/about/agency/gallery/01.jpg" alt="Ablauf des Antrags" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
</section>

<section class="container pb-5">
  <div class="bg-primary rounded-3 text-white p-4 p-md-5 d-flex flex-column flex-md-row align-items-md-center justify-content-between">
    <div class="me-md-4">
      <h2 class="h3 text-white mb-2">@lang('TRD064')</h2>
      <p class="mb-0 opacity-75">@lang('TRD065')</p>
    </div>
    <a class="btn btn-light btn-lg mt-3 mt-md-0" href="{{ route('apply.step1', ['locale' => app()->getLocale()]) }}">@lang('TRD052')</a>
  </div>

</section>
@endsection