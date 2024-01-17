<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <style>
        * {
            margin: 50;
            padding: 30;
            box-sizing: border-box;
        }
        
        .carousel-caption {
            font-size: 1.2em;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-style: initial;
            margin-right: 100px;
            color: rgb(18, 19, 19);
            border-image: 1em;
        }
        .carousel-item p{
            font-size: 2em;
            text-align: left;
            font-family: 'Times New Roman', Times, serif;        
            color: red;
        }
    </style>
</head>

<body>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images\d1.png" style="background-repeat:no-repeat; background-size: cover;">
                <div class="carousel-caption">
                    <p><b>The Resume of yours will be created impressively like this at the end.</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images\d7.png" style="background-repeat:no-repeat; background-size: cover;">
                <div class="carousel-caption">
                    <p><b>Profile Pic.</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images\d3.png" style="background-repeat:no-repeat; background-size: cover;">
                <div class="carousel-caption">
                    <p><b>About You.</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images\d4.png" style="background-repeat:no-repeat; background-size: cover;">
                <div class="carousel-caption">
                    <p><b>Educational Details</b>.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images\d5.png" style="background-repeat:no-repeat; background-size: cover;">
                <div class="carousel-caption">
                    <p><b>Personal Details</b>.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>