@php
    $latest_drops = App\Models\Product::with('product_gallery', 'category', 'subCategory')->where('status', 1)->where('is_stock_available', 1)->where('featured_section', 'latestDrop')->get();
@endphp

<section class="products-carousel container">
    <h2 class="section-title text-uppercase fw-bold text-center mb-4 pb-xl-2 mb-xl-4">Latest Drops</h2>

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
          "scrollbar": {
            "el": ".products-carousel__scrollbar",
            "draggable": true
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
                @forelse ($latest_drops as $key => $item)
                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="{{asset($item->main_image)}}" width="330" height="400"
                                    alt="latest drop" class="pc__img">
                                
                                <img loading="lazy" src="{{asset($item->product_gallery[0]['image'])}}" width="330" height="400"
                                    alt="latest drop" class="pc__img pc__img-second">
                            </a>
                            <div class="product-label bg-red text-white">67%</div>
                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
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
                            <p class="pc__category third-color">{{$item->name}}</p>
                            <h6 class="pc__title"><a href="product1_simple.html">{{$item->category->name}} - {{$item->subCategory->name}}</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">${{$item->price}}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <h3>Oops! No Latest Drops Found.</h3>
                    </div>
                @endforelse
                
            </div>
        </div>

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_prev_md" />
            </svg>
        </div>
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_next_md" />
            </svg>
        </div>

        <div class="pb-2 mb-2 mb-xl-4"></div>

        <!-- scrollbar -->
        <div class="products-carousel__scrollbar swiper-scrollbar"></div>
    </div>

</section>
<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>