<?php

$email=$_POST['mailid'];


$feedback=$_POST['feedback'];

if(!empty($email) || !empty($feedback)){
	$host = "localhost";
	$dbUsername = "root";
	$dbpassword = "";
	$dbname="helping_hand";
	
	$conn = new mysqli($host,$dbUsername,$dbpassword,$dbname);
	
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		
		$INSERT = "INSERT Into complaint_user  (email,feedback) values(?,?)";
		
		
		 
		
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ss",$email,$feedback);
			$stmt->execute();
			$stmt->close();
			
			echo '<script language="javascript">';
			echo 'alert("submitted successfully")';
			echo '</script>';
			include("homepage.html");
		}	
}else{
alert("all fields required");
die();
}

?>

