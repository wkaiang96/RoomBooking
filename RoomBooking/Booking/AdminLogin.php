<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Admin Login Page</title>
<link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>	<link rel="stylesheet" href="all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>
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
				<h3>Admin Sign In</h3><!--admin page sign in---->
			</div>
			<div class="card-body">
				<form action="login.php" method="post" ><!--send the action or post the value to login.php---->
					<div class="input-group form-group">
						<div class="input-group-prepend"><!--using bootstrap to design---->
							<span class="input-group-text"><i class="fas">&#x1F464;</i></span>
						</div>
						<input  type="text" name="login_email"  class="form-control" placeholder="username" required/><!--admin email---->
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas ">&#x1f512;</i></span>
						</div>
						<input name="login_pw" type="password" class="form-control" placeholder="password" required/><!--admin password---->
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
				<div class="d-flex justify-content-center">
					<a href="#" style="color:blue">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>	



</body>

</html>
