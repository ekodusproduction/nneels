@extends('website.welcome')
@section('title', 'My Orders')

@section('custom-styles')
  <style>
    #orderTable_wrapper{
      padding-bottom:10px;
    }
    tr th{
      font-size:14px !important;
      font-weight: 500;
    }
    tr td{
      width:30px;
      font-size:14px;
      text-wrap:pretty;
    }
  </style>
@endsection

@section('content')
<div class="mb-4 pb-4"></div>
<section class="my-account container">
  <h2 class="page-title">Orders</h2>
  <div class="row">
    <div class="col-lg-2">
      @include('website.account.menu.links')
    </div>
    <div class="col-lg-10">
      <div class="page-content my-account__orders-list">
        {{-- <table class="orders-table">
          <thead>
            <tr>
              <th>Order</th>
              <th>Date</th>
              <th>Status</th>
              <th>Total</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#2416</td>
              <td>October 1, 2023</td>
              <td>On hold</td>
              <td>$1,200.65 for 3 items</td>
              <td><button class="btn btn-primary">VIEW</button></td>
            </tr>
            <tr>
              <td>#2417</td>
              <td>October 2, 2023</td>
              <td>On hold</td>
              <td>$1,200.65 for 3 items</td>
              <td><button class="btn btn-primary">VIEW</button></td>
            </tr>
            <tr>
              <td>#2418</td>
              <td>October 3, 2023</td>
              <td>On hold</td>
              <td>$1,200.65 for 3 items</td>
              <td><button class="btn btn-primary">VIEW</button></td>
            </tr>
            <tr>
              <td>#2419</td>
              <td>October 4, 2023</td>
              <td>On hold</td>
              <td>$1,200.65 for 3 items</td>
              <td><button class="btn btn-primary">VIEW</button></td>
            </tr>
          </tbody>
        </table> --}}
        <table id="orderTable" class="table table-striped wrap" style="width:100%">
          <thead>
              <tr>
                  <th>Sl.No.</th>
                  <th>Order Id</th>
                  <th>Item</th>
                  <th>Qty</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Purchase Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($orders as $key => $item)
                @php
                    $product = \App\Models\Product::where('product_id', $item->product_id)->first();
                @endphp
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->order_id}}</td>
                    <td>{{\Str::limit($item->product->name, 20)}}</td>
                    <td>{{$item->product_qty}}</td>
                    <td>${{$item->amount}}</td>
                    <td>
                      @if ($item->payment_status == 'paid')
                          <h6 style="color:green;">PAID</h6>
                      @else
                        <h6 style="color:crimson;">Pending</h6>
                      @endif
                    </td>
                    <td>{{\Carbon\Carbon::parse($item->created)->diffForHumans()}}</td>
                    <td>
                      <a href="{{route('website.account.track.order', ['id' => encrypt($item->order_id) ])}}">Track Order</a>
                      <a href="{{route('website.get.product.by.category', ['main_category' => urlencode($product->category->name), 'sub_category' => urlencode($product->subCategory->name), 'product_id' => $item->product_id])}}">View Product</a>
                    </td>
                </tr>
              @endforeach
              
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
  <script>
    $('#orderTable').DataTable({
      paging: false,
      searching: true,
      ordering: false,
      info: true
    });
  </script>
@endsection