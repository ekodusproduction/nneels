@php
    $top_category = App\Models\Category::where('status', 1)->where('is_top_category', 1)->get();
@endphp

<section class="grid-banner container mb-3" id="section-grid-banner">
    <div class="row">
        @forelse ($top_category as $item)
            <div class="col-lg-4">
                <div class="grid-banner__item position-relative mb-3">
                    <img loading="lazy" class="w-100" src="{{asset($item->default_image)}}" width="450"
                        height="450" style="object-fit:cover;object-position:top;" alt="Clothing Cover Image">
                    <div class="content_abs content_center text-center">
                        <h3 class="text-uppercase fw-bold mb-1" style="text-shadow: 0px 0px 10px white;">{{$item->name}}</h3>
                        {{-- <h3 class="text-uppercase fw-bold mb-1">Horizons</h3> --}}
                        <a href="{{route('website.get.product.by.category', ['main_category' => urlencode($item->name)])}}" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                    </div><!-- /.content_abs .content_center -->
                </div>
            </div>
        @empty
            <div class="col-lg-12">
                <div class="grid-banner__item position-relative mb-3">
                    <img loading="lazy" class="w-100" src="{{asset('admin/assets/img/backgrounds/no-image.png')}}" width="250"
                        height="250" style="object-fit:cover;object-position:top;" alt="Clothing Cover Image">
                    <div class="content_abs content_center text-center">
                        <h3 class="text-uppercase fw-bold mb-1" style="text-shadow: 0px 0px 10px white;">No Category Found</h3>
                    </div>
                </div>
            </div>
        @endforelse
        
        {{-- <div class="col-lg-4">
            <div class="grid-banner__item position-relative mb-3">
                <img loading="lazy" class="w-100" src="{{asset('assets/Accessories/jewel-1.jpg')}}" width="450"
                    height="450" style="object-fit:cover;object-position:top;" alt="Accessories Cover Image">
                <div class="content_abs content_center text-center">
                    <h3 class="text-uppercase fw-bold mb-1" style="text-shadow: 0px 0px 10px white;">Accessories</h3>
                    <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                </div><!-- /.content_abs .content_center -->
            </div>
        </div>
        <div class="col-lg-4">
            <div class="grid-banner__item position-relative mb-3">
                <img loading="lazy" class="w-100" src="{{asset('assets/Homeware/serving-platters.jpeg')}}" width="450"
                    height="450" style="object-fit:cover;object-position:top;" alt="Homeware Cover Image">
                <div class="content_abs content_center text-center">
                    <h3 class="text-uppercase fw-bold mb-1" style="text-shadow: 0px 0px 10px white;">Homeware</h3>
                    <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                </div><!-- /.content_abs .content_center -->
            </div>
        </div> --}}
    </div><!-- /.row -->
</section>
<div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>