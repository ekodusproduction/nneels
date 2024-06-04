@extends('website.welcome')
@section('title', 'Home')

@section('custom-styles')
  <style>
    .swiper-wrapper{
      height: auto;
    }
    .search-results-tray{
      background:white;
      border-radius: 0px 0px 10px 10px;
      border:1px solid rgb(224, 224, 224);
      position: absolute;
      top:80%;
      margin-left:25px;
    }

    .search-results-tray .result{
      height: auto;
      width:505px;
      overflow:scroll;
    }

    .search-results-tray .result ul li{
      display: flex;
      justify-content: start;
      align-items: center;
      margin-bottom:10px;
    }

    .search-results-tray .result img{
      height:50px;
      width:50px;
      border-radius:50%;
      padding:2px;
      border:1px solid rgb(226, 226, 226);
    }
    .search-results-tray .result a{
      font-size:14px;
      color: rgb(9, 9, 156);
    }

    @media only screen and (max-width: 1499px) {
      .search-results-tray{
        display: none;
      }
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

<script>
  $('.add-to-cart-btn').on('click', function(){
    const product_id = $(this).data().id;

    $(this).text('Please wait...').attr('disabled', true)

    $.ajax({
      url:"{{route('website.add.to.cart')}}",
      type:"POST",
      data:{
        'product_id' : product_id,
        '_token' : "{{csrf_token()}}"
      },
      success:function(data){
        if(data.status == 200){
          toastr.success(data.message);
          $('.add-to-cart-btn').text('Add To Cart').attr('disabled', false)
          Swal.fire({
            title: "Product added successfully",
            text:'Go To Cart Page ',
            showCancelButton: true,
            confirmButtonText: "Proceed",
            imageUrl: "{{asset('assets/images/cart.png')}}",
            imageWidth: 150,
            imageHeight: 150,
            imageAlt: "Cart image"
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location.href = "{{route('website.get.cart.items')}}";
            }else{
              window.location.reload(true);
            }
          });
        }else{
          toastr.error(data.message);
          $('.add-to-cart-btn').text('Add To Cart').attr('disabled', false)
        }
      },error:function(error){
        toastr.error('Oops! Something went wrong');
        $('.add-to-cart-btn').text('Add To Cart').attr('disabled', false)
      }
    });
  });
</script>
<script>
  const getSearchResult = (value) => {

    const searchKeyword = value;

    if(searchKeyword != ''){

        $('.search-results-tray').removeClass('d-none');
        $('.search-results-tray').addClass('d-block');

        $.ajax({
          url:"{{route('website.search.product')}}",
          type:"GET",
          data:searchKeyword,
          success:function(data){

            console.log('data --->', data)

            if(data != null){
              let resultHtml = '<ul style="list-style: none;">';
              
              data.data.map( (item) => {
                console.log('Sub Cat---', item.sub_category.name)
                
                resultHtml += `
                  <li>
                    <img src="${item.main_image}" alt="product-image">
                    <a href="#" class="mx-3">
                      ${item.name}
                    </a>
                  </li>
                `;
              });

              resultHtml += '</ul>';
              $('.search-results-tray .result').html(resultHtml);
            } else {
              $('.search-results-tray .result').html('<p class="text-center">No results found</p>');
            }
          },error:function(error){
            console.log('Oops! Something went wrong');
          }
      });
    }else{
      $('.search-results-tray').removeClass('d-block');
      $('.search-results-tray').addClass('d-none');
      $('.search-results-tray .result').html('');
    }
  }

  debounce = (fn, delay) => {
    let timer;
    return function () {
      let context = this;
      let args = arguments;

      clearTimeout(timer);
      timer = setTimeout(() => {
        fn.apply(context, args)
      }, delay);
    }
  }

  $('#searchKeyword').on('keyup', debounce( (event) => {
      getSearchResult(event.target.value)
    }, 800)
  );
</script>
@endsection

 
