<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>loading</title>
</head>

<body>
<?php
//session start
	session_start();
	//call out the database and server for easy to connect
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gcreation";
	//create connection
	$conn= new mysqli($servername,$username,$password,$dbname);
	//check connection
	if($conn->connect_error)
	{
		die("Connection faild:".$conn->connect_error);
	}
	?>
	
<?php
//get the data from previous page by using name
	$phpEID=$_POST['eventid'];
	$phpName=$_POST['eventName'];
	$phpEmail=$_SESSION['email'];
	$phpSize=$_POST['size'];
	$phpPax=$_POST['pax'];
//create SQL
$sql2="SELECT * FROM userdata WHERE email='$phpEmail' ";
//Create SQL connection
$result2=$conn->query($sql2);
//fetch data
$row2=mysqli_fetch_assoc($result2);
//fetch phoneNo data and save it in the variable
$phpPhone=$row2['phoneNo'];
//create SQL
$sql="INSERT INTO event (eventid,event_name,user_email,phoneNo,size,no_pax) VALUES ('$phpEID','$phpName','$phpEmail','$phpPhone','$phpSize','$phpPax')";
			//check connection of SQL
			if($conn->query($sql)==TRUE)
		{
			 die('<script>alert("Register Successfully!");
			 location.href="event.php"</script>');
		}
	
			else
		{
			die('<script>
			alert("Sorry Something Went Wrong!")
			location.href="event.php"
			</script>');
		}
	?>
</body>

</html>
