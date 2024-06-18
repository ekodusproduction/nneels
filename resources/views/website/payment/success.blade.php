@extends('website.welcome')
@section('title', 'Payment Successfull')

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
            <h2 class="title mt-5 mb-5" style="color: #3cdb04 !important; font-weight: 600 !important;">Payment Successful</h2>
            <img class="main-img" src="https://img.freepik.com/free-vector/concept-landing-page-credit-card-payment_52683-25532.jpg?t=st=1718706722~exp=1718710322~hmac=8513ab49088a7e15df823d30356ddd149356acb8fff0eae67b6c43d35a20336c&w=900" alt="">
            <p>Your payment was successful! You can <br>
                now continue using NNEELS.</p>
            <a href="/" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>
@endsection

@section('custom-scripts')
@endsection