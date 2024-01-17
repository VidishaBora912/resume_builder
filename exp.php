<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Experience</title>
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
    
    body {
        background: #f1af74;
    }
    
    .contactForm {
        position: absolute;
        top: 10%;
        left: 30%;
        width: 40%;
        padding: 40px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .contactForm h2 {
        font-size: 40px;
        color: rgba(4, 0, 255, 0.966);
        font-weight: 600;
    }
    
    .contactForm .inputBox {
        position: relative;
        width: 100%;
        margin-top: 30px;
    }
    
    .contactForm .inputBox input,
    .contactForm .inputBox textarea {
        width: 100%;
        padding: 8px 0;
        font-size: 20px;
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
        font-size: 20px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }
    
    .contactForm .inputBox input:focus~span,
    .contactForm .inputBox input:valid~span,
    .contactForm .inputBox textarea:focus~span,
    .contactForm .inputBox textarea:valid~span {
        color: #f707e3;
        font-size: 17px;
        font-weight: 500;
        transform: translateY(-20px);
    }
    
    button {
        position: absolute;
        top: 85%;
        right: 70%;
        font-size: 20px;
        padding: 10px 20px;
        margin: 50px 0 50px 650px;
        background-color: rgb(73, 67, 67);
        border: none;
        outline: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        transition: .5s;
    }
    
    @media(max-width: 991px) {
        .contactForm {
            position: absolute;
            top: auto !important;
            left: auto !important;
            width: auto !important;
        }
        .contactForm h2 {
            font-size: 20px !important;
            font-weight: 400 !important;
        }
        button {
            position: absolute;
            top: auto !important;
            left: auto !important;
            width: auto !important;
    }
</style>

<body>

    <div class="contactForm">

        <form action="thankyou.php" method="POST">
            <h2>Share Your Experience</h2>
            <div class="inputBox">
                <input type="text" name="name" required autocomplete="off">
                <span>Full Name</span>
            </div>

            <div class="inputBox">
                <input type="text" name="email" required autocomplete="off">
                <span>Email</span>
            </div>

            <div class="inputBox">
                <textarea name="msg" required autocomplete="off" "></textarea>
                <span>Write your Experience.....</span>
            </div>        
        
            <button type="submit " >Send Message</button>

        </form>

    </div>     
            
</body>

</html>