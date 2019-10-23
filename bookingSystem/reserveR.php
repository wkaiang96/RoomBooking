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

$sql="INSERT INTO room (slot,email,roomT) VALUES ('$slot','$phpEmail','$roomT')";
if ($conn->query($sql)==TRUE)
	{
		die( '<script>alert("Booking Successful")
		location.href="Booking/home.php";</script>');
	}
else
	{ 
		die ('<script>alert("Booking Failed")
		location.href="Booking/reserve.php";</script>');
	}

	?>
</body>
</html>