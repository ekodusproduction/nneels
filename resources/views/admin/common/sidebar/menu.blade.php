<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mb-3">
        <a href="{{route('admin.dashboard')}}" class="app-brand-link">
            <img src="{{asset('admin/assets/logo/nneels-updated-logo.jpg')}}" alt="Nneels Logo" height="100">

            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: capitalize;">NNEEL'S</span> --}}
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{Request::segment(2) == 'dashboard' ? 'active' : ''}}">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{Request::segment(2) == 'banner' ? 'active' : ''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div data-i18n="product">Banner</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{Request::segment(2) == 'banner' ? 'active' : ''}}">
                    <a href="{{ route('admin.get.banner') }}" class="menu-link">
                        <div data-i18n="banner">Create</div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="menu-item {{Request::segment(2) == 'products' ? 'active' : ''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="product">Products</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{Request::segment(3) == 'category' ? 'active' : ''}}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxl-dropbox"></i>
                        <div data-i18n="product">Category</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.category') }}" class="menu-link">
                                <div data-i18n="Without navbar">Main Category</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('admin.fetch.sub.category')}}" class="menu-link">
                                <div data-i18n="Without navbar">Sub Category</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('admin.top.category')}}" class="menu-link">
                                <div data-i18n="Without navbar">List Top Categories</div>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu-item {{Request::segment(3) == 'create' ? 'active' : ''}}">
                    <a href="{{ route('admin.create.product') }}" class="menu-link">
                        <div data-i18n="Container">Create Product</div>
                    </a>
                </li>
                <li class="menu-item {{Request::segment(3) == 'view' ? 'active' : ''}}">
                    <a href="{{ route('admin.view.product.list') }}" class="menu-link">
                        <div data-i18n="Fluid">All Products</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>