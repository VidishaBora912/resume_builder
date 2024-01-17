<?php
    @include("connection.php");
    {
        if(isset($_POST['Save_and_Next']))
        {
            $lang = mysqli_real_escape_string($conn, $_POST['lang']);
            $project = mysqli_real_escape_string($conn, $_POST['project']);
            $prof_skill = mysqli_real_escape_string($conn, $_POST['prof_skill']);
            $certi = mysqli_real_escape_string($conn,$_POST['certi']);
            $hobbies = mysqli_real_escape_string($conn,$_POST['hobbies']);
            $about = mysqli_real_escape_string($conn,$_POST['about']);       
            
            if(isset($lang) && isset($project) && isset($prof_skill) && isset($certi) && isset($hobbies) && isset($about))
            {
                $sql = "SELECT * FROM resume WHERE useremail_id  = '$user_email' ";

                $result = mysqli_query($conn, $sql);

                $tempid = $_SESSION['userid'];
                
                $update = "UPDATE `resume` SET `languages`='$lang',`projects`='$project',`skills`='$prof_skill',`certification`='$certi',`hobbies`='$hobbies',`about`='$about' WHERE  useremail_id = '" . $tempid . "'";

                mysqli_query($conn,$update);
                header('Location:resume.php');
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
        
        .exp {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            padding-top: 10px;
            padding-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(#fff0f5, #dcdcdc);
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .exp .content {
            max-width: 800px;
            text-align: center;
        }
        
        .exp .content h2 {
            font-size: 60px;
            font-weight: 700;
            color: rgb(248, 96, 7);
            padding-top: 20px;
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
        
        .data .inputBox {
            position: relative;
            width: 100%;
            margin-top: 20px;
        }
        
        .data .inputBox textarea {
            width: 100%;
            padding: 8px 0px;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #da7086;
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
            color: #666;
        }
        
        .data .inputBox textarea:focus~span,
        .data .inputBox textarea:valid~span {
            color: #4b0082;
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
            .exp {
                padding: 50px;
            }
            .exp .content h2 {
                font-size: 30px;
                font-weight: 300;
            }
            .content {
                flex-direction: column;
            }
            .data {
                width: 100%;
            }
            .data .inputBox span {
                font-size: 20px !important;
                font-weight: 200;
            }
            .data .inputBox textarea {
                width: 100% !important;
                padding-top: 2vh;
            }
        }
    </style>


    <body>
        <section class="exp">
            <div class="content">
                <h2>WORK EXPERIENCE</h2>
            </div>

            <div class="data">
                <form name="experience" action="#" method="POST">

                    <div class="inputBox">
                        <textarea name="lang" autocomplete="off"></textarea>
                        <span>LANGUAGES KNOWN</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <textarea name="project" autocomplete="off"></textarea>
                        <span>PROJECTS</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <textarea name="prof_skill" autocomplete="off"></textarea>
                        <span>OTHER SKILLS</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <textarea name="certi" autocomplete="off"></textarea>
                        <span>CERTIFICATION</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <textarea name="hobbies" autocomplete="off"></textarea>
                        <span>HOBBIES</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <textarea name="about" autocomplete="off"></textarea>
                        <span>ABOUT ME</span>
                    </div>
                    <br>

                    <div class="inputBox">
                        <button type="submit" name="Save_and_Next" onclick="Save();">Save and Next</button>
                    </div>
                    <p style="color:#8b0000; font-size:18px; font-weight:500">(Please insert ',' after completion of each item e.g: C,C++,Python .)</style>
                    </p>
                </form>
            </div>
        </section>
    </body>


    </html>