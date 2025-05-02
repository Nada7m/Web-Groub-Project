<?php 
$con = mysqli_connect("localhost", "root", "", "Soland");
if (!$con) {
 die('Cannot connect!: ' . mysqli_error($con));
}

$sql = "INSERT INTO users (Username,email,password,confirmpass) 
  VALUES('$_POST[Username]','$_POST[email]','$_POST[password]', '$_POST[confirmpass])";

if (!mysqli_query($con, $sql)) {
die('Cannot add: ' . mysqli_error($con));
};

echo "You have successfully signed up!";

mysqli_close($con);
?>
