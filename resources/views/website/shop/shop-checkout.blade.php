@extends('website.welcome')
@section('title', 'Checkout')

@section('custom-styles')
@endsection

@section('content')
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Shipping and Checkout</h2>
        <div class="checkout-steps">
          <a href="javascript:void(0)" class="checkout-steps__item active">
            <span class="checkout-steps__item-number">01</span>
            <span class="checkout-steps__item-title">
              <span>Shopping Bag</span>
              <em>Manage Your Items List</em>
            </span>
          </a>
          <a href="javascript:void(0)" class="checkout-steps__item active">
            <span class="checkout-steps__item-number">02</span>
            <span class="checkout-steps__item-title">
              <span>Billing and Shipping</span>
              <em>Enter the billing and shipping address of the customer</em>
            </span>
          </a>
          <a href="javascript:void(0)" class="checkout-steps__item">
            <span class="checkout-steps__item-number">03</span>
            <span class="checkout-steps__item-title">
              <span>Confirmation</span>
              <em>Review And Submit Your Order</em>
            </span>
          </a>
        </div>
        <form id="placeOrderForm">
          @csrf
          <div class="checkout-form">
            <div class="billing-info__wrapper">
              <h4>DETAILS</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="fullname" id="full_name" placeholder="Full Name" value={{Auth::user()->name}}>
                    <label for="checkout_first_name">Full Name</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_company_name" name="company_name" placeholder="Company Name (optional)" value="{{$get_shipping_details != null ? $get_shipping_details->company_name : ''}}">
                    <label for="checkout_company_name">Company Name (optional)</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="search-field my-3">
                    <div class="form-label-fixed hover-container">
                      <label for="search-dropdown" class="form-label">Country / Region*</label>
                      <div class="js-hover__open">
                        <input type="text" class="form-control form-control-lg search-field__actor search-field__arrow-down" id="search-dropdown" name="country" readonly placeholder="Choose a location..." value="{{$get_shipping_details != null ? $get_shipping_details->country : ''}}">
                      </div>
                      <div class="filters-container js-hidden-content mt-2">
                        <ul class="search-suggestion list-unstyled overflow-scroll" style="max-height:270px;">
                          @foreach ($country_list as $country)
                            <li class="search-suggestion__item js-search-select">{{$country}}</li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" id="checkout_street_address" name="street_address_1" placeholder="Street Address 1" value="{{$get_shipping_details != null ? $get_shipping_details->address_1 : ''}}">
                    <label for="checkout_company_name">Street Address 1*</label>
                  </div>
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" id="checkout_street_address_2"  name="street_address_2" placeholder="Street Address 2" value="{{$get_shipping_details != null ? $get_shipping_details->address_2 : ''}}">
                    <label for="checkout_company_name">Street Address 2</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="town_or_city" id="checkout_city" placeholder="Town / City *" value="{{$get_shipping_details != null ? $get_shipping_details->town_or_city : ''}}">
                    <label for="checkout_city">Town / City *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_zipcode" name="zip_code" placeholder="Postcode / ZIP *" value="{{$get_shipping_details != null ? $get_shipping_details->zip_code : ''}}">
                    <label for="checkout_zipcode">Postcode / ZIP *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_province" name="province" placeholder="Province" value="{{$get_shipping_details != null ? $get_shipping_details->province : ''}}">
                    <label for="checkout_province">Province</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone *" value={{Auth::user()->phone}} >
                    <label for="checkout_phone">Phone *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Mail *" value={{Auth::user()->email}} >
                    <label for="checkout_email">Your Mail *</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="checkout__totals-wrapper">
              <div class="sticky-content">
                <div class="checkout__totals">
                  <h3>Your Order</h3>
                  <table class="checkout-cart-items">
                    <thead>
                      <tr>
                        <th>PRODUCT</th>
                        <th>SUBTOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cart_details as $item)
                        <tr>
                          <td>
                            {{\Str::limit($item->product->name, 20)}} x <span class="product_qty">{{$item->items_qty}}</span>
                          </td>
                          <td class="sale_price">
                            ${{($item->product->sale_price * $item->items_qty )}}
                          </td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                  <table class="checkout-totals">
                    <tbody>
                      <tr>
                        <th>SUBTOTAL</th>
                        <td id="checkout_sub_total">$</td>
                      </tr>
                      <tr>
                        <th>SHIPPING CHARGES<br> <span class="text-secondary wrap" style="font-weight:400;">Free Shipping (United States) on orders above $195</span> </th>
                        <td id="checkout_shipping_rate" class="px-3">$19</td>
                      </tr>
                      <tr>
                        <th>TOTAL</th>
                        <td id="checkout_total_price"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                {{-- <div class="checkout__payment-methods">
                  <div class="form-check">
                    <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_1" checked>
                    <label class="form-check-label" for="checkout_payment_method_1">
                      Direct bank transfer
                      <span class="option-detail d-block">
                        Make your payment directly into our bank account. Please use your Order ID as the payment reference.Your order will not be shipped until the funds have cleared in our account.
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_2">
                    <label class="form-check-label" for="checkout_payment_method_2">
                      Check payments
                      <span class="option-detail d-block">
                        Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_3">
                    <label class="form-check-label" for="checkout_payment_method_3">
                      Cash on delivery
                      <span class="option-detail d-block">
                        Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_4">
                    <label class="form-check-label" for="checkout_payment_method_4">
                      Paypal
                      <span class="option-detail d-block">
                        Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
                      </span>
                    </label>
                  </div>
                  <div class="policy-text">
                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="terms.html" target="_blank">privacy policy</a>.
                  </div>
                </div> --}}
                <button type="submit"  class="btn btn-primary place-order-btn" id="checkout-button" style="width:100%;height:50px;">PLACE ORDER</button>
              </div>
            </div>
          </div>
        </form>
    </section>

    <div class="mb-5 pb-xl-5"></div>
