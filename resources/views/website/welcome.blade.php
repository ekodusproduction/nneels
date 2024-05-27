<!DOCTYPE html>
<html dir="ltr" lang="en">

  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      
      <meta name="description" content="Nneels is an online ecommerce platform">
      <meta name="author" content="Ekodus Technologies Pvt Ltd">
      <meta name="keywords" content="Nneels, Nneels global, GLobal, ecommerce, online shopping, shopping">
      <meta name="robots" content="index, follow">

      <link rel="shortcut icon" href="{{ asset('assets/images/nneels-favicon.png') }}" type="image/x-icon">
      <link rel="preconnect" href="https://fonts.gstatic.com/">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
          rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

      <!-- Stylesheets -->
      <link rel="stylesheet" href="{{ asset('assets/Demo2/css/plugins/swiper.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/Demo2/css/plugins/jquery.fancybox.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/Demo2/css/style.css') }}" type="text/css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.0/sweetalert2.min.css" integrity="sha512-OWGg8FcHstyYFwtjfkiCoYHW2hG3PDWwdtczPAPUcETobBJOVCouKig8rqED0NMLcT9GtE4jw6IT1CSrwY87uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


      
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.0/sweetalert2.min.js" integrity="sha512-Wi5Ms24b10EBwWI9JxF03xaAXdwg9nF51qFUDND/Vhibyqbelri3QqLL+cXCgNYGEgokr+GA2zaoYaypaSDHLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $('#registerUserForm').on('submit', function(e){
          e.preventDefault();

          const formData = new FormData(this);

          $('.user-submit-btn').text('Please wait....');
          $('.user-submit-btn').attr('Disabled', true);

          $.ajax({
            url:"{{route('website.auth.signup')}}",
            type:"POST",
            processData:false,
            contentType:false,
            data:formData,
            success:function(data){
              if(data.status == 200){
                $('#registerUserForm')[0].reset();
                toastr.success(data.message)
                $('.user-submit-btn').text('REGISTER');
                $('.user-submit-btn').attr('Disabled', false);

              }else{
                toastr.error(data.message)
                $('.user-submit-btn').text('REGISTER');
                $('.user-submit-btn').attr('Disabled', false);
              }
              
            },error:function(error){
              toastr.error('Oops! Something went wrong');
              $('.user-submit-btn').text('REGISTER');
              $('.user-submit-btn').attr('Disabled', false);
            }
          });


      });

      $('#userLoginForm').on('submit', function(e){
          e.preventDefault();

          const formData = new FormData(this);
          $('.user-login-submit-btn').text('Please wait....');
          $('.user-login-submit-btn').attr('Disabled', true);

          $.ajax({
            url:"{{route('website.auth.login')}}",
            type:"POST",
            processData:false,
            contentType:false,
            data:formData,
            success:function(data){
              if(data.status == 200){

                $('#userLoginForm')[0].reset();

                toastr.success(data.message)
                $('.user-login-submit-btn').text('LOG IN');
                $('.user-login-submit-btn').attr('Disabled', false);

                window.location.replace("{{route('website.account.myaccount')}}");
              }else{
                toastr.error(data.message)
                $('.user-login-submit-btn').text('LOG IN');
                $('.user-login-submit-btn').attr('Disabled', false);
              }
            },error:function(error){
              toastr.error('Oops! Something went wrong')
              $('.user-login-submit-btn').text('LOG IN');
              $('.user-login-submit-btn').attr('Disabled', false);
            }
          });
      });
    </script>

    @yield('custom-scripts')



  </body>

</html>
