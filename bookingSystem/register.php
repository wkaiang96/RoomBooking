<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
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
//get data from previous page by uisng name
	$phpEmail=$_POST['register_email'];
	$phpName=$_POST['register_name'];
	$phpGender=$_POST['gender'];
	$phpPw=$_POST['register_psw'];
	$phpPwCon=$_POST['register_pwcon'];
	$phpPhone=$_POST['register_phone'];

//create SQL
$sql2="SELECT * FROM userdata WHERE email='$phpEmail' ";
//check SQL connection
$result2=$conn->query($sql2);
//fetch data 
$row2=mysqli_fetch_assoc($result2);
//check the email (is it the email register before)
if($phpEmail!=$row2['email'])	
{
	//check confirm password is it same with password
	if ($phpPw!=$phpPwCon)
	{
		die('<script>
			alert("Password and Confirm password is different!")
			location.href="http://localhost/roomBooking/index.php/userLogin"
			</script>');

	}
	//if  everything alright then register(insert into database)
	else
		{
	
			$sql="INSERT INTO userdata VALUES ('$phpEmail','$phpName','$phpGender','$phpPw','$phpPhone','User')";
		//check SQL connection
			if($conn->query($sql)==TRUE)
		{
			 die("<script>alert('Register Successful!')
			 location.href='http://localhost/roomBooking/index.php'</script>");
		}
	
			else
		{
			die('<script>
			alert("Sorry Something Went Wrong!")
			location.href="http://localhost/roomBooking/index.php/userLogin"
			</script>');
		}
	}
}
else
{
	echo '<script>alert("The EMAIL You Key In Already Exist!!")
	window.location= "http://localhost/roomBooking/index.php"</script>';
}	

	?>
</body>

</html>
