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
	$date=$_POST['date'];
	$slot=$_POST['slot'];
	$roomT=$_POST['roomT'];
	
	//update the database
	$sql="UPDATE room SET date='$date', slot='$slot', roomT='$roomT' WHERE email='$phpEmail'";
	
			
	if ($result === TRUE) {

		echo "<div class='alert alert-success'>";
		echo "<strong> Updated successfully </strong>";
		echo "</div>";
		header( "refresh:2;url=dataApi.php" );
	} else {
		echo "<script type='text/javascript'>alert('Failed');</script>" . $sql . "<br>" . mysqli_error($conn);
	}

?>
		<h2>Booking Edit <?php echo $row['0']; ?></h2>
		<hr>


		<div class="form-group">
		<label style="font-size: 14px">Date</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		<input type="date" name="date" class="form-control"  required>
		</div>
		</div>

		<div class="form-group">
		<label style="font-size: 14px">slot</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
		<input type="text" name="slot" class="form-control"  required>
		</div>
		</div>

		<div class="form-group">
		<label style="font-size: 14px">Room</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
		<input type="text" name="roomT" class="form-control"  required>
		</div>
		</div>

		<input type="hidden" name="id" value="<?php echo $row['0']; ?>">

		<div class="form-group">
		<button type="submit" name="updatebooking" class="btn btn-primary btn-lg">Update</button>
</div>

</form>

<body>


</body>

</html>
