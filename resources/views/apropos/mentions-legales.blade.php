@extends('layouts.index')
@section('navbar_position', '')
@section('navbar_classes', 'bg-white shadow-sm')
@section('content')
<section class="bg-dark position-relative py-5">
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
                        <li class="breadcrumb-item active text-center" aria-current="page">mention legales</li>
                    </ol>
                </nav>

                <h1 class="display-2 pb-2 pb-sm-3 text-dark">Mentions légales</h1>
               
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
                        <a class="nav-link" href="#definitions">Définitions</a>
                        <a class="nav-link" href="#presentation">1. Présentation du site</a>
                        <a class="nav-link" href="#cgu">2. Conditions d’utilisation</a>
                        <a class="nav-link" href="#services">3. Description des services</a>
                        <a class="nav-link" href="#limitations-techniques">4. Limitations techniques</a>
                        <a class="nav-link" href="#propriete-intellectuelle">5. Propriété intellectuelle</a>
                        <a class="nav-link" href="#responsabilite">6. Responsabilité</a>
                        <a class="nav-link" href="#donnees-personnelles">7. Données personnelles</a>
                        <a class="nav-link ms-3" href="#responsables-traitement">7.1 Responsables</a>
                        <a class="nav-link ms-3" href="#finalites">7.2 Finalités</a>
                        <a class="nav-link ms-3" href="#droits">7.3 Vos droits</a>
                        <a class="nav-link ms-3" href="#non-communication">7.4 Non-communication</a>
                        <a class="nav-link" href="#securite">8. Sécurité / Notification d’incident</a>
                        <a class="nav-link" href="#cookies">9. Liens, cookies & balises</a>
                        <a class="nav-link ms-3" href="#utilisation-cookies">9.1 Utilisation des cookies</a>
                        <a class="nav-link ms-3" href="#tags">9.2 Balises internet</a>
                        <a class="nav-link" href="#droit-applicable">10. Droit applicable</a>
                    </nav>
                    <hr>
                </div>
            </div>
        </aside>

        <div class="col-lg-8 col-xl-9">
            <div data-bs-spy="scroll" data-bs-target="#toc" data-bs-offset="80" tabindex="0">

                <section id="definitions" class="pb-5">
                    <h2 class="h3 mb-3">Définitions</h2>
                    <p class="text-body-secondary mb-0">« Site » désigne le présent site internet et l’ensemble de ses pages. « Utilisateur » désigne tout internaute qui visite et utilise le Site. « Éditeur » désigne la personne morale responsable de l’édition et du contenu du Site.</p>
                </section>

                <section id="presentation" class="pb-5">
                    <h2 class="h3 mb-3">1. Présentation du site</h2>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Éditeur</span>
                                        <span class="text-body-secondary">Nom de la société / marque</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Forme juridique</span>
                                        <span class="text-body-secondary">SAS / SARL / Association (à préciser)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Siège social</span>
                                        <span class="text-body-secondary">Adresse postale complète</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">RCS / SIREN</span>
                                        <span class="text-body-secondary">Numéro d’immatriculation (le cas échéant)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Directeur de la publication</span>
                                        <span class="text-body-secondary">Nom et prénom</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Contact</span>
                                        <span class="text-body-secondary"><a href="mailto:contact@example.com">contact@example.com</a> · <a href="tel:+33123456789">+33&nbsp;1&nbsp;23&nbsp;45&nbsp;67&nbsp;89</a></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Hébergeur</span>
                                        <span class="text-body-secondary">Nom de l’hébergeur, adresse et téléphone</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="cgu" class="pb-5">
                    <h2 class="h3 mb-3">2. Conditions générales d’utilisation</h2>
                    <p class="text-body-secondary">L’utilisation du Site implique l’acceptation pleine et entière des présentes conditions générales d’utilisation. Ces conditions sont susceptibles d’être modifiées ou complétées à tout moment; les Utilisateurs sont invités à les consulter régulièrement.</p>
                    <p class="text-body-secondary mb-0">Le Site est normalement accessible à tout moment. Une interruption pour raison de maintenance technique peut toutefois être décidée par l’Éditeur, qui s’efforcera alors de communiquer préalablement aux Utilisateurs les dates et heures de l’intervention.</p>
                </section>

                <section id="services" class="pb-5">
                    <h2 class="h3 mb-3">3. Description des services fournis</h2>
                    <p class="text-body-secondary mb-0">Le Site a pour objet de fournir une information concernant l’ensemble des activités et services proposés par l’Éditeur. L’Éditeur s’efforce de fournir des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des omissions, des inexactitudes et des carences dans la mise à jour.</p>
                </section>

                <section id="limitations-techniques" class="pb-5">
                    <h2 class="h3 mb-3">4. Limitations contractuelles sur les données techniques</h2>
                    <p class="text-body-secondary mb-0">Le Site utilise les technologies web modernes. L’Éditeur ne pourra être tenu responsable de dommages matériels liés à l’utilisation du Site. L’Utilisateur s’engage à accéder au Site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.</p>
                </section>

                <section id="propriete-intellectuelle" class="pb-5">
                    <h2 class="h3 mb-3">5. Propriété intellectuelle et contrefaçons</h2>
                    <p class="text-body-secondary mb-0">L’Éditeur est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le Site (textes, images, graphismes, logos, icônes, sons, logiciels, etc.). Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du Site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable.</p>
                </section>

                <section id="responsabilite" class="pb-5">
                    <h2 class="h3 mb-3">6. Limitations de responsabilité</h2>
                    <p class="text-body-secondary mb-0">L’Éditeur ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’Utilisateur, lors de l’accès au Site, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                </section>

                <section id="donnees-personnelles" class="pb-4">
                    <h2 class="h3 mb-3">7. Gestion des données personnelles</h2>
                    <p class="text-body-secondary">Conformément à la réglementation applicable, l’Éditeur met en œuvre un traitement de données personnelles aux finalités précisées ci‑après. Pour toute question ou exercice de vos droits, vous pouvez nous contacter.</p>

                    <div id="responsables-traitement" class="pt-2 pb-4">
                        <h3 class="h5 mb-2">7.1 Responsables de la collecte</h3>
                        <p class="text-body-secondary mb-0">L’Éditeur, tel qu’identifié à l’article 1, est responsable du traitement. Le cas échéant, certains traitements peuvent être opérés pour le compte de partenaires dûment habilités.</p>
                    </div>

                    <div id="finalites" class="pt-2 pb-4">
                        <h3 class="h5 mb-2">7.2 Finalités des traitements</h3>
                        <p class="text-body-secondary mb-0">Gestion des demandes de contact et de devis, prospection commerciale avec votre consentement, suivi de la relation client, mesure d’audience et amélioration du Site, respect des obligations légales et réglementaires.</p>
                    </div>

                    <div id="droits" class="pt-2 pb-4">
                        <h3 class="h5 mb-2">7.3 Vos droits</h3>
                        <p class="text-body-secondary mb-0">Vous disposez des droits d’accès, de rectification, d’opposition, d’effacement et de limitation du traitement de vos données, ainsi que du droit à la portabilité. Vous pouvez exercer ces droits en nous écrivant à <a href="mailto:contact@example.com">contact@example.com</a>. Vous disposez également du droit d’introduire une réclamation auprès de l’autorité de contrôle compétente.</p>
                    </div>

                    <div id="non-communication" class="pt-2">
                        <h3 class="h5 mb-2">7.4 Non-communication des données</h3>
                        <p class="text-body-secondary mb-0">Les données personnelles collectées ne sont pas cédées à des tiers hors des cas prévus par la loi ou avec votre consentement préalable. Elles peuvent être partagées avec des prestataires techniques strictement nécessaires au fonctionnement du Site et engagés contractuellement à la confidentialité et à la sécurité.</p>
                    </div>
                </section>

                <section id="securite" class="pb-5">
                    <h2 class="h3 mb-3">8. Notification d’incident – Sécurité</h2>
                    <p class="text-body-secondary mb-0">Malgré tous les efforts, aucune méthode de transmission sur Internet et de stockage électronique n’est totalement sûre. En cas d’incident impactant l’intégrité ou la confidentialité de vos informations, nous vous informerons dans les meilleurs délais et vous communiquerons les mesures prises. Pour sécuriser vos données, nous mettons en œuvre des moyens raisonnables au regard de l’état de l’art.</p>
                </section>

                <section id="cookies" class="pb-5">
                    <h2 class="h3 mb-3">9. Liens hypertextes, cookies et balises internet</h2>
                    <div id="utilisation-cookies" class="pb-4">
                        <h3 class="h5 mb-2">9.1 Utilisation des cookies</h3>
                        <p class="text-body-secondary mb-2">Le Site peut déposer des cookies et technologies similaires afin de mesurer l’audience, personnaliser votre expérience et sécuriser l’accès. Pour en savoir plus et gérer vos préférences, consultez notre <a href="{{ route('about.cookies') }}">politique de cookies</a>.</p>
                    </div>
                    <div id="tags" class="pb-0">
                        <h3 class="h5 mb-2">9.2 Balises (“tags”) internet</h3>
                        <p class="text-body-secondary mb-0">Certaines pages peuvent contenir des balises web placées par des partenaires afin d’établir des statistiques d’utilisation. Ces technologies ne permettent pas de vous identifier directement.</p>
                    </div>
                </section>

                <section id="droit-applicable" class="pb-2">
                    <h2 class="h3 mb-3">10. Droit applicable et juridiction</h2>
                    <p class="text-body-secondary mb-0">Tout litige en relation avec l’utilisation du Site est soumis au droit applicable au siège de l’Éditeur. Il est fait attribution exclusive de juridiction aux tribunaux compétents du ressort du siège social, sous réserve d’une attribution spécifique découlant d’un texte de loi ou réglementaire particulier.</p>
                </section>

            </div>
        </div>
    </div>
</section>
@endsection