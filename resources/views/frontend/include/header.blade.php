<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('header/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="{{asset ('header/css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@500&display=swap" rel="stylesheet">

        {{-- faviicon on site --}}
    <link rel="icon" type="image/x-icon" href="{{asset('assets/book.png')}}">
    <!-- Font awesome 5 -->
    <link href="{{ asset('assets/fonts/css/fonts.css') }}" type="text/css" rel="stylesheet">
    {{-- animations link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

     <!-- alert msg -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <title>{{ env('company_name') }}</title>
 
    <style>

    </style>
</head>
@php
use App\Models\AddToCart;
@endphp

<body>
    @if (Session::has('success'))
    <script>
        swal("Thank you", "{{ Session::get('success') }}", "success", {
            button: "OK"
        });
    </script>
@endif
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="float-left">
                            <p>Phone: {{$setting->contact_no}}</p>
                            <p>email: {{$setting->email}}</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="float-right">
                            <ul class="right_side" style="cursor: pointer;">
                                <li>
                                    <a data-toggle="modal" data-target="#loginModal"> login </a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#registerModal"> register </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}"> Contact Us </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container-fluid px-5">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route('home') }}">
                        <img src="{{ asset('setting_img/' . $setting->logo) }}" alt="" style="width:100px; height:100px" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-8 col-md-8 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right ">
                                    <li class="nav-item">
                                        <a class="nav-link home" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle shop" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('products') }}">Our Products</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" href="single-product.html">Product Details</a>
                                            </li> --}}

                                            <li class="nav-item">
                                                @if (Auth::check())
                                                    <a class="nav-link" href="/cart" id="cart">Shopping
                                                        Cart</a>
                                                @else
                                                    <a class="nav-link" data-toggle="modal"
                                                        data-target="#loginModal">Shopping
                                                        Cart</a>
                                                @endif
                                            </li>


                                            <li class="nav-item">
                                                @if (Auth::check())
                                                    <a class="nav-link" href="/checkout">Product Checkout</a>
                                                @else
                                                    <a class="nav-link"data-toggle="modal"
                                                        data-target="#loginModal">Product Checkout</a>
                                                @endif
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link gallery" href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    {{-- <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link about" href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link contact" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="design_btn" href="{{ route('design') }}"
                                            style="font-family: 'Merienda', cursive;">
                                            <svg>
                                                <rect></rect>
                                            </svg>
                                            Design your Notebook
                                        </a>
                                        {{-- <a class="nav-link" href="#" style="border-bottom:1px dotted red;border-top:1px dotted red;">Design your Notebook</a> --}}
                                    </li>

                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-4 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">


                                    @if (!Auth::check())
                                        <li class="nav-item">
                                            <a data-toggle="modal" data-target="#loginModal" title="login"
                                                class="icons mb-2" title="wishlist">
                                                <i class="bi bi-person"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item submenu dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false"><i
                                                    class="bi bi-person mx-2"
                                                    style="font-size:20px;"></i>{{ auth::user()->name }}</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/profile">My Profile</a>
                                                </li>

                                                {{-- <li class="nav-item">
                                                     <a class="dropdown-item" href="{{route('wishlist.index')}}"><i
                                                class="fa-solid fa-heart text-primary"></i> Wishlists</a>
                                            </li> --}}

                                                <li class="nav-item">
                                                    <a class="nav-link" href="/orders">My
                                                        Order</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/logout-user">Logout</a>
                                                </li>

                                            </ul>
                                    @endif
                                    </li>

                                    {{-- <li class="nav-item m-1">


                                        <a href="#" class="icons my-2" title="profile">
                                            <i class="bi bi-person">Login</i>
                                        </a>
                                        @endif
                                    </li> --}}
                                    <li class="nav-item mob_modal">
                                        <a data-toggle="modal" data-target="#loginModal" title="login"
                                            class="icons mb-2">
                                            <i class="bi bi-person-bounding-box"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item mob_modal">
                                        <a data-toggle="modal" data-target="#registerModal" title="register"
                                            class="icons mb-2">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </li>

                                    {{-- <a href="" class="icons mb-2 position-relative" data-toggle="modal"
                                            data-target="#cart" title="cart">
                                            <i class="bi bi-bag"><span
                                                    class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger total-count"
                                                    style="top:11px;"></span></i>
                                        </a> --}}
                                    <li class="nav-item">
                                        @if (Auth::check())
                                            @php
                                                $user = Auth()->user();
                                                $cart = AddToCart::where('user_id', $user->id)
                                                    ->where('delete_status', 0)
                                                    ->count();
                                            @endphp
                                            <a href="/cart" id="cart" class="icons mb-2">
                                                <i class="bi bi-cart "></i> <span class="ms-1"><span class=""
                                                        style="color: blueviolet!important"
                                                        id="cart_count">({{ $cart }})</span> </span>
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#loginModal" class="icons mb-2">
                                                <i class="bi bi-cart"></i> <span class="ms-1"><span class=""
                                                        style="color: blueviolet!important">(0)</span> </span>
                                            </a>
                                        @endif
                                    </li>

                                    <li class="nav-item">
                                        @if (Auth::check())
                                            <a href="/wishlist" id="wishlist" class="icons mb-2" title="wishlist">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#loginModal" class="icons mb-2"
                                                title="wishlist">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        @endif
                                    </li>


                                    {{-- <li class="nav-item">
                                        <a href="#" class="icons">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    {{-- login/register modal --}}

    <!--login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border:none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body login_body">
                    <div class="login_title text-center">
                        <h1><span>Login</span></h1>
                    </div>
                    <form action="{{ route('login_confirm') }}" method="POST">
                        @csrf
                        <p style="text-align:center;">Please login to your account</p>
                        <div class="row justify-content-center">
                            <div class="form-outline mb-2 col-md-9">
                                <input type="email"  name="email" class="form-control"
                                    />
                                <label class="form-label">User email</label>
                            </div>

                            <div class="form-outline mb-2 col-md-9">
                                <input type="password" name="password" id="form2Example22" class="form-control" />
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="text-center pt-1 pb-1">
                            {{-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 col-md-4"
                                type="button">Log
                                in</button> --}}
                            <a class="text-muted forget_pswrd" href="#!">Forgot password?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Don't have an account?</p>
                            <button type="button" class="btn btn-outline-danger m-3" class="close"
                                data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Create
                                new</button>
                        </div>


                </div>
                <div class="modal-footer" style="border:none">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- register modal --}}
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border:none">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="login_title text-center">
                        <h1><span>Register</span></h1>
                    </div>
                    <form method="POST" action="{{ route('register_create') }}">
                        @csrf
                        <p style="text-align:center;">Lorem ipsum dolor sit amet.</p>
                        <div class="row justify-content-center ">
                            <div class="form-outline mb-2 col-9">
                                <input type="text" name="name"  class="form-control" />
                                <label class="form-label">Name</label>
                            </div>
                            <div class="form-outline mb-2 col-9">
                                <input type="email" name="email"  class="form-control" />
                                <label class="form-label">Email</label>
                            </div>

                            <div class="form-outline mb-2 col-9">
                                <input type="number" name="phone"  class="form-control" />
                                <label class="form-label">Contact no.</label>
                            </div>
                            <div class="form-outline mb-2 col-9">
                                <input type="password" name="password"  class="form-control" />
                                <label class="form-label">Password</label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Already have an account?</p>
                            {{-- <a class="btn btn-outline-danger m-3" data-toggle="modal" data-target="#loginModal">  </a> --}}

                            <button type="button" class="btn btn-outline-danger m-3" class="close"
                                data-dismiss="modal" data-toggle="modal" data-target="#loginModal">login</button>
                        </div>



                </div>
                <div class="modal-footer" style="border:none">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-outline-primary">Register</button>
                </div>
                </form>
            </div>
        </div>
    </div>
