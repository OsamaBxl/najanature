<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Naja Nature">
    <meta name="description" content="Distribution des produits bio cosmétiques France et Belgique">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Fonts -->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Naja Nature') }} Dashboard</title>

    @yield('style')


</head>

<body id="page-top">

    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @include('partial.backend.sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @include('partial.backend.navbar')

                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                @include('partial.backend.footer')
            </div>



        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        @include('partial.backend.modal')


    </div>

    <!-- Bootstrap core JavaScript-->
    {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    @yield('script')




</body>

</html>
