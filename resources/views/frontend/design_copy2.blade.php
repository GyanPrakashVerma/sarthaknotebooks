<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="header/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="header/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@500&display=swap" rel="stylesheet">

    <title>{{env('company_name')}}</title>
    <style>
        .draggable {
            width: 285px;
            height: 400px;
            padding: 0.5em;
            border:none;
        }
.draggable:active{
    border: 1px solid rgb(0, 0, 0);

}
        .dnd {
            width: 100px;
            height: 100px;
            padding: 30px;
            border: 1px solid black;
        }

        #upload_img {
            z-index: 1;
            overflow: hidden;
        }

        #upload_img img {
            width: 100%;
            height: 100%;
        }

        .cover_bgimg {
            width: 100%;
            height: 500px;
            /* background-image: url('images/upload_bg.png');
            background-repeat: no-repeat;
            background-size: contain; */
        }
        .cover_bgimg img{
            width: 70%;
        }

        .upld_btn+label {
            font-size: 17px;
            color: white;
            background-color: rgb(61, 11, 141);
            border-radius: 20px;
            padding: 12px;
            display: inline-block;
        }

        .upld_btn:focus+label,
        .upld_btn+label:hover {
            background-color: rgba(143, 6, 36, 0.808);
        }
    </style>

</head>
<section
    style="min-height:100vh; background-image: url('https://img.freepik.com/premium-photo/vintage-wood-texture-as-background-wooden-table-with-empty-space_84485-1929.jpg?w=2000'); background-position:top center ">
    <div class="container-fluid">
        <div class="row py-5 px-3">
            <a href="{{route('home')}}" class="desgin_back"><i class="bi bi-arrow-left-square"></i></a>
        </div>
        <div class="row align-items-center justify-content-center" style="">
            <div class="col-md-3">
                <div class="image1">
                    <input type="file" name="file" id="file" class="upld_btn" style="visibility: hidden;" />
                    <label for="file">Upload Image</label>
                    <input type="color" value="#fff">
                    <label>Choose colour</label>

                </div>
            </div>
            <div class="col-md-7">
                <div class="cover_bgimg"  style="position: relative;">
                    <img id="cover_bgimg" src="images/upload_bg.png" style="position:absolute ">

                    <div id="upload_img" class="draggable ui-widget-content" style="position:absolute;">

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="upload_short_img" style="display: flex-coloumn;">
                    <a href="#">
                        <img src="{{asset('images/upld_templt2.png')}}" alt="" onclick="document.getElementById('cover_bgimg').src=this.src">
                    </a>
                    <a href="#">
                        <img src="{{asset('images/upload_bg.png')}}" alt="" onclick="document.getElementById('cover_bgimg').src=this.src">
                    </a>
                    <a href="#">
                        <img src="{{asset('images/upld_templt2.png')}}" alt="" onclick="document.getElementById('cover_bgimg').src=this.src">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    var img_upld = window.URL;

    $("#file").change(function (u) {
        var image, file;
        if ((file = this.files[0])) {
            image = new Image();
            image.onload = function () {
                src = this.src;
                $('#upload_img').html('<img src="' + src + '"></div>');
                u.preventDefault();
            }
        };
        image.src = img_upld.createObjectURL(file);
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function () {
        $(".draggable").draggable();
    });

    $(function () {
        $(".dnd").draggable();
    });
</script>