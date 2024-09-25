<?php

require_once 'dbinfo.php';

$fdate = $_GET['fdate'];

$tdate = $_GET['tdate'];

$conn = new mysqli($host,$user,$pass,$database);

 

/*check connection */

if($conn->connect_error)    

    die($conn->connect_error);

else

    //echo "Successfully connected <br>";

 

$query = "SELECT * FROM event where date BETWEEN '$fdate' AND '$tdate';";

//echo $query."<br>";

$result = $conn->query($query);

$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);

// echo "<br>";

echo $json_string;

/* close connection */

$conn->close();

 

?>