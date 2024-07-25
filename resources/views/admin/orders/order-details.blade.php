@extends('admin.index')
@section('title', 'Order Details')

@section('custom-style')
  <style>
    .header-color{
        border-radius: 10px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        color: black;
        background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
        margin-bottom: 0px;
    }

    .header-nav{
        border-top: 1px solid #424242;
        border-bottom: 1px solid #424242;
        padding-top: 20px;
        padding-left: 20px;
    }
    .header-nav h6{
        color:black;
    }
    
    .order-items{
        display:flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .order-items .item-img{
        margin-top:10px;
    }
    .order-items .item-img img{
        border-radius:10px;
        max-height:100px;
        max-width:100px;
    }
    .tax-cal .sub-total, .shipping-total{
        display:flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .total-price{
        display:flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

  </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-color">Orders ID  :  <span style="color:rgb(102, 3, 102);">#123456789</span></h4>
                </div>
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="header-nav">
                                <h6>ITEMS</h6>
                            </div>
                            <div class="order-items">
                                <div class="item-img">
                                    <img src="{{asset('images/cart-item-1.jpg')}}" alt="order-item-image">
                                </div>
                                <div class="item-name">
                                    <p>Product Name</p>
                                    <h6>Outwear & Shirts</h6>
                                </div>
                                <div class="item-qty">
                                    <p>Quantity</p>
                                    <h6>2</h6>
                                </div>
                                <div class="item-price">
                                    <p>Price</p>
                                    <h6>$300</h6>
                                </div>
                            </div>
                            <div class="order-items">
                                <div class="item-img">
                                    <img src="{{asset('images/cart-item-1.jpg')}}" alt="order-item-image">
                                </div>
                                <div class="item-name">
                                    <p>Product Name</p>
                                    <h6>Outwear & Shirts</h6>
                                </div>
                                <div class="item-qty">
                                    <p>Quantity</p>
                                    <h6>2</h6>
                                </div>
                                <div class="item-price">
                                    <p>Price</p>
                                    <h6>$300</h6>
                                </div>
                            </div>
                            <div class="order-items">
                                <div class="item-img">
                                    <img src="{{asset('images/cart-item-1.jpg')}}" alt="order-item-image">
                                </div>
                                <div class="item-name">
                                    <p>Product Name</p>
                                    <h6>Outwear & Shirts</h6>
                                </div>
                                <div class="item-qty">
                                    <p>Quantity</p>
                                    <h6>2</h6>
                                </div>
                                <div class="item-price">
                                    <p>Price</p>
                                    <h6>$300</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="tax-cal">
                                <div class="sub-total">
                                    <p>Sub Total : </p>
                                    <h6>$300</h6>
                                </div>
                                <div class="shipping-total">
                                    <p>Shipping Charges : </p>
                                    <h6>$300</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="total-price">
                                <h4>Total Price : </h4>
                                <h4>$4000</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
@endsection
