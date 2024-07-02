@auth
    @php
        $cart_items = App\Models\Cart::with('product')->where('status', 1)->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
    @endphp

    <div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
        <div class="aside-header d-flex align-items-center">
            <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count">{{count($cart_items)}}</span> ) </h3>
            <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <div class="aside-content cart-drawer-items-list">
            @forelse ($cart_items as $item)
                <div class="cart-drawer-item d-flex position-relative">
                    <div class="position-relative">
                        <img loading="lazy" class="cart-drawer-item__img" src="{{asset($item->product->main_image)}}" alt="">
                    </div>
                    <div class="cart-drawer-item__info flex-grow-1">
                        <h6 class="cart-drawer-item__title fw-normal">{{\Str::limit($item->product->name, 40)}}</h6>
                        <p class="cart-drawer-item__option text-secondary">Size: {{\Str::limit($item->product->size, 20)}}</p>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="cart-drawer-item__option text-secondary">Qty x {{$item->items_qty}}</p>
                            <span class="cart-drawer-item__price money price">${{$item->product->sale_price * $item->items_qty}}</span>
                        </div>
                    </div>

                    {{-- <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove remv-cart-btn" data-id="{{$item->product_id}}"></button> --}}
                </div>
                <hr class="cart-drawer-divider">
            @empty
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <h5>Oops! Your cart is empty.</h5>
                </div>
            @endforelse
            

        </div>

        @if (count($cart_items) > 0)
            <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
                <a href="{{route('website.get.cart.items')}}" class="btn btn-light mt-3 d-block">View Cart</a>
                <a href="{{route('website.get.checkout.page')}}" class="btn btn-primary mt-3 d-block">Checkout</a>
            </div>
        @endif
    </div>
@endauth


