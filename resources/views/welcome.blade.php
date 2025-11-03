@extends('layouts.index')



@section('content')








<!-- Hero -->
<section class="overflow-hidden">
    <div class="container pt-2 pt-sm-4 pb-sm-2 pb-md-4 py-xl-5 mt-5">
        <div class="row align-items-center py-5 mt-md-2 my-lg-3 my-xl-4 my-xxl-5">
            <div class="col-lg-7 order-lg-2 d-flex justify-content-center justify-content-lg-end mb-4 mb-md-5 mb-lg-0 pb-3 pb-md-0">
                <div class="parallax me-lg-n4 me-xl-n5" style="max-width: 667px;">
                    <div class="parallax-layer" data-depth="0.1">
                        <img src="/assets/img/landing/business-consulting/hero/01.png" alt="Layer">
                    </div>
                    <div class="parallax-layer" data-depth="-0.2">
                        <img src="/assets/img/landing/business-consulting/hero/02.png" alt="Layer">
                    </div>
                    <div class="parallax-layer" data-depth="0.25">
                        <img src="/assets/img/landing/business-consulting/hero/03.png" alt="Layer">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-lg-1">
                <h1 class="display-2 text-center text-lg-start pb-sm-2 pb-md-3">@lang('TRD060')</h1>
                <p class="fs-lg text-center text-lg-start pb-xl-2 mx-auto mx-lg-0 mb-5" style="max-width: 520px;">@lang('TRD200')</p>
                
                <a class="btn btn-primary" href="{{ route('apply.step1', ['locale' => app()->getLocale()]) }}">@lang('TRD050')</a>

            </div>
        </div>
    </div>
</section>


<!-- Stats -->
<section class="container pb-2 pb-sm-3 pb-md-4 pb-lg-5 mb-xl-3 mb-xxl-5">
    <div class="bg-light rounded-5 py-4 py-md-5 px-lg-5">
        <div class="row row-cols-2 row-cols-md-4 g-0">
            <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
                <div class="p-3 px-sm-0 py-sm-4">
                    <div class="h2 display-5 text-primary mb-0">540+</div>
                    <span>@lang('TRD201')</span>
                </div>
            </div>
            <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                <div class="position-absolute top-50 end-0 translate-middle-y border-end d-none d-md-block" style="height: 60px;"></div>
                <div class="p-3 px-sm-0 py-sm-4">
                    <div class="h2 display-5 text-primary mb-0">1070</div>
                    <span>@lang('TRD202')</span>
                </div>
            </div>
            <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
                <div class="p-3 px-sm-0 py-sm-4">
                    <div class="h2 display-5 text-primary mb-0">30+</div>
                    <span>@lang('TRD203')</span>
                </div>
            </div>
            <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                <div class="p-3 px-sm-0 py-sm-4">
                    <div class="h2 display-5 text-primary mb-0">15</div>
                    <span>@lang('TRD204')</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services grid -->
<section class="container py-5">
    <h2 class="h1 text-center">@lang('TRD060')</h2>
    <p class="text-center pb-4 mb-2 mb-lg-3">@lang('TRD205')</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

        <!-- Item -->
        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('loans.conso') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/about/agency/gallery/01.jpg" alt="@lang('TRD039')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD039')</h3>
                    <p class="card-text">@lang('TRD206')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('loans.travaux') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/about/agency/gallery/02.jpg" alt="@lang('TRD040')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD040')</h3>
                    <p class="card-text">@lang('TRD207')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('loans.immobilier') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/about/agency/gallery/03.jpg" alt="@lang('TRD041')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD041')</h3>
                    <p class="card-text">@lang('TRD208')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('loans.rachat') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/about/agency/gallery/04.jpg" alt="@lang('TRD042')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD042')</h3>
                    <p class="card-text">@lang('TRD209')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('loans.credit-bail') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/about/agency/gallery/05.jpg" alt="@lang('TRD043')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD043')</h3>
                    <p class="card-text">@lang('TRD210')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <!-- Item -->
        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('loans.etudiant') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/about/agency/gallery/06.jpg" alt="@lang('TRD044')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD044')</h3>
                    <p class="card-text">@lang('TRD211')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- Assurances grid -->
