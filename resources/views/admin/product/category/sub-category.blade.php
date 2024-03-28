@extends('admin.index')
@section('title', 'Sub Category')

@section('custom-styles')
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Sub Category</h4>
                <button class="btn btn-md btn-primary ripple" type="button" data-target="#addSubCategoryModal" data-toggle="modal">Add Sub Category</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mg-b-1 text-md-nowrap">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Sub-Category Name</th>
                            <th>Parent Category</th>
                            <th>Status</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($sub_categories as  $key => $item)

                            <tr>
                                <th scope="row">{{$key + 1 }}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <span class="badge badge-secondary">{{$item->categories->name}}</span> 
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge badge-success"> Active </span>
                                    @else
                                        <span class="badge badge-danger"> Inactive </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm ripple btn-primary"
                                        data-toggle="dropdown" id="dropdownMenuButton" type="button">Action <i class="fas fa-caret-down ml-1"></i></button>
                                        <div  class="dropdown-menu tx-13">
                                            @if ($item->status == 1)
                                                <a class="dropdown-item" href="#">Deactivate</a>
                                            @else
                                                <a class="dropdown-item" href="#">Activate</a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center"><strong>No Data found!</strong></td>
                            </tr>
                        @endforelse
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal" id="addSubCategoryModal">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Sub-Category</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="addSubCategoryForm">
                        @csrf
                        <div class="form-group">
                            <label for="">Select Category</label>
                            <select name="categories_id" class="form-control" required>
                                <option value="">- select -</option>
                                @forelse ($main_categories as $key => $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @empty
                                    <option value="">No Categories Found!</option>
                                @endforelse
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Sub-Category Name</label>
                            <input type="text" class="form-control" name="subCategoryName" placeholder="e.g Men's Boots" required>
                        </div>
                        <div class="form-group">
                            <button class="btn ripple btn-success sub-category-submit-btn" type="submit">Submit</button>
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $('#addSubCategoryForm').on('submit', function(e){
            e.preventDefault();

            $('.sub-category-submit-btn').text('Please wait...');
            $('.sub-category-submit-btn').attr('disabled', true);

            const formData = new FormData(this);

            $.ajax({
                url:"{{route('admin.create.sub.category')}}",
                type:"POST",
                contentType:false,
                processData:false,
                data:formData,
                success:function(data){
                    if(data.status == 200){
                        toastr.success(data.message)
                        $('.sub-category-submit-btn').text('Submit');
                        $('.sub-category-submit-btn').attr('disabled', false);
                        window.location.reload(true)
                    }else{
                        toastr.error(data.message)
                        $('.sub-category-submit-btn').text('Submit');
                        $('.sub-category-submit-btn').attr('disabled', false);
                    }
                },error:function(err){
                    toastr.error(err.responseJSON.message)
                    $('.sub-category-submit-btn').text('Submit');
                    $('.sub-category-submit-btn').attr('disabled', false);
                }
            });
        });
    </script>
@endsection
