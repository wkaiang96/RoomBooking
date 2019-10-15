<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Event Apply</title>
<link rel="stylesheet" type="text/css" href="aboutUs.css"/>

</head>

<body style="margin-top:7%">
	<?php
		require('AdminHeader.php');
	?>

<?php
//session start
	$session_start;
	//create connection
	$conn= new mysqli($servername,$username,$password,$dbname);
//check the type is it empty or not
	if (!empty($_POST['type']))
	{
		$phpType=$_POST['type'];
		$sql = "SELECT * FROM register WHERE type='$phpType' ";
	}
	//if it is empty
	else
	{	$phpType="";
		$sql = "SELECT * FROM register ";
	}
//create connection
	$result=$conn->query($sql);
	$query = mysqli_query($conn, $sql);
	//check connection
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}
	//fetch data from database
	$row=mysqli_fetch_assoc($result);	
	?>
<div class="container">
  <div class="col-sm-12">  
	  <form method="post" action="EventApply.php">
		<table >
			<tr >
				<td >
					<label style="font-size:large;font-weight:bold">Event Type :</label>
				</td>
				<td >
					<select class="form-control" name="type">
						<option selected="" name="type"> Select Event type</option>
						<option value="ANE" name="type">Arts &amp; Entertaiment</option>
						<option value="BNCNE" name="type">Business, Conferences &amp; Expos</option>
						<option value="CNC" name="type">Charity &amp; Causes</option>
						<option value="FND" name="type">Food &amp; Drink</option>
						<option value="LNC" name="type">Lifestyle &amp; Culture</option>
						<option value="Muc" name="type">Music</option>
						<option value="SNH" name="type">Seasonal &amp; Holiday</option>
						<option value="SNF" name="type">Sports &amp; Fitness</option>
					</select>
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
  <h1>Application List:&nbsp;<?php echo $phpType ?></h1>
  <p>Event that apply by each company.</p>            
  <table class="table table-condensed" width="100%">			
  <thead>
				<tr style="font-size:100%">
					<th width="1%"></th>
					<th width="2%">No</th>
					<th width="10%">Company</th>
					<th width="20%">Name</th>
					<th width="10%">Email</th>
					<th  width="10%">Phone</th>
					<th  width="5%">Type</th>
					<th  width="10%">Event Name</th>
					<th  width="10%">Venue</th>
					<th  width="20%">Address</th>
					<th width="10%"></th>
				</tr>
	</thead>
	<tbody>
	<?php
	//display the data table by table
			$no 	= 1;
			$total 	= 0;
			while ($row = mysqli_fetch_array($query))
			{	
				echo '
				<form action="confirmEventdrop.php" method="post">
				<tr>
				<td><input type="hidden" value='.$row['Revent_id'].' name="id"/></td>
						<td style=center>'.$no.'</td>
						<td>'.$row['company'].'</td>
						<td>'.$row['name'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['phone'].'</td>
						<td>'.$row['type'].'</td>
						<td>'.$row['event_name'].'</td>
						<td>'.$row['event_venue'].'</td>
						<td>'.$row['event_address'].'</td>	
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
