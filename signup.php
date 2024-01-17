<?php
    @include("connection.php");
    {
        if(isset($_POST['SignUp']))
        {
            $user_firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $user_lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
            $user_email = mysqli_real_escape_string($conn, $_POST['email']);
            $user_pno = mysqli_real_escape_string($conn, $_POST['pno']);
            $user_pass = mysqli_real_escape_string($conn, $_POST['password']);
            $user_cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);

            if(isset($user_firstname) && isset($user_lastname) && isset($user_email) && isset($user_pno) && isset($user_pass) && isset($user_cpass))
            {

                $sql = "SELECT * FROM resume WHERE useremail_id  = '$user_email' && password = '$user_pass' ";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                    $error[] = 'This email-Id is already registered!';
                }
                else
                {
                    if($user_pass != $user_cpass)
                    {
                        $error[] = 'Password not matched!';
                    }
                    else
                    {
                        $insert = "INSERT INTO resume(userfirstname , userlastname , useremail_id , userphno  , password , confirmpassword)
                        VALUES('$user_firstname','$user_firstname','$user_email','$user_pno','$user_pass','$user_cpass')";

                        mysqli_query($conn,$insert);

                        header('location:login.php');
                            
                    }
                }
            }
        }
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        
        .container {
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px 30px;
            border-radius: 5px;
        }

        .container .title {
            font-size: 30px;
            font-weight: 600;
            text-align: center;
            color: #0a0a0a;
            position: relative;
        }

        .container .title::before {
            content: '';
            position: absolute;
            align: center;
            bottom: 0;
            height: 3px;
            width: 110px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
            
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        .user-details .input-box .details {
            display: block;
            font-size: 20px;
            font-weight: 500;
            color: #0a0a0a;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            font-size: 20px;
        }
        
        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }
        
        form .form-footer{
            height: 45px;
            margin: 15px 0;
        }

        form .form-footer button{
            height: 100%;
            width: 100%;
            outline: none;
            color: #fff;
            border: none;
            font-size: 20px;
            font-weight: 500;
            border-radius: 5px;
            letter-spacing: 1px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        form .form-footer button:hover{
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        
        @media (max-width: 584px) {
            .container {
                max-width: 100%;
            }

           form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }
            .container form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::webkit-scrollbar {
                width: 0;
            }
        }
        
        
        
    </style>

    <body>

        <div class="container">
            <div class="title">SignUp</div>

            <form action="#" method="post" onsubmit="return validation()" class="bg-light">
                <?php
                    if(isset($error))
                    {
                        foreach($error as $error)
                        {
                            echo '<div class="error-msg" style="background: #fff; color: #ff0000; text-align: center">'.$error.'</div>';
                        };
                    };
                ?>

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="firstname" id="firstname" class="form-input" placeholder="AMIT" autocomplete="off">
                        <span id="f_name" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lastname" id="lastname" class="form-input" placeholder="SHARMA" autocomplete="off">
                        <span id="l_name" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="input-box">
                        <span class="details">Email-Id</span>                        
                        <input type="email" name="email" id="email" class="form-input" placeholder="abc@gmail.com" autocomplete="off">
                        <span id="emailid" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" name="pno" id="pno" class="form-input" autocomplete="off">
                        <span id="phno" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" id="password" class="form-input" placeholder="enter your password" autocomplete="off">
                        <span id="pass" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="cpassword" id="cpassword" class="form-input" placeholder="enter your password again" autocomplete="off">
                        <span id="cpass" class="text-danger font-weight-bold"></span>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn" name="SignUp">SignUp</button>
                </div>
                <font size="5" color="black">
                    <center>Already have an account?<a href="login.php">Login</a></center>
                </font>
                
            </form>
        </div>

        <script type="text/javascript">
            function validation() {
                var n1 = document.getElementById('firstname').value;
                var n2 = document.getElementById('lastname').value;
                var e1 = document.getElementById('email').value;
                var p1 = document.getElementById('pno').value;
                var c1 = document.getElementById('password').value;
                var c2 = document.getElementById('cpassword').value;

                if (n1 == "") {
                    document.getElementById('f_name').innerHTML = " ** Please fill the required field";
                    return false;
                }
                if (!isNaN(n1)) {
                    document.getElementById('f_name').innerHTML = " ** Only alphabetic characters are allowed";
                    return false;
                }

                if (n2 == "") {
                    document.getElementById('l_name').innerHTML = " ** Please fill the required field";
                    return false;
                }
                if (!isNaN(n2)) {
                    document.getElementById('l_name').innerHTML = " ** Only alphabetic characters are allowed";
                    return false;
                }

                if (e1 == "") {
                    document.getElementById('emailid').innerHTML = " ** Please fill the required field";
                    return false;
                }

                if (e1.indexOf('@') <= 0) {
                    document.getElementById('emailid').innerHTML = " ** Invalid position of @";
                    return false;
                }

                if (e1.charAt(e1.length - 4) != '.') {
                    document.getElementById('emailid').innerHTML = " ** Invalid position od '.' ";
                    return false;
                }

                if (p1 == "") {
                    document.getElementById('phno').innerHTML = " ** Please fill the required field";
                    return false;
                }
                if (isNaN(p1)) {
                    document.getElementById('phno').innerHTML = " ** Only numbers are allowed";
                    return false;
                }
                if (p1.length != 10) {
                    document.getElementById('phno').innerHTML = " ** Phone number must be of only 10 digits";
                    return false;
                }

                if (c1 == "") {
                    document.getElementById('pass').innerHTML = " ** Please fill the required field";
                    return false;
                }
                if (c1.length < 8) {
                    document.getElementById('pass').innerHTML = " ** Password must have at least 8 characters";
                    return false;
                }

                if (c2 == "") {
                    document.getElementById('cpass').innerHTML = " ** Please fill the required field";
                    return false;
                }
                if (c1 != c2) {
                    document.getElementById('cpass').innerHTML = " ** The Passwords do not match";
                    return false;
                }
            }
        </script>
    </body>
</html>








    