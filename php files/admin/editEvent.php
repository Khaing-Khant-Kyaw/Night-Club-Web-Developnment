<?php
    session_start();
if (isset($_SESSION["username"])) {
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e34dae2732.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <style>
      .outer-wrapper {

margin: 10px;

margin-left: 20px;

margin-right: 20px;

border: 1px solid black;

border-radius: 4px;

box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.9);

max-width: fit-content;

max-height: fit-content;





}

.table-wrapper {



overflow-x: scroll;

height: fit-content;

margin-top: 22px;

margin: 15px;

padding-bottom: 20px;



}

table {



min-width: max-content;

border-collapse: separate;

border-spacing: 0px;    



}

table th{

position: sticky;

top: 0px;

background-color: #133b5c;

color: rgb(241, 245, 179);

text-align: center;

font-weight: normal;

font-size: 18px;

outline: 0.7px solid black;

border: 1.5px solid black;

}

table th, table td {



padding: 15px;

padding-top: 10px;

padding-bottom: 10px;



}

table td {

text-align: left;

font-size: 15px;

border: 1px solid rgb(177, 177, 177);

padding-left: 20px;  

}
      </style>

</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="upcoming.php">Upcoming Events</a></li>
            <li><a class="dropdown-item" href="previous.php">Previous Events</a></li>
        </ul>
        </li>
        <form class="d-flex">
        </ul>
        <?php
    if (isset($_SESSION["username"])) {
        $name = $_SESSION["username"];
        echo <<<icon
            <a href="dashboard.php" class="btn btn-secondary me-2"><i class="fa-solid fa-user-large"></i>$name</a>
        icon;
    } else {
        echo <<<login
        <a href="login.php" class="btn btn-secondary me-2"><i class="fa-solid fa-right-to-bracket mx-2"></i>Admin Login</a>
        login;
    }
    ?>
</form>
    </div>
  </div>
</nav>
<div class="container-fluid">
        <div class="row g-0">
            <nav class="py-3 col-2 bg-light pe-3">
            <div class="list-group text-center text-lg-start">
              
                <a href="editEvent.php" class="list-group-item list-group-item-action active">
                <i class="fa-solid fa-pen-to-square"></i>
                    <span class="d-none d-lg-inline">Edit Events</span>
                </a>
            </div>
            </nav>
            <main class="col-10">
              <div class='row'>
                  <div class='col-12'>
                    <div class="outter-wrapper">
                    <div class="table-wrapper">

                    <table class = 'table table-striped table-light' id= 'editTable'>
 
                    </table>
                    </div>
                    </div>
                  </div>
              </div>
            </main>
        </div>
</div>
<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="editModalLabel">Edit Event Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="info_update">

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" id="update">Update</button>
      </div>
    </div>
  </div>
</div>
<script>
        $(document).ready(function(){
            $.ajax({
                method: "GET",
                url: "UpcomingAPI.php",
                //data: {case :2}                
            })
            .done(function( msg ) {
               let retObj=JSON.parse(msg);
               var table_str = '<thead><tr><th>Event Name</th><th>Artist Name</th><th>date</th><th>Start Time</th><th>End Time</th><th>Fee</th><th>Capacity</th><th>Detail</th><th>Category</th><th></th><th></th></thead>';
                table_str += '<tbody>';
	              if(retObj.length) {
                $.each(retObj, function(key,value) {
                    table_str +='<tr><td>'+value.event_name+'</td><td>'+value.name+'</td><td>'+value.date+'</td><td>'+value.start_t+'</td><td>'+value.end_t+'</td><td>'+value.fee+'</td><td>'+value.max_cap+'</td><td>'+value.detail+'</td><td>'+value.category+'</td>';
                    table_str += '<td><button class = "btn btn-dark edit_btn" id="'+value.event_id+'">EDIT</button></td>';
                    table_str += '<td><button class = "btn btn-dark delete_btn" id="'+value.event_id+'">DELETE</button></td></tr>';
                });
            }
			          table_str +='</tbody>';
                 $('#editTable').append(table_str);
            });
          });
           $(document).on('click','.edit_btn', function(){
                var edit_id= $(this). attr('id');
                $.ajax({
                      url: 'editeventapi.php',
                      method: 'PUT',
                      data: {edit_id: edit_id}
                })
                .done(function(data){
                  var retObj = JSON.parse(data);
                  console.log(retObj);
                 
                  var formData='<form class="p-5 bg-light row g-3" id="update_form"><div class="col-md-6><label for="eventname" class="form-label">Event Name</label><input type="text" class="form-control" name="eventname" value="'+retObj[0].event_name+'"></div>';    
                  formData+='<div><label for="eventid" class="form-label">Event ID</label><input type="text" class="form-control" name="eventID" value="'+retObj[0].event_id+'"></div>';  
                  formData+='<div ><label for="artistname" class="form-label">Artist Name</label><input type="text" class="form-control" name="name" value="'+retObj[0].name+'"></div>'; 
                  formData+='<div><label for="eventcat" class="form-label">Event Category</label><input type="text" class="form-control" name="eventcat" value="'+retObj[0].category+'"></div>';   
                  formData+='<div ><label for="date" class="form-label">Event Date</label><input type="text" class="form-control" name="date" value="'+retObj[0].date+'"></div>';
                  formData+='<div><label for="start_time" class="form-label">Start Time</label><input type="text" class="form-control" name="start_time" value="'+retObj[0].start_t+'"></div>';
                  formData+='<div><label for="end_time" class="form-label">End Time</label><input type="text" class="form-control" name="end_time" value="'+retObj[0].end_t+'"></div>';
                  formData+='<div><label for="fee" class="form-label">Fee</label><input type="text" class="form-control" name="fee" value="'+retObj[0].fee+'"></div>';
                  formData+='<div><label for="capacity" class="form-label">Capacity</label><input type="text" class="form-control" name="capacity" value="'+retObj[0].max_cap+'"></div>';
                  formData+='<div><label for="detail" class="form-label">Detail</label><input type="text" class="form-control" name="detail" value="'+retObj[0].detail+'"></div>';
                  formData+='<div><label for="pID" class="form-label">Performer ID</label><input type="text" class="form-control" name="pID" value="'+retObj[0].artist_id+'"></div>';
                  $("#info_update").html(formData);
                        $("#editData").modal('show');
                 
                })
               
          });
          $('#update').click(function(){
                var form=$("#update_form");
                  $.ajax({
                  method: "PUT",
                  url: "updateAPI.php",
                  data:form.serialize(),          
                  success : function(data){
                    var msg=data.trim();
                      if(msg == 'success')
                      window.location.href="http://localhost/cw/admin/editEvent.php";
                      else
                      window.alert("Error Updating Event");
                  }
                });
            });

            $(document).on('click','.delete_btn', function(){
                var delete_id= $(this). attr('id');
                $.ajax({
                      url: 'deleteAPI.php',
                      method: 'DELETE',
                      data: {delete_id: delete_id}
                })
              

              .done(function(data){
              var msg=data.trim();
              if(msg == 'success')
              window.location.href="http://localhost/cw/admin/editEvent.php";
              else
              window.alert("Error Deleting Event");
              });
            });
        

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
 <?php  
} else {
    header('location:http://localhost/cw/login.php');
}
?>



