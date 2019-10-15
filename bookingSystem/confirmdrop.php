<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>loading</title>
</head>
<?php //import user header

	require("header.php")

?>
<?php

	//call out the database and server for easy to connect
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
	
<body style="marginTop:5%">
<div class="container">
  <div class="col-sm-12" style="margin-top:10%"> 
  <?php
	$id = $_POST['id'];

		if(isset($id) && is_numeric($id))//check the id is empty or is it a number
		{
			$query="SELECT * FROM event WHERE joinE_id=$id";//get data from database
		
		
		if ($r=mysqli_query($conn,$query))//if connect then run (display out the details)
		{
			$row=mysqli_fetch_array($r);
			//print the form to let user see (with user data)
			echo'
			<form action="drop.php" method="post">
			<h2> Are you sure you want to delete this event?</h2>
			<table class="table table-bordered">
				<tr>
					<td>Event ID</td>
					<td>'.$row['eventid'].'</td>
				</tr>
				<tr>
					<td>Event Name</td>
					<td>'.$row['event_name'].'</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>'.$row['user_email'].'</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>'.$row['phoneNo'].'</td>
				</tr>
				<tr>
					<td>Size</td>
					<td>'.$row['size'].'</td>
				</tr>
				<tr>
					<td>No.Pax</td>
					<td>'.$row['no_pax'].'</td>
				</tr>				
			</table>
			<br/><br/>
			<input type="hidden" name="id" value='.$row['joinE_id'].'/>
			<div style="margin-bottom:10%">
			<input type="submit" name="submit" value="Delete this event!"/>
			</div>
			</form>';
		}
		else
		{
			echo '<p style="color:red;"> Could not retrive the event because:<br/>'.mysqli_error($conn).'</p>';
		}
		}

		
		else
		{
			echo '<p style="color:red;"> This page has been accessed in error.</p>';
		}
		
		
	?>
	</div>
</div>
<?php

	require("footer.php")

?>

</body>

</html>
