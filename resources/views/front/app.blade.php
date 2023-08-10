<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template-no-customizer">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>JDPU talabalar yotoqxonasi</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('static/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/swiper/swiper.css')}}" />


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/pages/cards-advance.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/pages/ui-carousel.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('static/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('static/assets/js/config.js')}}"></script>

    <style>
        .hero{
            padding: 350px 0;
            text-align: center;
            height: auto;
            background-size: cover;
        }
    </style>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        @include('front.navbar')

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Menu -->
               @include('front.header')
                <!-- / Menu -->
                @yield('content')
                @include('front.footer')

                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('static/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('static/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

<script src="{{asset('static/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{asset('static/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->
<script src="{{asset('static/assets/vendor/libs/swiper/swiper.js')}}"></script>
<script src="{{asset('static/assets/js/ui-carousel.js')}}"></script>
<!-- Vendors JS -->
<script src="{{asset('static/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/swiper/swiper.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('static/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('static/assets/js/dashboards-analytics.js')}}"></script>
</body>
</html>
