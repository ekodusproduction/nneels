@extends('website.welcome')
@section('title', 'My Account')

@section('custom-styles')
@endsection

@section('content')
<div class="mb-4 pb-4"></div>
<section class="my-account container">
    <h2 class="page-title">My Account</h2>
    <div class="row">
        <div class="col-lg-3">
            @include('website.account.menu.links')
        </div>
        <div class="col-lg-9">
            <div class="page-content my-account__dashboard">
                <p>Hello <strong>{{Auth::user()->name}}</strong>,</p>
                <p>From your account dashboard you can view your 
                    <a class="unerline-link" href="#">recent orders</a>, manage your 
                    <a class="unerline-link" href="#">shipping and billing addresses</a>, and
                    <a class="unerline-link" href="#">edit your password and account details.</a>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
@endsection