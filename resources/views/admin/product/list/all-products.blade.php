@extends('admin.index')
@section('title', 'All Products')

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
    {{-- <div class="card mb-4">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2">Total Products</h6>
                                <h4 class="mb-2">{{count($product)}}</h4>
                                <p class="mb-0"><span class="text-muted me-2">5k orders</span><span
                                        class="badge bg-label-success">+5.7%</span></p>
                            </div>
                            <div class="avatar me-sm-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-store-alt bx-sm"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-4">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2">Website Sales</h6>
                                <h4 class="mb-2">$674,347.12</h4>
                                <p class="mb-0"><span class="text-muted me-2">21k orders</span><span
                                        class="badge bg-label-success">+12.4%</span></p>
                            </div>
                            <div class="avatar me-lg-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-laptop bx-sm"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                            <div>
                                <h6 class="mb-2">Discount</h6>
                                <h4 class="mb-2">$14,235.12</h4>
                                <p class="mb-0 text-muted">6k orders</p>
                            </div>
                            <div class="avatar me-sm-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-gift bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-2">In Stock</h6>
                                <h4 class="mb-2">345</h4>
                                <p class="mb-0"><span class="text-muted me-2">150 orders</span><span
                                        class="badge bg-label-danger">-3.5%</span></p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-wallet bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Product List Table -->
    <div class="card">
        <h5 class="card-header">Products List</h5>
        <div class="table-responsive text-wrap">
            <table id="allProductsTable" class="table table-bordered table-striped wrap dt-responsive" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 2%;">Sl.No.</th>
                        {{-- <th>Product Id</th> --}}
                        <th style="width: 3%;">Image</th>
                        <th style="width: 10%;">Name</th>
                        <th style="width: 5%;">Category</th>
                        <th style="width: 10%;">Sale Price</th>
                        <th style="width: 10%;">Size</th>
                        <th style="width: 5%;">Qty</th>
                        <th style="width: 5%;">In Stock</th>
                        <th style="width: 5%;">Visibility</th>
                        <th style="width: 5%;">Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($product as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                <img src="{{ asset($item->main_image) }}" class="avatar-lg" alt="Main Image" style="border-radius:50%;">
                            </td>
                            <td>
                                <p>{{ \Str::limit($item->name, 25) }}</p>
                            </td>
                            <td>
                                <p>{{$item->category->name}}</p>
                            </td>
                            <td>
                                <p style="font-weight: 600;"><span style="color:rgb(13, 124, 41);">$</span> {{ $item->sale_price }}</p>
                            </td>
                            <td>
                                <p>{{ $item->size }}</p>
                            </td>
                            <td>
                                <p>{{ $item->quantity }}</p>
                            </td>
                            <td>
                                @if ($item->is_stock_available == 1)
                                    <span class="badge bg-label-primary">In Stock</span>
                                @else
                                    <span class="badge bg-label-danger">Out of Stock</span>
                                @endif
                            </td>
                            {{-- <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    @forelse ($item->product_gallery as $gallery)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img src="{{ asset($gallery->image) }}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    @empty
                                        <li>
                                            <span class="badge bg-label-danger">No Gallery Image!</span>
                                        </li>
                                    @endforelse

                                </ul>
                            </td> --}}
                            <td>
                                @if ($item->status == 1)
                                    <span class="badge bg-label-success me-1">Published</span>
                                @else
                                    <span class="badge bg-label-danger me-1">Draft</span>
                                @endif

                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        @if ($item->status == 1)
                                            <a class="dropdown-item change-status" href="javascript:void(0);" data-id="{{$item->product_id}}" data-status="0"><i class="bx bx-low-vision me-1"></i>
                                               Change Visibility</a>
                                        @else
                                            <a class="dropdown-item change-status" href="javascript:void(0);" data-id="{{$item->product_id}}" data-status="1"><i class="bx bx-show me-1"></i>
                                                Change Visibility </a>
                                        @endif
                                        
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
@endsection

@section('custom-scripts')
    <script>
        $('#allProductsTable').DataTable({
            layout: {
                topStart: {
                    buttons: ['excelHtml5', 'pdfHtml5']
                }
            },
            responsive: true
        });
    </script>
    <script>
        $('.change-status').on('click', function(){
            $(this).text('Updating.. Please wait..');
            $(this).attr('disabled', true);

            const product_id = $(this).data('id');
            const status = $(this).data().status;

            $.ajax({
                url:"{{route('admin.change.product.status')}}",
                type:"POST",
                data:{
                    'product_id' : product_id,
                    'status' : status,
                    '_token' : "{{csrf_token()}}"
                },
                success:function(data){
                    if(data.status == 200){
                        toastr.success(data.message)
                        window.location.reload(true);
                    }else{
                        toastr.error(data.message);
                        $('.change-status').text('Change Visibility');
                        $('.change-status').attr('disabled', false);
                    }
                },error:function(error){
                    toastr.error('Oops! Something went wrong');
                    $('.change-status').text('Change Visibility');
                    $('.change-status').attr('disabled', false);
                }
            });
        });
    </script>

    <script>
        $('.delete-product').on('click', function(){
            const product_id = $(this).data('id');
            
            Swal.fire({
                icon:'warning',
                title:'Are you sure?',
                showCancelButton: true,
                confirmButtonText: "Delete Anyway",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url:"{{route('admin.delete.product')}}",
                        type:"POST",
                        data:{
                            'product_id' : product_id,
                            '_token' : "{{csrf_token()}}"
                        },
                        success:function(data){
                            if(data.status == 200){
                                Swal.fire(data.message, "", "success");
                            }else{
                                Swal.fire(data.message, "", "error");
                            }

                            window.location.reload(true);
                            
                        },error:function(error){
                            Swal.fire('Oops! Something went wrong.', "", "error");
                        }
                    });
                    
                }
            });
        });
    </script>
@endsection
