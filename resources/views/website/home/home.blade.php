@extends('website.welcome')
@section('title', 'Home')

@section('custom-styles')
  <style>
    .swiper-wrapper{
      height: auto;
    }
  </style>
@endsection

@section('content') 

  @include('website.home.banner.banner')

  @include('website.home.category-promotion.category-promotion')

  @include('website.home.best-selling.best-selling')

  @include('website.home.shop-by-category.shop-by-category')

  @include('website.home.new-collection-banner.new-collection-banner')

  @include('website.home.products.latest')

  @include('website.home.products.quick-view')

  @include('website.home.brands.brands')

  @include('website.common.news-letter.news-letter')

@endsection

@section('custom-scripts')
@endsection

 
