<?php
//session start
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gcreation";
	$session_start;
	//create connection
    $conn= new mysqli($servername,$username,$password,$dbname);
    

	//check connection
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
    }

    $phpSubject=$_REQUEST['subject'];//to get the url value
    if (!empty($phpSubject))
	{
		//get subject from previous page
		$sql="SELECT * FROM contactus WHERE subject='$phpSubject' ";
	}
	//if empty
	else
	{	
		$sql = "SELECT * FROM contactus ";
	}

	$result=$conn->query($sql);

	if($result->num_rows>0){
		$res = array();
		while($row=$result->fetch_assoc()){
			array_push($res,$row);
		}
	echo '{"RowCount":' . $result->num_rows.',"userComment":'.json_encode($res).'}';
}

	?>