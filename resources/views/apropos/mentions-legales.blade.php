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
                            <a href="/">Startseite</a>
                        </li>
                        <li class="breadcrumb-item active text-center" aria-current="page">Impressum</li>
                    </ol>
                </nav>

                <h1 class="display-2 pb-2 pb-sm-3 text-dark">Impressum</h1>
               
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
                        <a class="nav-link" href="#definitions">Begriffsbestimmungen</a>
                        <a class="nav-link" href="#presentation">1. Angaben zur Website</a>
                        <a class="nav-link" href="#cgu">2. Nutzungsbedingungen</a>
                        <a class="nav-link" href="#services">3. Beschreibung der Leistungen</a>
                        <a class="nav-link" href="#limitations-techniques">4. Technische Einschränkungen</a>
                        <a class="nav-link" href="#propriete-intellectuelle">5. Geistiges Eigentum</a>
                        <a class="nav-link" href="#responsabilite">6. Haftung</a>
                        <a class="nav-link" href="#donnees-personnelles">7. Personenbezogene Daten</a>
                        <a class="nav-link ms-3" href="#responsables-traitement">7.1 Verantwortliche</a>
                        <a class="nav-link ms-3" href="#finalites">7.2 Zwecke</a>
                        <a class="nav-link ms-3" href="#droits">7.3 Ihre Rechte</a>
                        <a class="nav-link ms-3" href="#non-communication">7.4 Keine Weitergabe</a>
                        <a class="nav-link" href="#securite">8. Sicherheit / Meldung von Vorfällen</a>
                        <a class="nav-link" href="#cookies">9. Links, Cookies & Tags</a>
                        <a class="nav-link ms-3" href="#utilisation-cookies">9.1 Verwendung von Cookies</a>
                        <a class="nav-link ms-3" href="#tags">9.2 Internet-Tags</a>
                        <a class="nav-link" href="#droit-applicable">10. Anwendbares Recht</a>
                    </nav>
                    <hr>
                </div>
            </div>
        </aside>

        <div class="col-lg-8 col-xl-9">
            <div data-bs-spy="scroll" data-bs-target="#toc" data-bs-offset="80" tabindex="0">

                <section id="definitions" class="pb-5">
                    <h2 class="h3 mb-3">Begriffsbestimmungen</h2>
                    <p class="text-body-secondary mb-0">„Website“ bezeichnet diese Internetseite mit allen ihren Unterseiten. „Nutzer“ bezeichnet jede Person, die die Website besucht und nutzt. „Herausgeber“ bezeichnet die juristische Person, die für die Herausgabe und den Inhalt der Website verantwortlich ist.</p>
                </section>

                <section id="presentation" class="pb-5">
                    <h2 class="h3 mb-3">1. Angaben zur Website</h2>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Herausgeber</span>
                                        <span class="text-body-secondary">Name des Unternehmens / der Marke</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Rechtsform</span>
                                        <span class="text-body-secondary">GmbH / UG / Verein (bitte angeben)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Sitz der Gesellschaft</span>
                                        <span class="text-body-secondary">Vollständige Postanschrift</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Handelsregister</span>
                                        <span class="text-body-secondary">Registernummer (falls zutreffend)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Verantwortlich für den Inhalt</span>
                                        <span class="text-body-secondary">Vor- und Nachname</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Kontakt</span>
                                        <span class="text-body-secondary"><a href="mailto:contact@example.com">contact@example.com</a> · <a href="tel:+33123456789">+33&nbsp;1&nbsp;23&nbsp;45&nbsp;67&nbsp;89</a></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Hosting-Anbieter</span>
                                        <span class="text-body-secondary">Name, Adresse und Telefonnummer des Hosting-Anbieters</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="cgu" class="pb-5">
                    <h2 class="h3 mb-3">2. Allgemeine Nutzungsbedingungen</h2>
                    <p class="text-body-secondary">Die Nutzung der Website setzt die uneingeschränkte Annahme dieser Allgemeinen Nutzungsbedingungen voraus. Diese Bedingungen können jederzeit geändert oder ergänzt werden; die Nutzer werden gebeten, sie regelmäßig einzusehen.</p>
                    <p class="text-body-secondary mb-0">Die Website ist grundsätzlich jederzeit erreichbar. Der Herausgeber kann jedoch eine Unterbrechung aus Gründen der technischen Wartung beschließen und wird sich bemühen, den Nutzern Datum und Uhrzeit des Eingriffs vorab mitzuteilen.</p>
                </section>

                <section id="services" class="pb-5">
                    <h2 class="h3 mb-3">3. Beschreibung der angebotenen Leistungen</h2>
                    <p class="text-body-secondary mb-0">Die Website dient dazu, über sämtliche Tätigkeiten und Leistungen des Herausgebers zu informieren. Der Herausgeber bemüht sich, möglichst genaue Informationen bereitzustellen. Er haftet jedoch nicht für Auslassungen, Ungenauigkeiten oder Versäumnisse bei der Aktualisierung.</p>
                </section>

                <section id="limitations-techniques" class="pb-5">
                    <h2 class="h3 mb-3">4. Vertragliche Einschränkungen zu technischen Daten</h2>
                    <p class="text-body-secondary mb-0">Die Website verwendet moderne Webtechnologien. Der Herausgeber haftet nicht für Sachschäden im Zusammenhang mit der Nutzung der Website. Der Nutzer verpflichtet sich, die Website mit aktueller, virenfreier Hardware und einem aktuellen Browser der neuesten Generation aufzurufen.</p>
                </section>

                <section id="propriete-intellectuelle" class="pb-5">
                    <h2 class="h3 mb-3">5. Geistiges Eigentum und Urheberrechtsverletzungen</h2>
                    <p class="text-body-secondary mb-0">Der Herausgeber ist Inhaber der Rechte am geistigen Eigentum oder verfügt über die Nutzungsrechte an allen auf der Website zugänglichen Elementen (Texte, Bilder, Grafiken, Logos, Symbole, Töne, Software usw.). Jede Vervielfältigung, Darstellung, Änderung, Veröffentlichung oder Bearbeitung der Elemente der Website, ganz oder teilweise, gleich mit welchem Mittel oder Verfahren, ist ohne vorherige schriftliche Genehmigung untersagt.</p>
                </section>

                <section id="responsabilite" class="pb-5">
                    <h2 class="h3 mb-3">6. Haftungsbeschränkungen</h2>
                    <p class="text-body-secondary mb-0">Der Herausgeber haftet nicht für direkte oder indirekte Schäden an der Hardware des Nutzers, die beim Zugriff auf die Website entstehen und entweder auf die Verwendung von Hardware, die nicht den unter Punkt 4 genannten Anforderungen entspricht, oder auf das Auftreten eines Fehlers oder einer Inkompatibilität zurückzuführen sind.</p>
                </section>

                <section id="donnees-personnelles" class="pb-4">
                    <h2 class="h3 mb-3">7. Umgang mit personenbezogenen Daten</h2>
                    <p class="text-body-secondary">Gemäß den geltenden Vorschriften (DSGVO) verarbeitet der Herausgeber personenbezogene Daten zu den nachstehend genannten Zwecken. Bei Fragen oder zur Ausübung Ihrer Rechte können Sie uns kontaktieren.</p>

                    <div id="responsables-traitement" class="pt-2 pb-4">
                        <h3 class="h5 mb-2">7.1 Verantwortliche Stelle</h3>
                        <p class="text-body-secondary mb-0">Der in Abschnitt 1 genannte Herausgeber ist für die Verarbeitung verantwortlich. Gegebenenfalls können bestimmte Verarbeitungen im Auftrag ordnungsgemäß befugter Partner erfolgen.</p>
                    </div>

                    <div id="finalites" class="pt-2 pb-4">
                        <h3 class="h5 mb-2">7.2 Zwecke der Verarbeitung</h3>
                        <p class="text-body-secondary mb-0">Bearbeitung von Kontakt- und Angebotsanfragen, Werbung mit Ihrer Einwilligung, Kundenbetreuung, Reichweitenmessung und Verbesserung der Website, Erfüllung gesetzlicher und regulatorischer Pflichten.</p>
                    </div>

                    <div id="droits" class="pt-2 pb-4">
                        <h3 class="h5 mb-2">7.3 Ihre Rechte</h3>
                        <p class="text-body-secondary mb-0">Sie haben das Recht auf Auskunft, Berichtigung, Widerspruch, Löschung und Einschränkung der Verarbeitung Ihrer Daten sowie das Recht auf Datenübertragbarkeit. Sie können diese Rechte ausüben, indem Sie uns schreiben an <a href="mailto:contact@example.com">contact@example.com</a>. Sie haben außerdem das Recht, Beschwerde bei der zuständigen Aufsichtsbehörde einzulegen.</p>
                    </div>

                    <div id="non-communication" class="pt-2">
                        <h3 class="h5 mb-2">7.4 Keine Weitergabe der Daten</h3>
                        <p class="text-body-secondary mb-0">Die erhobenen personenbezogenen Daten werden nicht an Dritte weitergegeben, außer in den gesetzlich vorgesehenen Fällen oder mit Ihrer vorherigen Einwilligung. Sie können an technische Dienstleister weitergegeben werden, die für den Betrieb der Website unbedingt erforderlich und vertraglich zu Vertraulichkeit und Sicherheit verpflichtet sind.</p>
                    </div>
                </section>

                <section id="securite" class="pb-5">
                    <h2 class="h3 mb-3">8. Meldung von Vorfällen – Sicherheit</h2>
                    <p class="text-body-secondary mb-0">Trotz aller Bemühungen ist keine Methode der Übertragung über das Internet und der elektronischen Speicherung völlig sicher. Bei einem Vorfall, der die Integrität oder Vertraulichkeit Ihrer Informationen beeinträchtigt, informieren wir Sie schnellstmöglich und teilen Ihnen die ergriffenen Maßnahmen mit. Zum Schutz Ihrer Daten setzen wir angemessene Mittel nach dem Stand der Technik ein.</p>
                </section>

                <section id="cookies" class="pb-5">
                    <h2 class="h3 mb-3">9. Hyperlinks, Cookies und Internet-Tags</h2>
                    <div id="utilisation-cookies" class="pb-4">
                        <h3 class="h5 mb-2">9.1 Verwendung von Cookies</h3>
                        <p class="text-body-secondary mb-2">Die Website kann Cookies und ähnliche Technologien verwenden, um die Reichweite zu messen, Ihr Erlebnis zu personalisieren und den Zugang abzusichern. Weitere Informationen und die Verwaltung Ihrer Einstellungen finden Sie in unserer <a href="{{ route('about.cookies') }}">Cookie-Richtlinie</a>.</p>
                    </div>
                    <div id="tags" class="pb-0">
                        <h3 class="h5 mb-2">9.2 Internet-Tags</h3>
                        <p class="text-body-secondary mb-0">Einige Seiten können Web-Tags von Partnern enthalten, um Nutzungsstatistiken zu erstellen. Diese Technologien ermöglichen keine direkte Identifizierung Ihrer Person.</p>
                    </div>
                </section>

                <section id="droit-applicable" class="pb-2">
                    <h2 class="h3 mb-3">10. Anwendbares Recht und Gerichtsstand</h2>
                    <p class="text-body-secondary mb-0">Für alle Streitigkeiten im Zusammenhang mit der Nutzung der Website gilt das am Sitz des Herausgebers anwendbare Recht. Ausschließlicher Gerichtsstand sind die für den Sitz der Gesellschaft zuständigen Gerichte, sofern nicht eine besondere gesetzliche oder behördliche Vorschrift etwas anderes bestimmt.</p>
                </section>

            </div>
        </div>
    </div>
</section>
@endsection