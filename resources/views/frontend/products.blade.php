@extends('frontend.include.main')
@section('content')
<style>
    .shop{
        color: #e84f69!important;
    }
</style>
    <div class="container">
        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="filter_title">Category</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">
                                @foreach ($cate as $category)
                                    <label class="checkbox-btn">
                                      <a href="{{route('items',$category->id)}}">
                                        <span class="btn btn-light">{{ $category->cate_name }}</span></a>
                                    </label>
                                @endforeach
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                    {{-- <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="filter_title">Price range </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3" style="">
                            <div class="card-body">
                                <input type="range" class="custom-range slider_range" min="0" max="100"
                                    name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="100" type="number">
                                    </div>
                                </div> <!-- form-row.// -->
                                <button class="btn btn-block btn-outline-danger">Apply</button>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// --> --}}
                    {{-- <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="filter_title">Pages </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_4" style="">
                            <div class="card-body">
                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light">70 </span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light"> 100</span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light">140 </span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light">190 </span>
                                </label>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// --> --}}
                </div> <!-- card.// -->

            </aside>
            <main class="col-md-9">

                <header class="border-bottom mb-4 pb-3">
                    <h3 class="mx-3 my-2" style=" color: #e84f69;">All Products </h3>
                    {{-- <div class="form-inline">
                    {{-- <span class="mr-md-auto">32 Items found </span>
                    <select class="mr-2 form-control">
                        <option>Category</option>
                        <option>Convent Notebook</option>
                        <option>Long Notebook</option>
                        <option>A4 Notebook</option>
                        <option>Test Notebook</option>
                        <option>Register Notebook</option>
                        <option>Practical Notebook</option>
                        <option>A4 Notebook</option>
                        <option>Scrap Book</option>
                    </select>
                </div> --}}

                </header><!-- sect-heading -->

                {{-- quick view modal --}}
                {{-- <div class="modal fade" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="border: none;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product_img_detail">
                                            <img style="width: 100%" id="big_img" src="images/product_img3.jpg"
                                                alt="">
                                        </div>
                                        <div class="product_short_img">
                                            <a href="#">
                                                <img style="width: 100%" src="images/product_img2.jpg" alt=""
                                                    onclick="document.getElementById('big_img').src=this.src">
                                            </a>
                                            <a href="#">
                                                <img style="width: 100%" src="images/product_img1.jpg" alt=""
                                                    onclick="document.getElementById('big_img').src=this.src">
                                            </a>
                                            <a href="#">
                                                <img style="width: 100%" src="images/product_img3.jpg" alt=""
                                                    onclick="document.getElementById('big_img').src=this.src">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="product_title">
                                            Convent Notebook
                                        </h3>
                                        <p class="product_para">
                                            Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best
                                            product
                                            descriptions address your ideal buyer directly and personally. The best product
                                            descriptions
                                            address your ideal buyer directly and personally Lorem ipsum dolor sit, amet
                                            consectetur adipisicing elit.
                                            Consequatur perferendis porro assumenda ut adipisci nihil aliquam? Aperiam rem
                                            quibusdam odio.
                                        </p>
                                        <div class="m-bot15"> <strong>Price : </strong> <span
                                                class="amount_old">544</span>
                                            <span class="amount_new">300.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" placeholder="1" class="form-control quantity">
                                        </div>
                                        <p>
                                            <button class="btn btn-round btn-outline-danger" type="submit"><i
                                                    class="fa fa-shopping-cart"></i>
                                                Add to Cart</button>
                                            <a href="#" class="icons my-5 mx-3" title="wishlist"
                                                style="font-size: 20px; color:#e84f69;">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    @foreach ($product as $pro)
                        <div class="col-lg-4 col-md-4 my-3">
                            <div class="product_card">
                                <div class="product-image">
                                    <a href="{{ route('product_detail', $pro->id) }}" class="image">
                                        <img class="pic-1" src="{{ asset('main_products/' . $pro->p_mainimg) }}">
                                        <img class="pic-2" src="{{ asset('main_products/' . $pro->p_mainimg) }}">
                                    </a>

                                    {{-- <span class="product-hot-label">hot</span> --}}
                                    <ul class="product-links">
                                        <li>
                                            {{-- <a href="#" data-tip="Add to Wishlist"><i class=""></i></a> --}}

                                            <form id="addwishlist_form">
                                                @csrf
                                                <input type="hidden" name="userr_id"
                                                    value="{{ Auth()->user()->id ?? null }}">
                                                <input type="hidden" name="prod_id" value="{{ $pro->id }}">
                                                <button type="button" onclick="return subb(this)"
                                                    class="float-end  my-2 btn btn-outline-danger btn-icon"> <i
                                                        class="bi  @php if(isset($pro->wishlist)){if($pro->wishlist=="true"){echo "btn-silk"
                                                        ;}else{ echo "" ;} } @endphp bi-heart"></i> </button>
                                            </form>
                                        </li>
                                        <li> <form id="addcart">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $pro->id }}">
                                            <input type="hidden" name="user_id" value="{{ Auth()->user()->id ?? null }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <a type="button" onclick="return cart(this)"
                                                class="float-end  btn btn-outline-danger btn-icon mx-2 my-1" data-tip="Add to cart"> <i
                                                    class="bi bi-cart"></i>
                                        </a>
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">

                                    {{-- <a class="add-to-cart btn btn-light" data-name="Notebook" data-price="75">
                                        <i class="bi bi-bag"></i>Add to cart</a> --}}
                                   
                                    <h3 class="title"><a href="#">{{ $pro->p_name }}</a></h3>

                                    <div class="price py-2">
                                        <span class="text-secondary mx-2"
                                            style="text-decoration: line-through;">Rs. {{ $pro->m_price }}</span>

                                        <span>{{ $pro->p_price }}</span>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                    @endforeach


                </div> <!-- row end.// -->

                <!--Cart Modal -->
                {{-- <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cartModal">Cart</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="show-cart table">

                                </table>
                                <div>Total price: Rs.<span class="total-cart"></span></div>
                            </div>
                            <div class="modal-footer">
                                <button class="clear-cart btn btn-light">Clear Cart</button>
                                <button type="button" class="btn btn-outline-primary">Order now</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <nav class="mt-4" aria-label="Page navigation sample">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav> --}}

            </main>
        </div>
    </div>
@endsection
