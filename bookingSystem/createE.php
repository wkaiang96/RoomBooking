<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>loading</title>
</head>

<body>
<?php
//session start
	session_start();
//connet to the  server
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gcreation";
	//create connection
	$conn= new mysqli($servername,$username,$password,$dbname);
	//check connection
	if($conn->connect_error)
	{
		die("Connection faild:".$conn->connect_error);
	}
	?>
	
<?php //function of send email
	function sendEmail($to, $subject, $message){
			require 'phpmailer/PHPMailerAutoload.php';
		
			$mail = new PHPMailer();
		
			$mail->isSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPSecure = "ssl";
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->Username = "GCreation.PMY@outlook.com"; // Sender Account
			$mail->Password = "123456"; //sender password
		
			$mail->setFrom("GCreation.PMY@outlook.com", "G Creation");//sender detail
			$mail->addAddress($to);
			$mail->Subject =$subject;
			$mail->Body = $message;
			
				try{
					$mail->Send();
					die('<script>alert("Create Successfully!")
			 				location.href="home.php"</script>');

				} catch(Exception $e){
					die('<script>
						alert("Sorry Something Went Wrong!")
						location.href="home.php"
						</script>');
				}}
	?>
	<?php			
	$phpCN=$_POST['companyName'];
	$phpName=$_POST['name'];
	$phpEmail=$_POST['email'];
	$phpPN=$_POST['phoneNo'];
	$phpType=$_POST['type'];
	$phpEN=$_POST['eventName'];
	$phpEV=$_POST['eventVenue'];
	$phpEAdd=$_POST['eventAddress'];
    
	$sql="INSERT INTO register (company,name,email,phone,type,event_name,event_venue,event_address) VALUES ('$phpCN','$phpName','$phpEmail','$phpPN','$phpType','$phpEN','$phpEV','$phpEAdd')";

	if($conn->query($sql)===TRUE)
	{
			//--------- Here is how you can call the function above --------------
	sendEmail($phpEmail,
	'Thank you for register your event at our website.',
	'Hi ,'.$phpName.',<br/>
	Thank you for submitting your application to G Creation.<br/><br/>
	Event Details:<br/>
	Company Name: '.$phpCN.'<br/>
	Applicant Name: '.$phpName.'<br/>
	Event Type:'.$phpType.'<br/>
	Event Name:'.$phpEN.'<br/>
	Event Venue:'.$phpEV.'.<br/>
	Event Address:'.$phpEAdd.'.<br/><br/>
	Once approve, we will get back to you soon.<br/>
	Thank you.<br/><br/>
	Human Resource Office<br/>
	G Creation');	

		}
	
			else
		{
			die('<script>
			alert("Sorry Something Went Wrong!")
			location.href="home.php"
			</script>');
		}
	?>
</body>

</html>
