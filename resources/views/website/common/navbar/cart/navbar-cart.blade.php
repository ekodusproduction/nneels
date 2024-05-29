<div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
    <div class="aside-header d-flex align-items-center">
        <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count">1</span> ) </h3>
        <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->

    {{-- <div class="aside-content cart-drawer-items-list">
        <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="{{asset('images/cart-item-1.jpg')}}" alt="">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">Zessi Dresses</h6>
                <p class="cart-drawer-item__option text-secondary">Color: Yellow</p>
                <p class="cart-drawer-item__option text-secondary">Size: L</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="1" min="1"
                            class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">$99</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        </div><!-- /.cart-drawer-item d-flex -->

        <hr class="cart-drawer-divider">

        <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="{{asset('images/cart-item-2.jpg')}}" alt="">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">Kirby T-Shirt</h6>
                <p class="cart-drawer-item__option text-secondary">Color: Black</p>
                <p class="cart-drawer-item__option text-secondary">Size: XS</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="4" min="1"
                            class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">$89</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        </div><!-- /.cart-drawer-item d-flex -->

        <hr class="cart-drawer-divider">

        <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="{{asset('images/cart-item-3.jpg')}}" alt="">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">Cableknit Shawl</h6>
                <p class="cart-drawer-item__option text-secondary">Color: Green</p>
                <p class="cart-drawer-item__option text-secondary">Size: L</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="3" min="1"
                            class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">$129</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        </div><!-- /.cart-drawer-item d-flex -->

    </div> --}}

    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
        <hr class="cart-drawer-divider">
        {{-- <div class="d-flex justify-content-between">
            <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
            <span class="cart-subtotal fw-medium">$176.00</span>
        </div> --}}
        <a href="{{route('website.get.cart.items')}}" class="btn btn-light mt-3 d-block">View Cart</a>
        {{-- <a href="{{route('website.get.checkout.page')}}" class="btn btn-primary mt-3 d-block">Checkout</a> --}}
    </div><!-- /.aside-content -->
</div>
