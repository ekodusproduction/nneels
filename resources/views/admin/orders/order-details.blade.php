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
    .product-name{
        width:200px;
        word-wrap: wrap break-word;
        font-size:15px;
        line-height: 25px;
    }

    .product-price{
        font-size:16px;
    }
    
    /* .order-items{
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
        width:auto;
    }
    .order-items .item-name{
        width:200px;
        word-wrap: break-word;
    }

    .order-items .item-qty{
        width:200px;
        word-wrap: break-word;
    }

    .order-items .item-price{
        width:200px;
        word-wrap: break-word;
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
    }*/

    .order-summary, .shipping-address{
        background-color: #fbfbfb;
        color: #3f3e3e;
        padding: 20px 5px 10px 10px;
        border-radius: 10px;
        outline: 1px dashed #838181;
    }
    .order-summary p{
        margin-bottom:4px;
    }

    .order-details-thead{
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 15px;
        padding: 0.75rem 1.25rem;
        color: #232323;
        border-top: 1px solid #cfcfcf;
        border-bottom: 1px solid #cfcfcf !important;
    } 

  </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-color">Orders ID  :  <span style="color:rgb(102, 3, 102);">#{{$order_id}}</span></h4>
                </div>
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="order-details-thead">
                                        <tr>
                                            <th colspan="2">Items</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($get_order_details as $item)
                                            <tr class="table-order">
                                                <td>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset($item->product->main_image)}}" class="img-fluid" style="height:100px;border-radius:10px;" alt="" >
                                                    </a>
                                                </td>
                                                <td>
                                                    <p>Product Name</p>
                                                    <h5 class="product-name">{{$item->product->name}}</h5>
                                                </td>
                                                <td>
                                                    <p>Quantity</p>
                                                    <h5>{{$item->product_qty}}</h5>
                                                </td>
                                                <td>
                                                    <p>Price</p>
                                                    <h5 class="product-price">${{$item->amount * $item->product_qty}} <span style="font-size:14px;font-weight:500;">(each ${{$item->amount}} ) </span></h5>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        {{-- <div class="col-md-8 col-sm-12">
                            <div class="header-nav">
                                <h6>ITEMS</h6>
                            </div>
                            @foreach ($get_order_details as $item)
                                <div class="order-items">
                                    <div class="item-img">
                                        <img src="{{asset($item->product->main_image)}}" alt="order-item-image">
                                    </div>
                                    <div class="item-name">
                                        <p>Product Name</p>
                                        <h6>{{$item->product->name}}</h6>
                                    </div>
                                    <div class="item-qty">
                                        <p>Quantity</p>
                                        <h6>{{$item->product_qty}}</h6>
                                    </div>
                                    <div class="item-price">
                                        <p>Price</p>
                                        <h6>${{$item->amount}}</h6>
                                    </div>
                                </div>
                            @endforeach
                            
                            <hr>
                            <div class="tax-cal">
                                <div class="sub-total">
                                    <p>Sub Total : </p>
                                    <h6 class="mb-0">$300</h6>
                                </div>
                                <div class="shipping-total">
                                    <p>Shipping Charges : </p>
                                    <h6 class="mb-0">$300</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="total-price mb-4">
                                <h4>Total Price : </h4>
                                <h4 id="total_amount">$4000</h4>
                            </div>
                        </div> --}}
                        <div class="col-md-4 col-sm-12">
                            <div class="order-summary">
                                <h5>Order Summary : </h5>
                                <p>Order ID : {{$get_order_details[0]->order_id}}</p>
                                <p>Order Date : {{\Carbon\Carbon::parse($get_order_details[0]->created_at)->format('M d, Y')}}</p>
                                <p id="total_amount">Total Amount : $9000</p>
                            </div> 

                            <div class="shipping-address mt-4">
                                <h5>Shipping Address : </h5>
                                <p>{{$shipping_details->address_1}}, {{$shipping_details->address_2}}, {{$shipping_details->town_or_city}}, {{$shipping_details->province}}, {{$shipping_details->country}} - {{$shipping_details->zip_code}}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
@endsection
