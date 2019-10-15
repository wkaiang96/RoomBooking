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
//get data from previous page
	$phpName=$_POST['UserName'];
	$phpEmail=$_POST['UserEmail'];
	$phpSubject=$_POST['subject'];
	$phpComment=$_POST['message'];
   
   //create sql
$sql="INSERT INTO contactus (username,useremail,subject,message) VALUES ('$phpName','$phpEmail','$phpSubject','$phpComment')";
//check sql connection
			if($conn->query($sql)==TRUE)
		{
			die('<script>
			alert("Comment Send!")
			location.href="home.php"
			</script>');

		}
	
			else
		{
			die('<script>
			alert("Sorry Something Went Wrong!")
			location.href="home.php"
			</script>');
		}
	?>
</body>

</html>
