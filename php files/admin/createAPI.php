<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error)
    die($conn->connect_error);

$theeventname = $_REQUEST['ievent_name'];
$theevent = $_REQUEST['ievent_id'];
$thedate = $_REQUEST['idate'];
$thestarttime = $_REQUEST['istart'];
$theendtime = $_REQUEST['iend'];
$thecategory = $_REQUEST['icat'];
$thefee = $_REQUEST['ifee'];
$themaxcapacity = $_REQUEST['imax'];
$theperformancedetail = $_REQUEST['iperform'];
$theartistid = $_REQUEST['iartist'];

if ($stmt = $conn->prepare("INSERT INTO event(event_id,event_name,date,start_t,end_t,category,fee,max_cap,detail,artist_id) VALUES (?,?,?,?,?,?,?,?,?,?);"))
{
    $stmt->bind_param("ssssssiiss", $theevent,$theeventname,$thedate, $thestarttime, $theendtime, $thecategory, $thefee, $themaxcapacity, $theperformancedetail, $theartistid);
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