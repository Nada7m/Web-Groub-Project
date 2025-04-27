<?php
// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = "";     // كلمة المرور لقاعدة البيانات (غالباً فاضي في السيرفر المحلي)
$dbname = "soland"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استقبال البيانات من الفورم
$hotel = $_POST['hotel'];
$date = $_POST['date'];
$roomType = $_POST['roomType'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// إدخال البيانات إلى الجدول
$sql = "INSERT INTO bookings (hotel, date, room_type, phone, email)
VALUES ('$hotel', '$date', '$roomType', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color:green;text-align:center;margin-top:50px;'>Booking Successful!</h2>";
    echo "<p style='text-align:center;'><a href='index.html'>Back to Home</a></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
