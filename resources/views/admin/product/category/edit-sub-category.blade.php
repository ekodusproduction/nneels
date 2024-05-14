@extends('admin.index')
@section('title', 'Edit Sub Category')

@section('custom-style')
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0 mb-4">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Edit Sub Category</h4>
            </div>
        </div>
        <div class="card-body">
            <form id="editSubCategoryForm">
                @csrf

                <div class="form-group mb-2">
                    <label for="" class="form-label">Select Parent Category</label>
                    <select name="categories_id" class="form-control" required>
                        <option value="{{$selected_sub_category->categories->id}}">{{$selected_sub_category->categories->name}}</option>
                        @forelse ($main_categories as $key => $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option value="">No Categories Found!</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Sub-Category Name</label>
                    <input type="text" class="form-control" name="subCategoryName" value="{{$selected_sub_category->name}}" placeholder="e.g Men's Boots" required>
                </div>
                <div class="form-group mt-3">
                    <button class="btn ripple btn-success sub-category-submit-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $('#editSubCategoryForm').on('submit', function(e) {
            e.preventDefault();

            $('.sub-category-submit-btn').text('Please wait...');
            $('.sub-category-submit-btn').attr('disabled', true);

            const formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.edit.sub.category', [ 'id' => encrypt($selected_sub_category->id)]) }}",
                type: "POST",
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    if (data.status == 200) {
                        toastr.success(data.message)
                        $('.sub-category-submit-btn').text('Submit');
                        $('.sub-category-submit-btn').attr('disabled', false);
                        window.location.reload(true)
                    } else {
                        toastr.error(data.message)
                        $('.sub-category-submit-btn').text('Submit');
                        $('.sub-category-submit-btn').attr('disabled', false);
                    }
                },
                error: function(err) {
                    toastr.error(err.responseJSON.message)
                    $('.sub-category-submit-btn').text('Submit');
                    $('.sub-category-submit-btn').attr('disabled', false);
                }
            });
        });
    </script>
@endsection