<section class="container py-5" id="assurances">
    <h2 class="h1 text-center">@lang('TRD061')</h2>
    <p class="text-center pb-4 mb-2 mb-lg-3">@lang('TRD212')</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('insurance.emprunteur') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/landing/insurance/services/01.jpg" alt="@lang('TRD045')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD045')</h3>
                    <p class="card-text">@lang('TRD213')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('insurance.habitation') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="https://www.algar.co/wp-content/uploads/2025/05/ZTg4Y2IwNWYtZmZkYi00MDg2LWFlYTgtYzRiNzc3NTBmNzQ1_edito-conseils-assurance-habitationpermettez-moi-de-construire-4.jpg" alt="@lang('TRD046')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD046')</h3>
                    <p class="card-text">@lang('TRD214')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('insurance.sante') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="https://srtb.bj/storage/2025/10/benin-assurance-maladie-nouveaux-beneficiaires-pris-en-compte-par-letat.webp" alt="@lang('TRD047')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD047')</h3>
                    <p class="card-text">@lang('TRD215')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('insurance.animaux') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="https://lemagdesanimaux.ouest-france.fr/images/dossiers/2020-10/fonctionnement-assurance-animaux-compagnie-112111.jpg" alt="@lang('TRD048')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD048')</h3>
                    <p class="card-text">@lang('TRD216')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="{{ route('insurance.professionnelles') }}">
                <div class="card-body pb-0">
                    <img class="d-block mb-4 rounded-3 w-100" src="/assets/img/landing/insurance/cta-bg.jpg" alt="@lang('TRD049')" style="height: 160px; object-fit: cover;">
                    <h3 class="h4 card-title mt-0">@lang('TRD049')</h3>
                    <p class="card-text">@lang('TRD217')</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                    <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                        <i class="ai-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>


