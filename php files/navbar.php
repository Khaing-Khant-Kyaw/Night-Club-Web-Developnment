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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<style>
    *{
   margin: 0;
   padding: 0;
   color: #f2f5f7;
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
.dropdown-open.nav-links{
    display:block;
}
@media screen and (max-width: 800px){

    nav {
       display: flex;
       justify-content: space-between;
       align-items: center;
       background: #131418;
       padding: 10px;
   }
   .dropdown-toggle{
    display:block;
   }
   .logo {
       margin-left: 10px;
   }
   .nav-links {
       display: none; /* Hide the links initially */
       flex-direction: column;
       background: #131418;
       width: 100%;
       position: absolute;
       top: 60px;
       left: 0;
       z-index: 1;
   }
   .nav-links.open{
       clip-path: circle(1000px at 90% -10%);
       -webkit-clip-path: circle(1000px at 90% -10%);
       pointer-events: all;
       display:flex;
   }
   .nav-links li{
       opacity: 1;
       margin: 5px 0;
   }
   .dropdown-open.toggle-line{
    background-color:#f2f5f7; 
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
    padding: 100px;
    transition: transform 0.3s ease;
}

#form:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
}
</style>

<body>
    
<nav>
    <div class="logo" style="display: flex; align-items: center;">
        <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">Kai Ra</span>
    </div>
    <div class="dropdown-toggle">
        <div class="toggle-line line1"></div>
        <div class="toggle-line line2"></div>
        <div class="toggle-line line3"></div>
    </div>
       
        <ul class="nav-links" >
        <li id="events-link"><a href="#">Home</a></li>
            <li><a href="admin/upcoming.php">Events</a></li>
            <li><a href="artist.php">Artists Details</a></li>
           

           <li><a href="login.php" class="btn">Login</a></li>
           
        </ul>
       
    </nav>
    
    <section class="one">
    
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='admin/artist/thumbnail/8.jpg' class="d-block w-100" alt="...">
      <div class="carousel-caption">
    <div id="form" style="background-color: #131418; padding: 20px;">
        <h1>About Us !</h1><br><br>
        <div id="form-container">
            <p>"Welcome to our Kai Ra nightclub destination, where music, dance, and vibrant energy unite. Immerse yourself in unforgettable nights filled with rhythm and excitement, creating memories that last a lifetime.".</p>
        </div>
    </div>
</div>

    </div>
    <div class="carousel-item">
      <img src="admin/artist/thumbnail/9.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
    <div id="form" style="background-color: #131418; padding: 20px; ">
        <h1>About Us !</h1><br><br>
        <div id="form-container">
            <p>"Welcome to our Kai Ra nightclub destination, where music, dance, and vibrant energy unite. Immerse yourself in unforgettable nights filled with rhythm and excitement, creating memories that last a lifetime."</p>
        </div>
    </div>
</div>
    </div>
    <div class="carousel-item">
      <img src="admin/artist/thumbnail/10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
    <div id="form" style="background-color: #131418; padding: 20px;">
        <h1>About Us !</h1><br><br>
        <div id="form-container">
            <p>"Welcome to our electrifying nightclub destination, where music, dance, and vibrant energy unite. Immerse yourself in unforgettable nights filled with rhythm and excitement, creating memories that last a lifetime."</p>
        </div>
    </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="content-wrapper">
            
            <img src="artist/thumbnail/3.jpg" alt="" class="home1_i
            mg">
            
            </div>
</div>
    </section>
    
</body>

<script>
$(document).ready(function () {
    $(".dropdown-toggle").click(function () {
        $(".nav-links").toggleClass("open"); // Toggle the class on the .nav-links element
    });
});
</script>
</body>

</html>