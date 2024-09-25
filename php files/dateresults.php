<?php
$thedate = $_POST['idate'];
$theevent= $_POST['ievent'];
$ans = "The entered date was:" . $thedate . "<br>";
//echo json_encode($ans);

require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) 
die($conn->connect_error);

if($stmt = $conn->prepare("INSERT INTO musician_booking(musician_id, booking_date) VALUES ('S001', ?)")) {
   $stmt->bind_param("s", $thedate);
   $stmt->execute();
   //echo json_encode("<br>Rows inserted:". $stmt->affected_rows);
   $stmt->close();
   } else {
   //echo "Something went wrong!";
   }
   $query = "SELECT * FROM events;";
   $result = $conn->query($query);
   $all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
   $json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
   echo $json_string;

   /* close connection */
   $conn->close();
?>
