<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ asset('/vendor/viewpack/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('/vendor/viewpack/assets/css/fonts.min.css') }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link href="{{ asset('/vendor/viewpack/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/viewpack/assets/css/atlantis.min.css') }}" rel="stylesheet"

    <!-- CSS Just for demo purpose, don't include it in your project -->
{{--    <link href="{{ asset('/vendor/viewpack/assets/css/demo.css') }}" rel="stylesheet">--}}
    @stack('styles')
</head>
<body>
<div class="wrapper">
    @include('viewpack::components.header')
    @include('viewpack::components.sidebar', $sidebar ?? \Cabard\Netbot\Tools\Lk\SidebarHelper::generate())

    <div class="main-panel">
        <div class="content">
            @include('viewpack::components.content.header.header')
            <div class="page-inner mt--5">
                @yield('content')
            </div>
        </div>
        @include('viewpack::components.content-footer')
    </div>
    @include('viewpack::components.settings')
</div>

<!--   Core JS Files   -->
<script src="{{ asset('/vendor/viewpack/assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('/vendor/viewpack/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('/vendor/viewpack/assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('/vendor/viewpack/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Atlantis JS -->
<script src="{{ asset('/vendor/viewpack/assets/js/atlantis.min.js') }}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
{{--<script src="{{ asset('/vendor/viewpack/assets/js/setting-demo.js') }}"></script>--}}
{{--<script src="{{ asset('/vendor/viewpack/assets/js/demo.js') }}"></script>--}}
@include('viewpack::components.flash')
@stack('scripts')
</body>
</html>
