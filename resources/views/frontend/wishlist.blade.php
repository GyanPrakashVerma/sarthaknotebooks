@extends('frontend.include.main')
@section('content')
    <style>
        #wishlist {
            color: #9c368f;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff!important;
            background-color: #b034c3!important;
        }

        .nav-pills .nav-link {
            border-radius: 0.25rem;
            color: #bf228e!important;
        }

        .card {
            border: none;
        }
    </style>
    <!-- ================ SECTION INTRO ================ -->
    <section class=" padding-y-sm my-5">
        <div class="container text-center">
            <h3 class="text-dark"> <i class="bi bi-heart mx-2"
                    style="font-size:30px;color:#c951b9"></i>Wishlist({{ $wishlists->count() }})</h3>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row pb-5" style="display: flex!important;">
                <aside class="col-lg-3 col-xl-3 col-md-3">
                    <!--  COMPONENT MENU LIST  -->
                    <div class="card mb-2">
                        <div class="card-body">
                            <figure class="itemside align-items-center">
                                <div class="aside">
                                    <span class="bg-gray icon-md rounded-circle">
                                        <img src="https://i.pinimg.com/originals/3f/94/70/3f9470b34a8e3f526dbdb022f9f19cf7.jpg"
                                            style="width: 80px;height:80px;" class="icon-md rounded-circle">
                                    </span>
                                </div>
                                <figcaption class="dark">
                                    <h3
                                        style="font: 200 13px/20px 'Merienda', cursive;
                                    text-transform: uppercase;font-weight: 600;font-size:20px; color:#c951b9;">
                                        {{ $user->name ?? null }}
                                    </h3>
                                </figcaption>
                            </figure>
                        </div> <!-- card-body.// -->
                    </div>
                    <nav class="nav flex-lg-column nav-pills mb-4">
                        <a class="nav-link active" href="">Account main</a>
                        {{-- <a class="nav-link" href="#">New orders</a> --}}
                        <a class="nav-link" href="{{ route('orders') }}">Orders history</a>
                        <a class="nav-link" href="{{ route('wishlist.index') }}">My wishlist</a>
                        {{-- <a class="nav-link" href="#">Transactions</a> --}}
                        <a class="nav-link" href="{{ route('profile') }}">Profile setting</a>
                        <a class="nav-link" href="/logout-user">
                            {{-- {{ __('Logout') }} --}}
                            <i class="icon-logout"></i> Logout
                        </a>

                        {{-- <a class="nav-link" href="">Log out</a> --}}
                    </nav>
                    <!--   COMPONENT MENU LIST END .//   -->
                </aside>


                <main class="col-lg-9  col-xl-9 col-md-9 ">
                    @foreach ($wishlists as $wishlist)
                        <article class="card mb-2 p-1">
                            <div class="content-body">


                                <div class="row g-1 p-1">
                                    <div class="col-md-4 col-lg-4"
                                        style="align-content: center;justify-content:center;text-align:center;">
                                        <img src="{{ asset('main_products/' . $wishlist->product_image) }}" style="width:60%;"
                                            alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <div class="d-flex">
                                            <h4 class="title text-dark">{{ $wishlist->product_name }}</h4>
                                            {{-- <span class="label-rating text-muted"> <i class="fa fa-shopping-basket"></i>
                                                ({{ $wishlist->pqty }})
                                            </span> --}}
                                            <span class="topbar">
                                                @if ($wishlist->stock_status == 'In_stock')
                                                    <span
                                                        class="badge text-success p-2">{{ $wishlist->stock_status }}</span>
                                                @else
                                                    @if ($wishlist->stock_status == 'Out_stock')
                                                        <span
                                                            class="badge text-danger p-2">{{ $wishlist->stock_status }}</span>
                                                    @endif
                                                @endif
                                            </span>
                                        </div>

                                        <var class="price"><span><i class="fa-solid fa-indian-rupee-sign"></i>
                                                {{ $wishlist->product_price }}</span> <span style="text-decoration: line-through;"
                                                class="me-2 text-decoration-line-through text-secondary"><i
                                                    class="bi bi-currency-rupee"></i>
                                                {{ $wishlist->max_price }}</span></var>
                                        <span class="text-muted">/per Quantity</span>

                                        <div class=" d-flex gap-2 mt-3">
                                            <form id="addcart">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $wishlist->id }}">
                                                <input type="hidden" name="user_id"
                                                    value="{{ Auth()->user()->id ?? null }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="button" onclick="return cart(this)"
                                                    class="btn footer_button_subscribe "><i class="me-1 bi bi-cart"></i> Add
                                                    To
                                                    Cart
                                                </button>
                                            </form>
                                            <form action="{{ route('wishlist.destroy', $wishlist->id )}}" method="POST">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" class="btn btn-outline-danger mx-3"><i
                                                        class="bi bi-x"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <hr>
                    @endforeach
                    {{-- <div class="pagination">
                         or {{ $wishlists->links() }}
                    </div> --}}
                    <div class=" mt-3 mb-3">
                        <form action="{{ route('delwish') }}" method="POST">
                            @csrf
                            <button class="btn  btn-light float-right"><i class="fa fa-trash"></i> Empty Wishlist </button>
                        </form>
                    </div>
                </main>
            </div>

        </div>
    </section>
@endsection
