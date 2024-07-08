@extends('website.welcome')
@section('title', 'Track Orders')

@section('custom-styles')
    <style>
        figure {
	        display: flex;
        }
        figure img {
            width: 8rem;
            height: 8rem;
            border-radius: 50%;
            border: 1px solid #f05a00;
            margin-right: 1.5rem;
        }
        figure figcaption {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        figure figcaption h4 {
            font-size: 1.4rem;
            font-weight: 500;
        }
        figure figcaption h6 {
            font-size: 1rem;
            font-weight: 300;
        }
        figure figcaption h2 {
            font-size: 1.6rem;
            font-weight: 500;
        }
        .order-track {
            margin-top: 2rem;
            padding: 0 1rem;
            border-top: 1px dashed #2c3e50;
            padding-top: 2.5rem;
            display: flex;
            flex-direction: column;
        }
        .order-track-step {
            display: flex;
            height: 7rem;
        }
        .order-track-step:last-child {
            overflow: hidden;
            height: 4rem;
        }
        .order-track-step:last-child .order-track-status span:last-of-type {
            display: none;
        }
        .order-track-status {
            margin-right: 1.5rem;
            position: relative;
        }
        .order-track-status-dot {
            display: flex;
            width: 1.8rem;
            height: 1.8rem;
            border-radius: 50%;
            background: #119e1d;
            justify-content: center;
            align-items: center;
        }

        .order-track-status-dot-pending {
            display: flex;
            width: 1.8rem;
            height: 1.8rem;
            border-radius: 50%;
            background: #858484;
            justify-content: center;
            align-items: center;
        }
        .order-track-status-dot .fa-check{
            font-size:1rem;
        }

        .order-track-status-dot-pending .fa-exclamation-circle{
            font-size:1.2rem;
        }
        .order-track-status-line {

            border-left: 2px dashed rgba(8, 214, 8, 0.747);
            height: 65px;
            position: absolute;
            left: 50%;
            margin-left: 0px;
            top: 35%;
        }

        .order-track-status-line-pending {

            border-left: 2px dashed rgba(95, 95, 95, 0.267);
            height: 65px;
            position: absolute;
            left: 50%;
            margin-left: 0px;
            top: 35%;
        }
        .order-track-text-stat {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 3px;
        }
        .order-track-text-sub {
            font-size: 0.8rem;
            font-weight: 500;
            color:gray;
        }
        .order-track {
            transition: all 0.3s height 0.3s;
            transform-origin: top center;
        }
 
    </style>
@endsection

@section('content')
<div class="mb-4 pb-4"></div>
<section class="my-account container">
  <h2 class="page-title">Track Order</h2>
  <div class="row">
    <div class="col-lg-2">
      @include('website.account.menu.links')
    </div>
    <div class="col-lg-10">
      <div class="page-content my-account__orders-list">
        <section class="root">
            <figure>
              <img src="https://photos.melorra.com/fit-in/1024x1024/dev/catalogue/images/ET/OPT/580/C16PET09F_P_580.jpg" alt="">
              <figcaption>
                <h4>Some Jewellery Name</h4>
                <h6>Category</h6>
                <h2>₹ 23,456</h2>
              </figcaption>
            </figure>
            <div class="order-track">
              <div class="order-track-step">
                <div class="order-track-status">
                  <span class="order-track-status-dot">
                    <i class="fa fa-check text-white"></i>
                  </span>
                  <span class="order-track-status-line"></span>
                </div>
                <div class="order-track-text">
                  <p class="order-track-text-stat">Order Received</p>
                  <span class="order-track-text-sub">21st November, 2019</span>
                </div>
              </div>
              <div class="order-track-step">
                <div class="order-track-status">
                  <span class="order-track-status-dot-pending">
                    <i class="fa fa-exclamation-circle" style="color:yellow;"></i>
                  </span>
                  <span class="order-track-status-line-pending"></span>
                </div>
                <div class="order-track-text">
                  <p class="order-track-text-stat">Order Processed</p>
                  <span class="order-track-text-sub">21st November, 2019</span>
                </div>
              </div>
              <div class="order-track-step">
                <div class="order-track-status">
                  <span class="order-track-status-dot-pending">
                    <i class="fa fa-exclamation-circle" style="color:yellow;"></i>
                  </span>
                  <span class="order-track-status-line-pending"></span>
                </div>
                <div class="order-track-text">
                  <p class="order-track-text-stat">Order Dispatched</p>
                  <span class="order-track-text-sub">21st November, 2019</span>
                </div>
              </div>
              <div class="order-track-step">
                <div class="order-track-status">
                  <span class="order-track-status-dot-pending">
                    <i class="fa fa-exclamation-circle" style="color:yellow;"></i>
                  </span>
                  <span class="order-track-status-line-pending"></span>
                </div>
                <div class="order-track-text">
                  <p class="order-track-text-stat">Order Delivered</p>
                  <span class="order-track-text-sub">21st November, 2019</span>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
@endsection