<?php
session_start();
?>
<?php

$theemail = $_POST['iemail'];
$thepass = $_POST['ipass'];


require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) 
die($conn->connect_error);

$query = <<<loginSQL
SELECT*FROM login.login WHERE email='$theemail' AND password='$thepass';
loginSQL;

$result = $conn->query($query);
$rows = $result->num_rows;
   if ($rows != 0) {
    $r = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION["username"] = $r["username"];
    $_SESSION["email"] = $r["email"];

    $result= array("status" => 1);
    echo json_encode($result);
} else
    {
        $result= array("status" => 0);
      echo json_encode($result);
    }
?>