@endsection

@section('custom-scripts')
    <script>
      $(document).ready(function() {
        // Initialize total variable
        let sub_total = 0;
        let total_price = 0;
        let shipping_rate = 0;

        

        // Iterate through each sale_price element
        $(".sale_price").each(function() {
          // Get the text content and remove the '$' sign
          let priceText = $(this).text().trim().replace('$', '');

          // Convert to number and add to total
          let price = parseFloat(priceText);
          
          sub_total += price;
          total_price = (shipping_rate + sub_total);
        });

        if({{$get_shipping_details->country == 'United States' }}){
            if(sub_total > 195){
              shipping_rate = 0;
            }else if( sub_total <= 195 || sub_total >= 75){
                shipping_rate = 14;
            }else if(sub_total < 75){
                shipping_rate = 12;
            }
        }else{
          if( sub_total <= 195 && sub_total >= 75){
              shipping_rate = 14;
          }else if(sub_total < 75){
              shipping_rate = 12;
          }
        }
        

        // Update the subtotal element with the computed total
        $('#checkout_shipping_rate').text("$" + shipping_rate);
        $("#checkout_sub_total").text("$" + sub_total.toFixed(2)); // Ensure two decimal places
        $("#checkout_total_price").text("$" + total_price.toFixed(2));

      
      });

      
    </script>

    <script>
      $('#placeOrderForm').on('submit', function(e){
        e.preventDefault();

        let formData = new FormData(this);
        let total_amount = $('#checkout_total_price').text().trim().replace('$', '');
        
        total_amount = (total_amount * 100);
        formData.append('total_amount', total_amount);

        $('.place-order-btn').attr('disabled', true).text('Please wait....');

        $.ajax({
          url:"{{route('website.save.billing.address')}}",
          type:"POST",
          data:formData,
          contentType: false,
          processData: false,
          success:function(data){
            if(data.status == 200){
              toastr.success(data.message);
              $('.place-order-btn').attr('disabled', false).text('Place Order');
              window.location.replace(data.data.url, '_blank');
            }else{
              toastr.error(data.message);
              $('.place-order-btn').attr('disabled', false).text('Place Order');
            }
          },error:function(error){
            toastr.error('Oops! Something went wrong');
            $('.place-order-btn').attr('disabled', false).text('Place Order');
          }
        });
      });
    </script>
@endsection