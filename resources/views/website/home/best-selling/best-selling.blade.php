<section class="products-carousel container">
    <h2 class="section-title text-uppercase fw-bold text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4">Best Selling</h2>

    <ul class="nav nav-tabs mb-3 mb-xl-5 text-uppercase justify-content-center" id="collections-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link nav-link_underscore active" id="collections-tab-women-trigger" data-bs-toggle="tab"
                href="#collections-tab-women" role="tab" aria-controls="collections-tab-women" aria-selected="true">Women</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link nav-link_underscore" id="collections-tab-kid-trigger" data-bs-toggle="tab"
                href="#collections-tab-kid" role="tab" aria-controls="collections-tab-kid"
                aria-selected="true">Kids</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link nav-link_underscore" id="collections-tab-homeware-trigger" data-bs-toggle="tab"
                href="#collections-tab-homeware" role="tab" aria-controls="collections-tab-homeware" aria-selected="true">Homeware</a>
        </li>
    </ul>

    <div class="tab-content pt-2" id="collections-tab-content">
        <div class="tab-pane fade show active" id="collections-tab-women" role="tabpanel"
            aria-labelledby="collections-tab-women-trigger">
            <div class="position-relative">
                <div class="swiper-container js-swiper-slider"
                    data-settings='{
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": 4,
                        "slidesPerGroup": 4,
                        "effect": "none",
                        "loop": false,
                        "pagination": {
                            "el": ".products-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".products-carousel__next",
                            "prevEl": ".products-carousel__prev"
                        },
                        "breakpoints": {
                            "320": {
                            "slidesPerView": 2,
                            "slidesPerGroup": 2,
                            "spaceBetween": 14
                            },
                            "768": {
                            "slidesPerView": 3,
                            "slidesPerGroup": 3,
                            "spaceBetween": 24
                            },
                            "992": {
                            "slidesPerView": 4,
                            "slidesPerGroup": 1,
                            "spaceBetween": 30,
                            "pagination": false
                            }
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-2.jpg')}}" width="330"
                                        height="400" alt="Printed dress" class="pc__img">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-1.jpg')}}" width="330"
                                        height="400" alt="Printed dress" class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">SPARKY
                                <h6 class="pc__title"><a href="product1_simple.html">Slim Fit Mix-Pattern Top</a>
                                </h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-4.jpg')}}" width="330"
                                        height="400" alt="Printed Dress" class="pc__img">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-3.jpg')}}" width="330"
                                        height="400" alt="Printed Dress"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Horizontal Stripped Long Top</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-7.jpg')}}" width="330"
                                        height="400" alt="Floral Long Dress" class="pc__img">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-8.jpg')}}" width="330"
                                        height="400" alt="Floral Long Dress"
                                        class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">LILLY's</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Floral Long Dress</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$17</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-6.jpg')}}" width="330"
                                        height="400" alt="Abstract Pattern Long Dress" class="pc__img">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-5.jpg')}}" width="330"
                                        height="400" alt="Abstract Pattern Long Dress"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-red text-white">-67%</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Abstract Pattern Long Dress</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-12.jpg')}}" width="330"
                                        height="400" alt="Slim Fit Long Dress" class="pc__img">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-dress-10.jpg')}}" width="330"
                                        height="400" alt="Slim Fit Long Dress"
                                        class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">DYANA'S</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Slim Fit Long Dress</a>
                                </h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-pant-3.jpg')}}" width="330"
                                        height="400" alt="Printed Palazo" class="pc__img">
                                    <img loading="lazy" src="{{asset('assets/Womensware/printed-pant-2.jpg')}}" width="330"
                                        height="400" alt="Printed Palazo"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">SURYA'S</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Printed Palazo</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container js-swiper-slider -->

                <div
                    class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_md" />
                    </svg>
                </div><!-- /.products-carousel__prev -->
                <div
                    class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_md" />
                    </svg>
                </div><!-- /.products-carousel__next -->

                <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
                <!-- /.products-pagination -->
            </div><!-- /.position-relative -->
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-kid" role="tabpanel"
            aria-labelledby="collections-tab-kid-trigger">
            <div class="position-relative">
                <div class="swiper-container js-swiper-slider"
                    data-settings='{
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": 4,
                        "slidesPerGroup": 4,
                        "effect": "none",
                        "loop": false,
                        "pagination": {
                            "el": ".products-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".products-carousel__next",
                            "prevEl": ".products-carousel__prev"
                        },
                        "breakpoints": {
                            "320": {
                            "slidesPerView": 2,
                            "slidesPerGroup": 2,
                            "spaceBetween": 14
                            },
                            "768": {
                            "slidesPerView": 3,
                            "slidesPerGroup": 3,
                            "spaceBetween": 24
                            },
                            "992": {
                            "slidesPerView": 4,
                            "slidesPerGroup": 1,
                            "spaceBetween": 30,
                            "pagination": false
                            }
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Kids/printed-jacket-1.jpeg')}}" width="330"
                                        height="400" alt="Kids Printed Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-1-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">Kinder</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Giraffe Printed Jacket</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Kids/printed-jacket-2.jpeg')}}" width="330"
                                        height="400" alt="Kids Printed Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-2-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">KIDS</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Rabbit Printed Jacket</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$17</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Kids/printed-jacket-3.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-3-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div class="product-label bg-red text-white">-67%</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEKAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Tiger Printed Jacket</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price">$99</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container js-swiper-slider -->

                <div
                    class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_md" />
                    </svg>
                </div><!-- /.products-carousel__prev -->
                <div
                    class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_md" />
                    </svg>
                </div><!-- /.products-carousel__next -->

                <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
                <!-- /.products-pagination -->
            </div><!-- /.position-relative -->
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-homeware" role="tabpanel"
            aria-labelledby="collections-tab-homeware-trigger">
            <div class="position-relative">
                <div class="swiper-container js-swiper-slider"
                    data-settings='{
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": 4,
                        "slidesPerGroup": 4,
                        "effect": "none",
                        "loop": false,
                        "pagination": {
                            "el": ".products-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".products-carousel__next",
                            "prevEl": ".products-carousel__prev"
                        },
                        "breakpoints": {
                            "320": {
                            "slidesPerView": 2,
                            "slidesPerGroup": 2,
                            "spaceBetween": 14
                            },
                            "768": {
                            "slidesPerView": 3,
                            "slidesPerGroup": 3,
                            "spaceBetween": 24
                            },
                            "992": {
                            "slidesPerView": 4,
                            "slidesPerGroup": 1,
                            "spaceBetween": 30,
                            "pagination": false
                            }
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/bedsheet-1.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-2-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">Bombay Dying</p>
                                <h6 class="pc__title"><a href="product1_simple.html">White Printed Bedsheet</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$17</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/bedsheet-2.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-3-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div class="product-label bg-red text-white">-67%</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">Kothari</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Simple White Bedsheet</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/bedsheet-3.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-0-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">Bombay Dying</p>
                                <h6 class="pc__title"><a href="product1_simple.html">White Cream Color Bedsheet</a>
                                </h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/bedsheet-4.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-1-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Printed Bedsheet</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/bedsheet-4.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-2-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Table Cloth Set</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$17</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/bedsheet-3.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-3-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div class="product-label bg-red text-white">-67%</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Complete Dinnig Table Decoration Set</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/table-cloth-1.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-0-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Table Cloth Set</a>
                                </h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('assets/Homeware/table-cloth-2.jpeg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    {{-- <img loading="lazy" src="{{asset('images/home/demo2/product-1-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second"> --}}
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                        View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Table Decor</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container js-swiper-slider -->

                <div
                    class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_md" />
                    </svg>
                </div><!-- /.products-carousel__prev -->
                <div
                    class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_md" />
                    </svg>
                </div><!-- /.products-carousel__next -->

                <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
                <!-- /.products-pagination -->
            </div><!-- /.position-relative -->
        </div><!-- /.tab-pane fade show-->

        {{-- <div class="tab-pane fade show" id="collections-tab-4" role="tabpanel"
            aria-labelledby="collections-tab-4-trigger">
            <div class="position-relative">
                <div class="swiper-container js-swiper-slider"
                    data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "effect": "none",
              "loop": false,
              "pagination": {
                "el": ".products-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".products-carousel__next",
                "prevEl": ".products-carousel__prev"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 14
                },
                "768": {
                  "slidesPerView": 3,
                  "slidesPerGroup": 3,
                  "spaceBetween": 24
                },
                "992": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30,
                  "pagination": false
                }
              }
            }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-3-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-3-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-red text-white">-67%</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-0-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-0-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a>
                                </h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-1-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-1-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-2-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-2-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$17</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-3-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-3-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-red text-white">-67%</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-0-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-0-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a>
                                </h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-1-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-1-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div class="product-label bg-white">NEW</div>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$62</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-2-1.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="{{asset('images/home/demo2/product-2-2.jpg')}}" width="330"
                                        height="400" alt="Cropped Faux leather Jacket"
                                        class="pc__img pc__img-second">
                                </a>
                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView"
                                        title="Quick view">Quick View</button>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category third-color">JEAN</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$17</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container js-swiper-slider -->

                <div
                    class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_md" />
                    </svg>
                </div><!-- /.products-carousel__prev -->
                <div
                    class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_md" />
                    </svg>
                </div><!-- /.products-carousel__next -->

                <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
                <!-- /.products-pagination -->
            </div><!-- /.position-relative -->
        </div> --}}
        <!-- /.tab-pane fade show-->
    </div><!-- /.tab-content pt-2 -->
</section>
<div class="mb-1 pb-4"></div>