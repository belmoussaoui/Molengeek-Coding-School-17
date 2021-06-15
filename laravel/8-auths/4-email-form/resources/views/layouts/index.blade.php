<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Techie Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{asset("img/favicon.png")}} rel="icon">
  <link href={{asset("img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href={{asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i")}} rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("vendor/aos/aos.css")}} rel="stylesheet">
  <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{asset("vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{asset("vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset("css/style.css") }} rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.1.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @yield('content')
  <style>
    
      body::-webkit-scrollbar {
          width: 7px;
      }

      body::-webkit-scrollbar-track {
          background: rgba(255, 255, 255, 0); 
      }

      body::-webkit-scrollbar-thumb {
          background: rgba(255, 255, 255, 0);
          background: #5846f9!important;  
      }

  </style>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src={{asset("vendor/aos/aos.js")}}></script>
  <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("vendor/glightbox/js/glightbox.min.js")}}></script>
  <script src={{asset("vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
  {{-- <script src={{asset("vendor/php-email-form/validate.js")}}></script> --}}
  <script src={{asset("vendor/purecounter/purecounter.js")}}></script>
  <script src={{asset("vendor/swiper/swiper-bundle.min.js")}}></script>

  <!-- Template Main JS File -->
  <script src={{asset("js/main.js")}}></script>

</body>

</html>