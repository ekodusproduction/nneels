@extends('admin.index')
@section('title', 'Category')

@section('custom-styles')
@endsection

@section('content')
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Category</h4>
                <button class="btn btn-md btn-success">Add Category</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mg-b-1 text-md-nowrap">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Category</th>
                            <th>Total Products Linked</th>
                            <th>Status</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Joan Powell</td>
                            <td>12</td>
                            <td>
                                @if (true)
                                    <span class="badge badge-success"> Active </span>
                                @else
                                    <span class="badge badge-danger"> Inactive </span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm ripple btn-primary"
                                    data-toggle="dropdown" id="dropdownMenuButton" type="button">Action <i class="fas fa-caret-down ml-1"></i></button>
                                    <div  class="dropdown-menu tx-13">
                                        @if (true)
                                            <a class="dropdown-item" href="#">Deactivate</a>
                                        @else
                                            <a class="dropdown-item" href="#">Activate</a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
@endsection