<!-- Clients (Logos autoplay slider) -->
<section class="container pb-5 pt-2 pt-sm-3 pt-md-4 pt-lg-5 my-xl-3 my-xxl-5">
    <div class="container pb-4 mb-2 mb-lg-3">
        <p class="text-center mb-0">@lang('TRD230')</p>
    </div>
    <div class="swiper pb-4" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "grabCursor": false,
          "centeredSlides": true,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false},"freeMode": true,"speed": 10000,"freeModeMomentum": false,"breakpoints": {
            "0": { "slidesPerView": 2 },
            "400": { "slidesPerView": 3 },
            "600": { "slidesPerView": 4 },
            "800": { "slidesPerView": 5 },
            "1200": { "slidesPerView": 6 },
            "1400": { "slidesPerView": 7 },
            "1600": { "slidesPerView": 8 }
          }
        }'>
        <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://www.coover.fr/wp-content/uploads/2019/06/logo-credit-agricole.png" width="196" alt="Crédit Agricole">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://www.coover.fr/wp-content/uploads/2019/06/logo-credit-agricole.png" width="196" alt="Crédit Agricole">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://upload.wikimedia.org/wikipedia/fr/d/d9/BNP_Paribas_2009.svg" width="196" alt="BNP Paribas">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://upload.wikimedia.org/wikipedia/fr/d/d9/BNP_Paribas_2009.svg" width="196" alt="BNP Paribas">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLsluE2fmtv9KprP0DLDNZOGB_vn_DSvKNvQ&s" width="196" alt="Boursorama">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLsluE2fmtv9KprP0DLDNZOGB_vn_DSvKNvQ&s" width="196" alt="Boursorama">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://banque.meilleurtaux.com/images/actu/logos/logo-axa-banque.png" width="196" alt="AXA Banque">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://banque.meilleurtaux.com/images/actu/logos/logo-axa-banque.png" width="196" alt="AXA Banque">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://bank-codes.fr/template/logo/france/banque-populaire.png" width="196" alt="Banque Populaire">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://bank-codes.fr/template/logo/france/banque-populaire.png" width="196" alt="Banque Populaire">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://www.meilleurtaux.com/images/conso/guide/logo-hello-bank.jpg" width="196" alt="Hello Bank">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://www.meilleurtaux.com/images/conso/guide/logo-hello-bank.jpg" width="196" alt="Hello Bank">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Nationale">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Nationale">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Fédérale Mutualiste">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Fédérale Mutualiste">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="BGFI Bank">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="BGFI Bank">
                </div>
            </div>
        </div>
    </div>
    <div class="swiper" dir="rtl" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "grabCursor": false,
          "centeredSlides": true,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "freeMode": true,
          "speed": 8500,
          "freeModeMomentum": false,
          "breakpoints": {
            "0": { "slidesPerView": 2 },
            "400": { "slidesPerView": 3 },
            "600": { "slidesPerView": 4 },
            "800": { "slidesPerView": 5 },
            "1200": { "slidesPerView": 6 },
            "1400": { "slidesPerView": 7 },
            "1600": { "slidesPerView": 8 }
          }
        }'>
        <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://groupebgfibank.com/wp-content/uploads/2025/05/BGFI_logo.png" width="196" alt="BGFI Bank">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://groupebgfibank.com/wp-content/uploads/2025/05/BGFI_logo.png" width="196" alt="BGFI Bank">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://www.inet-ets.net/wp-content/uploads/2020/08/bmut.jpg" width="196" alt="Banque Fédérale Mutualiste">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://www.inet-ets.net/wp-content/uploads/2020/08/bmut.jpg" width="196" alt="Banque Fédérale Mutualiste">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Nationale">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Nationale">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://www.meilleurtaux.com/images/conso/guide/logo-hello-bank.jpg" width="196" alt="Hello Bank">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://www.meilleurtaux.com/images/conso/guide/logo-hello-bank.jpg" width="196" alt="Hello Bank">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Populaire">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://salonimmigration.com/wp-content/uploads/2021/07/BN_RGB-1.jpg" width="196" alt="Banque Populaire">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://banque.meilleurtaux.com/images/actu/logos/logo-axa-banque.png" width="196" alt="AXA Banque">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://banque.meilleurtaux.com/images/actu/logos/logo-axa-banque.png" width="196" alt="AXA Banque">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://banque.meilleurtaux.com/images/logo/logo_Boursorama_500.png" width="196" alt="Boursorama">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://banque.meilleurtaux.com/images/logo/logo_Boursorama_500.png" width="196" alt="Boursorama">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://upload.wikimedia.org/wikipedia/fr/d/d9/BNP_Paribas_2009.svg" width="196" alt="BNP Paribas">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://upload.wikimedia.org/wikipedia/fr/d/d9/BNP_Paribas_2009.svg" width="196" alt="BNP Paribas">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-gray rounded-4">
                    <img class="d-block d-dark-mode-none mx-auto" src="https://www.coover.fr/wp-content/uploads/2019/06/logo-credit-agricole.png" width="196" alt="Crédit Agricole">
                    <img class="d-none d-dark-mode-block mx-auto" src="https://www.coover.fr/wp-content/uploads/2019/06/logo-credit-agricole.png" width="196" alt="Crédit Agricole">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bloc marketing: Texte + Image + CTA -->
<section class="overflow-hidden">
    <div class="container pb-5 pt-3 pt-md-4 pt-lg-5 my-xl-3 my-xxl-5">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <img class="d-block rounded-4 w-100" src="https://www.banque-habitat-benin.com/wp-content/uploads/2019/11/shutterstock_178390097.jpg" alt="Agrément ACPR et AMF">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="mb-3">@lang('TRD220')</h2>
                <p class="fs-lg text-body-secondary mb-3">@lang('TRD221', ['site' => setting('SITE_NAME', config('app.name'))])</p>
                <p class="fs-lg text-body-secondary mb-4">@lang('TRD222', ['site' => setting('SITE_NAME', config('app.name'))])</p>
                <a class="btn btn-primary btn-lg" href="{{ route('apply.step1', ['locale' => app()->getLocale()]) }}">@lang('TRD051')</a>
            </div>
        </div>
    </div>
