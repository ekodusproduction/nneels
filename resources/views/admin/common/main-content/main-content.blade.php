<div class="main-content">

    @include('admin.common.header.header')

    <div class="container-fluid">
        
        @include('admin.common.breadcrumb.breadcrumb')
        

        <div class="main-content-body">
            @yield('content')
        </div>
    </div>
</div>