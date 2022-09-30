<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	{{-- <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" /> --}}
	<!--plugins-->
	<link href="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
    {{-- Fontwasome --}}
    <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
    <!-- summernote -->
<link rel="stylesheet" href="{{asset ('backend/plugins/summernote/summernote-bs4.min.css')}}">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/assets/css/header-colors.css')}}" />
	<title>{{ env('company_name') }} | Admin Dashboard</title>
</head>

<style>
     .logo-text {
            font-size: 22px;
            font-family: 'Tangerine', cursive;
            margin-left: 10px;
            margin-bottom: 0;
            letter-spacing: 1px;
            color: #e84f69;
        }
</style>
<body>
    @include('backend.include.sidebar')
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        {{-- <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span> --}}
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                       
                       
                        <li class="nav-item dropdown dropdown-large">
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="header-notifications-list">
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="header-message-list">	
                              </div>
                            </div>
                        </li>
                         <!-- window screen -->
                 
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       
                       <i class="fa-solid fa-user-large"></i> {{-- <img src="{{asset('backend/assets/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar"> --}}
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{auth::user()->name}}</p>
                            {{-- <p class="designattion mb-0">Web Designer</p> --}}
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li><a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="fa-solid fa-maximize"></i>
                             </a>
                        </li> --}}
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                        </li>
                        {{-- <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                        </li> --}}
                            <div class="dropdown-divider mb-0"></div>
                        </li><a class="dropdown-item" href="/logout">
                         {{-- {{ __('Logout') }} --}}
                         <i class='bx bx-log-out-circle'></i>Logout
                     </a>

                     
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>