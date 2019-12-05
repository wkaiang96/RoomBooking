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
$email=$_POST['userEmail'];
$slot=$_POST['slot'];
$roomT=$_POST['roomT'];
$date = $_POST["bookdate"];
$phpEmail = $_SESSION['email'];
echo $date;

$sql = "SELECT * from room WHERE `date`='$date' AND `slot`='$slot' AND `roomT`='$roomT'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
        die ('<script>alert("The slot has been booked by others!")
			location.href="http://localhost/roomBooking/index.php/reserve";</script>');
	}

else
	{
		$sql="INSERT INTO room (`slot`,`email`,`roomT`,`date`,`book_by`) VALUES ('$slot','$email','$roomT','$date','Admin')";
		if ($conn->query($sql)==TRUE)
			{
				die( '<script>alert("Booking Successful")
				location.href="http://localhost/roomBooking/index.php/admin/adminpage";</script>');
			}
		else
			{ 
				die ('<script>alert("Booking Failed")
				location.href="http://localhost/roomBooking/index.php/admin/adminBook";</script>');
			}
	}
	
?>
</body>
</html>
