<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Event Apply</title>
<link rel="stylesheet" type="text/css" href="aboutUs.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="margin-top:7%">
<?php
	require('header.php');
?>
<?php
	//create connection
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}
	$phpEmail=$_SESSION['email'];
	if (!empty($_POST['event_id']))
	{
		$phpEID=$_POST['event_id'];
		$sql="SELECT * FROM event WHERE user_email='$phpEmail' AND eventid='$phpEID' ";
	}
	else
	{	$phpEID="";
		$sql="SELECT * FROM event WHERE user_email='$phpEmail'";
	}
	
	//select all the data according to the session
	$result=$conn->query($sql);
	$query = mysqli_query($conn, $sql);
	
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}

	$row=mysqli_fetch_assoc($result);	
	?>
<div class="container">
  <div class="col-sm-10">  
	  <form method="post" action="userEventHistory.php">
		<table >
			<tr >
				<td >
					<label style="font-size:large;font-weight:bold">Event ID :</label>
				</td>
				<td >
					<input name="event_id" class="form-control" type="text" value="<?php echo $phpEID?>" style="width:150px;margin-left:1%"  />
				</td>
				<td >
					<span style=""><input name="Submit1" type="submit" value="Submit" style="font-size:15px;border-radius:30px;margin-left:10%"/></span>
				</td>
			</tr>
		</table>
	</form>
  </div>  
  <br/>
  <br/>
  <h1>Event Name List</h1>
  <p>Show who join the event.</p>  
  <table class="table table-condensed" width="100%">			
  <thead>
				<tr style="font-size:100%">
					<th width="2%">No</th>
					<th width="15%">Event ID</th>
					<th width="25%">Event Name</th>
					<th width="15%">Email</th>
					<th  width="10%">Phone</th>
					<th  width="5%">Size</th>
					<th  width="10%">No.Pax</th>
				</tr>
	</thead>
	<tbody>
	<?php
			$no 	= 1;
			$total 	= 0;
			while ($row = mysqli_fetch_array($query))
			{
				echo '
				<form action="confirmdrop.php" method="post">
					<tr>
						<td style=center>'.$no.'</td>
						<td>'.$row['eventid'].'</td>
						<td>'.$row['event_name'].'</td>
						<td>'.$row['user_email'].'</td>
						<td>'.$row['phoneNo'].'</td>
						<td>'.$row['size'].'</td>
						<td>'.$row['no_pax'].'</td>			
						<td><input type="hidden" value='.$row['joinE_id'].' name="id"/></td>
						<td><input type="submit" class="btn btn-primary" onclick="return confirm("Are You sure?")" value="Delete"/></td>													
				</tr>
				</form>'
					;
				$no++;
			}?>
			</tbody>
		</table>
	</div>
	<div class="noprint" align="center" style="margin:5% ">
	<br/>
	<br/>
	<a href="javascript:window.print()"><input name="Submit1" type="submit" value="Print" /></a>
	
	</div>
<?php
	require('footer.php');
?>

</body>

</html>
