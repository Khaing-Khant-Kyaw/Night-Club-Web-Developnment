<!DOCTYPE html>
<html>
<head>
<!--  SET THE CHARACTER SET -->
<meta charset="UTF-8">
<!--  SET THE PAGE TITLE (SHOWN IN TAB ON CHROME)-->
<title>Session 8 - Web services</title>
<!--  SETUP SOME META DATA FOR THIS PAGE -->
<meta name="keywords" content="HTML,CSS,5130COMP">
<meta name="author" content="Dr Paul C. Bell">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  INCLUDE OUR CSS STYLE SHEETS -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


<style>
    *{
   margin: 0;
   padding: 0;
   color: #f2f5f7;
   font-family: sans-serif;
   letter-spacing: 1px;
   font-weight: 300;
   box-sizing: border-box;
}

article h1 {
    margin-top: 0;
}


body {
    margin: 0;
    overflow-x: hidden;
   
}
.one{
    color:white;
}

nav{
   height: 4.7rem;
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
}
.nav-links li a{
   text-decoration: none;
   margin: 0 0.7vw;
   color:white;
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

/*Styling Hamburger Icon*/

section{
    height: 100vh;
}
.nav-bar {
    height: 7vh;
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

nav {
   display: flex;
   justify-content: space-between;
   align-items: center;
   background: #131418;
   padding: 10px;
}
.dropdown-toggle{
display:block;
background-color: white; 
    border: none; 
    cursor: pointer;
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
.nav-links.open {
    clip-path: circle(1000px at 90% -10%);
    -webkit-clip-path: circle(1000px at 90% -10%);
    pointer-events: all;
    display: flex;
}
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
*{
    color:black;
}
.content-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.home1_img {
    width: 100%;
    height: 200%;
    object-fit: cover;
    object-position: center;
    z-index: -1;
}

#form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.7); /* Add background color for better readability */
    padding: 20px;
    
}
p,h1{
    color:white;
}


  #create {
    padding: 10px 20px; /* Adjust padding to increase button size */
    font-size: 16px; /* Adjust font size as needed */
    
  }

  #form {
    position: absolute;
    top: 30%; /* Adjust the value to decrease the distance even more */
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 30px;
}


input[type="text"],
input[type="number"] {
    padding: 10px 20px; /* Adjust padding to make them larger */
    font-size: 16px; /* Adjust font size to make them larger */
    border: 1px solid #ccc; /* Add a border for better visibility */
    border-radius: 5px; /* Add some border radius for a rounded appearance */
    margin-bottom: 10px; /* Add margin to separate input fields */
}
h1 {
        font-size: 36px; /* Adjust the value as needed */
    }
    #events-link a{
   color: #61DAFB;
}
</style>

<body>
<script>
        $(document).ready(function() {
    $('#toggle-button').click(function() {
        $('.nav-links').toggleClass('open'); // Toggle the 'open' class on .nav-links
    });
});

        </script>
    <section class="nav-bar">
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
            <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">Kai Ra</span>
        </div>
        <div class="dropdown-toggle" id="toggle-button">
        <div class="toggle-line line1"></div>
        <div class="toggle-line line2"></div>
        <div class="toggle-line line3"></div>
    </div>
       
        <ul class="nav-links" >
            <li><a href="http://localhost/cw/navbar.php">Home</a></li>
            <li><a href="http://localhost/cw/admin/editEvent.php">Edit Events & Artists</a></li>
            <li><a href="http://localhost/cw/admin/dashboard.php">Events</a></li>
           
            <li id="events-link"><a href="#">Artists</a></li>
           <li><a href="http://localhost/cw/admin/register.php" class="btn mt-4">Register</a></li>
        </ul>
       
    </nav>
    </section>
    <section class="one">
        <div class="content-wrapper">
            
                <img src="thumbnail/3.jpg" alt="" class="home1_img">
				<div id="form" style="margin-top: 300px;">
		
		
			<h1>Create Artists Here!</h1><br><br>
			 <p>Artist ID : <br><input type="text" id="id"><br><br>
			 Name: <br> <input type="text" id="name"><br><br>
			 Bio : <br><input type="text" id="bio"><br><br>
			 Band Name :<br> <input type="text" id="b_name"><br><br>
			 Facebook : <br><input type="text" id="fb"><br><br>
			 Twitter:<br><input type="text" id="twt"><br><br>
			 Instagram : <br><input type="text" id="insta"><br><br>
			 Pr_image :<br> <input type="text" id="img"><br><br></p>

			 <input type="button" id="create" value="Create"><br>


		

    	
    	<article id="results">

    	</article>
	</div>
                
    </section>
	<section>
	<img src="thumbnail/6.jpg" alt="" class="home1_img">
	</section>
</body>
<script>
   

$(document).ready(function(){

$('#create').click(function(){

var id=$('#id').val();
var name=$('#name').val();
var bio=$('#bio').val();
var b_name=$('#b_name').val();
var fb=$('#fb').val();
var twt=$('#twt').val();
var insta=$('#insta').val();
var img=$('#img').val();
$.ajax({
method: "post",
url: "CRUDExample.php",
data: { iid:id, iname:name, ibio:bio, ib_name:b_name, ifb:fb, itwt:twt, iinsta:insta, iimg:img }
})
.done(function( msg ) {
	var retObj=JSON.parse(msg);
	$('#results').html(retObj);
});
});

$('#find').click(function(){
var from = $('#datepicker2').datepicker('getDate');
var fromdate= $.datepicker.formatDate('yy-mm-dd', from);
var to = $('#datepicker3').datepicker('getDate');
var todate= $.datepicker.formatDate('yy-mm-dd', to);
$.ajax({
method: "get",
url: "CRUDExample.php",
data: { fdate:fromdate,tdate:todate },
})
.done(function( msg ) {
	var retObj = JSON.parse(msg);
	var table_str = '<table><thead><tr><th>Musician ID</th><th>Booking Date</th></tr></thead>';
    table_str += '<tbody>'; 
	if(retObj.length){
		$.each(retObj, function(key, value){ 
        table_str +='<tr><td>'+value.musician_id+'</td><td>'+value.booking_date+'</td></tr>';
     });
	}
$('#results').html(table_str);
});
});

$('#change').click(function(){
var oldid=$('#oldid').val();
var newid=$('#newid').val();
var old_name=$('#oldname').val();
var new_name=$('#newname').val();
var oldbio=$('#oldbio').val();
var newbio=$('#newbio').val();
var oldband=$('#oldband').val();
var newband=$('#newband').val();
var old_name=$('#oldfb').val();
var new_name=$('#newname').val();
var old_name=$('#oldname').val();
var new_name=$('#newname').val();
var old_name=$('#oldname').val();
var new_name=$('#newname').val();
var old_name=$('#oldname').val();
var new_name=$('#newname').val();
$.ajax({
method: "put",
url: "CRUDExample.php",
data: { ioldid : oldid, inewid : newid ,iold_name:old_name , inew_name:new_name,ioldbio : oldbio, inewbio:newbio,
		ioldband:oldband, inewband:newband, }

})
.done(function( msg ) {
	var retObj = JSON.parse(msg);
	$('#results').html(retObj);
});
});


$('#Delete').click(function(){
var deletename=$("#deletename").val();
$.ajax({
method: "delete",
url: "CRUDExample.php",
data: { iname:deletename },
})
.done(function( msg ) {
	var retObj = JSON.parse(msg);
	$('#results').html(retObj);
});
});


});
</script>


</html>