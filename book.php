<?php 
// الاتصال بقاعدة البيانات
$con = mysqli_connect("localhost", "root", "", "soland");

if (!$con) {
    die('Cannot connect!: ' . mysqli_connect_error());
}

// جملة الإدخال
$sql = "INSERT INTO bookings (name, hotel, booking_date, room_type, phone, email) 
        VALUES ('$_POST[name]', '$_POST[hotel]', '$_POST[booking_date]', '$_POST[room_type]', '$_POST[phone]', '$_POST[email]')";
// تنفيذ الإدخال
if (!mysqli_query($con, $sql)) {
    die('Cannot add: ' . mysqli_error($con));
}

echo "1 record added successfully.";

mysqli_close($con);
?>
