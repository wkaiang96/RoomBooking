<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gcreation";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$phpID=isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
if (!empty($phpID))
{
	$sql="SELECT * FROM room WHERE ID='$phpID' ";
}
else
{
	$sql="SELECT * FROM room";
}

//select all the data according to the session
$result=$conn->query($sql);
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if($result->num_rows>0) {
	$res = array();
	///$row=mysqli_fetch_assoc($result);
	while ($row = $result->fetch_assoc()) {
		array_push($res, $row);
	}
	echo '{"RowCount":' . $result->num_rows . ',"allHistory":' . json_encode($res) . '}';
}
?>
