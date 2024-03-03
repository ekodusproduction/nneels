<!DOCTYPE html>
<html dir="ltr" lang="en">

  <head>

      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="description" content="Nneels is an online ecommerce platform">
      <meta name="author" content="Ekodus Technologies Pvt Ltd">
      <meta name="keywords" content="Nneels, Nneels global, GLobal, ecommerce, online shopping, shopping">
      <meta name="robots" content="index, follow">

      <link rel="shortcut icon" href="{{ asset('assets/images/nneels-logo.png') }}" type="image/x-icon">
      <link rel="preconnect" href="https://fonts.gstatic.com/">

      <!-- Fonts -->
      <link
          href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
          rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

      <!-- Stylesheets -->
      <link rel="stylesheet" href="{{ asset('assets/Demo2/css/plugins/swiper.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/Demo2/css/plugins/jquery.fancybox.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/Demo2/css/style.css') }}" type="text/css">


      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title') | Nneels Ecommerce</title>

      @yield('custom-styles')

  </head>

  <body>
      
    <!-- Navigation Bar --> 
    @include('website.common.navbar.main-navbar')

    <main>

      @yield('content')

    </main>

    <!-- Footer -->
    @include('website.common.footer.footer')

      <!-- Go To Top -->
    <div id="scrollTop" class="visually-hidden end-0"></div>

      <!-- Page Overlay -->
    <div class="page-overlay"></div>


    <!-- External JavaScripts -->
    <script src="{{ asset('assets/Demo2/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/Demo2/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Demo2/js/plugins/bootstrap-slider.min.js') }}"></script>

    <script src="{{ asset('assets/Demo2/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/Demo2/js/plugins/countdown.js') }}"></script>

    <script src="{{ asset('assets/Demo2/js/plugins/jquery.fancybox.js') }}"></script>

    <!-- Footer Scripts -->
    <script src="{{ asset('assets/Demo2/js/theme.js') }}"></script>

    @yield('custom-scripts')

  </body>

</html>
