<!--sidebar wrapper -->
<div class="wrapper">

    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{ asset('images/logo_img.jpg') }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">{{ env('company_name') }}</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li {{ Request::is('admin/dashboard') ? 'active' : '' }}>
                <a href="/admin/dashboard">
                    <div class="parent-icon"><i class="bx bx-home-circle"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li {{ Request::is('admin/category') ? 'active' : '' }}>
                <a href="{{ route('category.index') }}">
                    <div class="parent-icon"><i class="fa-solid fa-list"></i>
                    </div>
                    <div class="menu-title">Category</div>
                </a>
            </li>
    
            <li {{ Request::is('admin/top_product') ? 'active' : '' }}>
                <a href="{{ route('top_product') }}">
                    <div class="parent-icon"><i class="fa fa-bullhorn"></i>
                    </div>
                    <div class="menu-title">Top Products</div>
                </a>
            </li>
    
            {{-- <li class="menu-label">UI Elements</li> --}}
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cart'></i>
                    </div>
                    <div class="menu-title">Products</div>
                </a>
                <ul>
                    <li {{ Request::is('admin/product') ? 'active' : '' }}> <a href="{{ route('product.index') }}"><i
                                class="bx bx-right-arrow-alt"></i>Products</a>
                    </li>
                    <li {{ Request::is('admin/product/create') ? 'active' : '' }}> <a
                            href="{{ route('product.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
                    </li>
                    {{-- <li {{Request::is('admin/user')? 'active' : "";}}> <a href="{{route('custo_order')}}"><i class="bx bx-right-arrow-alt"></i>Orders</a> --}}
                </ul>
            </li>
    
            <li {{ Request::is('admin/gallery') ? 'active' : '' }}>
                <a href="{{ route('gallery.index') }}">
                    <div class="parent-icon"><i class="fa-solid fa-image"></i>
                    </div>
                    <div class="menu-title">Gallery</div>
                </a>
            </li>
    
            <li {{ Request::is('admin/order') ? 'active' : '' }}>
                <a href="{{ route('custo_order') }}">
                    <div class="parent-icon"><i class="fa-solid fa-shopping-cart"></i>
                    </div>
                    <div class="menu-title">Orders</div>
                </a>
            </li>
    
            <li {{ Request::is('admin/testimonial') ? 'active' : '' }}>
                <a href="{{ route('testimonial.index') }}">
                    <div class="parent-icon"><i class="fa fa-comments-o"></i>
                    </div>
                    <div class="menu-title">Feedback</div>
                </a>
            </li>
    
            <li {{ Request::is('admin/enquiry') ? 'active' : '' }}>
                <a href="{{ route('enquiry.index') }}">
                    <div class="parent-icon"><i class="fa-solid fa-address-book"></i>
                    </div>
                    <div class="menu-title">Contacts</div>
                </a>
            </li>
    
    
            <li {{ Request::is('admin/user') ? 'active' : '' }}>
                <a href="{{ route('user.index') }}">
                    <div class="parent-icon"><i class='bx bxs-group'></i>
                    </div>
                    <div class="menu-title">Customers</div>
                </a>
            </li>
            <li {{ Request::is('admin/subscribe') ? 'active' : '' }}>
                <a href="{{ route('subscribe.index') }}">
                    <div class="parent-icon"><i class="fa-solid fa-thumbs-up"></i>
                    </div>
                    <div class="menu-title">Subscribers</div>
                </a>
            </li>
            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-panorama"></i>
                    </div>
                    <div class="menu-title">Offers</div>
                </a>
                <ul>
                    <li {{Request::is('admin/banner')? 'active' : "";}}> <a href="/admin/banner_edit/1"><i class="bx bx-right-arrow-alt"></i>Banner Offer</a>
                    </li>
                    <li {{Request::is('admin/dashboard')? 'active' : "";}}> <a href="#"><i class="bx bx-right-arrow-alt"></i>Section Offer </a>
                    </li>
                    <li {{Request::is('admin/dashboard')? 'active' : "";}}> <a href="#"><i class="bx bx-right-arrow-alt"></i>Grid Offers</a>
                    </li>
                </ul>
            </li> --}}
            <li {{ Request::is('admin/setting') ? 'active' : '' }}>
                <a href="/admin/setting/1/edit">
                    <div class="parent-icon"><i class="fa-solid fa-wrench"></i>
                    </div>
                    <div class="menu-title">Setting</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    
    <!--end sidebar wrapper -->
    