@extends('admin.index')
@section('title', 'Top Category')

@section('custom-style')
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0 mb-4">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2 mr-3">Add Top Category</h4>
                <span>Total 3 categories can be active at a time.</span>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mg-b-1 text-md-nowrap">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Category</th>
                            <th>Top Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($categories as  $key => $item)

                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @if ($item->is_top_category == 1)
                                        <span class="badge bg-label-success"> Selected </span>
                                    @else
                                        <span class="badge bg-label-danger"> Not Selected </span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->is_top_category == 0)
                                        <button class="btn btn-sm btn-primary category-select-btn" data-id="{{$item->id}}" data-value='1'>Set As Top Category</button>
                                    @else
                                        <button class="btn btn-sm btn-danger category-select-btn" data-id="{{$item->id}}" data-value='0'>Remove From Top Category</button>
                                    @endif
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
@endsection

@section('custom-scripts')
    <script>
        $('.category-select-btn').on('click', function(e) {
            e.preventDefault();

            $(this).text('Please wait...')
            $(this).attr('disabled', true)

            const category_id = $(this).data().id;
            const is_top_category = $(this).data().value;

            $.ajax({
                url: "{{ route('admin.top.category') }}",
                type: "POST",
                data: {
                    'category_id' : category_id,
                    '_token' : "{!!csrf_token()!!}",
                    'is_top_category' : is_top_category
                },
                success: function(data) {
                    if (data.status == 200) {
                        toastr.success(data.message)
                        window.location.reload(true);
                    } else {
                        toastr.error(data.message)
                        window.location.reload(true);
                    }
                },
                error: function(err) {
                    toastr.error(err.responseJSON.message)
                    window.location.reload(true);
                }

            });
        });
    </script>
@endsection
