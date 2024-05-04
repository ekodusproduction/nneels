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
                                    <div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true"
                                            class="btn btn-sm ripple btn-primary" data-toggle="dropdown"
                                            id="dropdownMenuButton" type="button">Action <i
                                                class="fas fa-caret-down ml-1"></i></button>
                                        <div class="dropdown-menu tx-13">
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
@endsection
