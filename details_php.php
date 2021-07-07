<?php
$yourname=$_POST['yourname'];
$email=$_POST['email'];

$phone=$_POST['mnumber'];

$category=$_POST['msex'];
$issue=$_POST['issue'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];

if(!empty($yourname) || !empty($email)|| !empty($phone)|| !empty($category)|| !empty($issue) || !empty($occupation) || !empty($address)){
	$host = "localhost";
	$dbUsername = "root";
	$dbpassword = "";
	$dbname="helping_hand";
	
	$conn = new mysqli($host,$dbUsername,$dbpassword,$dbname);
	
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		
		$INSERT = "INSERT Into signup_user  (yourname,email,phone,category,issue,occupation,address) values(?,?,?,?,?,?,?)";
		
		
		 
		
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssss",$yourname,$email,$phone,$category,$issue,$occupation,$address);
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

