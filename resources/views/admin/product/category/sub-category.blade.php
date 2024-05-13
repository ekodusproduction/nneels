@extends('admin.index')
@section('title', 'Add Sub Category')

@section('custom-style')
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0 mb-4">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Sub Category</h4>
                <button class="btn btn-sm btn-primary ripple" type="button" data-bs-target="#addSubCategoryModal"
                    data-bs-toggle="modal">Add Sub Category</button>
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
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <span class="badge bg-label-secondary mb-2">{{ $item->categories->name }}</span>
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
                                                <a class="dropdown-item text-secondary" href="javascript:void(0);">Deactivate</a>
                                            @else
                                                <a class="dropdown-item text-success" href="javascript:void(0);">Activate</a>
                                            @endif
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-warning" href="javascript:void(0);">Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
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


    <div class="modal fade" id="addSubCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSubCategoryModalTitle">Add Sub-Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addSubCategoryForm">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Select Parent Category</label>
                            <select name="categories_id" class="form-control" required>
                                <option value="">- select -</option>
                                @forelse ($main_categories as $key => $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">No Categories Found!</option>
                                @endforelse

                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Sub-Category Name</label>
                            <input type="text" class="form-control" name="subCategoryName" placeholder="e.g Men's Boots"
                                required>
                        </div>
                        <div class="form-group mt-3">
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
        $('#addSubCategoryForm').on('submit', function(e) {
            e.preventDefault();

            $('.sub-category-submit-btn').text('Please wait...');
            $('.sub-category-submit-btn').attr('disabled', true);

            const formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.create.sub.category') }}",
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
