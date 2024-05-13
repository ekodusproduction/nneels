@extends('admin.index')
@section('title', 'Main Category')

@section('custom-style')
    <style>
        .preview-category-image{
            height: 300px;
            width: auto;
            border-radius: 5px;
            margin-top: 15px;
            background: aliceblue;
            display:flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            overflow: hidden;
            padding:25px;
        }

        #imagePreview{
            height:100%;
            width:auto;
            border-radius:5px;
        }
    </style>
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0 mb-4">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Main Category</h4>
                <button class="btn btn-sm btn-primary ripple" type="button" data-bs-target="#addCategoryModal"
                    data-bs-toggle="modal">Add Category</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mg-b-1 text-md-nowrap">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Sub-Category Name</th>
                            <th>Status</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($category as  $key => $item)

                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{asset($item->default_image)}}" alt="Category default image" style="height:60px; width:60px; border-radius:50px;">
                                </td>
                                <td>
                                    @foreach ($item->subCategories as $key2 => $sub_cat_item)
                                        <span class="badge bg-label-secondary mb-2">{{ $sub_cat_item->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge bg-label-success"> Active </span>
                                    @else
                                        <span class="badge bg-label-danger"> Inactive </span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            @if ($item->status == 1)
                                                <a class="dropdown-item text-secondary" href="javascript:void(0);" data-id="{{$item->id}}">Deactivate</a>
                                            @else
                                                <a class="dropdown-item text-success" href="javascript:void(0);" data-id="{{$item->id}}">Activate</a>
                                            @endif
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-warning cat-edit-btn" href="javascript:void(0);" data-id="{{$item->id}}">Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-danger cat-del-btn" href="javascript:void(0);" data-id="{{$item->id}}">Delete</a>
                                        </li>
                                    </ul>
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

    {{-- <div class="modal" id="addCategoryModal">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Category</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm">
                        @csrf
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" name="categoryName" placeholder="e.g Mensware"
                                required>
                        </div>
                        <div class="form-group">
                            <button class="btn ripple btn-success category-submit-btn" type="submit">Submit</button>
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalTitle">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="categoryName" placeholder="e.g Mensware" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Select Default Category Image</label>
                            <div class="d-flex flex-column">
                                <input type="file" class="form-control" name="categoryDefaultImage" id="categoryDefaultImage" required>
                                <div class="preview-category-image">
                                    <img src="{{asset('admin/assets/img/backgrounds/no-image.png')}}" alt="No image selected" id="imagePreview">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn ripple btn-success category-submit-btn" type="submit">Submit</button>
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
        $('#addCategoryForm').on('submit', function(e) {
            e.preventDefault();

            $('.category-submit-btn').text('Please wait...')
            $('.category-submit-btn').attr('disabled', true)

            const formData = new FormData(this);
            $.ajax({
                url: "{{ route('admin.create.category') }}",
                type: "POST",
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    if (data.status == 200) {
                        toastr.success(data.message)
                        $('.category-submit-btn').text('Submit')
                        $('.category-submit-btn').attr('disabled', false)
                        window.location.reload(true);
                    } else {
                        toastr.error(data.message)
                        $('.category-submit-btn').text('Submit')
                        $('.category-submit-btn').attr('disabled', false)
                    }
                },
                error: function(err) {
                    toastr.error(err.responseJSON.message)
                    $('.category-submit-btn').text('Submit')
                    $('.category-submit-btn').attr('disabled', false)
                }

            });
        });
    </script>

    <script>
        $(document).ready(function() {
        // Preview image when file selected
            $('#categoryDefaultImage').change(function() {
                const file = this.files[0];
                if (file) {
                    const fileType = file['type'];
                    const validImageTypes = ['image/jpg', 'image/jpeg', 'image/png']; // Add any additional valid image types here
                    if (validImageTypes.includes(fileType)) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').attr('src', e.target.result);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        toastr.error('Please select a valid image file (JPEG, PNG, JPG).');
                        $(this).val(''); // Clear the file input
                        $('#imagePreview').attr('src', '{{ asset("admin/assets/img/backgrounds/no-image.png") }}'); // Reset preview to default image
                    }
                } else {
                    $('#imagePreview').attr('src', '{{ asset("admin/assets/img/backgrounds/no-image.png") }}');
                }
            });
        });
    </script>

    <script>
        $('.cat-edit-btn').on('click', function(){
            const category_id = $(this).data('id');
            $.ajax({
                url:"{{route('admin.edit.category')}}",
                type:"POST",
                data:{
                    'category_id' : contentType,
                    '_token' : "{{csrf_token()}}"
                },
                success:function(data){
                    console.log(data)
                },error:function(error){
                    swal.fire("Oops! Something went wrong.", '', 'success')
                }
            });
        });
    </script>

    <script>
        $('.cat-del-btn').on('click', function(){
            const category_id = $(this).data('id');
            
            Swal.fire({
                icon:'warning',
                title:'Are you sure?',
                text: "Deleting main category will also delete related sub categories.",
                showCancelButton: true,
                confirmButtonText: "Delete Anyway",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url:"{{route('admin.delete.category')}}",
                        type:POST,
                        data:{
                            'category_id' : category_id,
                            '_token' : "{{csrf_token()}}"
                        },
                        success:function(data){
                            if(data.status == 200){
                                Swal.fire(data.message, "", "success");
                            }else{
                                Swal.fire(data.message, "", "error");
                            }
                            
                        },error:function(error){
                            Swal.fire('Oops! Something went wrong.', "", "error");
                        }
                    });
                    
                }
            });
        });
    </script>
@endsection
