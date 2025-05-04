<?php 
$con = mysqli_connect("localhost", "root", "", "soland");

if (!$con) {
    die('Cannot connect!: ' . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    $Username = $_POST['username'];
    $password = $_POST['pwd'];

    $query = "SELECT * FROM user WHERE Username='$Username' AND password='$password'";
    $res = mysqli_query($con, $query);

    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Welcome back! Check out our latest offers.');</script>";
    } else {
        echo "<script>alert('Incorrect username or password.');</script>";
    }
}
?>