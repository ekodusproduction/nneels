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

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
@endsection
