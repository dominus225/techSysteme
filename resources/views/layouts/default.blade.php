<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Porto - Multipurpose Website Template</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("img/favicon.ico") }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset("img/apple-touch-icon.png") }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/fontawesome-free/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/animate/animate.compat.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/simple-line-icons/css/simple-line-icons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/owl.carousel/assets/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/owl.carousel/assets/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/magnific-popup/magnific-popup.min.css") }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset("css/theme.css") }}">
    <link rel="stylesheet" href="{{ asset("css/theme-elements.css") }}">
    <link rel="stylesheet" href="{{ asset("css/theme-blog.css") }}">
    <link rel="stylesheet" href="{{ asset("css/theme-shop.css") }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset("vendor/circle-flip-slideshow/css/component.css") }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset("css/skins/default.css") }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset("css/custom.css") }}">

    <!-- Head Libs -->
    <script src="{{ asset("vendor/modernizr/modernizr.min.js") }}"></script>

</head>

<body data-plugin-page-transition>
<div class="body">

    @include('elements.header')

    <div role="main" class="main">
        @yield('Content', 'Contenu de la page')
    </div>

    @include('elements.footer')


</div>

<!-- Vendor -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('vendor/lazysizes/lazysizes.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
<script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Circle Flip Slideshow Script -->
<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<!-- Current Page Views -->
<script src="js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

</body>
</html>
