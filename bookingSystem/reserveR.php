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
$roomT=$_POST['roomT']
$email = $_SESSION['email'];

$sql="INSERT INTO room (slot,email,roomT) VALUES ('$slot','$email','$roomT')";
if ($conn->query($sql)==TRUE)
	{
		die( '<script>alert("Booking Successful")
		location.href="../home.php";</script>');
	}
else
	{ 
		die ('<script>alert("Connection Failed")
		location.href="../home.php";</script>');
	}

	?>
</body>
</html>