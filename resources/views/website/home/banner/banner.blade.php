@php
    $banner = App\Models\Banner::where('status', 1)->orderBy('created_at', 'DESC')->get();
@endphp

<section class="swiper-container js-swiper-slider slideshow full-width_padding"
      data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true,
        "pagination": {
          "el": ".slideshow-pagination",
          "type": "bullets",
          "clickable": true
        }
      }'>
      <div class="swiper-wrapper">
        @forelse ($banner as $item)
          <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
            <div class="overflow-hidden position-relative h-100">
              <div class="slideshow-bg" style="background-color: #f5e6e0;">
                <img loading="lazy" src="{{asset($item->image)}}" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover">
              </div>
              {{-- <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                <img loading="lazy" src="{{asset('images/slideshow-character2.png')}}" width="400" height="690" alt="Woman Fashion 2" class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 h-auto w-auto">
              </div> --}}
              <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                {{-- <h6 class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3 text-white" style="text-shadow: 0px 5px 10px #686868;">Summer 2024</h6> --}}
                <h2 class="text-uppercase fw-bold animate animate_fade animate_btt animate_delay-3 text-white" style="text-shadow: 0px 5px 10px #686868; font-size:35px;">{{$item->main_text ?? ''}}</h2>
                <h6 class="text-uppercase mb-5 animate animate_fade animate_btt animate_delay-3 text-white" style="text-shadow: 0px 5px 10px #686868;">{{$item->sub_text ?? ''}}</h6>
                {{-- <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-3 text-white" style="text-shadow: 0px 5px 10px #686868;">Discover More</a> --}}
              </div>
            </div>
          </div>
        @empty
          <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
            <div class="overflow-hidden position-relative h-100">
              <div class="slideshow-bg" style="background-color: #f5e6e0;">
                <img loading="lazy" src="{{asset('assets/banner/no-banner.png')}}" width="1761" height="778" alt="No banner found !" class="slideshow-bg__img object-fit-cover">
              </div>
            </div>
          </div>
        @endforelse
        
      </div>

      <div class="container">
        <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-5"></div>
        <!-- /.products-pagination -->
      </div><!-- /.container -->

      <div class="slideshow-social-follow d-none d-xxl-block position-absolute top-50 start-0 translate-middle-y text-center">
        <ul class="social-links list-unstyled mb-0 text-secondary">
          <li>
            <a href="https://www.facebook.com/nneelsfashionandjewelry" class="footer__social-link d-block" target="_blank">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/nneels777/" class="footer__social-link d-block" target="_blank">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
            </a>
          </li>
        </ul><!-- /.social-links list-unstyled mb-0 text-secondary -->
        <span class="slideshow-social-follow__title d-block mt-5 text-uppercase fw-medium text-secondary">Follow Us</span>
      </div><!-- /.slideshow-social-follow -->
      <a href="#section-collections-grid_masonry" class="slideshow-scroll d-none d-xxl-block position-absolute end-0 bottom-0 text_dash text-uppercase fw-medium">Scroll</a>
    </section>

<div class="mb-3 mb-md-4 mb-xl-5 pb-2 pt-1"></div>
