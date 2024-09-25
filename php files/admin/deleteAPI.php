<?php

require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error)
die($conn->connect_error);
parse_str(file_get_contents('php://input'), $_DELETE);
$delete = $_DELETE ['delete_id'];

$query = "DELETE FROM event WHERE event_id = '$delete'";
$result = $conn -> query($query);
    if (!$result) {
        die("Error updating record: " . mysqli_error($conn));
    }
    else
    echo "success";
    $conn->close();
?>