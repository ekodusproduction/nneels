@extends('website.welcome')
@section('title', 'My Orders')

@section('custom-styles')
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
        <table class="orders-table">
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
        </table>
      </div>
    </div>
  </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
@endsection