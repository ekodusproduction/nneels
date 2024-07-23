@extends('admin.index')
@section('title', 'Orders List')

@section('custom-style')
    <style>
        .dt-buttons {
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .dt-search {
            margin-right: 20px;
        }

        .dt-search input[type='search'] {
            height: 35px;
        }

        .dt-info {
            margin-left: 20px;
        }

        .dt-paging {
            margin-right: 20px !important;
            margin-bottom: 10px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Orders List</h5>
                <div class="table-responsive text-wrap">
                    <table id="ordersListTable" class="table table-bordered table-striped wrap dt-responsive" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:5%;">Sl.No.</th>
                                <th style="width:20%;">Order Id</th>
                                <th style="width:5%;">Total Products</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%;">Amount</th>
                                <th style="width:10%;">Payment Status</th>
                                <th style="width:20%;">Delivery Status</th>
                                <th style="width:20%;">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            {{-- @dd($get_orders_list) --}}
                            @forelse ($get_orders_list as $key => $item)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        <p>{{$item->order_id}}</p>
                                    </td>
                                    <td>
                                        <p>{{$item->order_count}}</p>
                                    </td>
                                    <td>
                                        <p>{{ \Carbon\Carbon::parse($item->updated_at)->format('M d, Y') }}</p>
                                    </td>
                                    <td>
                                        <p>${{$item->total_amount}}</p>
                                    </td>
                                    <td>
                                        <p>{{$item->payment_status}}</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('admin.get.product.details', ['id' => encrypt($item->product_id)])}}"><i class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item delete-product" href="javascript:void(0);" data-id="{{encrypt($item->product_id)}}"><i class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
        
                            @endforelse
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $('#ordersListTable').DataTable({
            layout: {
                topStart: {
                    buttons: ['excelHtml5', 'pdfHtml5']
                }
            },
            responsive: true
        });
    </script>
@endsection
