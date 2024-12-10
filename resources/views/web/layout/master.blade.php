{{-- master file for the web view layout --}}

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('web/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('web/libowlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        @include('web.partials.header')

          @yield('content')


       @include('web.partials.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('web/libeasing/easing.min.js')}}"></script>
    <script src="{{asset('web/libwaypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('web/liblightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('web/libowlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('web/js/main.js')}}"></script>
    </body>

</html>
