<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('blog/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('blog/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vendor CSS Files -->
    <link href="{{ asset('blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{ asset('blog/css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/css/main.css') }}" rel="stylesheet">

    @yield('styles')

    <!-- =======================================================
    * Template Name: ZenBlog
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
    * Author: BootstrapMade.com
    * License: https:///bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

@include('blog.partials.header')

<main id="main">
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                @yield('content')
            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
</main><!-- End #main -->

@include('blog.partials.footer')

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('blog/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('blog/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('blog/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('blog/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('blog/js/main.js') }}"></script>

</body>

</html>