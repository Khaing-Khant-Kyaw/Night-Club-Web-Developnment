<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css"/>
    <title>navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    *{
   margin: 0;
   padding: 0;
   color: black;
   font-family: sans-serif;
   letter-spacing: 1px;
   font-weight: 300;
}
body{
   overflow-x: hidden;
}
nav{
   height: 4.5rem;
   width: 100vw;
   background-color: #131418;
   box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
   display: flex;
   position: fixed;
   z-index: 2;
}

/*Styling logo*/
.logo{
   padding:1vh 1vw;
   text-align: center;
}
.logo img {
   height: 5rem;
   width: 5rem;
}

/*Styling Links*/
.nav-links{
   display: flex;
   list-style: none; 
   width: 88vw;
   padding: 0 0.7vw;
   justify-content: space-evenly;
   align-items: center;
   text-transform: uppercase;
   margin-top: 1rem;
}
.nav-links li a{
   text-decoration: none;
   margin: 0 0.7vw;
   color: white;
}
.nav-links li a:hover {
   color: #61DAFB;
}
.nav-links li {
   position: relative;
}
.nav-links li a:hover::before{
   width: 80%;
}


/*Styling Buttons*/
.login-button{
   background-color: transparent;
   border: 1.5px solid #f2f5f7;
   border-radius: 2em;
   padding: 0.6rem 0.8rem;
   margin-left: 2vw;
   font-size: 1rem;
   cursor: pointer;

}
.login-button:hover {
   color: #131418;
   background-color: #f2f5f7;
   border:1.5px solid #f2f5f7;
   transition: all ease-in-out 350ms;
}
.join-button{
   color: #131418;
   background-color: #61DAFB;
   border: 1.5px solid #61DAFB;
   border-radius: 2em;
   padding: 0.6rem 0.8rem;
   font-size: 1rem;
   cursor: pointer;
}
.join-button:hover {
   color: #f2f5f7;
   background-color: transparent;
   border:1.5px solid #f2f5f7;
   transition: all ease-in-out 350ms;
}
section{
    height: 100vh;
    padding-top: 100px;
}

.home1_img{
    position:relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    overflow: hidden;
}

/*Stying for small screens*/
@media screen and (max-width: 800px){

   nav{
       position: fixed;
       z-index: 3;
   }

   .nav-links{
       position: fixed;
       background: #131418;
       height: 100vh;
       width: 100%;
       flex-direction: column;
       clip-path: circle(50px at 90% -20%);
       -webkit-clip-path: circle(50px at 90% -10%);
       transition: all 1s ease-out;
       pointer-events: none;
   }
   .nav-links.open{
       clip-path: circle(1000px at 90% -10%);
       -webkit-clip-path: circle(1000px at 90% -10%);
       pointer-events: all;
   }
   .nav-links li{
       opacity: 0;
   }
   .nav-links li:nth-child(1){
       transition: all 0.5s ease 0.2s;
   }
   .nav-links li:nth-child(2){
       transition: all 0.5s ease 0.4s;
   }
   .nav-links li:nth-child(3){
       transition: all 0.5s ease 0.6s;
   }
   .nav-links li:nth-child(4){
       transition: all 0.5s ease 0.7s;
   }
   .nav-links li:nth-child(5){
       transition: all 0.5s ease 0.8s;
   }
   .nav-links li:nth-child(6){
       transition: all 0.5s ease 0.9s;
       margin: 0;
   }
   .nav-links li:nth-child(7){
       transition: all 0.5s ease 1s;
       margin: 0;
   }
   li.fade{
       opacity: 1;
   }
}
/*Animating Hamburger Icon on Click*/
.toggle .line1{
   transform: rotate(-45deg) translate(-5px,6px);
}
.toggle .line2{
   transition: all 0.7s ease;
   width:0;
}
.toggle .line3{
   transform: rotate(45deg) translate(-5px,-6px);
}
.w-100{
    height:100vh;
}
#events-link a{
   color: #61DAFB;
}
.carousel-inner {
        position: relative;
    }
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    #form {
    background-color: #131418;
    padding: 20px;
    transition: transform 0.3s ease;
}

#form:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
}
</style>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
            <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">NIGHTCLUB</span>
        </div>
       
        <ul class="nav-links" >
        <li><a href="navbar.php">Home</a></li>
            <li><a href="admin/upcoming.php">Events</a></li>
           

           <li id="events-link"><a href="#" class="btn">Artists Details</a></li>
           <li><a href="login.php" class="btn">Login</a></li>
        </ul>
       
    </nav>
    
    <section class="one">
        <div class="container">
        <article id="r_artist"></article></div>
    </section>
</body>
<script>
$(document).ready(function(){

$.ajax({

method: "GET",

url: "artistAPI.php",

})

.done(function( msg ) {
    var retObj = JSON.parse(msg);
    var table_str = '<div class="row">';
    if(retObj.length){

        $.each(retObj, function(key, value){
        table_str += '<div class="card-3 col-12 col-md-6 col-lg-3 mb-3">';
        table_str += '<div class="card ">';
        table_str += '<div class="row p-3">';
        table_str += '<div class="card-body col-5 col-sm-5 col-md-10 ">';
        table_str += '<img alt="" class="img-fluid " src="'+value.pr_img+'"></div>';
        table_str += '<div class="card-body col-5 col-sm-7 col-md-10 p-4">';

        table_str += '<p class="card-text"><i class="bi bi-person-circle"></i> Artist<tab2>-</tab2> '+value.name+'</p>';
        table_str += '<p class="card-text"><i class="bi bi-file-person-fill"></i> Biography - '+value.bio+'</p>';
        table_str += '<p class="card-text"><i class="bi bi-card-list"></i> Band name <tab2>-</tab2> '+value.b_name+'</p>';
        table_str += '<p class="card-text"><i class="bi bi-facebook text-dark mx-1"></i>Facebook - '+value.user_fb+'</p>';
        table_str += '<p class="card-text"><i class="bi bi-twitter text-dark mx-1"></i> Twitter- '+value.user_twt+'</p>';
        table_str += '<p class="card-text"><i class="bi bi-instagram text-dark mx-1"></i> Instagram- '+value.user_insta+'</p>';

        table_str += '</div></div></div></div>';



        });

    }

    table_str += '</div>';






    $('#r_artist').html(table_str);

});

});
</script>

</html>