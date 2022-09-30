@extends('frontend.include.main')
@section('content')
    <style>
        #checkout {
            color: #0d6efd;
        }

        .razorpay-payment-button {
            display: none;
        }

        .float-end {
            float: right !important;
        }
    </style>

    <!-- Custom css -->
    <link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- ============== SECTION PAGETOP ============== -->
    {{-- <section class="bg-primary padding-y-sm">
        <div class="container">
            <ol class="breadcrumb ondark steps">
                <li class="breadcrumb-item"> <a href="{{ route('home') }}">1. Home</a> </li>
                <li class="breadcrumb-item"> <a href="{{ route('cart.index') }}">2. Shopping cart</a> </li>
                <li class="breadcrumb-item active"> 3. Order info </li>
                <li class="breadcrumb-item"> 4. Payment </li>
            </ol>
        </div> <!-- container //  -->
    </section> --}}
    <!-- ============== SECTION PAGETOP END// ============== -->

    @php
    $total = 0;
    $qty = 0;
    @endphp

    <!-- ============== SECTION ============== -->
    <section class="padding-y bg-light">
        <div class="container">
            <div class="row">
                <aside class="col-xl-4 col-lg-4">

                    <!-- ============== COMPONENT SUMMARY =============== -->
                    <article class="ms-lg-4 mt-4 mt-lg-0">
                        <h6 class="mb-4 card-title">Items in cart</h6>
                        <hr>
                        @foreach ($cart as $carts)
                            <figure class="itemside  mb-4">
                                <div class="aside">
                                    <b class="badge bg-secondary rounded-pill"
                                        style="color:black;background-color: #e48ef1 !important;">
                                        {{ $carts->quantity }}</b>
                                    <img src="{{ asset('main_products/' . $carts->p_mainimg) }}"
                                        class="img-sm rounded border">
                                </div>
                                <figcaption class="info">
                                    <a href="#" class="title">{{ $carts->p_name }} <br> </a>
                                    <div class="price text-muted">Total: Rs.{{ $carts->p_price }}</div> <!-- price .// -->
                                </figcaption>
                            </figure>
                            @php
                                $total += $carts->p_price * $carts->quantity;
                                $qty += $carts->quantity;
                            @endphp
                        @endforeach
                        <h6 class="card-title">Summary</h6>

                        {{-- <dl class="dlist-align">
				  <dt>Total price:</dt>
				  <dd class="text-end"> $195.90</dd>
				</dl>
				<dl class="dlist-align">
				  <dt>Discount:</dt>
				  <dd class="text-end text-danger"> - $60.00 </dd>
				</dl> --}}
                        <dl class="dlist-align">
                            <dt class="text-end"><b>Qunatity</b></dt>
                            <dd class=" ">Qty.{{ $qty }}</dd>
                        </dl>
                        <hr>
                        <dl class="dlist-align">
                            <dt class="text-end"><b> Total Amount:</b> </dt>
                            <dd class="text-end"> Rs.{{ $total }} </dd>
                        </dl>

                        {{-- <div class="input-group my-4">
                            <input type="text" class="form-control" name="" placeholder="Promo code">
                            <button class="btn btn-light text-primary">Apply</button>
                        </div> --}}

                        <hr>




                    </article>
                    <!-- ============== COMPONENT SUMMARY .// =============== -->
                </aside>
                <main class="col-xl-8 col-lg-8">
                    {{-- <article class="card mb-4">
                        <div class="content-body">
                            <div class="float-end">
                                <a data-toggle="modal" data-target="#registerModal"
                                    class="btn btn-outline-primary">Register</a>
                                <a data-toggle="modal" data-target="#loginModal" class="btn btn-outline-primary">Login</a>
                            </div>
                            <h6 class="card-title">Have an account?</h6>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </article> --}}

                    <!-- ============== COMPONENT CHECKOUT =============== -->
                    <article class="card">
                        <form action="{{ route('order_checkout') }}" id="rrr" method="POST">
                            @csrf
                            <div class="content-body">
                                <h5 class="card-title"> Guest checkout </h5>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ Auth::user()->name }}" placeholder="Enter name">
                                    </div> <!-- col end.// -->

                                    <div class="col-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" id="email"
                                            value="{{ Auth::user()->email }}" class="form-control" placeholder="Enter name">
                                    </div> <!-- col end.// -->

                                    <div class="col-6 mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone"
                                            id="contact"value="{{ Auth::user()->phone }}" class="form-control"
                                            placeholder="">
                                    </div> <!-- col end.// -->

                                </div> <!-- row.// -->


                                <hr class="my-4">

                                <h5 class="card-title"> Shipping info </h5>

                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="" class="form-label">Address-1</label>
                                        <input type="text" name="first_address" value="{{ Auth::user()->address1 }}"
                                            class="form-control" placeholder="Enter address" required>
                                    </div> <!-- col end.// -->
                                    <div class="col-12 mb-3">
                                        <label for="" class="form-label">Address-2</label>
                                        <input type="text" name="second_address" value="{{ Auth::user()->address2 }}"
                                            class="form-control" placeholder="Enter second address" required>
                                    </div> <!-- col end.// -->

                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">City*</label>
                                        <input type="text" name="city" value="{{ Auth::user()->city }}"
                                            class="form-control" placeholder="Enter city" required>
                                    </div> <!-- col end.// -->
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">State*</label>
                                        <input type="text" name="state" value="{{ Auth::user()->state }}"
                                            class="form-control" placeholder="Enter state" required>
                                    </div> <!-- col end.// -->
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">Country*</label>
                                        <input type="text" name="country" value="{{ Auth::user()->country }}"
                                            class="form-control" placeholder="Enter country" required>
                                    </div> <!-- col end.// -->
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">Postal Code*</label>
                                        <input type="text" name="pcode" value="{{ Auth::user()->zipcode }}"
                                            class="form-control" placeholder="Enter pincode" required>
                                    </div> <!-- col end.// -->

                                    <!-- col end.// -->
                                </div> <!-- row.// -->
                                <input type="hidden" name="total" value="{{ $total }}">
                                <div class="mb-4">
                                    <label for="" class="form-label">Message to seller</label>
                                    <textarea class="form-control" name="message" placeholder="write message">{{ Auth::user()->message }}</textarea>
                                </div> <!-- col end.// -->

                                <div class="float-end pb-3">

                                    <button type="submit"  class="btn btn-warning">Cash on Delivery</button>

                                    <button type="button" class="btn btn-success"
                                        onclick="return pay()">Pay Online</button>
                                </div>
                            </div>
                            <script id="payement_script"></script>
                        </form> <!-- card-body end.// -->
                    </article> <!-- card end.// -->
                    <!-- ============== COMPONENT CHECKOUT .// =============== -->

                </main> <!-- col.// -->
            </div> <!-- row.// -->

            <br><br>
            <script>
                function pay() {
                    document.getElementById('rrr').removeChild(document.getElementById('payement_script'));
                    // if(document.getElementsByClassName('razorpay-container').lenght>0){
                    //     var s= document.getElementsByClassName('razorpay-container');
                    //     for(var i =0;i<=s.lenght;i++){
                    //         document.getElementsByTagName('body')[0].removeChild(s[0]);

                    //     }

                    // }

                    let myCoolCode = document.createElement("script");
                    myCoolCode.setAttribute("id", "payement_script");
                    myCoolCode.setAttribute("src", "https://checkout.razorpay.com/v1/checkout.js");
                    myCoolCode.setAttribute("data-key", "{{ env('RAZORPAY_KEY') }}");
                    myCoolCode.setAttribute("data-amount", {{ $total * 100 }});
                    myCoolCode.setAttribute("data-buttontext", "Continue");
                    myCoolCode.setAttribute("data-name", "Wegentumtech Test");
                    myCoolCode.setAttribute("data-description", "Rozerpay");
                    myCoolCode.setAttribute("data-image", "https://wegentumtech.com/frontend/assets/images/tech.png");
                    myCoolCode.setAttribute("data-prefill.name", document.getElementById("name").value);
                    myCoolCode.setAttribute("data-prefill.email", document.getElementById("email").value);
                    myCoolCode.setAttribute("data-prefill.contact", document.getElementById("contact").value);
                    myCoolCode.setAttribute("data-theme.color", "#e9243c");
                    document.getElementById('rrr').insertAdjacentElement("beforeend", myCoolCode);
                    setTimeout(() => {

                        $ewew = document.getElementsByClassName('razorpay-payment-button');
                        $ewew[0].click();
                    }, 3000);
                }
            </script>

        </div> <!-- container .//  -->
    </section>
    <!-- ============== SECTION END// ============== -->
@endsection
{{-- <script>
    function payment() {

    }
</script> --}}
