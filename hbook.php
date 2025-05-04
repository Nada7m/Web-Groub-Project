<?php 
$con = mysqli_connect("localhost", "root", "", "Soland");

if (!$con) {
    die('Cannot connect!: ' . mysqli_connect_error());
}

$sql = "INSERT INTO Hotel_booking (hotel, bookingdate, roomType, phone) 
        VALUES ('$_POST[hotel]', '$_POST[date]', '$_POST[roomType]', '$_POST[phone]')";

if (!mysqli_query($con, $sql)) {
    die('Cannot add: ' . mysqli_error($con));
}
echo "
<html>
<head><style>
body {background-color: #f0f8ff; text-align: center; }
h1{margin-top: 200px ; color:#196f3d;}
a {margin-top: 25px; text-decoration: none;}
</style></head>
<body>
    <h1>Your room has been successfully booked! We wish you a pleasant stay~</h1>
    <a href='Main Page.html'>Return to Home Page</a>
</body>
</html> ";
mysqli_close($con);
?>