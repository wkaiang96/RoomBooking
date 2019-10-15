<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>My Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
	<?php
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
	//get the email from session
	$phpEmail=$_SESSION['email'];
	//select all the data according to the session
	$sql="SELECT * FROM userdata WHERE email='$phpEmail'";	
	//create connection
	$result=$conn->query($sql);	
	//fetch data
	$row=mysqli_fetch_assoc($result);
	?>
	<?php
	//check the user type to display the header
		if($row['type']=="User")
	{
		require('header.php');
	}
	
	if($row['type']=="Admin")
	{
		require('AdminHeader.php');
	}

	?>
	
<div class="container" style="margin-top:2%">
    <h1>Edit Profile</h1>
  	<hr/>
	<div class="row">
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Managing Personal Details. Please make sure you really want to edit personal details.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" action="edit.php" method="post">
           <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <b><?php echo $row['email']?></b>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="e_name" value="<?php echo $row['name']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['phoneNo']?>" name="e_pn"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"><b style="color:red">*</b>Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="e_pw" required />
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"><b style="color:red">*</b>Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="e_cpw" required />
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <a href="edit.php"><input type="submit" class="btn btn-primary" onclick="return confirm('Are You sure?')" value="Save Changes"/></a>
              <input type="reset" class="btn btn-default" value="Cancel"/>
            </div>
          </div>
        </form>
		<br/>
		<br/>
	<?php
 if($row['type']=="User")
	{		
		echo '	<form class="form-horizontal" role="form" action="delete.php" method="post">
		  <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
				<a href="delete.php"><input type="submit" class="btn btn-danger" onclick="return confirm("Are You sure?")" value="Delete Account"/></a>
            </div>
          </div>
        </form>';
	}
	?>
      </div>
  </div>
</div>
<hr/>	
<?php
		require('footer.php');
	?>

</body>

</html>
