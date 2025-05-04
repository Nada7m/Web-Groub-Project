<?php 
$con = mysqli_connect("localhost", "root", "", "Soland");

if (!$con) {
    die('Connection Failed: ' . mysqli_connect_error());
}
$sql = "INSERT INTO flight_booking (departure, arrival, username, id_number, departure_date, Time, class, phone, payment_method)
 VALUES (
'$_POST[from]', 
'$_POST[to]', 
'$_POST[username]', 
'$_POST[id]', 
'$_POST[date]', 
'$_POST[time]',
'$_POST[class]', 
'$_POST[phone]', 
'$_POST[payment]')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

echo "
<html>
<head><style>
body {background-color: #f0f8ff; text-align: center;}
h1{margin-top: 200px ; color:#196f3d;}
a {margin-top: 25px; text-decoration: none;}
</style></head>
<body>
    <h1>Your flight has been successfully booked!</h1>
    <a href='Main Page.html'>Return to Home Page</a>
</body>
</html> ";
mysqli_close($con);
?>