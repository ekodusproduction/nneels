@extends('admin.index')
@section('title', 'Product List')

@section('custom-styles')
    <style>
        div.dt-container .dt-paging .dt-paging-button {
            padding: 0.2em 0em;
        }
        .buttons-excel{
            background: #1D6F42;
            color: white;
            border: 1px solid #1D6F42;
            height: 35px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 3px;
        }
        .buttons-pdf{
            background: #c92216;
            color: white;
            border: 1px solid #c92216;
            height: 35px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 3px;
        }
    </style>
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Product List</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="productListTable" class="table no-footer" style="width: 100%; margin-top:15px;">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Id</th>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Qty</th>
                            <th>In Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>45638177-0b7d-4972-9e92-7a72a4230deb</td>
                            <td>
                                <img src="{{asset('admin/assets/img/ecommerce/10.jpg')}}" alt="" style="height:40px; width:40px; border-radius:50%; " >
                            </td>
                            <td>Long Pyjama Set</td>
                            <td>$200</td>
                            <td>S, L, M</td>
                            <td>Green, Yellow</td>
                            <td>500 units</td>
                            <td>Yes</td>
                            <td>
                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-outline-success">Info</button>
                                    <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function(){
            new DataTable('#productListTable', {
                layout: {
                    topStart: {
                        buttons: ['excelHtml5', 'pdfHtml5']
                    }
                }
            });
        });
        
    </script>
@endsection
