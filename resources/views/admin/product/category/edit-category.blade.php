@extends('admin.index')
@section('title', 'Edit Main Category')

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
                <h4 class="card-title mg-b-2 mt-2">Edit Main Category</h4>
            </div>
        </div>
        <div class="card-body">
            <form id="editCategoryForm">
                @csrf
                <div class="form-group mb-2">
                    <label for="" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="categoryName" placeholder="e.g Mensware" value="{{$category->name}}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Select Default Category Image</label>
                    <div class="d-flex flex-column">
                        <input type="file" class="form-control" name="categoryDefaultImage" id="categoryDefaultImage" required>
                        <div class="preview-category-image">
                            <img src="{{asset($category->default_image)}}" alt="No image selected" id="imagePreview">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button class="btn ripple btn-success category-submit-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('custom-scripts')
    <script>
        $('#editCategoryForm').on('submit', function(e) {
            e.preventDefault();

            $('.category-submit-btn').text('Please wait...')
            $('.category-submit-btn').attr('disabled', true)

            const formData = new FormData(this);
            
            $.ajax({
                url: "{{ route('admin.edit.category', ['id' => encrypt($category->id)]) }}",
                type: "POST",
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    if (data.status == 200) {
                        console.log(data)
                        toastr.success(data.message)
                        $('.category-submit-btn').text('Submit')
                        $('.category-submit-btn').attr('disabled', false)
                        // window.location.reload(true);
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
