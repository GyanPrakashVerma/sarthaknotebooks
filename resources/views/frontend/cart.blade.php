@extends('frontend.include.main')
@section('content')
    <style>
        #cart {
            color: #d14dbf;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        

        @media (max-width:768px) {
            .cart-header {
                margin: 10px !important;
                
            }

            .cart-header .card-title {
                font-size: 23px !important;
                text-align: center;
            }

            .cart-header .continue_btn {
                margin: 10px !important;
                width: 100% !important;
                float: none !important;
            }

            .cart_card {
                margin: 10px !important;
            }
        }
    </style>
        <!-- Custom css -->
        <link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    

    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show  mt-2 mb-2" style="justify-content:end;" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
    @endif

    @php
    use App\Models\Product;
    @endphp
    {{-- @if ($cart == null) --}}
    <section class="padding-y " style="background-color: #cea9f16b">
        <div class="container">
            <!-- =================== COMPONENT CART+SUMMARY ====================== -->
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-11">

                    <div class="card cart_card m-3">
                        <div class="content-body cart-header ">
                            <a href="{{ route('products') }}"
                            class="col-md-3 my-3 col-11 btn btn-outline-dark w-100 continue_btn"
                            style="float: right">Continue
                            Shopping </a>
                            <h4 class="card-title my-4 mx-5">Your Shopping cart</h4>
                           
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cart as $carts)
                                <article class="row  mb-4 d-flex justify-content-center align-items-center">

                                    <div class="col-md-3">
                                        <figure class="itemside me-lg-5">
                                            <div class="aside"><img src="{{ asset('main_products/' . $carts->p_mainimg) }}"
                                                    class="img-sm img-thumbnail"></div>
                                            <figcaption class="">

                                                <a href="#" class="title mx-3 pt-3"
                                                    style="font-weight: 400; color:black;font-size:17px">{{ $carts->p_name }}</a>
                                                {{-- <p class="text-muted"> Yellow, Jeans </p> --}}
                                              
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="{{ route('cart.update', $carts->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            {{-- <label class="form-label d-block">Quantity</label> --}}
                                            <div class="input-group input-spinner">
                                                <button class="btn btn-gray " type="button" id="button-minus"
                                                    onclick="decreaseValue(this)"> − </button>
                                                <input style="width:100px" type="number" name="quantity" class="form-control"
                                                    value="{{ $carts->quantity }}">
                                                <button class="btn btn-gray" type="button" id="button-plus"
                                                    onclick="increaseValue(this)"> + </button>
                                                <button type="submit" class="btn btn-outline-primary text-dark mx-2"><i
                                                        class="bi bi-arrow-clockwise"></i></button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price-wrap lh-sm">
                                            <var class="price  text-dark"><i class="fa-solid fa-indian-rupee-sign"
                                                    style="font-size: 16px;!important"></i>
                                                {{ $carts->p_price }} / per item</var> <br>
                                            {{-- <small class="text-muted"> $460.00 / per item </small> --}}
                                        </div> <!-- price-wrap .// -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="float-lg-end d-flex gap-2">

                                            <form action="{{ route('cart.destroy', $carts->id) }}" method="POST">
                                                @csrf
                                                @method('Delete')

                                                <button type="submit" class="btn btn-light text-danger"> <i class="bi bi-x"
                                                        style="font-size:22px;"></i></button>
                                            </form>
                                        </div>
                                    </div>

                                </article>
                                @php
                                    $total += $carts->p_price * $carts->quantity;
                                @endphp
                            @endforeach
                            <form action="{{ route('delcarts') }}" method="POST">
                                @csrf
                                @if($total>0)
                                <button type="submit" class=" mx-2 btn btn-danger text-light" id="hide"
                                    onclick="hide_btn()">
                                    Clear Cart</button>
                                    @endif
                            </form>


                            <aside class="col-lg-12">

                                {{-- <div class="card mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="form-label">Have coupon?</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="" placeholder="Coupon code">
                                                <button class="btn btn-light">Apply</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- card-body.// -->
                            </div> <!-- card.// --> --}}
                                <hr>
                                <div class="card my-2" style="border: none;">
                                    <div class="card-body row">
                                        <div class="col-md-6">
                                            <h3 class="text-info h6">Total: <span class="text-dark"
                                                    style="font-size: 17px"><i
                                                        class="bi bi-currency-rupee"></i>{{ $total }}</span></h3>
                                        </div>
                                        {{-- <dl class="dlist-align">
                                            <dd class="text-dark h5">Total:-</dd>
                                            <dd class="text-end text-dark h5">  </dd>
                                        </dl> --}}
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                @if ($total > 0)
                                                    <a href="/checkout" style="float: right!important;"
                                                        class="col-md-5 btn btn-outline-success w-100 my-2">Order Place
                                                    </a>
                                                    {{-- @else
                                                <a href="/checkout" class="btn btn-success w-100" disabled> Make Purchase </a> --}}
                                                @endif

                                            </div>
                                        </div>

                                    </div> <!-- card-body.// -->
                                </div> <!-- card.// -->

                            </aside> <!-- col.// -->
                        </div> <!-- card-body .// -->

                        {{-- <div class="content-body border-top">
                            <p><i class="me-2 text-muted fa-lg fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        </div> <!-- card-body.// --> --}}

                    </div> <!-- card.// -->

                </div> <!-- col.// -->
            </div>
            <!-- row.// -->
            <!-- =================== COMPONENT 1 CART+SUMMARY .//END  ====================== -->

            <br><br>

        </div> <!-- container .//  -->
    </section>
    {{-- @endif --}}

    <!-- ============== SECTION  ============== -->
    {{-- <section class="padding-y border-top">
        <div class="container">
            <header class="section-heading">
                <h4 class="section-title">Recommended items</h4>
            </header>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <span class="topbar">
                                <a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
                                <span class="badge bg-danger"> New </span>
                            </span>
                            <a href="#"><img src="assets/images/items/7.jpg"></a>
                        </div>
                        <figcaption class="info-wrap border-top">
                            <a href="#" class="title">Gaming Headset with Mic</a>
                            <div class="price-wrap mb-3">
                                <strong class="price">$18.95</strong>
                                <del class="price-old">$24.99</del>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <span class="topbar">
                                <a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
                            </span>
                            <a href="#"><img src="assets/images/items/8.jpg"></a>
                        </div>
                        <figcaption class="info-wrap border-top">
                            <a href="#" class="title">Apple Watch Series 1 Sport </a>
                            <div class="price-wrap mb-3">
                                <strong class="price">$120.00</strong>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <span class="topbar">
                                <a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
                            </span>
                            <a href="#"><img src="assets/images/items/9.jpg"></a>
                        </div>
                        <figcaption class="info-wrap border-top">
                            <a href="#" class="title"> Men's Denim Jeans Shorts </a>
                            <div class="price-wrap mb-3">
                                <strong class="price">$80.50</strong>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <span class="topbar">
                                <a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
                            </span>
                            <a href="#"><img src="assets/images/items/10.jpg"></a>
                        </div>
                        <figcaption class="info-wrap border-top">
                            <a href="#" class="title text-truncate">Mens T-shirt Cotton Base Layer Slim fit </a>
                            <div class="price-wrap mb-3">
                                <strong class="price">$13.90</strong>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section> --}}
    <!-- ============== SECTION END// ============== -->
@endsection
<script>
    function hide_btn() {
        // document.getElementById("hide").style.display = "none";
    }
</script>
