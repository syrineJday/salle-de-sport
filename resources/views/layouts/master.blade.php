<!doctype html>
<html lang="en">

<!-- Mirrored from www.devsnews.com/template/gymee/gymee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 23:22:26 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontOffice/assets/img/logo/favicon.png') }}">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/main.css') }}">

    <title>GYMEE - Fitness and Gym HTML5 Template</title>
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <img src="{{ asset('frontOffice/assets/img/logo/preloader.gif') }}" alt="preloader">
            <h4>.. loading ..</h4>
        </div>
    </div>
    <!-- preloader end  -->

    @include('includes.header')

    @yield('content')

    @include('includes.footer')




    <div id="scrollUp"><i class="fas fa-level-up-alt"></i></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontOffice/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontOffice/assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from www.devsnews.com/template/gymee/gymee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 23:22:46 GMT -->

</html>
