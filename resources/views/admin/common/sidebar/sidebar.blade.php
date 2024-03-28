<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="main-sidebar app-sidebar sidebar-scroll">
    <div class="main-sidebar-header">
        <a class="desktop-logo logo-light active" href="#" class="text-center mx-auto">
            <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" class="main-logo">
        </a>
        <a class="desktop-logo icon-logo active"href="#">
            <img src="{{asset('assets/images/nneels-favicon.png')}}" class="logo-icon">
        </a>
        <a class="desktop-logo logo-dark active" href="#">
            <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" class="main-logo dark-theme" alt="logo">
        </a>
        <a class="logo-icon mobile-logo icon-dark active" href="#">
            <img src="{{asset('assets/images/nneels-favicon.png')}}" class="logo-icon dark-theme" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-loggedin">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{asset('admin/assets/img/faces/6.jpg')}}" alt="user-img" class="rounded-circle mCS_img_loaded">
                </div>
                <div class="user-info">
                    <h6 class=" mb-0 text-dark">Nneel's</h6>
                    <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                </div>
            </div>
        </div>
    </div><!-- /user -->
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Settings" aria-describedby="tooltip365540">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-settings"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-mail"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Followers">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-user"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-power"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-sidebar-body">
        <ul class="side-menu ">
            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.dashboard')}}">
                    <i class="side-menu__icon fe fe-airplay"></i>
                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="side-menu__icon fe fe-box"></i>
                    <span class="side-menu__label">Products</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu">
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide" href="index-2.html#">
                            <span class="sub-side-menu__label">Category</span>
                            <i class="sub-angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{ route('admin.category') }}">Main Category</a></li>
                            <li><a class="sub-slide-item" href="{{route('admin.create.item')}}">Sub Category</a></li>
                        </ul>
                    </li>
                    {{-- <li><a class="slide-item" href="">Category</a></li>
                    <li><a class="slide-item" href="">Create</a></li> --}}
                </ul>
            </li>

        </ul>
    </div>
</aside>
