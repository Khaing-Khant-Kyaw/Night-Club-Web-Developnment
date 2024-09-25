<?php
$theusername = $_POST['iusername'];
$thefname= $_POST['ifname'];
$theph= $_POST['iph'];
$theemail = $_POST['iemail'];
$thepass = $_POST['ipass'];

require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) 
die($conn->connect_error);

if ($stmt = $conn->prepare("INSERT INTO login VALUES (?,?,?,?,?)")) {
   $stmt->bind_param("ssiss", $theusername,$thefname, $theph, $theemail, $thepass);
   $stmt->execute();
   
   if ($stmt->affected_rows > 0) {
       $response = array("message" => "User created successfully");
       echo json_encode($response);
   } else {
       echo json_encode(array("message" => "Something went wrong!"));
   }
} else {
   echo json_encode(array("message" => "Something went wrong!"));
}
$stmt->close();
$conn->close();

?>
