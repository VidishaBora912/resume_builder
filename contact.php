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
    
    .contact {
        position: relative;
        min-height: 100vh;
        padding: 50px 100px;
        padding-top: 10px;
        padding-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: url(Images/b1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .contact .content {
        max-width: 800px;
        text-align: center;
    }
    
    .contact .content h2 {
        font-size: 40px;
        font-weight: 500;
        color: black;
    }
    
    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
    
    .container .contactInfo {
        width: 50%;
        display: flex;
        flex-direction: column;
    }
    
    .container .contactInfo .box {
        position: relative;
        padding: 20px 0;
        display: flex;
    }
    
    .container .contactInfo .box .icon {
        min-width: 40px;
        height: 40px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 80%;
        font-size: 22px;
    }
    
    .container .contactInfo .box .text {
        display: flex;
        margin-left: 20px;
        font-size: 20px;
        color: black;
        flex-direction: column;
        font-weight: 300;
        justify-content: center;
    }
    
    .container .contactInfo .box .text h3 {
        font-weight: 500;
        color: white;
    }
    
    .contactForm {
        width: 40%;
        padding: 40px;
        background: rgb(247, 232, 237);
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .contactForm h2 {
        font-size: 30px;
        color: rgba(255, 30, 0, 0.966);
        font-weight: 500;
    }
    
    .contactForm .inputBox {
        position: relative;
        width: 100%;
        margin-top: 20px;
    }
    
    .contactForm .inputBox input,
    .contactForm .inputBox textarea {
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #333;
        outline: none;
        resize: none;
    }
    
    .contactForm .inputBox span {
        position: absolute;
        Left: 0;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }
    
    .contactForm .inputBox input:focus~span,
    .contactForm .inputBox input:valid~span,
    .contactForm .inputBox textarea:focus~span,
    .contactForm .inputBox textarea:valid~span {
        color: #e91e6e;
        font-size: 16px;
        transform: translateY(-20px);
    }
    
    .contactForm .inputBox input[type="submit"] {
        width: 100px;
        background: #00bcd4;
        color: rgb(7, 7, 7);
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
    }
    
    @media(max-width: 991px) {
        .contact {
            padding: 50px;
        }
        .container {
            flex-direction: column;
        }
        .container .contactInfo {
            margin-bottom: 40px;
        }
        .container .contactInfo,
        .contactForm {
            width: 100%;
        }
    }
</style>

<body>
    <section class="contact">
        <div class="content">
            <h2>TALK TO US...</h2>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>ADDRESS</h3>
                        <p>Street-74 <br>Pivet Drive <br>London</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>EMAIL-ID</h3>
                        <p>siteenew121@gmail.com</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone No.</h3>
                        <p>7838831051</p>
                    </div>
                </div>
            </div>


            <div class="contactForm">
                <form action="thankyou.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required autocomplete="off">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="email" required autocomplete="off">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea name="msg" required autocomplete="off""></textarea>
                        <span>Type Your Message.....</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="send data" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>