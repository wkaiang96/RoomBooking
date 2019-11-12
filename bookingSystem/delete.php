<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>loading</title>
</head>
<?php

	session_start();

?>
<?php
//call out the database and server for east to connect
	$servername="localhost";
	$userName="root";
	$password="";
	$dbname="gcreation";
	//create connection
	$conn= new mysqli($servername,$userName,$password,$dbname);
	//check connection
	if($conn->connect_error)
	{
		die("Connection faild:".$conn->connect_error);
	}
?>

<?php
//get email from the section
	$phpEmail=$_SESSION['email'];
//create SQL
	$sql="DELETE FROM userdata WHERE email='$phpEmail'";
//check the connection of the server and the SQL
		if($conn->query($sql)==TRUE)
		{	session_destroy();
		  	die('<script type="text/javascript">
			alert("Account has been Deleted!")
			location.href="http://localhost/roomBooking/index.php"
			</script>');
		}
	
		else
		{
		  die('<script type="text/javascript">
			alert("Error Please try again!")
			location.href="http://localhost/roomBooking/index.php/editProfile"
			</script>');

		}	

	?>

<body>


</body>

</html>
