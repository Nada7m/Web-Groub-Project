<?php 
$con = mysqli_connect("localhost", "root", "", "Soland");

if (!$con) {
    die('Cannot connect!: ' . mysqli_connect_error());
}
$sql = "INSERT INTO bookings (name, hotel, booking_date, room_type, phone, email) 
        VALUES ('$_POST[name]', '$_POST[hotel]', '$_POST[booking_date]', '$_POST[room_type]', '$_POST[phone]', '$_POST[email]')";

if (!mysqli_query($con, $sql)) {
    die('Cannot add: ' . mysqli_error($con));
}

echo "Your room has been successfully booked! We wish you a pleasant stay~";

mysqli_close($con);
?>
