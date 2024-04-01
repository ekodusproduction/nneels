@extends('admin.index')
@section('title', 'Create Product')

@section('custom-styles')
    <style>
        .main-product-image-container{
            height: 350px;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            overflow: hidden;
            padding:10px;
        }
        .browse-image{
            margin-left: 30px;
            margin-top: 10px;
            width:40px;
            height:40px;
            border:1px solid white;
            box-shadow:0px 2px 10px rgb(199, 199, 199);
            border-radius:5px;
            display:flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 30px;
            cursor: pointer;
            background: white;
        }
        .browse-image .fe-upload-cloud{
            font-size:20px;
        }
        #mainProductImage{
            display:none;
        }
        .preview-main-product{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .preview-main-product img{
            border-radius:5px;
        }
        .preview-main-product .upload-main-image-placeholder img{
            height:auto;
            width:200px;
            object-fit:fill;
            border-radius:5px;
        }

        .product-gallery-image-container{
            height: auto;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            padding:10px;
        }
        .browse-gallery-image{
            margin-left: 30px;
            margin-top: 10px;
            width:30px;
            height:30px;
            border:1px solid white;
            box-shadow:0px 0px 10px rgb(218, 217, 217);
            border-radius:5px;
            display:flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 30px;
            cursor: pointer;
        }
        .browse-gallery-image .fe-upload-cloud{
            font-size:16px;
        }
        .product-gallery-image{
            display:none;
        }
        .preview-gallery-product{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .preview-gallery-product .selected-image-container{
            height:70px;
            width:auto;
            border-radius:5px;
            background-color:white;
            display: flex;
            flex-direction: row;
           
        }

        .preview-gallery-product .selected-image-container img{
            height:100%;
            width:auto;
            object-fit: fill;
            border-radius:5px;
            border:1px solid rgb(201, 201, 201);
        }
        .preview-gallery-product .selected-image-container .gallery-image-remove-btn{
            font-size: 18px;
            color: white;
            background: #e90e0e;
            border-radius: 50%;
            height: 25px;
            width: 25px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: absolute;
            right:10%;
        }
        .product-gallery-image-container .upload-gallery-image-placeholder img{
            height:auto;
            width:80px;
        }

    </style>
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Create Product</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Main Image</label>
                    <div class="main-product-image-container">

                        <div class="browse-image main-product-browse">
                            <i class="fe fe-upload-cloud" aria-hidden="true"></i>
                        </div>
                        <div class="preview-main-product">
                            <div class="upload-main-image-placeholder text-center">
                                <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                                <p>Choose Image To Upload</p>
                            </div>
                            
                        </div>
                        <input type="file" name="main_product_image" id="mainProductImage">
                    </div>

                    <label for="" class="mt-3">Gallery Images ( Max Upload Limit : 4 )</label>
                    <div class="product-gallery-image-container">

                        <div class="browse-gallery-image">
                            <i class="fe fe-upload-cloud" aria-hidden="true"></i>
                        </div>
                        <div class="upload-gallery-image-placeholder text-center">
                            <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                            <p>Choose Image To Upload</p>
                        </div>
                        <hr style="border-top: 1px dashed rgba(0, 0, 0, 0.1);">
                        <div class="preview-gallery-product"></div>
                        <input type="file" name="product_gallery_image" class="product-gallery-image" multiple>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="product-form-container">
                        <form id="createProductForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="e.g Jacket" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" name="price" class="form-control" min="0" placeholder="e.g 500" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Available Size Comma ( , ) Separated</label>
                                        <input type="text" name="size" id="size" class="form-control" placeholder="e.g XS, S, M, ... ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Available Color Comma ( , ) Separated</label>
                                        <input type="text" name="color" class="form-control" placeholder="e.g Green" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Select Category</label>
                                        <select name="category" id="selectCategory" class="form-control" >
                                            <option value="">- - Select - - </option>
                                            @foreach ($category as $key => $item)
                                                <option value="{{encrypt($item->id)}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Select Sub-Category</label>
                                        <select name="sub_category" id="subCategory" class="form-control" >
                                            <option value="">- - Select - - </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" min="0" placeholder="e.g 300" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Select Stock Availability</label>
                                        <select name="is_stock_available" id="stock" class="form-control">
                                            <option value="">- -  Select - -</option>
                                            <option value="1">In Stock</option>
                                            <option value="0">Out of Stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Rate of Discount (in %)</label>
                                        <input type="text" name="rate_of_discount" class="form-control" placeholder="e.g 20" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Featured Section</label>
                                        <select name="featured_section" id="featuredSection" class="form-control">
                                            <option value="">- -  Select - -</option>
                                            <option value="bestSelling">Best Selling</option>
                                            <option value="latestDrop">Latest Drops</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Add Tags Comma ( , ) Separated</label>
                                        <input type="text" name="tags" class="form-control" placeholder="e.g Shirt, Cotton, .." >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Visibility Status</label>
                                        <select name="visibility_status" id="visibilityStatus" class="form-control" >
                                            <option value="">- -  Select - -</option>
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Short Description (Max Character Allowed : 350)</label>
                                        <textarea name="short_description" class="form-control" id="shortDescription" cols="30" rows="5" placeholder="e.g Short Description here...."  maxlength="350"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Long Description (Max Character Allowed : 800)</label>
                                        <textarea name="long_description" class="form-control" id="longDescription" cols="30" rows="7" placeholder="e.g Long Description here...."  maxlength="800"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-success create-product-form-btn">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
@endsection

@section('custom-scripts')
    
    <script>
        $('#selectCategory').on('change', function(e){
            const category_id = $(this).val();
            $.ajax({
                url:"{{route('admin.fetch.sub.category')}}",
                type:"GET",
                data:{
                    'category_id' : category_id
                },
                success:function(data){
                    if(data.status == 200){
                        $('#subCategory').find('option').remove();
                        if(data != undefined && data != null && data.data.length > 0){
                            data.data.forEach(function(subData) {
                                $('#subCategory').append($('<option>', {
                                    value: subData.id,
                                    text: subData.name
                                }));
                            });
                        } else {
                            $('#subCategory').append($('<option>', {
                                value: '',
                                text: 'Not Available'
                            }));
                        }
                        
                    }
                },error:function(err){
                    toastr.error('Oops! Something went wrong');
                }

            });
        });
    </script>

    <script>
        let galleryImages = [];
        let totalGalleryImages = 0;

        $('.main-product-browse').on('click', function(){
            $('#mainProductImage').click();
        });

        $('#mainProductImage').on('change', function(){
            const imageFile = $(this)[0].files;
            const maxFileSizeAllowed = 2*1024*1024;
           
            const mimeType = imageFile[0].type;

            if(imageFile[0].size > maxFileSizeAllowed){
                toastr.error('Oops! File too large. Maximum allowed size 2 MB');
            }else if(mimeType.split('/')[0] !== 'image'){
                toastr.error('Oops! Not a valid image. Please upload image only');
            }else{
                const fileReader = new FileReader();
                fileReader.onload = function(e){
                    $('.preview-main-product').html(
                        `
                            <img src="${e.target.result}" alt="product main image" >
                        `
                    )
                };
                fileReader.readAsDataURL(imageFile[0]);
            }
        });

        $('.browse-gallery-image').on('click', function(){
            $('.product-gallery-image').click();
        });

        $('.product-gallery-image').on('change', function(){
            const imageFile = $(this)[0].files;
            
            const maxFileSizeAllowed = 2*1024*1024;
            const mimeType = imageFile[0].type;

            if(imageFile[0].size > maxFileSizeAllowed){
                toastr.error('Oops! File too large. Maximum allowed size 2 MB');
            }else if(mimeType.split('/')[0] !== 'image'){
                toastr.error('Oops! Not a valid image. Please upload image only');
            }else{

                if(totalGalleryImages >= 4){
                    toastr.error('Oops! Maximum 4 gallery images can be uploaded at a time.');
                }else{
                    const fileReader = new FileReader();
                    fileReader.onload = function(e){
                        const imageId = 'image_' + Date.now();
                        $('.preview-gallery-product').append(
                            `
                                <div class="selected-image-container"  id="${imageId}" style="margin-top:10px;">
                                    <img src="${e.target.result}" alt="product gallery image">
                                    <div class="gallery-image-remove-btn">
                                        <i class="fe fe-x-circle"></i>
                                    </div>
                                </div>
                            `
                        )
                    };
                    fileReader.readAsDataURL(imageFile[0]);
                    totalGalleryImages++;
                    galleryImages.push(imageFile[0]);
                    
                    // console.log('Total Imgages-->', totalGalleryImages)
                    // console.log('Gallery Imgages-->', galleryImages)
                }
            }
        });

        //remove gallery image
        $(document).on('click', '.gallery-image-remove-btn', function(){
            let removeImageFromGalleryArray =  $('.selected-image-container').index($(this).closest('.selected-image-container'));

            if (removeImageFromGalleryArray !== -1) {
                galleryImages.splice(removeImageFromGalleryArray, 1);
            }
            totalGalleryImages = totalGalleryImages - 1;

            $(this).closest('.selected-image-container').remove();

            // console.log('Total Imgages-->', totalGalleryImages)
            // console.log('Gallery Imgages-->', galleryImages)
        });


        //Submit Product Details

        $('#createProductForm').on('submit', function(e){
            e.preventDefault();

            const main_image = $('#mainProductImage')[0].files;

            // console.log('Main Image --->', main_image[0]);

            if(main_image.length == 0){
                toastr.error('Oops! Please add main product image');
            }else{
                $('.create-product-form-btn').attr('disabled', true);
                $('.create-product-form-btn').text('Please wait...');

                let formData = new FormData(this);
                formData.append('main_product_image', main_image[0]);
                
                console.log('Gallery Images --> ', galleryImages) 

                if(galleryImages.length > 0){
                    $.each(galleryImages, function(index, image) {
                        formData.append('product_gallery_image[]', image);
                    });


                }

                $.ajax({
                    url:"{{route('admin.create.product')}}",
                    type:"POST",
                    contentType:false,
                    processData:false,
                    data:formData,
                    success:function(data){
                        // console.log('Response  data ===>', data)
                        if(data.status == 200){
                            toastr.success(data.message)
                            $('.create-product-form-btn').attr('disabled', false);
                            $('.create-product-form-btn').text('Submit');
                        }else{
                            toastr.error(data.message)
                            $('.create-product-form-btn').attr('disabled', false);
                            $('.create-product-form-btn').text('Submit');
                        }
                    },error:function(err){
                        toastr.error('Oops! Something went wrong');
                        $('.create-product-form-btn').attr('disabled', false);
                        $('.create-product-form-btn').text('Submit');
                    }
                });
            }
            
            
        });

    </script>

    
@endsection
