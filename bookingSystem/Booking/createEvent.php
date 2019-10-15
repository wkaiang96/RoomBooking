<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Create Event</title>
<link rel="stylesheet" type="text/css" href="createEvent.css"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="all.css"/>

</head>

<body background="img/background.png" style="background-repeat:no-repeat">
<div class="container">
<div align="center" >
	<a href="home.php"><img src="img/logo.png" width="150px"/></a>
</div>
<hr/>

<div class="card bg-light" style="margin-bottom:2%">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>

	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="createE.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">&#x1F4BC;</i> </span>
		 </div>
        <input name="companyName" class="form-control" placeholder="Company name" type="text"/>
    </div> <!-- form-group// -->

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">&#x1F464;</i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text"/>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">&#x1F464;</i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email"/>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">	&#x1F4DE;</i> </span>
		</div>
		<select class="custom-select" style="max-width: 70px;">
		    <option selected="">+6</option>
		</select>
    	<input name="phoneNo" class="form-control" placeholder="Phone number" type="text"/>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">	&#x1F389;</i> </span>
		</div>
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
	</div> <!-- form-group end.// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">Event</i> </span>
		 </div>
        <input name="eventName" class="form-control" placeholder="Event name" type="text"/>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">&#x1F3E2;</i> </span>
		 </div>
        <input name="eventVenue" class="form-control" placeholder="Event Venue" type="text"/>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa ">@</i> </span>
		 </div>
        <input name="eventAddress" class="form-control" placeholder="Event Address" type="text"/>
    </div> <!-- form-group// -->                                     
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Are You sure?')"> Create Event  </button>
    </div> <!-- form-group// -->                                                                     
</form>
</article>
</div>

</div> 
<!--container end.//-->

</body>

</html>
