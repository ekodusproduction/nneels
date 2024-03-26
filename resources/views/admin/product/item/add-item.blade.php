@extends('admin.index')
@section('title', 'Create Item')

@section('custom-styles')
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Create Item</h4>
            </div>
        </div>
        <div class="card-body">
            <form id="createItemForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g Jacket">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control" min="0" placeholder="e.g 500">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Size</label>
                            <select name="size" id="size" class="form-control">
                                <option value="">- - Select - -</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="Free Size">Free Size</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Color</label>
                            <input type="text" name="itemColor" class="form-control" placeholder="e.g Green">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Category</label>
                            <select name="category" id="selectCategory" class="form-control">
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
                            <select name="category" id="subCategory" class="form-control">
                                <option value="">- - Select - - </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <textarea name="shortDescription" class="form-control" id="shortDescription" cols="30" rows="10" placeholder="e.g Description here...."></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Upload Images</label>
                            <div class="input-images">
                                <input type="file" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
    </script>

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
                        console.log('Data ==>', data.data)
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
@endsection
