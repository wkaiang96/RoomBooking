<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Event</title>
<link rel="stylesheet" type="text/css" href="EventDesign.css"/>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	function login(){
		window.location.replace("UserLogin.php")
	}
</script>
</head>

<body>
	<?php
	//import header
		require('header.php');
	//session start
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
	// if email inside session is not empty
	if (!empty($_SESSION['email']))
	{
		//get email from session
		$phpEmail=$_SESSION['email'];
		//create SQL
		$sql="SELECT * FROM userdata WHERE email='$phpEmail'";
		//create connection
		$result=$conn->query($sql);
		//fetch data
		$row=mysqli_fetch_assoc($result);
	}
	//if the session is empty
	else
	{	
		$phpEmail="a";
	}
?>


        <div class="container" style="margin-top:10%;margin-bottom:5%">
        	<div class="row">
               <div class="col-xs-5 item-photo">
                    <img style="max-width:100%;" src="img/event3.png" />
                </div>
                <form action="join.php" method="post">
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- event details -->
					<h6><input type="hidden" value="SWP2019" name="eventid">SWP2019</h6>
                    <h3 ><input type="hidden" name="eventName" value="Star Walk Penang 01.01.2019"  />Star Walk Penang 01.01.2019</h3>    
                    <h5 >Penang Starwalk 2019 will be held at Beach Street Penang on the 1st of January. It is an event that consists of a 7km walk.</h5>
        
                    <!-- Details -->
                    <h5 class="title-price"><small>Price</small></h5>
                    <h3 style="margin-top:0px;">FREE</h3>
        
                    <div class="section" style="padding-bottom:5px;">
                        <h5 class="title-attr"><small>Size</small></h5>                    
                        <div>
                            <input type="radio" name="size" value="S" checked="checked"/>S 
                            <input type="radio" name="size" value="M" style="margin-left:15px"/>M 
                            <input type="radio" name="size" value="L" style="margin-left:15px"/>L 
                            <input type="radio" name="size" value="XL" style="margin-left:15px"/>XL 
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h5 class="title-attr"><small>Pax</small></h5>                    
                        <input type="number" name="pax" id="qty_input"  value="1" min="1" style="text-align:center"/>
                        </div>
                    </div>                
        

                   <?php
				   //if $phpEmail equal to a then call user go login or register 1st
                    if ($phpEmail=="a")
                    {					
						 echo   
						'<div class="section" style="padding-bottom:20px;">
						<button disabled class="btn btn-success" style="background-color:red">Please Register / Login to the account</button>
						</div>';
					}			   
					//if user already login then allow them to join the event
                    if($phpEmail!="a") 
                    {
						 echo   
						'<div class="section" style="padding-bottom:20px;">
						<button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Join</button>
						</div>'; 
					}
					
                    ?>
                                            
                </div>                              
        	</form>
            </div>
        </div>
<br />
		<?php
		require('footer.php');
	?>

</body>

</html>
