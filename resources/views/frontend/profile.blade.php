@extends('frontend.include.main')
@section('content')
    <style>
        #profile {
            color: #e84f69;
        }

        a {
            color: #e84f69;
        }
        .alert-success{
            color: #fff;
            background-color: rgba(172, 49, 145, 0.74);
        }

        .button {
            width: 30%;
            /* top: 80%; */
            left: 70%;
            /* position: absolute; */
            justify-content: center;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #e84f69;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #e84f69;
        }
    </style>
       <!-- Custom css -->
       <link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- ============== SECTION PAGETOP ============== -->
    {{-- <section class="bg-danger padding-y-sm">
        <div class="container">

            <ol class="breadcrumb ondark mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Main Account</li>
            </ol>

        </div> <!-- container //  -->
    </section> --}}
    @if (Session::has('msg'))
        <div class="alert button alert-success alert-dismissible fade show  mt-2 mb-2" role="alert">
            {{ Session::get('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif


    <!-- ============== SECTION PAGETOP END// ============== -->

    <!-- ============== SECTION CONTENT ============== -->
    <section class="padding-y bg-light">
        <div class="container">

            <div class="row d-flex justify-content-center align-items-center">
                {{-- <aside class="col-lg-3 col-xl-3 card p-0" style="height: fit-content;">
                    <!--  COMPONENT MENU LIST  -->
                     <nav class="nav flex-lg-column nav-pills mb-4">
                        <a class="nav-link active" href="#">Account main</a>
                        <a class="nav-link" href="#">New orders</a>
                        <a class="nav-link" href="#">Orders history</a>
                        <a class="nav-link" href="#">My wishlist</a>
                        <a class="nav-link" href="#">Transactions</a>
                        <a class="nav-link" href="#">Profile setting</a>
                        <a class="nav-link" href="/logout-user">
                            {{-- {{ __('Logout') --} 
                            <i class="icon-logout"></i> Logout
                        </a>


                        {{-- <a class="nav-link" href="">Log out</a>
                    </nav> 
                    <!--   COMPONENT MENU LIST END .//   -->
                </aside> --}}
                <main class="col-lg-11  col-md-11">
                    <article class="card">
                        <div class="content-body">

                            <figure class="itemside align-items-center">
                                <div class="aside">
                                    <span class="bg-gray icon-md rounded-circle">
                                        <img src="https://i.pinimg.com/originals/3f/94/70/3f9470b34a8e3f526dbdb022f9f19cf7.jpg" style="width: 80px;height:80px;" class="icon-md rounded-circle">
                                    </span>
                                </div>
                                <figcaption class="info">
                                    <h6 class="title">{{ Auth::user()->name ?? null }}</h6>
                                    <p>Email: {{ Auth::user()->email ?? null }}
                                        <button class="mx-3 btn btn-danger" onclick="show_form()"><i
                                                class="bi bi-pencil-square"></i></button>
                                    </p>
                                </figcaption>
                            </figure>

                            <hr>

                            <div class="row g-2 mb-5">
                                <div class="col-md-6">
                                    <article class="box bg-light">
                                        <b class="mx-2 text-muted"><i class="bi bi-telephone"></i></b>
                                        Phone: {{ Auth::user()->phone }}
                                    </article>
                                </div>
                                <div class="col-md-6">
                                    <article class="box bg-light">
                                        <b class="mx-2 text-muted"><i class="bi bi-geo-alt"></i></b>
                                        {{ Auth::user()->address1 }}, {{ Auth::user()->city }}, {{ Auth::user()->zipcode }}
                                    </article>
                                </div>
                            </div> <!-- row.// -->

                            {{-- <a href="#" class="btn btn-light"> <i class="me-2 fa fa-plus"></i> Add new address </a> --}}

                            <hr class="my-4">
                            <div id="p_form">
                                <form action="{{ route('update_profile') }}" method="POST">
                                    @csrf
                                    @method('HEAD')
                                    <div class="row">
                                        <div class="col-12 mb-5">
                                         <label class="form-label">Name</label> 
                                            <input type="text" class="form-control" name="name"
                                                value="{{ Auth::user()->name }}" placeholder="name">
                                        </div> <!-- col end.// -->

                                        <div class="col-6">
                                            <label class="form-label">Email</label> 
                                            <input type="email" name="email" value="{{ Auth::user()->email }}"
                                                class="form-control" placeholder="email">
                                        </div> <!-- col end.// -->

                                        <div class="col-6 mb-5">
                                           <label class="form-label">Phone</label> 
                                            <input type="text" name="phone" value="{{ Auth::user()->phone }}"
                                                class="form-control" placeholder="contact no.">
                                        </div> <!-- col end.// -->

                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-5">
                                           <label for="" class="form-label">Address-1</label> 
                                            <input type="text" name="first_address" value="{{ Auth::user()->address1 }}"
                                                class="form-control" placeholder="Address">
                                        </div>
                                        <div class="col-6 mb-5">
                                           <label for="" class="form-label">City*</label> 
                                            <input type="text" name="city" value="{{ Auth::user()->city }}"
                                                class="form-control" placeholder="City name">
                                        </div>
                                        <div class="col-6 mb-5">
                                            <label for="" class="form-label">Postal Code*</label> 
                                            <input type="text" name="pcode" value="{{ Auth::user()->zipcode }}"
                                                class="form-control" placeholder="zipcode">
                                        </div>
                                    </div>
                                    <button type="submit" onclick="hide_form()" class="btn btn-primary">Save
                                        Changes</button>

                                </form>
                            </div>


                        </div> <!-- card-body .// -->
                    </article> <!-- card .// -->
                </main>
            </div> <!-- row.// -->

            <br><br>


        </div> <!-- container .//  -->
    </section>
    <!-- ============== SECTION CONTENT END// ============== -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#p_form").hide();
    });

    function show_form() {
        $("#p_form").show();
    }

    function hide_form() {
        $("#p_form").hide();
    }
</script>
