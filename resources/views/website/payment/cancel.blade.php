@extends('website.welcome')
@section('title', 'Cancel Payment')

@section('custom-styles')
    <style>
        .payment-success {
        width: 410px;
        box-shadow: 0 13px 45px 0 rgba(51, 59, 69, 0.1);
        margin: auto;
        border-radius: 10px;
        text-align: center;
        position: relative;
        font-family: 'Roboto', sans-serif;
    }
    .payment-success .header {
        position: relative;
        height: 7px;
    }
    .payment-success .body {
        padding: 0 50px;
        padding-bottom: 25px;
    }
    .payment-success .close {
        position: absolute;
        color: #0073ff;
        font-size: 20px;
        right: 15px;
        top: 11px;
        cursor: pointer;
    }
    .payment-success .title {
        font-family: 'bariolregular';
        font-size: 32px;
        color: #54617a;
        font-weight: normal;
        margin-bottom: 10px;
    }
    .payment-success .main-img {
        width: 243px;
    }
    .payment-success p {
        font-size: 13px;
        color: #607d8b;
    }
    .payment-success .btn {
        border: none;
        border-radius: 100px;
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
        outline: none;
        cursor: pointer;
        position: relative;
    }
    .payment-success .btn.btn-primary {
        background: #0073ff;
        color: #fff;
    }
    .payment-success .cancel {
        text-decoration: none;
        font-size: 14px;
        color: #607d8b;
    }

    </style>
@endsection

@section('content')
<div class="payment-success mt-5 mb-5">
    <div class="header">
      <i class="ion-close-round close"></i>
    </div>
    <div class="body">
      <h2 class="title mt-3" style="color: #ff2311 !important; font-weight: 600 !important;">Oops! Payment Failed</h2>
      <img class="main-img" src="https://img.freepik.com/free-vector/flat-design-no-data-illustration_23-2150527133.jpg?t=st=1718707076~exp=1718710676~hmac=f5e779f9d02a5e5d223ed7185cac4909f3b8092f61cb15f127b2a4abc69886cf&w=740" alt="">
      <p>Your payment was failed! Due to some technical reasons.</p>
      <a href="/" class="btn btn-primary">Continue Shopping</a>
    </div>
</div>
@endsection

@section('custom-scripts')
@endsection