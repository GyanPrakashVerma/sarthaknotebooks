@extends('frontend.include.main')
@section('content')
<style>
    .about{
        color:#e84f69!important;
    }
    </style>
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
                    <div class="abt_txt " data-aos="zoom-in-left" data-aos-duration="1000" id="">
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


{{-- testimonial --}}
<section style="min-height: 80vh;">
    <div class="h_title">
        <h1>Testimonial </h1>
        <p class="sub_title"><span>Lorem ipsum dolor sit amet</span></p>
    </div>
    <div class="container-fluid ">
        <div class="row">

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
                        <div class="img-box"><img
                            src="{{ asset('feedback_img/' . $feeds->image) }}"></div>
                        <p class="testimonial">{{$feeds->message}}</p>
                        <p class="overview"><b>{{$feeds->Name}}</b>${{$feeds->email}}
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