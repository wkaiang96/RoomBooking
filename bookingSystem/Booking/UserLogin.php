<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Login Page</title>
  	<link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
	<link rel="stylesheet" href="all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="login.css"/>
</head>

<body>

<div align="center" >
	<a href="home.php"><img src="img/logo.png" width="150px" style="margin:3% "/></a>
</div>

<div class="container">
	<div class="d-flex justify-content-center ">
		<div class="card">
			<div class="card-header">
				<h3>User Sign In</h3>
			</div>
			<div class="card-body">
				<form action="login.php" method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas ">&#x1F464;</i></span>
						</div>
						<input  type="text" name="login_email"  class="form-control" placeholder="username" required/>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas ">&#x1f512;</i></span>
						</div>
						<input name="login_pw" type="password" class="form-control" placeholder="password" required/>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox"/>Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn"/>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <button id="buttonOut"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#" style="color:blue">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>	
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="register.php" method="post">
    <div class="container">
      <h1>Sign Up as user</h1>
      <p>Please fill in this form to create an account.</p>
      <hr/>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="register_email"  required /><br/>
      
	  <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="register_name"  required />
      
      
	  <label for="gender" ><b>Gender</b></label><br/>
      <input type="radio" name="gender" id="gender" value="Male"/>Male
      <input type="radio" name="gender" id="gender" value="Female"/>Female
     <br/>
     <br/>

	  <label for="phone_number"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Phone Number" name="register_phone"  required />

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="register_psw"   required />

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="register_pwcon"  required />
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" required="required"/> Term and Condition Apply
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &amp; Privacy</a>.</p>

      <div class="clearfix">
        <button id="buttonInC" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button id="buttonIn" type="submit" class="signupbtn" >Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>

</html>
