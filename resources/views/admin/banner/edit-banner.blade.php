@extends('admin.index')
@section('title', 'Edit Banner')

@section('custom-style')
    <style>
        .product-form-container{
            margin-right: 20px;
            background: white;
            margin-left: 20px;
            padding: 20px;
            border-radius: 10px;
        }

        .main-product-image-container {
            height: 350px;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
        }

        .browse-image {
            margin-left: 30px;
            margin-top: 10px;
            width: 50px;
            height: 50px;
            border: 1px solid white;
            box-shadow: 0px 2px 10px rgb(199, 199, 199);
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 10%;
            cursor: pointer;
            background: white;
        }

        .browse-image .bx-cloud-upload {
            font-size: 20px;
        }

        #mainProductImage {
            display: none;
        }

        .preview-main-product {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .preview-main-product img {
            border-radius: 5px;
            height: 300px;
            width: auto;
            object-fit: cover;
        }

        .preview-main-product .upload-main-image-placeholder img {
            height: auto;
            width: 200px;
            object-fit: fill;
            border-radius: 5px;
        }

        .product-gallery-image-container {
            height: auto;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            padding: 10px;
        }

        .browse-gallery-image {
            margin-left: 30px;
            margin-top: 10px;
            width: 30px;
            height: 30px;
            border: 1px solid white;
            box-shadow: 0px 0px 10px rgb(218, 217, 217);
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 17%;
            cursor: pointer;
        }

        .browse-gallery-image .bx-cloud-upload {
            font-size: 16px;
        }

        .product-gallery-image {
            display: none;
        }

        .preview-gallery-product {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .preview-gallery-product .selected-image-container {
            height: 70px;
            width: auto;
            border-radius: 5px;
            background-color: white;
            display: flex;
            flex-direction: row;

        }

        .preview-gallery-product .selected-image-container img {
            height: 100%;
            width: auto;
            object-fit: fill;
            border-radius: 5px;
            border: 1px solid rgb(201, 201, 201);
        }

        .preview-gallery-product .selected-image-container .gallery-image-remove-btn {
            font-size: 18px;
            color: white;
            background: #cb0404;
            border-radius: 50%;
            height: 20px;
            width: 20px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: absolute;
            left: 20%;
        }

        .product-gallery-image-container .upload-gallery-image-placeholder img {
            height: auto;
            width: 80px;
        }
        .banner-card-image{
            box-sizing: border-box;
            overflow: hidden;
            padding:5px;
            border-radius: 5px;
            border: 1px solid #dfdfdf;
        }
        .banner-card-image img{
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .default-card-bg{
            background: #030426;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h5 class="card-header">Edit Banner</h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="product-form-container">
                <form id="editBannerForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="banner_id" value="{{encrypt($details->id)}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Main Text</label>
                                <input type="text" name="main_text" class="form-control" placeholder="e.g Summer Style" value="{{$details->main_text}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Sub Text</label>
                                <input type="text" name="sub_text" class="form-control" placeholder="e.g For Women" value="{{$details->sub_text}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Banner Image<sup class="text-danger">*</sup></label>
                            <div class="main-product-image-container">

                                <div class="browse-image main-product-browse">
                                    <i class="bx bx-cloud-upload" aria-hidden="true"></i>
                                </div>
                                <div class="preview-main-product">
                                    @if ($details->image != null)
                                        <img  src="{{asset($details->image)}}" alt="Banner Image">
                                    @else
                                        <div class="upload-main-image-placeholder text-center">
                                            <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                                            <p>Choose Image To Upload</p>
                                        </div>
                                    @endif
                                </div>
                                <input type="file" name="banner_image" id="mainProductImage">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-success create-banner-form-btn mt-4">Submit</button>
                    </div>
                </form>
            </div>

            
        </div>
    </div> 
@endsection

@section('custom-scripts')

    <script>
        let galleryImages = [];
        let totalGalleryImages = 0;

        $('.main-product-browse').on('click', function() {
            $('#mainProductImage').click();
        });

        $('#mainProductImage').on('change', function() {
            const imageFile = $(this)[0].files;
            const maxFileSizeAllowed = 2 * 1024 * 1024;

            const mimeType = imageFile[0].type;

            if (imageFile[0].size > maxFileSizeAllowed) {
                toastr.error('Oops! File too large. Maximum allowed size 2 MB');
            } else if (mimeType.split('/')[0] !== 'image') {
                toastr.error('Oops! Not a valid image. Please upload image only');
            } else {
                const fileReader = new FileReader();
                fileReader.onload = function(e) {
                    $('.preview-main-product').html(
                        `
                            <img src="${e.target.result}" alt="product main image" >
                        `
                    )
                };
                fileReader.readAsDataURL(imageFile[0]);
            }
        });


        //Submit Product Details

        $('#editBannerForm').on('submit', function(e) {
            e.preventDefault();

            const main_image = $('#mainProductImage')[0].files;

            // console.log('Main Image --->', main_image[0]);

            // if (main_image.length == 0) {
            //     toastr.error('Oops! Please add banner image');
            // } else {
                $('.create-banner-form-btn').attr('disabled', true);
                $('.create-banner-form-btn').text('Please wait...');

                let formData = new FormData(this);
                formData.append('banner_image', main_image[0]);

                $.ajax({
                    url: "{{ route('admin.save.edited.banner') }}",
                    type: "POST",
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(data) {
                        console.log('Response  data ===>', data)
                        if (data.status == 200) {
                            toastr.success(data.message)

                            $('#editBannerForm')[0].reset();

                            $('.preview-main-product').html(`
                            
                                <div class="upload-main-image-placeholder text-center">
                                    <img  src="{{ asset('admin/assets/img/upload-image-placeholder.jpg') }}" alt="upload image placeholder">
                                    <p>Choose Image To Upload</p>
                                </div>
                            `);

                            $('.create-banner-form-btn').attr('disabled', false);
                            $('.create-banner-form-btn').text('Submit');

                            window.location.reload(true);
                        } else {
                            toastr.error(data.message)
                            $('.create-banner-form-btn').attr('disabled', false);
                            $('.create-banner-form-btn').text('Submit');
                        }
                    },
                    error: function(err) {
                        toastr.error('Oops! Something went wrong');
                        $('.create-banner-form-btn').attr('disabled', false);
                        $('.create-banner-form-btn').text('Submit');
                    }
                });
            // }


        });
    </script>


@endsection
