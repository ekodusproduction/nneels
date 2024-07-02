@extends('website.welcome')
@section('title', 'My Address')

@section('custom-styles')
@endsection

@section('content')
<div class="mb-4 pb-4"></div>
<section class="my-account container">
    <h2 class="page-title">Address</h2>
    <div class="row">
        <div class="col-lg-2">
            @include('website.account.menu.links')
        </div>
        <div class="col-lg-10">
            <div class="page-content my-account__address">
                <p class="notice">The following addresses will be used on the checkout page by default.</p>
                <div class="my-account__address-list">
                    {{-- <div class="my-account__address-item">
                        <div class="my-account__address-item__title">
                        <h5>Billing Address</h5>
                        <a href="#">Edit</a>
                        </div>
                        <div class="my-account__address-item__detail">
                        <p>Daniel Robinson</p>
                        <p>1418 River Drive, Suite 35 Cottonhall, CA 9622</p>
                        <p>United States</p>
                        <br>
                        <p>sale@uomo.com</p>
                        <p>+1 246-345-0695</p>
                        </div>
                    </div> --}}
                    <div class="my-account__address-item">
                        <div class="my-account__address-item__title">
                            <h5>Shipping Address</h5>
                            <a href="#">Edit</a>
                        </div>
                        <div class="my-account__address-item__detail">
                            <p>{{$shipping_address->fullname}}</p>
                            <p>{{$shipping_address->address_1}}, {{$shipping_address->address_2}}, {{$shipping_address->province}}, {{$shipping_address->zip_code}}</p>
                            <p>{{$shipping_address->town_or_city}}, {{$shipping_address->country}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
@endsection