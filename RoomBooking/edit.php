<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>loading</title>
</head>
<?php
//session start
	session_start();

?>
<?php
//call out the database and server for easy to connect
	$servername="localhost";
	$userName="root";
	$password="";
	$dbname="gcreation";
	
	$conn= new mysqli($servername,$userName,$password,$dbname);
	
	if($conn->connect_error)
	{
		die("Connection faild:".$conn->connect_error);
	}
?>

<?php
//get all the data from previous page by name
	$phpEmail=$_SESSION['email'];
	$phpName=$_POST['e_name'];
	$phpPhone=$_POST['e_pn'];
	$phpPassword=$_POST['e_pw'];
	$phpCPn=$_POST['e_cpw'];
	
	if(empty($phpPassword) or empty($phpCPn))
	{
		  die('<script type="text/javascript">
			alert("Please fill in the password!")
			location.href="editprofile.php"
			</script>'
		);		
	}
//if confirm password equal to password
	if ($phpPassword==$phpCPn){	
	//update the database
	$sql="UPDATE userdata SET  name='$phpName', phoneNo='$phpPhone', password='$phpPassword' WHERE email='$phpEmail'";
			
		if($conn->query($sql)==TRUE)
		{
		  die('<script type="text/javascript">
			alert("Edit Successful!")
			location.href="editprofile.php"
			</script>'
		);
		}
	
		else
		{
		  die('<script type="text/javascript">
			alert("Error Please try again!")
			location.href="editprofile.php"
			</script>'
		);

		}	
	}
	else{
	die('<script type="text/javascript">
	alert("Password and Confirm password not same!")
	location.href="editprofile.php"
	</script>');
	}
	?>

<body>


</body>

</html>
