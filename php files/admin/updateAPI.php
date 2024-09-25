
<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if ($conn->connect_error)
    die($conn->connect_error);
parse_str(file_get_contents('php://input'), $_PUT);
$eventID = $_PUT['eventID'];
$eventname = $_PUT['eventname'];
$artistname = $_PUT['name'];
$date=$_PUT['date'];
$eventcat = $_PUT['eventcat'];
$stime = $_PUT['start_time'];
$etime = $_PUT['end_time'];
$fee = $_PUT['fee'];
$capacity = $_PUT['capacity'];
$detail= $_PUT['detail'];
$pID = $_PUT['pID'];
$query = "UPDATE event
INNER JOIN artist ON event.artist_id = artist.artist_id
SET event_name='$eventname', category='$eventcat', date='$date', start_t='$stime', end_t='$etime', fee='$fee', max_cap='$capacity', detail='$detail', event.artist_id='$pID', artist.name='$artistname'
WHERE event.event_id='$eventID'";


$result = $conn -> query($query);

if (!$result) {
    die("Error updating record: " . mysqli_error($conn));
}
else
echo "success";
$conn->close();
?>
