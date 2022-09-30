
<!doctype html>
<html lang="en">

<head>
    <title>Comming Soon </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body,
    html {
        height: 100%;
    }

    * {
        box-sizing: border-box;
    }

    .bg-image {
        /* The image used */
        background-image: url("https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80");

        /* Add the blur effect */
        filter: blur(3px);
        -webkit-filter: blur(3px);

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Position text in the middle of the page/image */
    .bg-text {
        /* background-color: rgb(0, 0, 0); */
        /* Fallback color */
        /* background-color: rgba(0, 0, 0, 0.4); */
        /* Black w/opacity/see-through */
        color: white;
        font-weight: 900;
        /* border: 3px solid #f1f1f1; */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 100%;
        padding: 0;
        text-align: center;
    }

    @media    screen and (min-width: 600px) {
        .bg-text h1 {
            font-size: 5rem;

        }
    }
</style>

<body>
    <!-- <section style="filter: blur(3px); height:100vh; background-image: url('https://images.unsplash.com/photo-1487014679447-9f8336841d58?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1305&q=80');background-size:cover;background-position:center center;">
        <div class="container">
            <div class="row">
                <img src="assets/images/logo-white.png">
                <h1 style="text-align: center;" class="text-white">Comming Soon</h1>
            </div>
        </div>
    </section> -->
    <div class="bg-image"></div>

    <div class="bg-text">
        <img src="https://i.pinimg.com/originals/5f/fb/de/5ffbdeceb84323decd76084b2efca958.png" style="width: 200px;">
        <h1 style="font-weight: 900;color: #90191a;">Comming Soon</h1>
        <p style="color:#0075aa;">We are <span style="font-size: xx-large;font-style: italic;    font-weight: 300;font-family: emoji;"> Sarthaknotebook </span></p>
        <h1 id="count" style="color: #252967;"></h1>
        <a class="btn btn-primary b-solid" href="/home">Visit</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Sep 10, 2022 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="count"
            document.getElementById("count").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("count").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>