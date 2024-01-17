<?php
    @include("connection.php");
    {
        if(isset($_POST['Save_and_Next']))
        {
            $p1 = mysqli_real_escape_string($conn, $_POST['passed1']);
            $b1 = mysqli_real_escape_string($conn, $_POST['board1']);
            $per1 = mysqli_real_escape_string($conn, $_POST['percentage1']);
            $p2 = mysqli_real_escape_string($conn,$_POST['passed2']);
            $b2 = mysqli_real_escape_string($conn,$_POST['board2']);
            $per2 = mysqli_real_escape_string($conn,$_POST['percentage2']);
            $u1 = mysqli_real_escape_string($conn, $_POST['uni1']);
            $c1 = mysqli_real_escape_string($conn,$_POST['cour1']);
            $p3 = mysqli_real_escape_string($conn,$_POST['passed3']);
            $per3 = mysqli_real_escape_string($conn,$_POST['percentage4']);     
            $u2 = mysqli_real_escape_string($conn, $_POST['uni2']);
            $c2 = mysqli_real_escape_string($conn,$_POST['cour2']);
            $p4 = mysqli_real_escape_string($conn,$_POST['passed4']);
            $per4 = mysqli_real_escape_string($conn,$_POST['percentage4']);   
            
            if(isset($p1) && isset($b1) && isset($per1) && isset($p2) && isset($b2) && isset($per2) 
            && isset($u1) && isset($c1) && isset($p3) && isset($per3) && isset($u2) && isset($c2) 
            && isset($p4) && isset($per4))
            {
            
                $sql = "SELECT * FROM resume WHERE useremail_id  = '$user_email' ";

                $result = mysqli_query($conn, $sql);

                $tempid = $_SESSION['userid'];
                
                $update = "UPDATE `resume` SET `passed_10`='$p1',`board_10`='$b1',`percentage_10`='$per1',`passed_12`='$p2',`board_12`='$b2',`percentage_12`='$per2',`university_g`='$u1',`course_g`='$c1',`passed_g`='$p3',`percentage_g`='$per3',`university_pg`='$u2',`course_pg`='$c2',`passed_pg`='$p4',`percentage_pg`='$per4' WHERE useremail_id = '" . $tempid . "'";

                

                mysqli_query($conn,$update);
                header('Location:experience.php');
            }
        }
    }
?>


    <!DOCTYPE html>
    <html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />

    </head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        .pro {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            padding-top: 10px;
            padding-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #ffdab9;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .pro .content {
            max-width: 800px;
            text-align: center;
        }
        
        .pro .content h1 {
            font-size: 60px;
            font-weight: 600;
            color: #d2691e;
            padding-top: 5vh;
            padding-bottom: 0.1px;
            text-shadow: 2.5px 2.5px black;
        }
        
        .data {
            width: 60%;
            padding: 40px;
            background: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .data .text {
            font-size: 30px;
            font-weight: 200;
            color: #696969;
            padding-top: 2vh;
        }
        
        .data .inputBox {
            position: relative;
            width: 100%;
            margin-top: 20px;
        }
        
        .data .inputBox input,
        .data .inputBox textarea {
            width: 100%;
            padding: 8px 0px;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #c71585;
            outline: none;
            resize: none;
        }
        
        .data .inputBox span {
            position: absolute;
            Left: 0;
            padding: 5px 0;
            font-size: 20px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #00008b;
        }
        
        .data .inputBox input:focus~span,
        .data .inputBox input:valid~span,
        .data .inputBox textarea:focus~span,
        .data .inputBox textarea:valid~span {
            color: #00f;
            font-size: 30px;
            font-weight: 500;
            transform: translateY(-40px);
            transform-box: translate(-20px);
        }
        
        .data .inputBox button[type="submit"] {
            width: auto;
            background: #00bcd4;
            color: rgb(7, 7, 7);
            border: none;
            cursor: default;
            padding: 10px;
            font-size: 20px;
        }
        
        @media(max-width: 991px) {
            .pro {
                padding: 50px;
            }
            .pro .content h1 {
                font-size: 30px;
                font-weight: 300;
            }
            .content {
                flex-direction: column;
            }
            .data {
                width: 100%;
            }
            .data .text {
                font-size: 20px;
                font-weight: 200;
            }
            .data .inputBox span {
                font-size: 18px !important;
            }
        }
    </style>

    <body>
        <section class="pro">
            <div class="content">
                <h1>PROFESSIONAL DETAILS</h1>
            </div>

            <div class="data">
                <form name="professional_details" action="#" method="POST">

                    <div class="text">
                        <h2>High School Details</h2>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="passed1" class="form-control" autocomplete="off">
                        <span>Passing Year</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="board1" class="form-control" autocomplete="off">
                        <span>Board</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="percentage1" class="form-control" autocomplete="off">
                        <span>Percentage</span>
                    </div>
                    <br>

                    <div class="text">
                        <h2>Senior Secondary School Details</h2>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="passed2" class="form-control" autocomplete="off">
                        <span>Passing Year</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="board2" class="form-control" autocomplete="off">
                        <span>Board</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="percentage2" class="form-control" autocomplete="off">
                        <span>Percentage</span>
                    </div>
                    <br>

                    <div class="text">
                        <h2>Graduation Details</h2>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="uni1" class="form-control" autocomplete="off">
                        <span>University Name</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="cour1" class="form-control" autocomplete="off">
                        <span>Course</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="passed3" class="form-control" autocomplete="off">
                        <span>Passing Year</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="percentage3" class="form-control" autocomplete="off">
                        <span>Percentage</span>
                    </div>
                    <br>

                    <div class="text">
                        <h2>Post Graduation Details</h2>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="uni2" class="form-control" autocomplete="off">
                        <span>University Name</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="cour2" class="form-control" autocomplete="off">
                        <span>Course</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="passed4" class="form-control" autocomplete="off">
                        <span>Passing Year</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <input type="text" name="percentage4" class="form-control" autocomplete="off">
                        <span>Percentage</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <button type="submit" class="btn btn-primary" name="Save_and_Next" onclick="Save();">Save and Next</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>