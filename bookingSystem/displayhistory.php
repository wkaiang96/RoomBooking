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
$phpEmail=$_REQUEST['email'];
if (!empty($_POST['ID']))
{
	$phpID=$_POST['ID'];
	$sql="SELECT * FROM room WHERE email='$phpEmail' AND ID='$phpID' ";
}
else
{	$phpID="";
	$sql="SELECT * FROM room WHERE email='$phpEmail'";
}

//select all the data according to the session
$result=$conn->query($sql);
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

$row=mysqli_fetch_assoc($result);
if($result->num_rows>0) {
	$res = array();
	while ($row = $result->fetch_assoc()) {
		array_push($res, $row);
	}
	echo '{"RowCount":' . $result->num_rows . ',"history":' . json_encode($res) . '}';
}
?>
