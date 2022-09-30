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
        @media (max-width:768px) {
            .rectangle {
                height: 45vh !important;
            }

            .cover_bgimg {
                padding: 0 !important;
            }
        }

        #upload_img {
            z-index: 1;
            overflow: hidden;
            position: relative;
            height: 100%;
        }

        #upload_img img {
            height: 100%;
        }

        #img_pos {
            position: absolute;
            width: 100%;
        }

        .cover_bgimg {
            padding-left: 100px;
            padding-right: 150px;
        }

        .rectangle {
            border: 1px solid white;
            height: 65vh;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }

        .cover_bgimg {
            width: 100%;
            height: 500px;
            /* background-image: url('images/upload_bg.png');
            background-repeat: no-repeat;
            background-size: contain; */
        }

        .cover_bgimg img {
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

        .size_btn {
            font-size: 18px;
            color: white;
            background-color: rgb(61, 11, 141);
            padding: 12px;
            border: none;
            border-radius: 18px;
        }

        .pos_btn {
            font-size: 22px;
            color: white;
            background-color: rgb(61, 11, 141);
            border-radius: 5px;
            padding-left: 10px;
            padding-right: 10px;
            /* display: inline-block; */
        }

        .upld_btn:focus+label,
        .upld_btn+label:hover {
            background-color: rgba(143, 6, 36, 0.808);
        }
    </style>

</head>
<section style="min-height:100vh; background-image: url('https://img.freepik.com/premium-photo/vintage-wood-texture-as-background-wooden-table-with-empty-space_84485-1929.jpg?w=2000'); background-position:top center ">
    <div class="container-fluid">
        <div class="row py-5 px-3">
            <a href="{{route('home')}}" class="desgin_back"><i class="bi bi-arrow-left-square"></i></a>
        </div>
        <div class="row align-items-center justify-content-center" style="">
            <div class="col-md-6 my-3">
                <div class="image1">
                    <input type="file" name="file" id="file" class="upld_btn" style="display:none;" />
                    <label for="file">Upload Image</label>

                    <input type="number" name="" id="size_value" class="upld_btn" style="" />
                    <button class="size_btn" onclick="size_img()">Size</button>

                    <button type="button" class="btn pos_btn" onclick="move_img('up')" value='Up'><i
                            class="bi bi-arrow-up-circle"></i></button>
                    <button type="button" class="btn pos_btn" onclick="move_img('left')" value='Left'><i
                            class="bi bi-arrow-left-circle"></i></button>
                    <button type="button" class="btn pos_btn" onclick="move_img('right')" value='right'><i
                            class="bi bi-arrow-right-circle"></i></button>
                    <button type="button" class="btn pos_btn" onclick="move_img('down')" value='down'><i
                            class="bi bi-arrow-down-circle"></i></button>

                </div>
            </div>
            <div class="col-md-6 my-2">
                <div class="cover_bgimg">
                    <div class="rectangle" style="">
                        <div id="upload_img">

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="#" class="col-md-1 btn btn-outline-danger" style="float: right!important; color:white;">Buy</a>

    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    // image upload 
    var img_upld = window.URL;

    $("#file").change(function (u) {
        var image, file;
        if ((file = this.files[0])) {
            image = new Image();
            image.onload = function () {
                src = this.src;
                $('#upload_img').html('<img src="' + src + '" id="img_pos"></div>');
                u.preventDefault();
            }
        };
        image.src = img_upld.createObjectURL(file);
    });


    // image positioning

    function move_img(str) {
        var step = 5; // change this to different step value
        switch (str) {
            case "down":
                var x = document.getElementById('img_pos').offsetTop;
                x = x + step;
                document.getElementById('img_pos').style.top = x + "px";
                break;

            case "up":
                var x = document.getElementById('img_pos').offsetTop;
                x = x - step;
                document.getElementById('img_pos').style.top = x + "px";
                break;

            case "left":
                var y = document.getElementById('img_pos').offsetLeft;
                y = y - step;
                document.getElementById('img_pos').style.left = y + "px";
                break;

            case "right":
                var y = document.getElementById('img_pos').offsetLeft;
                y = y + step;
                document.getElementById('img_pos').style.left = y + "px";
                break;
        }
    }

    // image width 
    function size_img() {

        var x = document.getElementById("size_value").value;
        document.getElementById("img_pos").style.width = x.value + '%';
    }
</script>