</section>


<!-- En 3 étapes -->
<section class="container py-5">
    <div class="row align-items-center g-4">
        <div class="col-md-6">
            <img class="d-block rounded-4 w-100" src="https://www.orabank.net/sites/default/files/2020-12/img-ora-conso.png" alt="Processus de demande de prêt">
        </div>
        <div class="col-md-6">
            <h2 class="mb-2">@lang('TRD063')</h2>
            <p class="text-body-secondary mb-4">@lang('TRD223')</p>

            <div class="d-flex mb-3">
                <div class="btn btn-lg btn-icon btn-primary rounded-circle pe-none me-3">1</div>
                <div>
                    <h3 class="h5 mb-1">@lang('TRD224')</h3>
                    <p class="mb-0">@lang('TRD225')</p>
                </div>
            </div>

            <div class="d-flex mb-3">
                <div class="btn btn-lg btn-icon btn-primary rounded-circle pe-none me-3">2</div>
                <div>
                    <h3 class="h5 mb-1">@lang('TRD226')</h3>
                    <p class="mb-0">@lang('TRD227')</p>
                </div>
            </div>

            <div class="d-flex mb-4">
                <div class="btn btn-lg btn-icon btn-primary rounded-circle pe-none me-3">3</div>
                <div>
                    <h3 class="h5 mb-1">@lang('TRD228')</h3>
                    <p class="mb-0">@lang('TRD229', ['site' => setting('SITE_NAME', config('app.name'))])</p>
                </div>
            </div>

            <a class="btn btn-primary btn-lg" href="{{ route('apply.step1', ['locale' => app()->getLocale()]) }}">@lang('TRD051')</a>
        </div>
    </div>
</section>


<!-- Testimonials (Carousel) -->
<section class="container mt-n3 mt-sm-n2 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">
    <h2 class="h1 text-center pb-3 pb-lg-4">@lang('TRD062')</h2>

    <!-- Swiper slider -->
    <div class="swiper pb-1 pb-md-2 pb-lg-3 pb-xl-4" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "autoHeight": true,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "576": { "slidesPerView": 2 },
            "992": { "slidesPerView": 3 }
          }
        }'>
        <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/22.jpg" width="60" alt="Jane Cooper">
                            <div class="ps-3">
                                <div class="h6 mb-1">Jane Cooper</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD231')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD240')</p>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/25.jpg" width="60" alt="Cameron Williamson">
                            <div class="ps-3">
                                <div class="h6 mb-1">Cameron Williamson</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD232')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD241')</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/23.jpg" width="60" alt="Wade Warren">
                            <div class="ps-3">
                                <div class="h6 mb-1">Wade Warren</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD233')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD242')</p>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/26.jpg" width="60" alt="Leslie Alexander">
                            <div class="ps-3">
                                <div class="h6 mb-1">Leslie Alexander</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD234')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD243')</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/24.jpg" width="60" alt="Esther Howard">
                            <div class="ps-3">
                                <div class="h6 mb-1">Esther Howard</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD235')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD244')</p>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/27.jpg" width="60" alt="Brooklyn Simmons">
                            <div class="ps-3">
                                <div class="h6 mb-1">Brooklyn Simmons</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD236')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD245')</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/28.jpg" width="60" alt="Fannie Summers">
                            <div class="ps-3">
                                <div class="h6 mb-1">Fannie Summers </div>
                                <div class="fs-sm text-body-secondary">@lang('TRD237')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD246')</p>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle" src="/assets/img/avatar/29.jpg" width="60" alt="Robert Fox">
                            <div class="ps-3">
                                <div class="h6 mb-1">Robert Fox</div>
                                <div class="fs-sm text-body-secondary">@lang('TRD232')</div>
                            </div>
                        </div>
                        <p class="card-text">@lang('TRD247', ['site' => setting('SITE_NAME', config('app.name'))])</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative bottom-0 mt-2 mt-md-3 mt-lg-4 pt-4"></div>
    </div>
</section>





@endsection