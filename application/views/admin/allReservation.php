<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>
</head>
<body>

<?php
//session start
//create connection

if (!empty($_POST['ID']))
{
	//get subject from previous page
	$phpID=$_POST['ID'];
	$pageContents = file_get_contents("http://localhost/roomBooking/bookingSystem/allReservation.php?id=".$phpID."");
}
//if empty
else
{
	$phpID="";
	$pageContents = file_get_contents("http://localhost/roomBooking/bookingSystem/adminhistory.php");
}

if($pageContents!="")
{
	$result=json_decode($pageContents,true);
}

?>



<div class="container">
<div class="col-sm-10">  
  <form method="post" action="http://localhost/roomBooking/index.php/admin/allReservation">
    <table >
        <tr >
            <td >
                <label style="font-size:large;font-weight:bold">Email :</label>
            </td>
            <td >
                <input name="ID" class="form-control" type="text" value="<?php echo $phpID?>" style="width:150px;margin-left:1%"  />
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
	<br/>
<h1>Booking List</h1>  
<table class="table table-hover" width="100%">
<thead>
            <tr style="font-size:100%">
                <th style='text-align: center'>ID</th>
                <th style='text-align: center'>date</th>
                <th style='text-align: center'>Slot</th>
                <th style='text-align: center'>Email</th>
                <th style='text-align: center'>Room</th>
            </tr>
</thead>


	<?php
	//display data by using while loop and display table by table
	$no 	= 1;
	$total 	= 0;
	if($pageContents!="")
		foreach ($result['allHistory'] as $row)
		{
            echo "<form method='post'>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td style='text-align: center'>" . "$row[ID]" . " </td>";
            echo "<td style='text-align: center'>" . "$row[date]" . " </td>";
            echo "<td style='text-align: center'>" . "$row[slot]" . " </td>";
            echo "<td style='text-align: center'>" . "$row[email]" . " </td>";
            echo "<td style='text-align: center'>" . "$row[roomT]" . " </td>";
            echo "<td style='text-align: center'>".
                 "<button type= 'button' onClick= deleteRow($row[ID]) class='btn btn-danger btn-primary btn-sm' name='ID' style='font-size:14px'> <span class='glyphicon glyphicon-trash'></span> Delete</button></td>";
            echo "<input type='hidden' name='ID' value='" . $row["ID"] . "' >";												
            echo "</tr>";
            echo "</form>";

            // $sql = "DELETE FROM room WHERE ID='$row[ID]'";
            // $sql = "UPDATE FROM room WHERE ID='$row[ID]'";
            // mysqli_query($conn, $sql);
            $no++;
        }
	else
		echo "<h2 style='color: rgba(133,17,17,0.96)'>Sorry No Record Found!</h2>";
	?>

<script language ='javascript'>

function deleteRow(ID)
{
    if(confirm("Confirmation in deleting this booking?"))
    {
        window.location.href='http://localhost/roomBooking/bookingSystem/adminDeleteReserve.php?deleted_id='+ID+'';
        return true;
    }
}

</script>
</table>
</div>
<div style="margin-bottom: 18%">
</div>
</body>

</html>
