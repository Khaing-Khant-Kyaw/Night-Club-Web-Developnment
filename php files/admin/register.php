<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb - Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
    <div class="form">
        <form class="login-form" method="POST">
            <h2>Register</h2>
            <input type="text" placeholder="User Name *" required id="username">
            <input type="text" placeholder="Full Name *" required id="fname">
            <input type="text" placeholder="Phone Number *" required id="ph">
            <input type="email" placeholder="Email *" required id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input type="password" placeholder="Password *" required id="pass">

            <input type="button" id="enter" value="Create">
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
            <p class="success-message" id="created-message" style="color: green;"></p> 
            <article id="availability2">
            </article>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
<script>
$(document).ready(function(){
    $('#enter').click(function(){
        var username=$('#username').val();
        var fname = $('#fname').val();
        var ph = $('#ph').val();
        var email = $('#email').val();
        var pass = $('#pass').val();

        $.ajax({
            method: "POST",
            url: "result.php",
            data: { iusername:username,ifname:fname, iph:ph, iemail:email,ipass:pass },
        })
        .done(function( msg ) {
            var response = JSON.parse(msg);

            if (response.message === "User created successfully") {
                $('#created-message').html("Created Successfully"); // Update the created message
            } else {
                $('#availability2').html(response.message); // Display other messages
            }
        });
    });
});

</script>
</html>
