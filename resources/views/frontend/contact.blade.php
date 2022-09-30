@extends('frontend.include.main')
@section('content')
<style>
    .contact{
        color: #d63434!important;
    }
      input,
        textarea {
            background-color: #f3f3f3;
            padding: 8px 0px 8px 0px !important;
            width: 100%;
            border-radius: 0 !important;
            box-sizing: border-box;
            border: none !important;
            border-bottom: 1px solid #d63434 !important;
            font-size: 18px !important;
            color: #000 !important;
            font-weight: 300;
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border-bottom: 1px solid #df6767 !important;
            outline-width: 0;
            font-weight: 400;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }


        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form_label {
            position: absolute;
            top: 0;
            padding: 7px 0 0 0;
            transition: all 300ms;
            
        }

        .form-control:focus+.form_label,
        .form-control:valid+.form_label {
            font-size: 16px;
            transform: translate3d(0, -100%, 0);
            opacity: 1;
        }
</style>

<section class="abt_section">
    <div class="container">
        <div class="row">
            <div class="col-md-5" >
                <div class="h_title mt-5">
                    <h2 class="sub_title"><span>GET IN TOUCH</span></h2>
                </div>
                <form action="{{route('Contact_store')}}" method="post">
                    @csrf
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mt-5">
                                <input type="text" id="name" name="name" class="form-control" required> 
                                <label for="name" class="form_label">Your name</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <input type="email" id="email" name="email" class="form-control" required> 
                                <label for="email" class="form_label">Your email</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <input type="number" id="contact" name="contact" class="form-control" required> 
                                <label for="contact" class="form_label">Your number</label>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <textarea type="text" id="message" name="message" rows="2"
                                    class="form-control" required></textarea>
                                <label for="message" class="form_label">Your message</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-md-left my-3">
                        <button type="submit" class="btn btn-outline-danger">Send</button>
                    </div>
                    <!--Grid row-->
                </form>
            </div>

            <div class="col-md-7" data-aos="fade-up"
            data-aos-duration="1000">
                <img src="images/contact_img.png" style="width:100%">
            </div>
        </div>
                <div class="counter mt-2 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h5" data-to="500" data-speed="500">Address</h6>
                                <p class="m-0px font-w-600">{{$setting->address}} </p>
                            </div>
                        </div>
                       
                        <div class="col-12 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h5" data-to="150" data-speed="150">Email Us</h6>
                                <p class="m-0px font-w-600">{{$setting->email}} <br></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h5" data-to="150" data-speed="150">Contact Us</h6>
                                <p class="m-0px font-w-600">{{$setting->contact_no}} <br> {{$setting->contact_optional}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection