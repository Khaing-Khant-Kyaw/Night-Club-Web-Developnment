<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error)
    die($conn->connect_error);
$theid = $_REQUEST['iid'];
$thename = $_REQUEST['iname'];
$thebio = $_REQUEST['ibio'];
$theb_name = $_REQUEST['ib_name'];
$thefb = $_REQUEST['ifb'];
$thetwt = $_REQUEST['itwt'];
$theinsta = $_REQUEST['iinsta'];
$theimg = $_REQUEST['iimg'];

if ($stmt = $conn->prepare("INSERT INTO artist(artist_id,name,bio,b_name,user_fb,user_twt,user_insta,pr_img) VALUES (?,?,?,?,?,?,?,?);"))
{
    $stmt->bind_param("ssssssss", $theid, $thename, $thebio, $theb_name, $thefb, $thetwt, $theinsta, $theimg);
    $stmt->execute();
    $response = "<br>Rows Inserted:" . $stmt->affected_rows;
    $response = "<br><span style='color: white;'>Successfully created!</span>";


    echo json_encode($response);
    $stmt->close();
} else {
    echo json_encode("Something went wrong!");
}
$conn->close();
?>