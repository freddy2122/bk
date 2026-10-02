@extends('layouts.index')

@section('content')
<!-- Hero Banner corrigé avec image en arrière-plan -->
<section class="hero-section position-relative overflow-hidden " style="margin-top: 80px;">
    <div class="container position-relative">
        <div class="d-flex justify-content-center">
            <div class="hero-content bg-primary text-white px-4 py-3 px-md-5 py-md-4 w-100 text-center" style="max-width: 600px;">
                <h2 class="h3 mb-2 text-white">@lang('TRD031')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center m-0">
                        <li class="breadcrumb-item">
                            <a class="text-white text-decoration-none" href="{{ route('home') }}">Startseite</a>
                        </li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">@lang('TRD031')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Le reste du contenu reste inchangé -->
<section class="container py-5">
    <div class="row g-4 g-lg-5">
        <div class="col-lg-8">
            <h1 class="h1 mb-4 text-dark">Umschuldung</h1>
            <img class="img-fluid mb-4 w-100" src="{{ asset('assets/img/landing/business-consulting/industries/01.jpg') }}" alt="Konsumkredit">
            <p class="text-body-secondary fs-5 mb-4">Bei dieser Lösung werden ein oder mehrere bestehende Kredite durch einen einzigen Kredit zu 3 % bei {{ setting('SITE_NAME', config('app.name')) }} ersetzt, der über eine längere, an das Einkommen des Kreditnehmers angepasste Laufzeit getilgt wird. So können Privatpersonen eine tragfähige Lösung für ihre Überschuldung finden.</p>
            <p class="text-body-secondary mb-0">Ein Kredit, mit dem Sie sich von all Ihren anderen laufenden Darlehen befreien.</p>

            <!-- <div class="mt-5">
                <h2 class="h2 mb-4 text-dark">Unsere Vorteile</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="feature-item py-2">
                            <h3 class="h5 mb-2 text-dark">Wettbewerbsfähige Zinsen</h3>
                            <p class="text-body-secondary mb-0">Attraktive Zinssätze ab 3 % pro Jahr.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item py-2">
                            <h3 class="h5 mb-2 text-dark">Schnelle Antwortzeiten</h3>
                            <p class="text-body-secondary mb-0">Antwort innerhalb von 48 Stunden für die meisten Anfragen.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item py-2">
                            <h3 class="h5 mb-2 text-dark">Flexible Beträge</h3>
                            <p class="text-body-secondary mb-0">Von 1.000 € bis 50.000 € je nach Ihrem Bedarf.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item py-2">
                            <h3 class="h5 mb-2 text-dark">Keine versteckten Gebühren</h3>
                            <p class="text-body-secondary mb-0">Volle Transparenz bei Kosten und Konditionen.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2 class="h2 mb-4 text-dark">Wie funktioniert es?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="process-step text-center p-4 h-100">
                            <div class="step-number mb-3">1</div>
                            <h3 class="h5 mb-2 text-dark">Online-Simulation</h3>
                            <p class="text-body-secondary mb-0">Berechnen Sie Ihre Monatsraten mit wenigen Klicks.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-step text-center p-4 h-100">
                            <div class="step-number mb-3">2</div>
                            <h3 class="h5 mb-2 text-dark">Antragstellung</h3>
                            <p class="text-body-secondary mb-0">Übermitteln Sie Ihre Nachweise online.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-step text-center p-4 h-100">
                            <div class="step-number mb-3">3</div>
                            <h3 class="h5 mb-2 text-dark">Auszahlung</h3>
                            <p class="text-body-secondary mb-0">Überweisung innerhalb von 48 Stunden nach Zusage.</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="col-lg-4">
            <aside class="sticky-sidebar">
                <div class="mb-4">
                    <!-- <div class="nav-menu-header px-3 py-2 mb-2">@lang('TRD031')</div> -->
                    <div class="list-group list-group-flush">
                        <a class="list-group-item px-3 py-2 list-group-item-action nav-menu-item" href="{{ route('loans.conso') }}">Konsumkredit</a>
                        <a class="list-group-item px-3 py-2 list-group-item-action nav-menu-item" href="{{ route('loans.travaux') }}">Renovierungskredit</a>
                        <a class="list-group-item px-3 py-2 list-group-item-action nav-menu-item" href="{{ route('loans.immobilier') }}">Immobilienkredit</a>
                        <a class="list-group-item px-3 py-2 list-group-item-action nav-menu-item active" href="{{ route('loans.rachat') }}">Umschuldung</a>
                        <a class="list-group-item px-3 py-2 list-group-item-action nav-menu-item" href="{{ route('loans.credit-bail') }}">Leasing</a>
                        <a class="list-group-item px-3 py-2 list-group-item-action nav-menu-item" href="{{ route('loans.etudiant') }}">Studienkredit</a>
                    </div>
                </div>

                <div class="cta-card card">
                    <div class="card-body p-4">
                        <h3 class="h4 card-title mb-3">Jetzt Kredit aufnehmen</h3>
                        <p class="card-text text-body-secondary mb-4">{{ setting('SITE_NAME', config('app.name')) }} genießt einen sehr guten Ruf und verfügt über große Erfahrung in der Online-Finanzierung.</p>
                        <a class="btn btn-dark w-100 btn-sharp" href="{{ route('apply.step1', ['locale' => app()->getLocale()]) }}">@lang('TRD051')</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="container py-4">
    <div class="newsletter-card card">
        <div class="newsletter-accent"></div>
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center g-3">
                <div class="col-lg-5 d-flex align-items-start">
                    <i class="fas fa-envelope fs-1 text-primary me-3"></i>
                    <div>
                        <h3 class="h5 mb-2">Newsletter</h3>
                        <p class="mb-0 text-body-secondary">Abonnieren Sie unseren Newsletter, um keine Neuigkeiten zu verpassen und von exklusiven Vorteilen zu profitieren.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form class="input-group">
                        <input type="email" class="form-control btn-sharp" placeholder="Ihre E-Mail-Adresse" aria-label="Email">
                        <button class="btn btn-primary fw-semibold btn-sharp" type="button">Jetzt starten!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section {
        background: linear-gradient(rgba(0, 35, 71, 0.7), rgba(0, 35, 71, 0.7)), url('{{ asset("assets/img/about/agency/gallery/05.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .hero-content {
        /* background-color: #0d6efd; */
        border-radius: 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .hero-content:hover {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .breadcrumb-item.active {
        color: #f8f9fa !important;
    }

    .nav-menu-header {
        background-color: #37715d;
        color: #212529;
        font-weight: 600;
    }
    .nav-menu-item.active {
        background-color: #37715d;
        color: white;
        border: none;
    }

    .nav-menu-item:hover:not(.active) {
        background-color: #f8f9fa;
    }

    .cta-card {
        border-radius: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        border: 1px solid #dee2e6;
    }

    .btn-sharp {
        border-radius: 0;
    }

    .newsletter-card {
        border-radius: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        border: 1px solid #dee2e6;
        position: relative;
    }

    .newsletter-accent {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #37715d;
    }

    .feature-item {
        border-left: 4px solid #37715d;
        padding-left: 1rem;
    }

    .process-step {
        border: 1px solid #dee2e6;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        border-radius: 0;
    }

    .step-number {
        width: 48px;
        height: 48px;
        background-color: #37715d;
        color: white;
        display: flex;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin: 0 auto 1rem;
    }

    .sticky-sidebar {
        position: sticky;
        top: 6rem;
    }

    @media (max-width: 991.98px) {
        .sticky-sidebar {
            position: static;
        }

        .hero-section {
            min-height: 50vh;
        }
    }

    @media (max-width: 575.98px) {
        .hero-section {
            min-height: 40vh;
        }
    }
</style>
@endsection
