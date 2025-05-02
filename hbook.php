<?php 
$con = mysqli_connect("localhost", "root", "", "Soland");

if (!$con) {
    die('Cannot connect!: ' . mysqli_connect_error());
}

$sql = "INSERT INTO hbooking (hotel, bookingdate, roomType, phone) 
        VALUES ('$_POST[hotel]', '$_POST[date]', '$_POST[roomType]', '$_POST[phone]')";

if (!mysqli_query($con, $sql)) {
    die('Cannot add: ' . mysqli_error($con));
}

echo "Your room has been successfully booked! We wish you a pleasant stay~";

mysqli_close($con);
?>
