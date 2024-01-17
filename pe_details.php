<?php 
    include("connection.php");
    {
        if(isset($_POST['Save_and_Next']))
        {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $cu_d = mysqli_real_escape_string($conn, $_POST['cd']);
            $dob = mysqli_real_escape_string($conn, $_POST['date']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
            $linkedin_id = mysqli_real_escape_string($conn,$_POST['lin']);
            $phoneno = mysqli_real_escape_string($conn,$_POST['p_num']);       
            $img = mysqli_real_escape_string($conn, $_FILES['img']['name']);

            
            $filename = $_FILES["img"]["name"];
            $tempname = $_FILES["img"]["tmp_name"];
            $folder = "upload/".$filename;
            echo $folder;
            move_uploaded_file($tempname,$folder);
            
            if(isset($name) && isset($cu_d) && isset($dob) && isset($address) && isset($email_id) && isset($linkedin_id) && isset($phoneno) && isset($img))
            {
                $sql = "SELECT * FROM resume WHERE email_id='$email_id'" ;

                $result = mysqli_query($conn, $sql);

                $tempid = $_SESSION['userid'];

                $update = "UPDATE `resume` SET `name`='$name',`current_designation`='$cu_d',`dateofbirth`='$dob',`address`='$address',`email_id`='$email_id',`linkedin_id`='$linkedin_id',`phoneno`='$phoneno',`image`='$folder' WHERE useremail_id = '" . $tempid . "'";
                
                mysqli_query($conn,$update);

                header('Location: professional_details.php');
                
            }
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
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
        font-family: 'Poppins', sans-serif;
    }
    
    .per {
        position: relative;
        min-height: 100vh;
        padding: 50px 100px;
        padding-top: 10px;
        padding-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: linear-gradient(#fbe3e8, #5cbdb9, #ebf6f5);
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .per .content {
        max-width: 800px;
        text-align: center;
    }
    
    .per .content h1 {
        font-size: 60px;
        font-weight: 600;
        color: rgb(248, 96, 7);
        padding-top: 8vh;
        text-shadow: 2.5px 2.5px black;
    }

    .data {
        width: 60%;
        height: auto;
        padding: 0px;
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
    
    .data .inputBox label {
        font-size: 20px;
        font-weight: 300;
        color: blue;
        background: none;
    }
    
    .data .inputBox input,
    .data .inputBox textarea {
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #800000;
        outline: none;
        resize: none;
    }
    
    .data .inputBox button[type="submit"] {
        width: auto;
        background: #00bcd4;
        color: rgb(7, 7, 7);
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
    }
    
    @media(max-width: 991px) {
        .per {
            padding: 50px;
        }
        .per .content h1 {
            font-size: 30px;
            font-weight: 300;
        }
        .content {
            flex-direction: column;
        }
        .data {
            width: 100%;
        }
    }
</style>



<body>
    <section class="per">
        <div class="content">
            <h1>PERSONAL DETAILS</h1>
        </div>

        <div class="data">
            <form name="personal_details" action="#" method="POST" enctype="multipart/form-data">

                <div class="inputBox">
                    <label>Name</label>
                    <input type="text" name="name" id="name" autocomplete="off" required placeholder="e.g.= AMIT"><br><br>
                    <span id="nname" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Current Designation</label>
                    <input type="text" name="cd" id="cd" autocomplete="off" required placeholder="e.g.= WEB DEVELOPER"><br><br>
                    <span id="ccd" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Date of Birth</label>
                    <input type="date" name="date" id="date" autocomplete="off" required placeholder="dd-mm-yyyy format"><br><br>
                    <span id="ddate" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Address</label>
                    <textarea name="address" id="address" autocomplete="off" required placeholder="Please Enter Your Address!"></textarea><br><br>
                    <span id="aaddress" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Email-id</label>
                    <input type="text" name="email_id" id="email_id" autocomplete="off" required placeholder="e.g. = abc@gmail.com"><br><br>
                    <span id="eemailid" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Linkedin-Id</label>
                    <input type="text" name="lin" id="lin" autocomplete="off" required placeholder="e.g. = www.linkedin.com"><br><br>
                    <span id="lin" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Phone Number</label>
                    <input type="tel" name="p_num" id="p_num" autocomplete="off" required>  <br><br>
                    <span id="pp_num" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <label>Upload Your Image</label><br><br>
                    <input type="file" name="img" id="img" autocomplete="off"> <br><br><br><br>
                    <span id="iimg" class="text-danger font-weight-bold"></span>
                </div>

                <div class="inputBox">
                    <button type="submit" class="btn btn-primary" name="Save_and_Next" onclick="Save();">Save and Next</button>
                </div>
            
            </form>
        </div>
    </section>

    
</body>

</html>