@extends('website.welcome')
@section('title', 'Checkout')

@section('custom-styles')
@endsection

@section('content')
  @php
    $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];    
  @endphp
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
        <form name="checkout-form" action="https://uomo-html.flexkitux.com/Demo2/shop_order_complete.html">
          <div class="checkout-form">
            <div class="billing-info__wrapper">
              <h4>DETAILS</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" value={{Auth::user()->name}}>
                    <label for="checkout_first_name">Full Name</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_company_name" placeholder="Company Name (optional)">
                    <label for="checkout_company_name">Company Name (optional)</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="search-field my-3">
                    <div class="form-label-fixed hover-container">
                      <label for="search-dropdown" class="form-label">Country / Region*</label>
                      <div class="js-hover__open">
                        <input type="text" class="form-control form-control-lg search-field__actor search-field__arrow-down" id="search-dropdown" name="search-keyword" readonly placeholder="Choose a location...">
                      </div>
                      <div class="filters-container js-hidden-content mt-2">
                        <ul class="search-suggestion list-unstyled overflow-scroll" style="max-height:270px;">
                          @foreach ($country_list as $name)
                            <li class="search-suggestion__item js-search-select">{{$name}}</li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" id="checkout_street_address" placeholder="Street Address 1">
                    <label for="checkout_company_name">Street Address 1*</label>
                  </div>
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" id="checkout_street_address_2" placeholder="Street Address 2">
                    <label for="checkout_company_name">Street Address 2</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_city" placeholder="Town / City *">
                    <label for="checkout_city">Town / City *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_zipcode" placeholder="Postcode / ZIP *">
                    <label for="checkout_zipcode">Postcode / ZIP *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="checkout_province" placeholder="Province *">
                    <label for="checkout_province">Province *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone *" value={{Auth::user()->phone}}>
                    <label for="checkout_phone">Phone *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Mail *" value={{Auth::user()->email}}>
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
                            {{$item->product->name}}
                          </td>
                          <td class="sale_price">
                            ${{$item->product->sale_price}}
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
                        <th>SHIPPING (FLAT)</th>
                        <td>$19</td>
                      </tr>
                      <tr>
                        <th>TOTAL</th>
                        <td id="checkout_total_price">$81.40</td>
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
                <button class="btn btn-primary btn-checkout">PLACE ORDER</button>
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

        // Iterate through each sale_price element
        $(".sale_price").each(function() {
          // Get the text content and remove the '$' sign
          let priceText = $(this).text().trim().replace('$', '');

          // Convert to number and add to total
          let price = parseFloat(priceText);
          
          sub_total += price;
          total_price = (19 + sub_total);
        });

        // Update the subtotal element with the computed total
        $("#checkout_sub_total").text("$" + sub_total.toFixed(2)); // Ensure two decimal places
        $("#checkout_total_price").text("$" + total_price);
      });
    </script>
@endsection