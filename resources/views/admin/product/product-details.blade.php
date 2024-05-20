@extends('admin.index')
@section('title', 'Edit Product Details')

@section('custom-style')
    <style>
        .main-product-image-container{
            height: 350px;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            overflow: hidden;
            padding:10px;
            margin-bottom:10px;
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
            left: 17%;
            cursor: pointer;
            background: white;
        }
        .browse-image .bx-cloud-upload{
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
            height: auto;
            width:200px;
            object-fit: cover;
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
            /* overflow: hidden; */
            padding:10px;
        }

        .product-gallery-image-container .gallery-images{
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin-top:5px;
            height:100%;
        }
        
        .product-gallery-image-container .gallery-images img{
           height: 250px;
           width:200px;
           border-radius:5px;
           object-fit: cover;
           object-position: top center;

        }

        .product-gallery-image-container .gallery-images .media-area .choose-gallery-image{
            margin-top:20px;
            text-align: center;
            margin-bottom:25px;
        }

        .product-gallery-image-container .gallery-images .media-area .choose-gallery-image input{
            max-width:105px;
        }
        .bx-refresh{
            cursor: pointer;
            background: #0993e2cc;
            color: white !important;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Edit Product</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <label for="" class="form-label">Main Image</label>
                            <div class="main-product-image-container">
                                <div class="browse-image main-product-browse">
                                    <i class="bx bx-cloud-upload" aria-hidden="true"></i>
                                </div>
                                <div class="preview-main-product">
                                    <div class="upload-main-image-placeholder text-center">
                                        @if ($product_details->main_image != null)
                                            <img  src="{{asset($product_details->main_image)}}" alt="main product image">
                                        @else
                                            <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                                            <p>Choose Image To Upload</p>
                                        @endif
                                    </div>
                                </div>
                                <input type="file" name="main_product_image" id="mainProductImage">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-9">
                            <label for="" class="form-label">Gallery Images ( Max Upload Limit : 4 )</label>
                            <div class="product-gallery-image-container">
                                <div class="gallery-images">
                                    @php
                                        $gallery_limit = 4;
                                    @endphp

                                    @forelse ($product_details->product_gallery as $gallery)
                                        <div class="media-area">
                                            <img src="{{asset($gallery->image)}}" alt="Gallery Image" class="preview-gallery-image-{{$gallery->id}}">
                                            <div class="choose-gallery-image">
                                                <input type="file" name="editGalleryImage" class="edit-gallery-image" data-id="{{$gallery->id}}" multiple>
                                                <i class="bx bx-refresh remove-gallery-image-{{$gallery->id}} ml-2 d-none" data-id="{{$gallery->id}}" title="Refresh to revert back."></i>
                                            </div>
                                        </div>
                                    @empty
                                        
                                        @for( $i=1; $i <= $gallery_limit; $i++)

                                            <div class="media-area">
                                                <img src="{{asset('assets/images/img-placeholder.png')}}" alt="Gallery Image" class="preview-gallery-image-{{$i}}">
                                                <div class="choose-gallery-image">
                                                    <input type="file" name="editGalleryImage" class="edit-gallery-image"  data-id="{{$i}}" multiple>
                                                    <i class="bx bx-refresh remove-gallery-image ml-2 d-none" title="Refresh to revert back."></i>
                                                </div>
                                            </div>
                                        @endfor
                                    @endforelse
                                    
                                    @php
                                        $required_gallery_image_selector = $gallery_limit - count($product_details->product_gallery);
                                    @endphp

                                    @if ($required_gallery_image_selector > 0 && $required_gallery_image_selector < 4)
                                        @for( $i=1; $i <= $required_gallery_image_selector; $i++)
                                            @php
                                                $selector_index = $required_gallery_image_selector + $i;
                                            @endphp
                                            <div class="media-area">
                                                <img src="{{asset('assets/images/img-placeholder.png')}}" alt="Gallery Image" class="preview-gallery-image-{{$selector_index}}">
                                                <div class="choose-gallery-image">
                                                    <input type="file" name="editGalleryImage" class="edit-gallery-image"  data-id="{{$selector_index}}" multiple>
                                                    <i class="bx bx-refresh remove-gallery-image ml-2 d-none" title="Refresh to revert back."></i>
                                                </div>
                                            </div>
                                        @endfor
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-form-container">
                        <form id="updateProductForm" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ encrypt($product_details->product_id) }}">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="e.g Jacket" value="{{$product_details->name}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Original Price</label>
                                        <input type="text" name="originalPrice" class="form-control" min="0" id="originalPrice" placeholder="e.g 500" value="{{$product_details->original_price}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Rate of Discount (in %)</label>
                                        <input type="text" name="rate_of_discount" class="form-control" id="rateOfDiscount" placeholder="e.g 20" value="{{$product_details->rate_of_discount}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Sale Price</label>
                                        <input type="text" name="salePrice" class="form-control" min="0" id="salePrice" placeholder="e.g 500" value="{{$product_details->sale_price}}" required>
                                    </div>
                                </div>
                                
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Available Size Comma ( , ) Separated</label>
                                        <input type="text" name="size" id="size" class="form-control" placeholder="e.g XS, S, M, ... " value="{{$product_details->size}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Available Color Comma ( , ) Separated</label>
                                        <input type="text" name="color" class="form-control" placeholder="e.g Green" value="{{$product_details->color}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Select Category</label>
                                        <select name="category" id="selectCategory" class="form-control" required>
                                            <option value="{{ encrypt($product_details->category->id) }}">{{$product_details->category->name}}</option>
                                            @foreach ($categories as $key => $item)
                                                <option value="{{encrypt($item->id)}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Select Sub-Category</label>
                                        <select name="sub_category" id="subCategory" class="form-control" required>
                                            <option value="{{$product_details->subCategory->id}}">{{$product_details->subCategory->name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" min="0" placeholder="e.g 300" value="{{$product_details->quantity}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Select Stock Availability</label>
                                        <select name="is_stock_available" id="stock" class="form-control" required>
                                            <option value="{{$product_details->is_stock_available}}">{{$product_details->is_stock_available == 1 ? 'In Stock' : 'Out of Stock'}}</option>
                                            <option value="1">In Stock</option>
                                            <option value="0">Out of Stock</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Featured Section</label>
                                        <select name="featured_section" id="featuredSection" class="form-control" required>
                                            <option value="{{$product_details->featured_section}}">{{$product_details->featured_section == 'bestSelling' ? 'Best Selling' : 'Latest Drop'}}</option>
                                            <option value="bestSelling">Best Selling</option>
                                            <option value="latestDrop">Latest Drops</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Add Tags Comma ( , ) Separated</label>
                                        <input type="text" name="tags" class="form-control" placeholder="e.g Shirt, Cotton, .." value="{{$product_details->tags}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Visibility Status</label>
                                        <select name="visibility_status" id="visibilityStatus" class="form-control" required>
                                            <option value="{{$product_details->status}}">{{$product_details->status == 1 ? 'Published' : 'Draft'}}</option>
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Short Description (Max Character Allowed : 350)</label>
                                        <textarea name="short_description" class="form-control" id="shortDescription" cols="30" rows="5" placeholder="e.g Short Description here...."  maxlength="350" required>{{$product_details->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Long Description (Max Character Allowed : 800)</label>
                                        <textarea name="long_description" class="form-control" id="longDescription" cols="30" rows="7" placeholder="e.g Long Description here...."  maxlength="800" required>{{$product_details->long_description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-success update-product-form-btn mt-4">Submit</button>
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
                                if(subData.status == 1){
                                    $('#subCategory').append($('<option>', {
                                        value: subData.id,
                                        text: subData.name
                                    }));
                                }
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
        const maxImagesAllowed = 4;

        $('.main-product-browse').on('click', function(){
            $('#mainProductImage').click();
        });


        //For selecting main product image
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

        $('.edit-gallery-image').on('change', function(e){
            const gallery_image_id = $(this).data('id');
            const selected_gallery_image = $(this)[0].files;

            const maxFileSizeAllowed = 2*1024*1024;
           
            const mimeType = selected_gallery_image[0].type;

            if(selected_gallery_image[0].size > maxFileSizeAllowed){
                toastr.error('Oops! File too large. Maximum allowed size 2 MB');
            }else if(mimeType.split('/')[0] !== 'image'){
                toastr.error('Oops! Not a valid image. Please upload image only');
            }else{

                let reader = new FileReader();
                reader.onload = function(e) {
                    $('.preview-gallery-image-'+gallery_image_id).attr('src', e.target.result);
                    // $('.remove-gallery-image-'+gallery_image_id).removeClass('d-none');
                }
                reader.readAsDataURL(selected_gallery_image[0]);

                let existingImageIndex = galleryImages.findIndex(image => image.id === gallery_image_id);
                console.log(existingImageIndex)

                if (existingImageIndex !== -1) {
                    // Replace the existing image
                    galleryImages[existingImageIndex].image = selected_gallery_image[0];
                }else{
                    galleryImages.push({
                        'id' : gallery_image_id,
                        'image' : selected_gallery_image[0]
                    });
                }
            }
            
        });




        $('#updateProductForm').on('submit', function(e){
            e.preventDefault();

            const main_image = $('#mainProductImage')[0].files[0];
            
            $('.update-product-form-btn').attr('disabled', true).text('Please wait...');

            let formData = new FormData(this);
            formData.append('main_product_image', main_image);

            if(galleryImages.length > 0){
                galleryImages.forEach(function(image, index) {
                    formData.append(`product_gallery_images[${index}][id]`, image.id);
                    formData.append(`product_gallery_images[${index}][image]`, image.image);
                });
            }

            $.ajax({
                url: "{{route('admin.update.product.details')}}",
                type: "POST",
                contentType: false,
                processData: false,
                data: formData,
                success: function(data){
                    console.log('Response data ===>', data);
                    if(data.status === 200){
                        toastr.success(data.message);
                        // Optionally reset the form and images here
                        $('.update-product-form-btn').attr('disabled', false).text('Submit');
                    } else {
                        toastr.error(data.message);
                        $('.update-product-form-btn').attr('disabled', false).text('Submit');
                    }
                },
                error: function(err){
                    toastr.error('Oops! Something went wrong');
                    $('.update-product-form-btn').attr('disabled', false).text('Submit');
                }
            });
        });
    </script>

    <script>
        $('#originalPrice, #rateOfDiscount').on('input', function() {
            let originalPrice = parseFloat($('#originalPrice').val());
            let discountRate = parseFloat($('#rateOfDiscount').val());

            if (!isNaN(originalPrice) && !isNaN(discountRate)) {
                let discountAmount = (originalPrice * discountRate) / 100;
                let salePrice = originalPrice - discountAmount;
                $('#salePrice').val(salePrice.toFixed(2));
            }
        });
    </script>
    
@endsection
