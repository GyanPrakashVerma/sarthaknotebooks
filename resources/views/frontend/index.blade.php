@extends('frontend.include.main')
@section('content')
@php
$username = Auth()->user();
@endphp

<style>
    .home{
        color:#e84f69!important;
    }
</style>
{{-- banner --}}
<section class="banner" style="min-height: 80vh; padding-top:80px; background-color: #cea9f16b;">
    <div class="container-fluid " style="position: relative">
        <div class="row girl_img" style="position: absolute; z-index:1;margin-top: 290px;" >
            <img src="images/banner.png" style="width: 400px; height:40vh;" class=" col-12 m-0 p-0">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card bnr_card1 p-5" >
                            <h3 class=" sarthak_title text-white">{{$setting->company_name}}</h3>
                            <a type="button" href="{{route('products')}}" class=" col-md-4 mt-5 btn btn-outline-secondary">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 p-1">
                                <div class="card bnr_card2" ></div>
                            </div>
                            <div class="col-md-12 p-1">
                                <div class="card bnr_card3" ></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

{{-- category --}}
<section style="min-height: 100vh" class="py-5">
    <div class="h_title">
        <h1>Shop By Category</h1>
        <p class="sub_title"><span>The Best Notebook in Town</span></p>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center row1">
            @foreach( $cate as $category)
            <div class="col-md-3 col-xs-6">
                <a href="{{route('items',$category->id)}}">
                <div class="cat_box box1 content">
                    <img class="cat_img" src="{{asset ('cate_img/' . $category->image) }}">
                    <div class="content-details fadeIn-left">
                        <h3>{{$category->cate_name}}</h3>
                    </div>
                </div>
                </a>
            </div>
@endforeach

            {{-- <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box6">
                    <img class="cat_img" src="images/product_img2.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>A4 Notbook</h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box1">
                    <img class="cat_img" src="images/product_img1.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>A4 Spiral Notbook</h3>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box6">
                    <img class="cat_img" src="images/product_img2.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>Long Notbook</h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box1">
                    <img class="cat_img" src="images/product_img2.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>Practical Notbook</h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box6">
                    <img class="cat_img" src="images/product_img1.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>Test Notebook</h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box1">
                    <img class="cat_img" src="images/product_img1.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>Register Notbook</h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box6">
                    <img class="cat_img" src="images/product_img2.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>Scrap Book</h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-6">
                <a href="{{route('products')}}">
                <div class="cat_box content box4">
                    <img class="cat_img" src="images/product_img1.jpg">
                    <div class="content-details fadeIn-left">
                        <h3>Drawing Notebook</h3>
                    </div>
                </div>
                </a>
            </div> --}}
        </div>

</section>

{{-- about us --}}
<section style="position: relative">
    <div class="h_title">
        <h1>About US</h1>
        <p class="sub_title"><span>{{env('company_name')}}</span></p>
    </div>
    <section class="section abt_section bg-white">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-7">
                    <div class="abt_txt"data-aos="zoom-in-left" data-aos-duration="1000" id="">
                        {{-- <h3 class="dark-color">About Me</h3> --}}
                        {{-- <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6> --}}
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Eius animi voluptatum repellat consequatur! Magnam omnis
                            nulla laborum non temporibus amet? Molestias modi dolore eaque, vitae adipisci totam
                            pariatur, molestiae delectus odio quidem deserunt harum corrupti accusamus quas mollitia
                            eveniet facere saepe est voluptatem? Nisi eveniet et magnam quibusdam tempora itaque
                            culpa ratione!</p>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="abt_avator">
                        <img class="boybook_img" src="images/boy_book.png" title="" alt="">
                    </div>
                </div>
            </div>
            <div class="counter">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h5" data-to="500" data-speed="500">Quality</h6>
                            <p class="m-0px font-w-600">Lorem ipsum dolor, sit auy </p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h5" data-to="150" data-speed="150">Finishing</h6>
                            <p class="m-0px font-w-600">Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h5" data-to="850" data-speed="850">Comfort</h6>
                            <p class="m-0px font-w-600">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h5" data-to="190" data-speed="190">Production</h6>
                            <p class="m-0px font-w-600">Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section> 

{{-- design --}}
<section>
    <div class="container-fluid " style="position: relative">
        <div class="row justify-content-center align-items-center py-5 ">
            <img src="images/design_bnr.png" class="col-md-12 p-0" style="width:100%; max-height:80vh">
            <div class="col-md-7" style="position: absolute">
                <a href="{{route('design')}}"><h1 class="deal_heading" style="text-align: left">Design Your Notebook</h1></a>
                {{-- timer  --}}
            </div>
        </div>
    </div>
</section>


<section class="my-3" >
    <div class="h_title">
        <h1> Top Products </h1>
        <p class="sub_title"><span>Your Favourite Notebooks</span></p>
    </div>
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            @foreach ($top_product as $toppro)
            <div class="col-md-3 col-sm-6">
                <div class="product_card">
                    <div class="product-image">
                        <a href="{{ route('product_detail', $toppro->id) }}" class="image">
                            <img class="pic-1" src="{{ asset('main_products/' . $toppro->p_mainimg) }}">
                            <img class="pic-2" src="{{ asset('main_products/' . $toppro->p_mainimg) }}">
                        </a>
                        <ul class="product-links">
                            <li>
                                {{-- <a href="#" data-tip="Add to Wishlist"><i class=""></i></a> --}}

                                {{-- <form id="addwishlist_form">
                                    @csrf
                                    <input type="hidden" name="userr_id"
                                        value="{{ Auth()->user()->id ?? null }}">
                                    <input type="hidden" name="prod_id" value="{{ $toppro->id }}">
                                    <button type="button" onclick="return subb(this)"
                                        class="float-end  my-2 btn btn-outline-danger btn-icon"> <i
                                            class="bi  @php if(isset($toppro->wishlist)){if($toppro->wishlist=="true"){echo "btn-silk"
                                            ;}else{ echo "" ;} } @endphp bi-heart"></i> </button>
                                </form> --}}
                            </li>
                            <li> <form id="addcart">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $toppro->id }}">
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
                        
                        <h3 class="title"><a>{{$toppro->p_name}}</a></h3>

                        <div class="price">Rs. {{$toppro->p_price}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- testimonial --}}
<section >
    <div class="h_title">
        <h1>Testimonial </h1>
        <p class="sub_title"><span>Notebook that you prefer</span></p>
    </div>
    <div class="container-fluid ">
        <div class="row p-2">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-box"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT8t2tsrhdnUnxhrFofQzX3JX4PKjQLP676xicz2drDsVIxHjkfTNkXf2mmlmlonf-Yr0&usqp=CAU"
                                alt=""></div>
                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                            eu sem tempor, varius quam at,</p>
                        <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a>
                        </p>
                    </div>
                    @foreach($feedback as $feeds)
                    <div class="carousel-item">
                        <div class="img-box">
                            <img src="{{ asset('feedback_img/' . $feeds->image) }}">
                        </div>
                        <p class="testimonial">{{$feeds->message}}</p>
                        <p class="overview"><b>{{$feeds->Name}}</b>{{$feeds->email}}
                        </p>
                    </div>
                    @endforeach
                  
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="bi bi-arrow-left-circle"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
</section>
{{-- footer area --}}
@endsection