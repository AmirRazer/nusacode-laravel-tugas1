<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stocker - Stock Market Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('stocker/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('stocker/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('stocker/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('stocker/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('stocker/css/style.css') }}" rel="stylesheet">
</head>

<body>



    <!-- Topbar Start -->
   @include('frontend.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
   
    <!-- Navbar & Hero End -->
    @include('frontend.navbar')
    <!-- Abvout Start -->
  
    <!-- About End -->
    @include('frontend.about')
    <!-- Services Start -->
    
    <!-- Services End -->
    @include('frontend.service')
    <!-- Features Start -->
    @include('frontend.feature')
    <!-- Features End -->


    <!-- Offer Start -->
    @include('frontend.offer')
    <!-- Offer End -->

    <!-- Blog Start -->
   @include('frontend.blog')
    <!-- Blog End -->


    <!-- FAQs Start -->
    @include('frontend.faq')
    <!-- FAQs End -->


    <!-- Team Start -->
   @include('frontend.team')
    <!-- Team End -->

    <!-- Testimonial Start -->
   @include('frontend.testimoni')
    <!-- Testimonial End -->

    <!-- Footer Start -->
    @include('frontend.footer')
    <!-- Footer End -->

    <!-- Copyright Start -->
  @include('frontend.copyright')
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('stocker/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('stocker/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('stocker/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('stocker/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('stocker/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('stocker/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('stocker/js/main.js') }}"></script>
</body>

</html>
