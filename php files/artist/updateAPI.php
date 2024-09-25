<?php

require_once 'dbinfo.php';

$conn = new mysqli($host,$user,$pass,$database);

 

if ($conn->connect_error)

    die($conn->connect_error);

 

parse_str(file_get_contents('php://input'),$_PUT);

$thenew=$_PUT['inew_name'];

$theold=$_PUT['iold_name'];

$sql="UPDATE artist SET name='$thenew' WHERE name='$theold'";

 

if ($conn->query ($sql)==TRUE){

    echo json_encode("<span style="color: white;">Record update successfully</span>");

}   else{

     echo json_encode("Error updating record: ".$conn->error);

}

$conn->close();

?>