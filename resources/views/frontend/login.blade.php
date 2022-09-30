
@extends('frontend.include.main')
@section('content')
<style>
    #login{
      color: #0d6efd;
    }
  </style>
  {{-- @if(Session::has("msg")){
    echo "hiii";
  }
  @endif --}}
<section class="bg-primary padding-y-sm">
    <div class="container">
        <ol class="breadcrumb ondark mb-0">
            <li class="breadcrumb-item"> <a href="{{route('home')}}">Home</a> </li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
    </div> <!-- container //  -->
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    /* Reseting */
    #wewe * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    #wewe body {
        background: #ecf0f3;
    }

    #wewe .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }

    #wewe .logo {
        width: 80px;
        margin: auto;
    }

    #wewe .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
    }

    #wewe .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555;
    }

    #wewe .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 0.8rem;
        color: #666;
        padding: 10px 15px 10px 10px;
        /* border: 1px solid red; */
    }

    #wewe .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }

    #wewe .wrapper .form-field .fas {
        color: #555;
    }

    #wewe .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1,
            -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }

    #wewe .wrapper .btn:hover {
        background-color: #039BE5;
    }

    #wewe .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4;
    }

    #wewe .wrapper a:hover {
        color: #039BE5;
    }

    @media(max-width: 380px) {
        #wewe .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px;
        }
    }

    i {
        font-family: "Font Awesome 5 Free" !important;
    }
</style>
<section id="wewe">
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login
        </div>
        <form class="p-3 mt-3" action="{{route('login_confirm')}}" method="POST">
            @csrf
            <div class="form-field d-flex align-items-center">
                <i class="fa fa-user"></i>
                <input type="text" name="userName" autocomplete="off" id="userName" placeholder="Email or Phone">
            </div>
            <div class="form-field d-flex align-items-center">
                <i class="fa fa-key"></i>
                <input type="password" name="password" id="id_password" placeholder="Password">
                <i class="far fa-eye" id="togglePassword" onclick="chaange_pasd" style="margin-left: -50px; cursor: pointer;"></i>
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="/forget-password">Forget password?</a> or <a href="{{route('register')}}">Sign up</a>
        </div>
    </div>
</section>
@endsection