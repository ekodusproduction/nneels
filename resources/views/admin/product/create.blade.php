@extends('admin.index')
@section('title', 'Create Product')

@section('custom-style')
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
            left: 17%;
            cursor: pointer;
        }
        .browse-gallery-image .bx-cloud-upload{
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
            left:20%;
        }
        .product-gallery-image-container .upload-gallery-image-placeholder img{
            height:auto;
            width:80px;
        }

        .ck-editor__editable{
            height: 200px;
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
                    <label for="" class="form-label">Main Image</label>
                    <div class="main-product-image-container">

                        <div class="browse-image main-product-browse">
                            <i class="bx bx-cloud-upload" aria-hidden="true"></i>
                        </div>
                        <div class="preview-main-product">
                            <div class="upload-main-image-placeholder text-center">
                                <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                                <p>Choose Image To Upload</p>
                            </div>
                            
                        </div>
                        <input type="file" name="main_product_image" id="mainProductImage">
                    </div>

                    <label for="" class="mt-3 form-label">Gallery Images ( Max Upload Limit : 4 )</label>
                    <div class="product-gallery-image-container">

                        <div class="browse-gallery-image">
                            <i class='bx bx-cloud-upload'></i>
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
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="e.g Jacket" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Original Price</label>
                                        <input type="text" name="originalPrice" class="form-control" min="0" id="originalPrice" placeholder="e.g 500"  maxlength="3" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Rate of Discount (in %)</label>
                                        <input type="text" name="rate_of_discount" class="form-control" id="rateOfDiscount" placeholder="e.g 20" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Sale Price</label>
                                        <input type="text" name="salePrice" class="form-control" min="0" id="salePrice" placeholder="e.g 500" required>
                                    </div>
                                </div>
                                
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Available Size Comma ( , ) Separated</label>
                                        <input type="text" name="size" id="size" class="form-control" placeholder="e.g XS, S, M, ... " required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Select Category</label>
                                        <select name="category" id="selectCategory" class="form-control" required>
                                            <option value="">- - Select - - </option>
                                            @foreach ($category as $key => $item)
                                                <option value="{{encrypt($item->id)}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Select Sub-Category</label>
                                        <select name="sub_category" id="subCategory" class="form-control" required>
                                            <option value="">- - Select - - </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" min="0" placeholder="e.g 300" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Select Stock Availability</label>
                                        <select name="is_stock_available" id="stock" class="form-control" required>
                                            <option value="">- -  Select - -</option>
                                            <option value="1">In Stock</option>
                                            <option value="0">Out of Stock</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Featured Section</label>
                                        <select name="featured_section" id="featuredSection" class="form-control" required>
                                            <option value="">- -  Select - -</option>
                                            <option value="bestSelling">Best Selling</option>
                                            <option value="latestDrop">Latest Drops</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Add Tags Comma ( , ) Separated</label>
                                        <input type="text" name="tags" class="form-control" placeholder="e.g Shirt, Cotton, .." required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Visibility Status</label>
                                        <select name="visibility_status" id="visibilityStatus" class="form-control" required>
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
                                        <label for="" class="form-label mt-2">Short Description (Max Character Allowed : 350)</label>
                                        <textarea name="short_description" class="form-control" id="shortDescription" cols="30" rows="5" placeholder="e.g Short Description here...."  maxlength="350" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-2">Long Description (Max Character Allowed : 800)</label>
                                        <div id="editor"></div>
                                        {{-- <textarea name="long_description" class="form-control" id="longDescription" cols="30" rows="7" placeholder="e.g Long Description here...."  maxlength="800" required></textarea> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-success create-product-form-btn mt-4">Submit</button>
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
        let editorInstance;

        $(document).ready(function(){
            ClassicEditor
            .create( document.querySelector( '#editor' ),{
                toolbar: {
                    items: [
                        'undo', 'redo',
                        '|', 'heading',
                        '|', 'bold', 'italic',
                        '|', 'link', 'blockQuote',
                        '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
                    ],
                    shouldNotGroupWhenFull: false,
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'e.g Type full description here ....',
            })
            .then(editor => {

                editorInstance = editor;
                const charLimit = 800;  // Set your character limit here

                editor.model.document.on('change:data', () => {
                    const content = editor.getData();
                    const charCount = content.replace(/<[^>]*>/g, '').length;

                    if (charCount > charLimit) {
                        alert('Character limit exceeded! Please type within 800 characters.');
                        editor.execute('undo');
                    }
                });
            })
            .catch( error => {
                console.error( error );
            } );
        });

        
    </script>

    <script>
        let galleryImages = [];
        let totalGalleryImages = 0;
        

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
                                        <i class="bx bx-x-circle"></i>
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

            // if(main_image.length == 0){
                
            //     toastr.error('Oops! Please add main product image');
            // }else{
                $('.create-product-form-btn').attr('disabled', true);
                $('.create-product-form-btn').text('Please wait...');

                let formData = new FormData(this);
                
                formData.append('main_product_image', main_image[0]);
                
                // console.log('Gallery Images --> ', galleryImages) 

                if(galleryImages.length > 0){
                    $.each(galleryImages, function(index, image) {
                        formData.append('product_gallery_image[]', image);
                    });
                }

                const long_description = editorInstance.getData();

                formData.append('long_description', long_description);

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
                            editorInstance.setData('');

                            $('#createProductForm')[0].reset();
                            galleryImages = [];
                            totalGalleryImages = 0;
                            $('.preview-gallery-product').html(``);
                            $('.preview-main-product').html(`
                            
                                <div class="upload-main-image-placeholder text-center">
                                    <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                                    <p>Choose Image To Upload</p>
                                </div>
                            `);

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
            // }
            
            
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
