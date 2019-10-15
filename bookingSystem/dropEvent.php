<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>loading</title>
</head>
<?php

	session_start();

?>
<body>
<?php
	//call out the database and server for east to connect
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
//create connection
	$phpEmail=$_SESSION['email'];
//check connection
	$id=$_POST['id'];
	//create SQL
	$sql="DELETE FROM register WHERE Revent_id='$id'";
	//check connection
		if($conn->query($sql)===TRUE)
		{
		  	die('<script type="text/javascript">
			alert("Delete Successfully!")
			location.href="EventApply.php"
			</script>');
		}
	
		else
		{
		  die('<script type="text/javascript">
			alert("Error Please try again!")
			location.href="EventApply.php"
			</script>');

		}	
		mysqli_close($conn);

	?>
</body>

</html>
