
<?php
	session_start();
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
	$phpEmail=$_REQUEST['email'];//to get the email in the session that store in login.php and save it in the $phpEmail variable
	$sql="SELECT * FROM userdata WHERE email='$phpEmail'";//select all details fromuserdata where email equal to $phpEmail
	$result=$conn->query($sql);

	if($result->num_rows>0){
		$res = array();
		while($row=$result->fetch_assoc()){
			array_push($res,$row);
		}
	echo '{"RowCount":' . $result->num_rows.',"userDetails":'.json_encode($res).'}';
}

    ?>