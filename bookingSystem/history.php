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
$conn = new mysqli($servername, $username, $password,$dbname);

$slot=$_POST['slot'];
$roomT=$_POST['roomT'];
$phpEmail = $_SESSION['email'];


$sql = "SELECT * from room WHERE email='$phpEmail'";
$result = $conn->query($sql);
$row=mysqli_fetch_assoc($result);

if ($result > 0) 

</body>
</html>
