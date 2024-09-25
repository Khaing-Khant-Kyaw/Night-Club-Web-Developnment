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
    <style>
       body {
            background-color: #827b7a; /* Add background color here */
            z-index: -1;
        }
        
      </style>
  
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kai Ra</a>
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
            <nav class="py-3 col-2  pe-3">
            <div class="list-group text-center text-lg-start">
                <a href='http://localhost/cw/admin/artist/artistdashboard.php' class="list-group-item list-group-item-action">
                    <i class="fa-solid fa-user-tie"></i>
                    <span class="d-none d-lg-inline">Artist Registration</span>
                </a>
                <a href="http://localhost/cw/admin/dashboard.php" class="list-group-item list-group-item-action">
                <i class="fa-solid fa-calendar-days"></i>
                    <span class="d-none d-lg-inline">Create Event</span>
                </a>
                <a href="http://localhost/cw/admin/editEvent.php.php" class="list-group-item list-group-item-action">
                <i class="fa-solid fa-pen-to-square"></i>
                    <span class="d-none d-lg-inline">Edit Events</span>
                </a>
            </div>
            </nav>
            <main class="col-10">
            <div class='container'>
<?php
if (isset($_SESSION["username"])) {
    $name = $_SESSION["username"];
    $email = $_SESSION["email"];
  
    echo <<<profile
                  <section class="one">
                        <div class="row d-flex justify-content-center align-items-center mt-2" ;">
                        <div class="col-12 col-md-9">
                        <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Account Information</h2>
                        <div class="d-flex justify-content-center align-items-center mb-5">
                       
                        </div>
                        <div>
                        <h4 class="text-center text-uppercase mt-2">$name</h4>
                        <h6 class="text-center mt-2 mb-5">$email</h6>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                        
                        </div>
                        <a type="button" href="http://localhost/cw/navbar.php" class="btn btn-outline-danger" style="margin-top:10px; font-size: 13px; padding:15px; text-align:center;" >Logout</a>
                        </section>
        profile;
   
} else {
    header('location:login.php');
}
?>
</div>
            </main>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

