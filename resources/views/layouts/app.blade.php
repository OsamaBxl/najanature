<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Distribution des produits bio cosmétiques">
    <meta name="author" content="Naja Nature">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Naja Nature') }} Dashboard</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.default.css') }}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    {{-- @if (config('app.locale') == 'ar')
        <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.rtl.min.css') }}">
    @endif --}}

</head>

<body dir="">
    <div id="app" class="page-holder {{ request()->routeIs('frontend.detail') ? 'bg-light' : null }}">

        <!-- header -->
        @include('partial.frontend.header')




        <div class="container">
            @yield('content')
        </div>

        @include('partial.frontend.footer')

    </div>
    <!--  Modal -->

    @include('partial.frontend.modal')

    <!-- JavaScript files-->
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('frontend/js/front.js') }}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
