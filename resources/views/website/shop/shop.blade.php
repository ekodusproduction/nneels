@extends('website.welcome')
@section('title', 'Shop')

@section('custom-styles')
@endsection


@section('content')
    {{-- <div class="mt-3 pb-xl-5"></div> --}}
    <section class="shop-main container d-flex pt-4 pt-xl-5">
        <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
            <div class="aside-header d-flex d-lg-none align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
                <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
            </div>

            <div class="pt-4 pt-lg-0"></div>

            <div class="accordion" id="categories-list">
                <div class="accordion-item mb-4 pb-3">
                    <h5 class="accordion-header" id="accordion-heading-11">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                            data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true"
                            aria-controls="accordion-filter-1">
                            Product Categories
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                    <path
                                        d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                </g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-11" data-bs-parent="#categories-list">
                        <div class="accordion-body px-0 pb-0 pt-3">
                            <ul class="list list-inline mb-0">
                                @forelse ($get_related_sub_categories as $item)
                                    @if ($sub_category == null)
                                        <li class="list-item">
                                            <a href="{{route('website.get.product.by.category', ['main_category' => urlencode($main_category), 'sub_category' => urlencode($item->name)])}}" class="menu-link py-1 text-primary">{{$item->name}}</a>
                                        </li>
                                    @else
                                        <li class="list-item">
                                            <a href="{{route('website.get.product.by.category', ['main_category' => urlencode($main_category), 'sub_category' => urlencode($item->name)])}}" class="menu-link py-1 {{$sub_category == $item->name ? 'fw-medium text-primary' : ''}}">{{$item->name}}</a>
                                        </li>
                                    @endif
                                    
                                @empty
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Oops! No Categories Found.</a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div><!-- /.accordion-item -->
            </div><!-- /.accordion-item -->

        </div>

        <div class="shop-list flex-grow-1">

            <div class="d-flex justify-content-between mb-4 pb-md-2">
                <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                    <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">SHOP</a>
                    <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                    <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">{{$main_category}}</a>
                    @if ($sub_category != null)
                        <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                        <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">{{$sub_category}}</a>
                    @endif
                   
                </div><!-- /.breadcrumb -->

                <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                    <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0"
                        aria-label="Sort Items" name="total-number">
                        <option selected>Default Sorting</option>
                        <option value="1">Featured</option>
                        <option value="2">Best selling</option>
                        <option value="3">Price, low to high</option>
                        <option value="3">Price, high to low</option>
                        <option value="3">Date, old to new</option>
                        <option value="3">Date, new to old</option>
                    </select>

                    <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

                    <div class="col-size align-items-center order-1 d-none d-lg-flex">
                        <span class="text-uppercase fw-medium me-2">View</span>
                        <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid"
                            data-cols="2">2</button>
                        <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid"
                            data-cols="3">3</button>
                        <button class="btn-link fw-medium js-cols-size" data-target="products-grid"
                            data-cols="4">4</button>
                    </div><!-- /.col-size -->

                    <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
                        <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside"
                            data-aside="shopFilter">
                            <svg class="d-inline-block align-middle me-2" width="14" height="10"
                                viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_filter" />
                            </svg>
                            <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
                        </button>
                    </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
                </div><!-- /.shop-acs -->
            </div><!-- /.d-flex justify-content-between -->

            <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">

                @forelse ($product as $item)
                    <div class="product-card-wrapper">
                        <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <div class="swiper-container background-img js-swiper-slider"
                                    data-settings='{"resizeObserver": true}'>
                                    <div class="swiper-wrapper">
                                        @forelse ($item->product_gallery as $gallery)
                                            <div class="swiper-slide">
                                                <a href="{{route('website.get.product.by.category', ['main_category' => urlencode($main_category), 'sub_category' => urlencode($sub_category), 'product_id' => $item->product_id])}}">
                                                    <img loading="lazy" src="{{ asset($gallery->image) }}" width="330"
                                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                                </a>
                                            </div>
                                        @empty
                                            <div class="swiper-slide">
                                                <a href="{{route('website.get.product.by.category', ['main_category' => urlencode($main_category), 'sub_category' => urlencode($sub_category), 'product_id' => $item->product_id])}}">
                                                    <img loading="lazy" src="{{ asset($item->main_image) }}" width="330"
                                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                                </a>
                                            </div>
                                        @endforelse
                                    </div>
                                    <span class="pc__img-prev">
                                        <svg width="7" height="11" viewBox="0 0 7 11"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_prev_sm" />
                                        </svg>
                                    </span>
                                    <span class="pc__img-next">
                                        <svg width="7" height="11" viewBox="0 0 7 11"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_next_sm" />
                                        </svg>
                                    </span>
                                </div>
                                {{-- <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium add-to-cart-btn" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button> --}}
                                @auth
                                    <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium add-to-cart-btn" data-id="{{$item->product_id}}"  title="Add To Cart">Add To Cart</button>
                                @endauth

                                @guest
                                    <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-open-aside" data-aside="customerForms" title="Add To Cart">Add To Cart</button>
                                @endguest
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category">{{$main_category}}
                                    @if ($sub_category != null)
                                        <span> - {{$sub_category}}</span>
                                    @endif
                                </p>
                                <h6 class="pc__title"><a href="{{route('website.get.product.by.category', ['main_category' => urlencode($main_category), 'sub_category' => urlencode($sub_category), 'product_id' => $item->product_id])}}">{{$item->name}}</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">${{$item->sale_price}}</span>
                                </div>
                                <div class="product-card__review d-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                                </div>

                                <button
                                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5>No Products Found!</h5>
                @endforelse

            </div><!-- /.products-grid row -->

            {{-- <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
                <a href="#" class="btn-link d-inline-flex align-items-center">
                    <svg class="me-1" width="7" height="11" viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_sm" />
                    </svg>
                    <span class="fw-medium">PREV</span>
                </a>
                <ul class="pagination mb-0">
                    <li class="page-item"><a class="btn-link px-1 mx-2 btn-link_active" href="#">1</a></li>
                    <li class="page-item"><a class="btn-link px-1 mx-2" href="#">2</a></li>
                    <li class="page-item"><a class="btn-link px-1 mx-2" href="#">3</a></li>
                    <li class="page-item"><a class="btn-link px-1 mx-2" href="#">4</a></li>
                </ul>
                <a href="#" class="btn-link d-inline-flex align-items-center">
                    <span class="fw-medium me-1">NEXT</span>
                    <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_sm" />
                    </svg>
                </a>
            </nav> --}}
        </div>
    </section>
    <div class="mb-5 pb-xl-5"></div>
@endsection


@section('custom-scripts')
@endsection
