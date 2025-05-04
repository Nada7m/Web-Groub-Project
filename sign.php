<?php 
$con = mysqli_connect("localhost", "root", "", "soland");
if (!$con){
	die('Cannot connect!:'.mysqli_error($con));
}
$sql="INSERT INTO users (Username,email,password,confirmpass) 
VALUES('$_POST[name]','$_POST[email]','$_POST[pwd]','$_POST[confirmpass]')";
 
 if (!mysqli_query($con,$sql)) {
	 die ('Cannot add: '.mysqli_error ());
 };
echo "
<html>
<head><style>
body {background-color: #f0f8ff; text-align: center; }
h1{margin-top: 200px ; color:#196f3d;}
a {margin-top: 25px; text-decoration: none;}
</style></head>
<body>
    <h1>You have signed in successfully!</h1>
    <a href='Main Page.html'>Return to Home Page</a>
</body>
</html> ";
 
 mysqli_close($con);
 ?>

