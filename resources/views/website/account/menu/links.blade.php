<ul class="account-nav">
    <li><a href="{{route('website.account.myaccount')}}" class={{ Request::segment(3) == 'my-account' ? 'menu-link menu-link_us-s menu-link_active' : 'menu-link menu-link_us-s'}}>Dashboard</a></li>
    <li><a href="{{route('website.account.myorders')}}" class="{{ Request::segment(3) == 'my-orders' ? 'menu-link menu-link_us-s menu-link_active' : 'menu-link menu-link_us-s'}}">Orders</a></li>
    <li><a href="{{route('website.account.myAddress')}}" class="{{ Request::segment(3) == 'my-address' ? 'menu-link menu-link_us-s menu-link_active' : 'menu-link menu-link_us-s'}}">Addresses</a></li>
    <li><a href="{{route('website.account.details')}}" class="{{ Request::segment(3) == 'details' ? 'menu-link menu-link_us-s menu-link_active' : 'menu-link menu-link_us-s'}}">Account Details</a></li>
    <li><a href="{{route('website.account.wishlist')}}" class="{{ Request::segment(3) == 'wishlist' ? 'menu-link menu-link_us-s menu-link_active' : 'menu-link menu-link_us-s'}}">Wishlist</a></li>
    <li><a href="{{route('website.account.logout')}}" class="{{ Request::segment(3) == 'logout' ? 'menu-link menu-link_us-s menu-link_active' : 'menu-link menu-link_us-s'}}">Logout</a></li>
</ul>