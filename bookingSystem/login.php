<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
	//start session
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
		die("Connection failed:".$conn->connect_error);
	}

	
	//----check the database--->

	//get the email in previous page by name
		$phpEmail=$_POST['login_email'];
	//get the password in previous page by name
		$phpPw=$_POST['login_pw'];
		//create SQL
		$sql="SELECT * FROM userdata WHERE email='$phpEmail' AND password='$phpPw' ";
		//Check SQL connection
		$result=$conn->query($sql);
		//check data is it inside the database(if >0 that means yes inside the database)
		if($result->num_rows>0)
		{	//fetch data
			$row=mysqli_fetch_assoc($result);	//bring the result come out
				//create or set up the session(by using email)
				$_SESSION['email']=$row["email"];
			//check the user type
			if($row['type']=="User")
			{
			//script = is mean control the things and jump it into the another pages
				die('<script>location.href="http://localhost/roomBooking/index.php"</script>');
			}
			else if ($row['type']=="Admin")
			{
			//script = is mean control the things and jump it into the another pages
				die('<script>location.href="http://localhost/roomBooking/index.php/admin/adminpage"</script>');
			}
		}
		else
		{
		die('<script>
			alert("Login Error!")
			location.href="userLogin.php"
			</script>');

		}
	$conn->close();
	
	?>

</body>

</html>
