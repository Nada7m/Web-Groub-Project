<?php 
$con = mysqli_connect("localhost", "root", "", "soland");
if (!$con){
	die('Cannot connect!:'.mysqli_error($con));
}
$sql="INSERT INTO user (Username,email,password,confirmpass) 
VALUES('$_POST[name]','$_POST[email]','$_POST[pwd]','$_POST[confirmpass]')";
 
 if (!mysqli_query($con,$sql)) {
	 die ('Cannot add: '.mysqli_error ());
 };
 echo "You have signed in successfully!";
 mysqli_close($con);
 ?>

