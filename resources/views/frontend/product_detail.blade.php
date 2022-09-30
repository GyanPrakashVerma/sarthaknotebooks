@extends('frontend.include.main')
@section('content')
<style>
    .shop{
        color: #e84f69!important;
    }
</style>
<section class="pdt_section">
    <div class="container p-3">
        <section class="product">
            <div class="product-body">

                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="product_img_detail">
                            <img id="big_img" src="{{asset('main_products/'.$product->p_mainimg)}}" alt="" style="width:300px">
                        </div>
                        <div class="product_short_img">
                            @foreach ($img as $imgg)
                            <img style="width:100px; height:100px; padding:10px;" src="{{ asset('products/' . $imgg->imageName) }}"
                            onclick="document.getElementById('big_img').src=this.src">
                        @endforeach

                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="product_title">
                           {{$product->p_name}}
                        </h3>
                        <p class="product_para">
                           {{$product->description}}
                        </p>
                        <div class="m-bot15"> <strong>Price : </strong> <span class="amount_old" style="color:#a13b4c;">{{$product->m_price}}</span> <span
                                class="amount_new">{{$product->p_price}}</span></div>
                        {{-- <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" placeholder="1" class="form-control quantity">
                        </div> --}}
                        <p>
                            {{-- <button class="btn btn-round btn-outline-danger" type="submit"><i
                                    class="fa fa-shopping-cart"></i>
                                Add to Cart</button> --}}

                                <form id="addcart">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth()->user()->id ?? null }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="button" onclick="return cart(this)"
                                        class="add-to-cart float-end btn btn-outline-danger btn-icon my-3">
                                        <i class="bi bi-cart"> Add to cart</i>
                                    </button>
                                </form> 

                                <form id="addwishlist_form">
                                    @csrf
                                    <input type="hidden" name="userr_id"
                                        value="{{ Auth()->user()->id ?? null }}">
                                    <input type="hidden" name="prod_id" value="{{ $product->id }}">
                                    <button type="button" onclick="return subb(this)"
                                        class="float-end   btn btn-outline-danger btn-icon "> <i
                                            class="bi  @php if(isset($product->wishlist)){if($product->wishlist=="true"){echo "btn-silk"
                                            ;}else{ echo "" ;} } @endphp bi-heart"> Add to wishlist</i> </button>
                                </form>

                            {{-- <a href="#" class="icons my-5 mx-3" title="wishlist"
                                style="font-size: 20px; color:#e84f69;">
                                <i class="bi bi-heart"></i>
                            </a> --}}
                        </p>

                    </div>
                 
                </div>
            </div>
        </section>
    </div>
    </div>
</section>
@endsection
