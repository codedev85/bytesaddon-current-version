<!-- Page Sidebar Start-->
<header class="main-nav">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{asset('/assets-admin/images/logo/logo.png"')}}" alt=""><img class="img-fluid for-dark" src="{{asset('/assets-admin/images/logo/logo_dark.png')}}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('/assets-admin/images/logo/logo-icon.png')}}" alt=""></a></div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{asset('/assets-admin/images/logo/logo-icon.png')}}" alt=""></a>
                        <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-title">
                        <div>
                            <h6 >Dashboard</h6>
                            <p >Dashboards,Admin Access</p>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="home"></i><span >Dashboard</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a  href="{{url('/dashboard')}}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="airplay"></i><span>Category</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{url('category/index')}}">All Category</a></li>
                            <li><a href="{{url('/add/category')}}">Add Category</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="film"></i><span>Sub Category</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{url('/sub-category/index')}}">All SubCategory</a></li>
                            <li><a href="{{url('add/sub-category')}}">Add SubCategory</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="layout"></i><span >Product</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{url('/all/products')}}">All Product</a></li>
                            <li><a href="{{url('/add/product')}}">Add Product</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        <div>
                            <h6>Order Details</h6>
                            <p >All Orders from the clients</p>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="box"></i><span>Orders</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{url('/list/orders')}}">All Orders</a></li>
                            <li><a href="projectcreate.html">Delivered</a></li>
                            <li><a href="projectcreate.html">Pending</a></li>
                            <li><a href="projectcreate.html">Rejected</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-title">
                        <div>
                            <h6>Administrator</h6>
                            <p>Add admin</p>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="image"></i><span>Admin</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="gallery.html">All Admin</a></li>
                            <li><a href="gallery-with-description.html">Add Admin</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<!-- Page Sidebar Ends-->
