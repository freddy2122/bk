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
              <a href="/">Accueil</a>
            </li>
            <li class="breadcrumb-item active text-center" aria-current="page">Gestion des cookies
            </li>
          </ol>
        </nav>

        <h1 class=" pb-2 pb-sm-3 " style="color: black;">Gestion des cookies
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
          <h6 class="mb-3">Sommaire</h6>
          <nav id="toc" class="nav nav-pills flex-column gap-1 small">
            <a class="nav-link" href="#definitions">Définitions et périmètre</a>
            <a class="nav-link" href="#quoi">Qu’est-ce qu’un cookie ?</a>
            <a class="nav-link" href="#types">Types de cookies utilisés</a>
            <a class="nav-link" href="#finalites">Finalités et base légale</a>
            <a class="nav-link" href="#consentement">Gestion du consentement</a>
            <a class="nav-link" href="#parametrage">Paramétrage des cookies</a>
            <a class="nav-link" href="#duree">Durée de conservation</a>
            <a class="nav-link" href="#tiers">Cookies tiers</a>
            <a class="nav-link" href="#securite">Sécurité</a>
            <a class="nav-link" href="#droits">Vos droits</a>
            <a class="nav-link" href="#contact">Contact</a>
            <a class="nav-link" href="#maj">Mises à jour</a>
          </nav>
          <hr>
        </div>
      </div>
    </aside>

    <div class="col-lg-8 col-xl-9">
      <div data-bs-spy="scroll" data-bs-target="#toc" data-bs-offset="80" tabindex="0">

        <section id="definitions" class="pb-5">
          <h2 class="h3 mb-3">Définitions et périmètre</h2>
          <p class="text-body-secondary mb-0">La présente politique explique l’utilisation des cookies et technologies similaires déposés depuis notre site sur votre terminal lorsque vous le consultez. Elle s’applique à l’ensemble des services fournis via le Site.</p>
        </section>

        <section id="quoi" class="pb-5">
          <h2 class="h3 mb-3">Qu’est-ce qu’un cookie ?</h2>
          <p class="text-body-secondary mb-0">Un cookie est un petit fichier texte susceptible d’être enregistré sur votre terminal lorsque vous visitez un site. Il permet notamment de reconnaître votre navigateur pendant la durée de validité du cookie et de mémoriser certaines informations.</p>
        </section>

        <section id="types" class="pb-5">
          <h2 class="h3 mb-3">Types de cookies utilisés</h2>
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <ul class="mb-0">
                <li class="mb-2"><span class="fw-semibold">Cookies strictement nécessaires</span> – indispensables au fonctionnement du site et à la fourniture des services.</li>
                <li class="mb-2"><span class="fw-semibold">Cookies de mesure d’audience</span> – nous aident à comprendre l’utilisation du site pour l’améliorer.</li>
                <li class="mb-2"><span class="fw-semibold">Cookies fonctionnels</span> – mémorisent vos préférences pour améliorer l’expérience.</li>
                <li class="mb-2"><span class="fw-semibold">Cookies publicitaires</span> – personnalisent l’affichage de contenus et d’annonces (le cas échéant).</li>
                <li class="mb-0"><span class="fw-semibold">Cookies tiers</span> – déposés par des partenaires pour des finalités déterminées (voir section dédiée).</li>
              </ul>
            </div>
          </div>
        </section>

        <section id="finalites" class="pb-5">
          <h2 class="h3 mb-3">Finalités et base légale</h2>
          <p class="text-body-secondary mb-0">Selon les cas, les cookies sont déposés sur la base de votre consentement ou de notre intérêt légitime (par exemple, ceux strictement nécessaires à la fourniture du service). Lorsque requis, votre consentement est recueilli préalablement au dépôt.</p>
        </section>

        <section id="consentement" class="pb-5">
          <h2 class="h3 mb-3">Gestion du consentement</h2>
          <p class="text-body-secondary mb-0">Vous pouvez accepter, refuser ou retirer votre consentement à tout moment. Le retrait de consentement n’affecte pas la licéité du traitement fondé sur le consentement effectué avant ce retrait.</p>
        </section>

        <section id="parametrage" class="pb-5">
          <h2 class="h3 mb-3">Paramétrage des cookies</h2>
          <p class="text-body-secondary">Vous pouvez configurer votre navigateur pour accepter ou refuser les cookies, ou pour être averti lorsqu’un cookie est déposé. Le paramétrage peut affecter votre expérience utilisateur et l’accès à certains services.</p>
          <div class="row g-3">
            <div class="col-md-6">
              <div class="border rounded-3 p-3 h-100">
                <div class="fw-semibold mb-1">Exemples de liens d’aide</div>
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
                <div class="fw-semibold mb-1">Impact</div>
                <p class="fs-sm text-body-secondary mb-0">Le refus de certains cookies peut dégrader la qualité de navigation et restreindre l’accès à certaines fonctionnalités.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="duree" class="pb-5">
          <h2 class="h3 mb-3">Durée de conservation</h2>
          <p class="text-body-secondary mb-0">La durée de vie des cookies varie selon leur finalité. Elle n’excède pas la durée nécessaire au regard des objectifs poursuivis et des exigences légales applicables.</p>
        </section>

        <section id="tiers" class="pb-5">
          <h2 class="h3 mb-3">Cookies tiers</h2>
          <p class="text-body-secondary mb-0">Des partenaires peuvent déposer des cookies via notre site pour des finalités déterminées (mesure d’audience, publicités, contenus externes, etc.). Nous vous invitons à consulter leur propre politique pour plus d’informations.</p>
        </section>

        <section id="securite" class="pb-5">
          <h2 class="h3 mb-3">Sécurité</h2>
          <p class="text-body-secondary mb-0">Nous mettons en œuvre des mesures techniques et organisationnelles appropriées afin d’assurer la sécurité des informations associées aux cookies.</p>
        </section>

        <section id="droits" class="pb-5">
          <h2 class="h3 mb-3">Vos droits</h2>
          <p class="text-body-secondary mb-0">Conformément à la réglementation applicable, vous disposez de droits d’accès, de rectification, d’opposition, d’effacement, de limitation et de portabilité des données. Vous pouvez également définir des directives relatives au sort de vos données après votre décès.</p>
        </section>

        <section id="contact" class="pb-5">
          <h2 class="h3 mb-3">Contact</h2>
          <p class="text-body-secondary">Pour toute question relative à cette politique ou pour exercer vos droits, vous pouvez nous contacter.</p>
          <p class="mb-0"><a href="mailto:contact@example.com">contact@example.com</a> · <a href="{{ route('contact') }}">Formulaire de contact</a></p>
        </section>

        <section id="maj" class="pb-2">
          <h2 class="h3 mb-3">Mises à jour de la politique</h2>
          <p class="text-body-secondary mb-0">La présente politique peut être amenée à évoluer. Toute modification significative sera portée à votre connaissance par les moyens appropriés.</p>
        </section>

      </div>
    </div>
  </div>
</section>
@endsection