<?php

require_once 'dbinfo.php';

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error)
    die($conn->connect_error);

parse_str(file_get_contents('php://input'), $_DELETE);
$thename = $_DELETE['iname'];

$sql = "DELETE FROM artist WHERE name='$thename'";

if ($conn->query($sql) === TRUE) {
    echo json_encode('<span style="color: white;">Record updated successfully</span>');
} else {
    echo json_encode('<span style="color: white;">Error updating record: ' . $conn->error . '</span>');
}

$conn->close();

?>
