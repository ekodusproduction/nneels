@extends('website.welcome')
@section('title', 'Cart')

@section('custom-styles')
@endsection

@section('content')
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
    <h2 class="page-title">Cart</h2>
    <div class="checkout-steps">
        <a href="javascript:void(0)" class="checkout-steps__item active">
            <span class="checkout-steps__item-number">01</span>
            <span class="checkout-steps__item-title">
                <span>Shopping Bag</span>
                <em>Manage Your Items List</em>
            </span>
        </a>
        <a href="javascript:void(0)" class="checkout-steps__item">
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
    <div class="shopping-cart">
        <div class="cart-table__wrapper">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th></th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items as $item)
                    <tr>
                        <td>
                            <div class="shopping-cart__product-item">
                                <img loading="lazy" src="{{asset($item->product->main_image)}}" width="120" height="120" alt="">
                            </div>
                        </td>
                        <td>
                            <div class="shopping-cart__product-item__detail">
                                <h4>{{$item->product->name}}</h4>
                                <ul class="shopping-cart__product-item__options">
                                    <li>Size: {{$item->product->size}}</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <span class="shopping-cart__product-price">${{$item->product->sale_price}}</span>
                        </td>
                        <td>
                            <div class="qty-control position-relative">
                                <input type="number" name="quantity" value="{{$item->items_qty}}" min="1" class="qty-control__number text-center cart-item-qty">
                                <div class="qty-control__reduce">-</div>
                                <div class="qty-control__increase">+</div>
                            </div>
                        </td>
                        <td>
                            <span class="shopping-cart__subtotal">$297</span>
                        </td>
                        <td>
                            <a href="#" class="remove-cart remv-cart-btn" data-id="{{$item->product_id}}">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z"/>
                                <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z"/>
                                </svg>                  
                            </a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{-- <div class="cart-table-footer">
            <form action="https://uomo-html.flexkitux.com/Demo2/" class="position-relative bg-body">
            <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
            <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit" value="APPLY COUPON">
            </form>
            <button class="btn btn-light">UPDATE CART</button>
        </div> --}}
        </div>
        <div class="shopping-cart__totals-wrapper">
            <div class="sticky-content">
                <div class="shopping-cart__totals">
                <h3>Cart Totals</h3>
                <table class="cart-totals">
                    <tbody>
                    <tr>
                        <th>Subtotal</th>
                        <td class="cart-totals-sub">$1300</td>
                    </tr>
                    <tr>
                        <th>Shipping (Flat)</th>
                        <td class="shipping-charges">$19</td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <a href="#" class="menu-link menu-link_us-s">CHANGE ADDRESS</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td class="cart-totals-final">$1319</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div class="mobile_fixed-btn_wrapper">
                <div class="button-wrapper container">
                    <button class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <div class="mb-5 pb-xl-5"></div>
@endsection

@section('custom-scripts')
    <script>

        $(document).ready(function() {
            function updateSubtotal(row) {
                const quantity = row.find('.cart-item-qty').val();
                const price = row.find('.shopping-cart__product-price').text();
                const parsedPrice = parseFloat(price.replace('$', ''));
                const newSubtotal = (parsedPrice * quantity).toFixed(2);
                row.find('.shopping-cart__subtotal').text('$' + newSubtotal);
            }

            function updateCartTotals() {
                let subtotal = 0;
                $('.shopping-cart__subtotal').each(function() {
                    subtotal += parseFloat($(this).text().replace('$', ''));
                });

                const shipping = 19;

                const total = subtotal + shipping ;

                $('.cart-totals-sub').text('$' + subtotal.toFixed(2));
                $('.cart-totals-final').text('$' + total.toFixed(2));
            }

            // Initialize subtotal for each row on page load
            $('.cart-item-qty').each(function() {
                const row = $(this).closest('tr');
                updateSubtotal(row);
            });

            updateCartTotals();

            // Attach the event listener to each quantity input
            $('.cart-item-qty').on('input change', function() {
                const row = $(this).closest('tr');
                updateSubtotal(row);
                updateCartTotals();
            });

            $(document).on('click', '.qty-control__increase', function() {
                const row = $(this).closest('tr');
                const qtyInput = row.find('.cart-item-qty');
                
                qtyInput.val(parseInt(qtyInput.val()));
                qtyInput.trigger('change'); // Trigger change event to update subtotal
            });

            // Event delegation for minus icon
            $(document).on('click', '.qty-control__reduce', function() {
                const row = $(this).closest('tr');
                const qtyInput = row.find('.cart-item-qty');
                const currentQty = parseInt(qtyInput.val());
                if (currentQty > 0) { // Ensure quantity does not go below 1
                    qtyInput.val(currentQty);
                    qtyInput.trigger('change'); // Trigger change event to update subtotal
                }
            });

            $('.form-check-input').on('change', function() {
                $('.form-check-input').not(this).prop('checked', false);
                updateCartTotals();
            });
        });
    </script>
    <script>
        $('.btn-checkout').on('click', function(){
            window.location.href = "{{route('website.get.checkout.page')}}"
        });
    </script>

    <script>
        $('.remv-cart-btn').on('click', function(){
            const product_id = $(this).data().id;

            $.ajax({
                url:"{{route('website.remove.cart.item')}}",
                type:"POST",
                data:{
                   'product_id' : product_id,
                   '_token' : "{{csrf_token()}}" 
                },
                success:function(data){
                    if(data.status == 200){
                        toastr.success(data.message);
                        window.location.reload(true);
                    }else{
                        toastr.error(data.message);
                        // window.location.reload(true);
                    }
                    
                },error:function(error){
                    toastr.error('Oops! Sonething went wrong');
                }
            });
        });
    </script>
@endsection