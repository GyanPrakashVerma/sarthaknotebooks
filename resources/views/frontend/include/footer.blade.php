<style>
    /* footer area  */
    .main_footer {
        background: #fbfbfd;
    }

    
    .footer_top {
        padding: 80px 0px 270px;
        position: relative;
        overflow-x: hidden;
    }

    .main_footer .footer_bottom {
        padding-top: 5px;
        padding-bottom: 20px;
    }

    .footer_bottom {
        font-size: 14px;
        font-weight: 300;
        line-height: 20px;
        color: #7f88a6;
        padding: 20px 0px;
    }

    .footer_top .company_content p {
        font-size: 16px;
        font-weight: 300;
        line-height: 28px;
        color: #6a7695;
        margin-bottom: 20px;
    }

    .footer_top .company_content .footer_subscribe .footer_button {
        border-width: 1px;
        margin-top: 20px;
    }

    .footer_button_subscribe:hover {
        background: transparent;
        color: #5e2ced;
    }

    .footer_button:hover {
        color: #fff;
        background: #6754e2;
        border-color: #6754e2;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    a:hover,
    a:focus,
    .btn:hover,
    .btn:focus,
    button:hover,
    button:focus {
        text-decoration: none;
        outline: none;
    }



    .footer_top .footer_content.footer_abt_content .footer_lists li a:hover {
        color: #5e2ced;
    }

    .footer_top .footer_content.footer_abt_content .footer_lists li {
        margin-bottom: 11px;
    }

    .footer_content.footer_abt_content .footer_lists li:last-child {
        margin-bottom: 0px;
    }

    .footer_content.footer_abt_content .footer_lists li {
        margin-bottom: 15px;
    }

    .footer_content.footer_abt_content .footer_lists {
        margin-bottom: 0px;
    }

    .footer_top .f_social_icon a {
        width: 44px;
        height: 44px;
        line-height: 43px;
        background: transparent;
        border: 1px solid #e2e2eb;
        font-size: 24px;
    }

    .f_social_icon a {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        font-size: 14px;
        line-height: 45px;
        color: #858da8;
        display: inline-block;
        background: #ebeef5;
        text-align: center;
        -webkit-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .footer_button_subscribe {
        -webkit-box-shadow: none;
        box-shadow: none;
        background: #5e2ced;
        border-color: #5e2ced;
        color: #fff;
    }

    .footer_button_subscribe:hover {
        background: transparent;
        color: #5e2ced;
    }

    .footer_top .f_social_icon a:hover {
        background: #5e2ced;
        border-color: #5e2ced;
        color: white;
    }

    .footer_top .f_social_icon a+a {
        margin-left: 4px;
    }

    .footer_top .f-title {
        margin-bottom: 30px;
        color: #263b5e;
    }

    .f_600 {
        font-weight: 600;
    }

    .f_size_18 {
        font-size: 18px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #4b505e;
    }

    .footer_top .footer_content.footer_abt_content .footer_lists li a {
        color: #6a7695;
    }

    .footer_shop_img {
        width: 250px;
        margin-top: 73px;
        margin-left: 30%;
    }


    .footer_top .footer_bg {
        position: absolute;
        bottom: 0;
        background: url("../../images/footer_bnr.png") no-repeat scroll center 0;
        width: 100%;
        height: 266px;
    }

    .footer_top .footer_bg .footer_bg_one {
        background: url("../../images/gif_1.gif") no-repeat center center;
        width: 200px;
        height: 185px;
        background-size: 100%;
        position: absolute;
        bottom: 0;
        left: 30%;
        -webkit-animation: myfirst 22s linear infinite;
        animation: myfirst 22s linear infinite;
    }

    .footer_top .footer_bg .footer_bg_two {
        background: url("../../images/footer_cycle.gif") no-repeat center center;
        width: 88px;
        height: 100px;
        background-size: 100%;
        bottom: 0;
        left: 38%;
        position: absolute;
        -webkit-animation: myfirst 30s linear infinite;
        animation: myfirst 30s linear infinite;
    }



    @-moz-keyframes myfirst {
        0% {
            left: -25%;
        }

        100% {
            left: 100%;
        }
    }

    @-webkit-keyframes myfirst {
        0% {
            left: -25%;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes myfirst {
        0% {
            left: -25%;
        }

        100% {
            left: 100%;
        }
    }
</style>
<section>
    <footer class="main_footer bg_color">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_content company_content wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, blanditiis.</p>
                            <form action="{{route('subscribe_store')}}" class="footer_subscribe mailchimp" method="post" novalidate="true"
                                _lpchecked="1">
                                @csrf
                                <input type="email" name="email" class="form-control memail" placeholder="Email">
                                <button class="btn footer_button footer_button_subscribe"
                                    type="submit">Subscribe</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="footer_content footer_abt_content pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Visit</h3>
                            <ul class="list-unstyled footer_lists">
                    <li><a href="{{route('products')}}">Products</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                {{-- <li><a href="#">Projects</a></li>
                                <li><a href="#">My tasks</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="footer_content footer_abt_content pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Contact</h3>
                            <ul class="list-unstyled footer_lists">
                                <li><a href="#"> Lorem ipsum dolor sit amet.dignissimos perferendis ipsam!</a></li>
                                <li><a href="#">{{$setting->contact_no}}</a></li>
                                <li><a href="#">{{$setting->contact_optional}}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_content social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Know More About Us</h3>
                            <div class="f_social_icon">
                                @if($setting->facebook_link !='')<a type="button" href="{{$setting->facebook_link}}" class="bi bi-facebook"></a>@endif
                                @if($setting->twitter_link !='')<a type="button" href="{{$setting->twitter_link}}" class="bi bi-twitter"></a>@endif
                                @if($setting->linkedin_link !='')<a type="button" href="{{$setting->linkedin_link}}" class="bi bi-linkedin"></a>@endif
                                @if($setting->insta_link !='')<a type="button" href="{{$setting->insta_link}}" class="bi bi-instagram"></a>@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <img class="footer_shop_img"
                    src="https://cdni.iconscout.com/illustration/premium/thumb/stationery-shop-building-5806846-4842006.png">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-sm-12">
                        <p class="mb-0 f_400 text-center">© Wegentumtech</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</section>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    // $('.like-btn').on('click', function () {
    //     $(this).toggleClass('is-active');
    // });

    function increaseValue(elsss) {
      var Num = parseInt(elsss.parentElement.children[1].value);
      Num = isNaN(Num) ? 0 : Num;
      Num++;
      elsss.parentElement.children[1].value= Num;
  }

  function decreaseValue(elsss) {
      var Num = parseInt(elsss.parentElement.children[1].value);
      Num = isNaN(Num) ? 0 : Num;
      Num < 1 ? Num = 1 : '';
      Num--;
      elsss.parentElement.children[1].value = Num;
  }

   function subb(ele){
    // var form = ele.parentNode();
    $.ajax({
    url: "/wishlist",
    type: "POST",
    data: $(ele).parent().serialize(),
    success: function( response ) {
      
      $(ele).children().toggleClass('btn-silk');
    }
   });
   return false;
  }
  

  function cart(add){
    // var form = ele.parentNode();
    $.ajax({
    url: "/cart",
    type: "POST",
    data: $(add).parent().serialize(),
    success: function( response ) {
      // alert('hiiii thank you');
      // $(add).children().toggleClass('btn-silk');
      $('#cart_count').html('('+response.cart_count+')');
      console.log(response);
      // $('div.flash-message').html(data);
    }
   });
   return false;
  }
function chaange_pasd(){
  
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
}
</script>
<script src="{{asset ('header/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset ('header/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('header/js/js.js')}}"></script>
<script src="{{asset ('header/js/owl.carousel.js')}}"></script>