<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="http://localhost/roomBooking/references/Popup.css"/>
<link rel="stylesheet" type="text/css" href="http://localhost/roomBooking/references/dropdownUser.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="http://localhost/roomBooking/references/jquery.min.js"></script>
<script src="http://localhost/roomBooking/references/bootstrap.min.js"></script>
<style type="text/css">

#HS{
 font-size:140%
}

</style>
</head>
<!--Admin header will be differet with user header this i sbecause admin header is use to manage all the details and event details---->
<body>
<?php
//start the session
	session_start();

	if (!empty($_SESSION['email']))//check the session (is empty or not)
	{
		$phpEmail=$_SESSION['email'];
		$pageContents = file_get_contents("http://localhost/roomBooking/bookingSystem/dataApi.php?email=".$phpEmail."");
		$result=json_decode($pageContents,true);	
		$phpName=$result['userDetails'][0]['name'];
	}
	else// if the session is empty then put a become value
{	
	$phpEmail="a";
}
?>
<div class="col-lg-12"> <!--using bootstrap to set and design the header---->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid col-lg-12">
    <div class="navbar-header">
    	<a href="http://localhost/roomBooking/index.php/admin/adminpage" class="navbar-brand"><img src="http://localhost/roomBooking/img/logo.png" width="115px" /></a>
    	<a class="navbar-brand" href="#" id="HS">G Creation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
     	<li><a href="http://localhost/roomBooking/index.php/admin/adminpage" id="HS">Mission</a></li>
     	<li><a href="http://localhost/roomBooking/index.php/admin/EventApply" id="HS">Reservation</a></li>
      	<li><a href="http://localhost/roomBooking/index.php/admin/eventList" id="HS">Room List</a></li>
      	<li><a href="http://localhost/roomBooking/index.php/admin/userComment" id="HS">User Comment</a></li>
      </ul>
      <?php
      		if ($phpEmail!="a"){// if the admin already sign in (display logout and edit button)
		      echo '<ul class="nav navbar-nav navbar-right">
		        <li>
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn" >'. $phpName.'</button>
						  <div id="myDropdown" class="dropdown-content">
						    <a href="editProfile.php">My Profile</a>
						    <a href="http://localhost/roomBooking/index.php/logout">LogOut</a>
						  </div>
					</div>
					<script>
					/* When the user clicks on the button, 
					toggle between hiding and showing the dropdown content */
					function myFunction() {
					    document.getElementById("myDropdown").classList.toggle("show");
					}
					
					// Close the dropdown if the user clicks outside of it
					window.onclick = function(event) {
					  if (!event.target.matches(".dropbtn")) {
					
					    var dropdowns = document.getElementsByClassName("dropdown-content");
					    var i;
					    for (i = 0; i < dropdowns.length; i++) {
					      var openDropdown = dropdowns[i];
					      if (openDropdown.classList.contains("show")) {
					        openDropdown.classList.remove("show");
					      }
					    }
					  }
					}
					</script>
		        </li>
		      </ul>';
		      }
			else{//if the email is empty(the user not yet sign in) display this header (call them sign in)
		      echo '<ul class="nav navbar-nav navbar-right">
		        <li>
				        <a href="#popup1" id="HS"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				        <div id="popup1" class="overlay">
							<div class="popup">
							<h2>Login as</h2>
							<br/>
							<a class="close" href="#">&times;</a>
							<div class="content">
							<a href="' . base_url() . 'index.php/UserLogin"><input type="button" value="User Login" class="btn btn-success" style="width:100%"/></a>
							<br/>
							<br/>
							<a href="' . base_url() . 'index.php/admin/AdminLogin"><input type="button" value="Admin Login" class="btn btn-primary" style="width:100%"/></a>
							</div>
							</div>
						</div>

		        </li>
		      </ul>';
			
			
			}		  		      
			?>
    </div>
  </div>
</nav>
</div>

