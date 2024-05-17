@extends('website.welcome')
@section('title', 'Home')

@section('custom-styles')
  <style>
    .swiper-wrapper{
      height: auto;
    }
  </style>
@endsection

@section('content') 


  @include('website.home.banner.banner')

  @include('website.home.category-promotion.category-promotion')

  @include('website.home.best-selling.best-selling')

  {{-- @include('website.home.shop-by-category.shop-by-category') --}}

  {{-- @include('website.home.new-collection-banner.new-collection-banner') --}}

  @include('website.home.products.latest')

  {{-- @include('website.home.products.quick-view') --}}

  {{-- @include('website.home.brands.brands') --}}

  @guest
    @include('website.common.news-letter.news-letter')
  @endguest
  

@endsection

@section('custom-scripts')
<script>
  $('#newsletterUserLoginForm').on('submit', function(e){
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

              $('#newsletterUserLoginForm')[0].reset();

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
@endsection

 
