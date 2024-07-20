<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Terapia - Physical Therapy Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ url('/') }}/frontview/lib/animate/animate.min.css" rel="stylesheet">
        <link href="{{ url('/') }}/frontview/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ url('/') }}/frontview/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ url('/') }}/frontview/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div> --}}
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <x-section.navbar/>
        <!-- Navbar & Hero End -->

        <!-- Services Start -->
        {{$slot}}
        <!-- Services End -->

        <!-- Footer Start -->
        <x-section.footer/>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top" ><i class="fa fa-arrow-up" ></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script></script>
        <script src="{{ url('/') }}/frontview/lib/wow/wow.min.js"></script>
        <script src="{{ url('/') }}/frontview/lib/easing/easing.min.js"></script>
        <script src="{{ url('/') }}/frontview/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ url('/') }}/frontview/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ url('/') }}/frontview/js/main.js"></script>
    </body>
</html>
