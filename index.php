<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: hidden;
            font-family: "Trirong", serif;
        }
        
        .menubar {
            background: rgb(139, 134, 207);
            height: 60px;
            padding-bottom: 5px;
            padding-top: 0px;
        }
        
        .nav-link {
            font-size: 20px;
            margin: 3px;
            color: black!important;
            font-weight: 500;
            text-align: right!important;
            padding-right: 30px;
            transition: .5s;
            cursor: pointer;
            text-transform: uppercase;
        }
        
        .nav-link:hover {
            background: rgb(106, 178, 226);
        }
        
        navbar-nav {
            text-align: right;
            margin-right: 20px;
        }
        
        .menubar .navbar-toggler {
            padding-right: 20px;
            outline: auto;
            border: auto;
            color: black;
        }
        
        .menubar .navbar-brand {
            font-size: 30px;
            margin: 3px;
            color: black!important;
            font-weight: 700;
            text-align: right!important;
            padding-right: 20px;
            text-transform: uppercase;
        }
        
        .carousel-item {
            width: 100%;
            height: 100%;
        }
        
        @media(max-width: 800px) {
            .menubar {
                display: block;
                height: fit-content !important;
            }
            .nav-link {
                color: black!important;
                font-weight: 500;
                text-align: right!important;
                padding-right: 10px;
                transition: all 0.3s ease 0s;
                cursor: pointer;
                text-transform: uppercase;
            }
            .nav-link:hover {
                background: rgb(106, 178, 226);
            }
            .carousel-item {
                width: 100%;
                height: 100%;
            }
        }
    </style>

</head>

<body>

    <div class="header">
        <div class="menubar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Resume Builder</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">Build Resume</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="details.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="final.php">Sample</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="exp.php">Feedback</a>
                            </li>
                    </div>
                </div>
            </nav>
        </div>

        <div class="image">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/v1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/v2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/v3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/v4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>