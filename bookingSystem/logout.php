<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>LogOut</title>
</head>
<?php
//start the session
session_start();
//destory it 
session_destroy();
echo '<script type="text/javascript">alert("Logout Successful")</script>';
header("location:Booking/home.php");
$conn->close();
?>
<body>

</body>

</html>
