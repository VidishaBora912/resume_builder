<?php
	include_once('connection.php');
    $tmp = $_SESSION['userid'];
	$query="select * from resume where useremail_id='". $tmp . "'";
	$result=mysqli_query($conn , $query);

    $rows = mysqli_fetch_array($result);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
        <script src="Js/pdf.js"></script> 
        
    </head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border- font-family sans-serif;
        }
        
        body {
            background: rgb(231, 186, 240);
        }
        
        .container {
            display: grid;
            height: 100%;
        }
        
        .content1 {
            height: 5%;
        }
        
        .navbar .container-fluid {
            height: 50px;
            width: 100%;
        }
        
        .nav-link {
            font-size: 20px !important;
            margin: 3px;
            color: black!important;
            font-weight: 500;
            text-align: right!important;
            padding-right: 30px;
            transition: .5s;
            cursor: pointer;
            text-transform: uppercase;
        }
        
        #rr {
            color: black;
            font-size: 30px;
            line-height: 80px;
            font-weight: 500;
            cursor: pointer;
            text-transform: uppercase;
        }
        
        #rightside .nav-link {
            color: black;
            font-size: 20px;
            line-height: 80px;
            font-weight: 500;
        }
        
        .print-area {
            width: 80%;
            margin: 20px auto;
        }
        
        .print-area .header {
            width: 100%;
            height: 150px;
            background-color: rgb(31, 34, 43);
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .header img {
            position: absolute;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            top: 50px;
            left: 65px;
            border: 5px solid white;
            cursor: pointer;
            transition: .5s;
            user-select: none;
        }
        
        .header img:hover {
            filter: grayscale(ex);
            transform: scale(1.05);
            box-shadow: 3px 3px 20px rgba(0, 0, 0, .5);
        }
        
        .header-text {
            color: white;
            width: 60%;
            margin-left: auto;
        }
        
        .header-text h1 {
            font-size: 80px;
            font-weight: normal;
        }
        
        .header-text p {
            font-size: 20px;
            color: lightgray;
        }
        
        .content2 {
            display: flex;
            flex-wrap: wrap;
        }
        
        .left-area {
            width: 40%;
            background-color: rgb(236, 236, 236) !important;
            text-align: center;
        }
        
        .left-area .about {
            margin-top: 130px;
            padding: 0 30px;
            list-style-type: none;
        }
        
        .about .title {
            position: relative;
            color: rgb(8, 8, 8);
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 20px;
            font-size: 2em;
            padding-top: 50px;
        }
        
        .about .per {
            position: relative;
            list-style: none;
            margin: 10px 0;
            cursor: pointer;
            justify-content: center;
            align-items: center;
        }
        
        .about .per span {
            padding: 10px;
        }
        
        .about .per .icon {
            display: inline-block;
            width: 30px;
            font-size: 1.5em;
            color: #0c0c0c;
        }
        
        .about .per .text {
            color: rgb(12, 12, 12);
            font-weight: 400;
            font-size: 1.5em;
        }
        
        .about2 {
            padding-top: 40px;
            list-style-type: none;
            margin-top: 30px;
        }
        
        .about2 .title {
            position: relative;
            color: rgb(8, 8, 8);
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 20px;
            font-size: 2em;
            padding-top: 50px;
        }
        
        .about2 .edu {
            margin-bottom: 15px;
            padding-top: 0.2em;
            padding-bottom: 0.2em;
        }
        
        .about2 .edu h4 {
            color: rgb(14, 14, 14);
            font-size: 1.6em;
            font-weight: 500;
        }
        
        .about2 .edu h5 {
            color: rgb(14, 13, 13);
            font-weight: 400;
            font-size: 1.2em;
        }
        
        .right-area {
            width: 60%;
            background-color: white;
        }
        
        .about3 {
            padding-top: 5px;
        }
        
        .about3 .title {
            color: rgb(10, 10, 10);
            font-weight: 800;
            padding-bottom: 10px;
            text-align: center;
            font-size: 2.5em;
        }
        
        .about3 h4 {
            text-align: center;
            padding-top: 13px;
            padding-bottom: 10px;
            font-size: 1.5em;
            font-weight: 600;
            color: rgb(12, 12, 12);
        }
        
        .about3 h5 li {
            color: rgb(12, 12, 12);
            padding-top: 0.2em;
            padding-bottom: 0.2em;
            font-size: 1em;
            font-weight: 400;
        }
        
        .about3 p {
            color: rgb(12, 12, 12);
            padding-top: 0.2em;
            padding-bottom: 0.2em;
            font-size: 1em;
            font-weight: 400;
        }
        
        button {
            font-size: 25px;
            padding: 10px 20px;
            margin: 50px 0 50px 500px;
            background-color: rgb(8, 7, 7);
            border: none;
            outline: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: .5s;
        }
        
        @media (max-width: 984px) {
            .body {
                width: 50%;
                position: fixed;
            }
            .navbar .container-fluid {
                height: 50px;
                width: 40px;
            }
            .nav-link {
                font-size: 10px;
                margin: 1px;
                font-weight: 300;
                text-align: auto;
                padding-right: 10px;
            }
            #rr {
                position: absolute;
                left: 10px;
                font-size: 20px;
                line-height: 50px;
                font-weight: 500;
            }
            .navbar-toggler {
                position: absolute;
                right: 10px !important;
                color: black !important;
            }
            #rightside .nav-link {
                position: absolute;
                left: 30px !important;
                font-size: 10px;
                line-height: 50px;
                font-weight: 300;
            }
            .print-area {
                width: 90%;
            }
            .print-area .header {
                height: 150px;
            }
            .header-text h1 {
                font-size: 30px;
                font-weight: normal;
            }
            .header-text p {
                font-size: 20px;
            }
            .header img {
                position: absolute;
                width: 100px;
                height: 100px;
                top: 100px;
                left: 10px;
            }
            .about .title {
                position: relative;
                font-weight: 300;
                letter-spacing: 1px;
                margin-bottom: 10px;
                font-size: 1.5em;
                padding-top: 0;
            }
            .about .per {
                margin: 1px 0;
            }
            .about .per span {
                padding: 1px;
            }
            .about .per .icon {
                width: 10px;
                font-size: 1em;
                margin: 1px 0;
            }
            .about .per .text {
                font-weight: 100;
                font-size: 1em;
                margin: 1px 0;
            }
            .left-area {
                width: 55%;
            }
            .about2 .title {
                position: relative;
                font-weight: 300;
                letter-spacing: 1px;
                margin-bottom: 20px;
                font-size: 1.2em;
                padding-top: 0px !important;
            }
            .about2 .edu h4 {
                font-size: 1.2em;
                font-weight: 400;
            }
            .about2 .edu h5 {
                font-weight: 200;
                font-size: 1em;
            }
            .right-area {
                width: 45%;
            }
            .about3 {
                padding-top: 1px;
            }
            .about3 .title {
                font-weight: 900;
                padding-bottom: 1px;
                font-size: 1.2em;
            }
            .about3 h4 {
                padding-top: 0.5em;
                padding-bottom: 0.2em;
                font-size: 1em;
                font-weight: 700;
            }
            .about3 .num {
                padding-left: 2.5em;
            }
            .about3 h5 li {
                padding-top: 0.2em;
                padding-bottom: 0.2em;
                padding-left: 1em;
                font-size: 1em;
                font-weight: 200;
            }
            .about3 p {
                padding-left: 0.7em;
                font-size: 0.7em;
                font-weight: 200;
            }
            button {
                font-size: 15px;
                margin: 10px 0 0 15px !important;
            }
        }
    </style>

    <? php
{
?>

        <body>
            <div class="container" id="resume">

                <div class="content1">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" id="rr">Resume Builder</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                            <div class="collapse navbar-collapse" id="rightside">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="fpage.php">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Ask Queries</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="exp.php">Experience</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="fpage.php">LogOut</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            
            <div class="print-area" id="resume">
                    <div class="header">
                        <img src="<?php echo $rows['image']; ?>">
                        <div class="header-text">
                            <h1>
                                <?php echo $rows['name']; ?>
                            </h1>
                            <p>
                                <?php echo $rows['current_designation']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="content2">
                        <div class="left-area">
                            <div class="about">
                                <h3 class="title">Personal Details</h3>
                                <div class="per">
                                    <span class="icon"></span>
                                    <span class="text">D.O.B.- <?php echo $rows['dateofbirth']; ?></span>
                                </div>
                                <div class="per">
                                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <span class="text"><?php echo $rows['address']; ?>.</span>
                                </div>
                                <div class="per">
                                    <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <span class="text"><?php echo $rows['email_id']; ?></span>
                                </div>
                                <div class="per">
                                    <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                    <span class="text"><?php echo $rows['linkedin_id']; ?></span>
                                </div>
                                <div class="per">
                                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <span class="text"><?php echo $rows['phoneno']; ?></span>
                                </div>

                            </div>

                            <div class="about2">
                                <h3 class="title">Educational Details</h3>
                                <div class="edu">
                                    <h4>High School :</h4>
                                    <h5>In
                                        <?php echo $rows['passed_10']; ?> from
                                        <?php echo $rows['board_10']; ?> Board with
                                        <?php echo $rows['percentage_10']; ?>%</h5>
                                </div>

                                <div class="edu">
                                    <h4>Senior Secondary School :</h4>
                                    <h5>In
                                        <?php echo $rows['passed_12']; ?> from
                                        <?php echo $rows['board_12']; ?> Board with
                                        <?php echo $rows['percentage_12']; ?>%</h5>
                                </div>

                                <div class="edu">
                                    <h4>Graduation :</h4>
                                    <h5>
                                        <?php echo $rows['course_g']; ?> in
                                        <?php echo $rows['passed_g']; ?> from
                                        <?php echo $rows['university_g']; ?> with
                                        <?php echo $rows['percentage_g']; ?>%</h5>
                                </div>
                                <div class="edu">
                                    <h4>Post Graduation :</h4>
                                    <h5>
                                        <?php echo $rows['course_pg']; ?> in
                                        <?php echo $rows['passed_pg']; ?> from
                                        <?php echo $rows['university_pg']; ?> with
                                        <?php echo $rows['percentage_pg']; ?>%
                                    </h5>
                                </div>
                            </div>
                        </div>


                        <div class="right-area">
                            <div class="about3">
                                <h2 class="title">Professional Details</h2>
                                <h4>LANGUAGES KNOWN :</h4>
                                <h5>
                                    <?php $lang =  explode(",", $rows['languages']); ?>
                                    <ol type="1">
                                        <?php for($i=0; $i<count($lang); $i++){?>
                                        <li>
                                            <?php echo $lang[$i];?>
                                        </li>
                                        <?php } ?>
                                    </ol>

                                    <h4>PROJECTS :</h4>
                                    <h5>
                                        <?php $project =  explode(",", $rows['projects']); ?>
                                        <ol type="1">
                                            <?php for($i=0; $i<count($project); $i++){?>
                                            <li>
                                                <?php echo $project[$i];?>
                                            </li>
                                            <?php } ?>
                                        </ol>
                                    </h5>

                                    <h4>CERTIFICATION :</h4>
                                    <h5>
                                        <?php $certi =  explode(",", $rows['certification']); ?>
                                        <ol type="1">
                                            <?php for($i=0; $i<count($certi); $i++){?>
                                            <li>
                                                <?php echo $certi[$i];?>
                                            </li>
                                            <?php } ?>
                                    </h5>

                                    <h4>OTHER SKILLS :</h4>
                                    <h5>
                                        <?php $prof_skill =  explode(",", $rows['skills']); ?>
                                        <ol type="1">
                                            <?php for($i=0; $i<count($prof_skill); $i++){?>
                                            <li>
                                                <?php echo $prof_skill[$i];?>
                                            </li>
                                            <?php } ?>
                                        </ol>
                                    </h5>

                                    <h4>HOBBIES :</h4>
                                    <h5>
                                        <?php $hobbies =  explode(",", $rows['hobbies']); ?>
                                        <ol type="1">
                                            <?php for($i=0; $i<count($hobbies); $i++){?>
                                            <li>
                                                <?php echo $hobbies[$i];?>
                                            </li>
                                            <?php } ?>
                                        </ol>
                                    </h5>

                                    <h4>About Me :</h4>
                                    <p>
                                        <?php echo $rows['about']; ?>
                                    </p>

                            </div>
                        </div>
                    </div>
                    <button onsubmit="return generatePDF()">Print</button>
            
            </div>
            
            <?php

?>
         <!--   <script src="https://cdn.jsdeliver.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdeliver.net/npm/jquery@4.6.1/dist/js/bootstrap.min.js"></script>
                                            -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        </body>

    </html>