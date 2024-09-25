
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Webleb - Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Make the body fill the viewport height */
            margin: 0; /* Remove default body margin */
            background-color: #f0f0f0; /* Add a background color */
        }
        .invalid-login-message {
         color: white; /* Change the text color to white */
}
       
    @media screen and (max-width: 300px) {
        .login-page {
            background-color: #fff; /* Add a background color to the login page */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 300px;
        }
        .login-form input {
        border: none;
        outline: none;
        width:100%;
        padding: 8px;
        margin: 5px 0;
        border-radius: 3px;
        box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.3);
    }
    }
        </style>
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post">
            <h2>Login</h2>
            <input type="email" placeholder="Email" required id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        <input type="password" placeholder="Password" required id="pass">


            <input type="button" id="enter2" value="Login">
              
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            <a type="button" href="http://localhost/cw/navbar.php" class="btn btn-outline-light" style="margin-top:10px; font-size: 13px;" >Back to Homepage</a>
            <article id="availability1">
            </article>
        </form>
        
    </div>
</div>

<script>
$(document).ready(function(){
$('#enter2').click(function(){

var email=$('#email').val();
var pass=$('#pass').val();

$.ajax({
method: "POST",
url: "result2.php",
data: { iemail:email,ipass:pass },
})
.done(function(msg) {
    var retObj = JSON.parse(msg);
    if (retObj.status == 1)
                window.location.href = "http://localhost/cw/admin/Welcome.php";
            else
                $('#availability1').html("Invalid Login");
        });
});
});


</script>

</html>
</body>
</html>
