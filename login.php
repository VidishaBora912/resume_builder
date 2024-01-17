<?php
    @include("connection.php");
    {
    if(isset($_POST['Login']))
    {
        $user_email = mysqli_real_escape_string($conn, $_POST['email']);
        $user_pass = mysqli_real_escape_string($conn, $_POST['password']);
    
        $sql = "SELECT * FROM resume WHERE useremail_id = '$user_email' && password = '$user_pass' ";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result))
        {
            $_SESSION['userid'] = $user_email;
            
            header("Location: welcome.php");
        }
        else
        {
            $error[] = 'This email-Id is not registered! Kindly SignUp first.';
            
        }
    }
    }
    
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resume Builder</title>

</head>

<style>
    body {
        background: linear-gradient(to right, pink, white);
    }
    
    .myform {
        position: absolute;
        top: 15%;
        left: 35%;
        width: 400px;
        height: 460px;
        box-sizing: border-box;
        background: rgba(255, 255, 255, 0.6);
        box-shadow: 4px 2px 16px rgba(0, 0, 0, 0.4);
        border-radius: 8px;
        margin: 20px auto 0 auto;
        padding: 25px;
        color: #414141;
    }
    
    .data {
        display: block;
        font-size: 25px;
        font-weight: 600;
        color: #070707
    }
    
    .cm-input {
        display: block;
        font-size: 16px;
        font-weight: 400;
        box-sizing: border-box;
        padding: 10px;
        width: 100%;
        margin: 14px auto;
        border-radius: 20px;
        border: 1px solid #ccc;
    }
    
    .cm-input:focus {
        outline: 0;
        border-color: #f9cb81;
    }
    
    .cm-input:invalid {
        border-color: #e41b17;
    }
    /* Login Button Design */
    
    .btn-login {
        display: block;
        width: 100%;
        padding: 10px;
        border: 0;
        color: #fff;
        border-radius: 20px;
        cursor: pointer;
        font-size: 20px;
        font-weight: 300;
    }
    
    .btn-login:focus {
        outline: 0;
    }
    
    .btn-login:hover {
        opacity: 0.8;
        transition: .3s;
    }
    /* Gradient Background */
    
    .gr-bg {
        background: rgb(252, 205, 128);
        background: linear-gradient(90deg, rgba(252, 205, 128, 1) 0%, rgba(209, 122, 142, 1) 55%, rgba(220, 159, 174, 1) 100%);
    }
    /* For title */
    
    .form-title {
        padding: 1px;
        text-align: center;
        position: relative;
    }
    
    .form-title h2 {
        font-size: 30px;
        color: #5c86e1;
        position: relative;
        padding-top: 0.1px;
        padding-bottom: 0.1px;
    }
    
    .form-title .user-icon {
        position: absolute;
        font-size: 42px;
        color: #fff;
        width: 90px;
        height: 90px;
        line-height: 90px;
        text-align: center;
        border-radius: 45px;
        top: -60px;
        left: -45px;
    }
    @media (max-width: 400px){
        .myform {        
        width: auto;
        height: auto;
        position: absolute;
        top: 7%;
        left: auto;
        }
    }
    
</style>

<body>
    <form class="myform" action="#" method="POST">
        <div class="form-title">
            <div class="user-icon gr-bg">
                <i class="fa fa-user"></i>
            </div>
            <h2> Login</h2>
        </div>

        <label for="email" class="data"> Email:</label>
        <input type="email" name="email" class="cm-input" required autocomplete="off" placeholder="Enter your email adress">
        <label for="pass" class="data"> Password:</label>
        <input name="password" type="password" class="cm-input" required autocomplete="off" placeholder="Enter your password">
        <br>
        <button type="submit" name="Login" class="btn-login  gr-bg">Login</button><br>
        
        <font size="5" color="black">           
            <center>Don't have account?<a href="signup.php">Signup</a></center>
        </font>
    </form>

</body>

</html>