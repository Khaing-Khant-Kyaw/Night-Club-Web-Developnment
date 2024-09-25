<?php
    require_once 'dbinfo.php';
    parse_str(file_get_contents('php://input'), $_PUT); 
    $id = $_PUT['edit_id'];
    $query = "SELECT * FROM event
    INNER JOIN artist ON event.artist_id = artist.artist_id
    WHERE event_id='$id'";
    $conn = new mysqli($host, $user, $pass, $database);
    if($conn->connect_error)
    die($conn->connect_error);
$result = $conn->query($query);
$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
//echo "<br>";
echo $json_string;

$conn->close();
