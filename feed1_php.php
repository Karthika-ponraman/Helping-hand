<?php
$conn=mysqli_connect("localhost", "root", "", "helping_hand");
$sql="UPDATE feedbackform set feedback='$_POST[feedback]' WHERE mailid='$_POST[mailid]'";
if(mysqli_query($conn,$sql))
{
	echo '<script language="javascript">';
	echo 'alert("Thanks for your feedback")';
	echo '</script>';
	include("homepage.html");
}
else
{
	echo '<script language="javascript">';
	echo 'alert("Please Enter the feedback")';
	echo '</script>';
}
?>
