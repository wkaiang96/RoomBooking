<html>
<head>
</head>
<body>
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
$slot=$_POST['slot'];
$roomT=$_POST['roomT'];
$date = $_POST["bookdate"];
$phpEmail = $_SESSION['email'];


$sql = "SELECT * from room WHERE `date`='$date' AND `slot`='$slot' AND `roomT`='$roomT'";
$result = $conn->query($sql);
echo $result;
</body>
</html>
