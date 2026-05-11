<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Rafix Digital' }}</title>
    <!-- font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/icomoon/style.css') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/favicon.svg') }}">
</head>
<body class="counter-scroll">
    <canvas class="cursor-trail d-none d-xl-block" id="trail"></canvas>
    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-arrow-caret-right"></span>
        </span>
    </button>
    <!-- /Scroll Top -->
    <!-- Preload -->
    <div class="preloader overflow-hidden">
        <div class="site-name"><span>RAFIX DIGITAL</span></div>
        <div class="preloader-gutters">
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
        </div>
    </div>
    <!-- /Preload -->

    <main id="wrapper">
        @include('partials.header')

        <!-- Success/Error Messages for Forms -->
        @if(session('success'))
            <div class="alert alert-success m-0">{{ session('success') }}</div>
        @endif

        @yield('content')

        @include('partials.footer')
    </main>

    <!-- JS Files -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script src="{{ asset('assets/js/infinityslide.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmooth.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsapAnimation.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/unicornStudio.umd.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
     <script>
        // DOM load hone ke baad init karein taake koi error na aaye
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof UnicornStudio !== 'undefined') {
                UnicornStudio.init();
            }
        });
    </script>
</body>
</html>