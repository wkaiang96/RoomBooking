<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>User Comment</title>
<link rel="stylesheet" type="text/css" href="aboutUs.css"/>

</head>

<body style="margin-top:7%">

<?php
//session start
	//create connection

	if (!empty($_POST['subject']))
	{
		//get subject from previous page
		$phpSubject=$_POST['subject'];
		$pageContents = file_get_contents("http://localhost/roomBooking/bookingSystem/showComment.php?subject=".$phpSubject."");
	}
	//if empty
	else
	{	
		$phpSubject="";
		$pageContents = file_get_contents("http://localhost/roomBooking/bookingSystem/showComment.php?subject=".$phpSubject."");
	}

	if($pageContents!="")
{
	$result=json_decode($pageContents,true);	
}

	?>

<div class="container">
  <div class="col-sm-12">  
	  <form method="post" action="http://localhost/roomBooking/index.php/admin/userComment">
		<table >
			<tr >
				<td >
					<label style="font-size:large;font-weight:bold">Commect Type :</label>
				</td>
				<td >
					  <select class="form-control" name="subject">
							<option name="subject" value="" selected>Select Subject</option>
							<option name="subject" value="service">Services</option>
							<option name="subject" value="suggestions">Suggestions</option>
							<option name="subject" value="event">Event</option>
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
	<h1>User Comment List:&nbsp;<?php echo $phpSubject ?></h1>
	<?php
	//display data by using while loop and display table by table
			$no 	= 1;
			$total 	= 0;
			if($pageContents!="")
			{
				echo '  <table class="table table-hover" width="100%" id="record">			
				<thead>
							  <tr style="font-size:100%">
								  <td width="2%">No</td>
								  <td width="15%">User Name</td>
								  <td width="20%">User Email</td>
								  <td width="10%">Subject</td>
								  <td width="45%">Comment</td>
							  </tr>
				  </thead>
				  <tbody>';
				foreach ($result['userComment'] as $row)
				{
					echo '<tr>
							<td style=center>'.$no.'</td>
							<td>'.$row['username'].'</td>
							<td>'.$row['useremail'].'</td>
							<td>'.$row['subject'].'</td>
							<td>'.$row['message'].'</td>				
							</tr>';
					$no++;
				}
				echo '</tbody>
				</table>';
			}
			else{
				echo '<h3 style="color:red">No result Found</h3>';
			}
		?>
	</div>
	<div class="noprint" align="center" style="margin:5% ">
	<br/>
	<br/>
	<a href="javascript:window.print()"><input name="Submit1" type="submit" value="Print" /></a>
	
	</div>


</body>

</html>
