<?php
    session_start();
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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <style>
      .paginate_button.current,
    .paginate_button.current:hover,
    .paginate_button.next,
    .paginate_button.previous {
        color: white; /* Change the color of the pagination controls to white */
        background-color: #343a40; /* Change the background color of the pagination controls */
        border: 1px solid white; /* Add a border to the pagination controls */
        transition: background-color 0.3s, color 0.3s; /* Add a transition effect */
    }

    .paginate_button:hover {
        color: #343a40; /* Change the color of the pagination controls on hover */
        background-color: white; /* Change the background color of the pagination controls on hover */
        border: 1px solid #343a40; /* Add a border to the pagination controls on hover */
    }

    /* Adjust text color and link color for better visibility */
    body {
        color: white; /* Change the color of the main text */
    }

    a {
        color: #ff9900; /* Change the color of links */
    }
    #result {
    text-align: center;
    margin-top: 20px; /* Adjust the margin as needed */
}

.container {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
    padding: 80px;
    z-index: 2;
    width: auto;
    max-width: 120em;
    margin: 0 auto;
    background-image: url(artist/thumbnail/8.jpg);
    height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.one{
  height:100vh;
}
.two {
        height:100vh;
        background-image: url('artist/thumbnail/8.jpg'); /* Replace with the path to your image */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
@media screen and (max-width: 800px) {
.container {
      color: white;
    }
    .navbar {
      background-color: transparent; /* Make the navbar transparent */
    }
    .navbar-toggler-icon {
      background-color: white; /* Set the color of the navbar toggler icon to white */
    }
    .navbar-dark .navbar-nav .nav-link {
      color: white; /* Set the color of nav links to white */
    }
    .dataTables_length select {
        color: grey !important;
        background-color: white;
    }
    #result {
    text-align: center;
    margin-top: 10px; /* Adjust the margin as needed */
    overflow-x:auto;
}
}
    </style>
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/cw/navbar.php">Home</a>
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
            <a href="adminDashboard.php" class="btn btn-secondary me-2"><i class="fa-solid fa-user-large"></i>$name</a>
        icon;
    } else {
        echo <<<login
        <a href="adminLogin.php" class="btn btn-secondary me-2"><i class="fa-solid fa-right-to-bracket mx-2"></i>Admin Login</a>
        login;
    }
    ?>
</form>
    </div>
  </div>
</nav>
<section class="one">
<div class='container'>   


    
    <div class='row' id='result'>
        <table class='table table-striped table-dark display' id='example' style="width:100%"></table>
    </div>
</div>
<section class="two">

  </section>

      <script>
        $(document).ready(function(){
            $.ajax({
                method: "GET",
                url: "readUpcomingAPI.php",
                //data: { upcoming:1 }
            })
            .done(function( msg ) {
               let retObj=JSON.parse(msg);
               console.log(retObj);
               new DataTable('#example', {
                columns: [
                    { title: 'Event Name' },
                    { title: 'Artist Name' },
                    { title: 'Date' },
                    { title: 'Start Time' },
                    { title: 'End Time' },
                    { title: 'Category' },
                    { title: 'Fee' },
                    { title: 'Maximum Capacity' },
                    { title: 'Detail' },

                    
                ],
                data: retObj
            });
            });
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  </body>
</html>