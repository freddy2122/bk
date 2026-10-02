<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-bs-theme="light">

<head>
  <meta charset="utf-8">

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

  <!-- SEO meta tags -->
  <title>{{ setting('SITE_NAME', config('app.name')) }} | Anmelden</title>
  <meta name="description" content="{{ setting('SITE_NAME', config('app.name')) }} – Online-Kredite und Versicherungen">
  <meta name="keywords" content="Kredit, Konsumkredit, Immobilienkredit, Umschuldung, Versicherung, Finanzierung">
  <meta name="author" content="{{ setting('SITE_NAME', config('app.name')) }}">

  <!-- Webmanifest + Favicon / App icons -->
  <link rel="manifest" href="/manifest.json">
  <link rel="icon" type="image/png" href="{{ asset('assets/app-icons/icon-32x32.png') }}" sizes="32x32">
  <link rel="apple-touch-icon" href="{{ asset('assets/app-icons/icon-180x180.png') }}">

  <!-- Theme switcher (color modes) -->
  <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>

  <!-- Import Google font (Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">

  <!-- Font icons -->
  <link rel="stylesheet" href="{{ asset('assets/icons/around-icons.min.css') }}">

  <!-- Theme styles + Bootstrap -->
  <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}">

  <!-- Page loading styles -->
  <style>
    .page-loading {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-transition: all .4s .2s ease-in-out;
      transition: all .4s .2s ease-in-out;
      background-color: #fff;
      opacity: 0;
      visibility: hidden;
      z-index: 9999;
    }

    [data-bs-theme="dark"] .page-loading {
      background-color: #121519;
    }

    .page-loading.active {
      opacity: 1;
      visibility: visible;
    }

    .page-loading-inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      text-align: center;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: opacity .2s ease-in-out;
      transition: opacity .2s ease-in-out;
      opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
      display: block;
      font-family: "Inter", sans-serif;
      font-size: 1rem;
      font-weight: normal;
      color: #6f788b;
    }

    [data-bs-theme="dark"] .page-loading-inner>span {
      color: #fff;
      opacity: .6;
    }

    .page-spinner {
      display: inline-block;
      width: 2.75rem;
      height: 2.75rem;
      margin-bottom: .75rem;
      vertical-align: text-bottom;
      background-color: #d7dde2;
      border-radius: 50%;
      opacity: 0;
      -webkit-animation: spinner .75s linear infinite;
      animation: spinner .75s linear infinite;
    }

    [data-bs-theme="dark"] .page-spinner {
      background-color: rgba(255, 255, 255, .25);
    }

    @-webkit-keyframes spinner {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      50% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes spinner {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      50% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }
  </style>

  <!-- Page loading scripts -->
  <script>
    (function() {
      window.onload = function() {
        const preloader = document.querySelector('.page-loading')
        preloader.classList.remove('active')
        setTimeout(function() {
          preloader.remove()
        }, 1500)
      }
    })()
  </script>
</head>


<!-- Body -->

<body>


  <!-- Page loading spinner -->
  @if(setting_bool('ALLOW_WEBPAGE_LOADER', false))
  <div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div>
      <span>Wird geladen...</span>
    </div>
  </div>
  @endif


  <!-- Page wrapper -->
  <main class="page-wrapper">
    @yield('content')
  </main>


  <!-- Back to top button -->
  <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
    </svg>
    <i class="ai-arrow-up"></i>
  </a>


  <!-- Bootstrap + Theme scripts -->
  <script src="{{ asset('assets/js/theme.min.js') }}"></script>
</body>

</html>