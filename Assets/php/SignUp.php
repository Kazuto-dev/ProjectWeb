<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project');

$un = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM info WHERE email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Email Already Taken";
} else {
    $reg = "INSERT INTO info (username, email, password) VALUES ('$un', '$email', '$pass')";
    mysqli_query($con, $reg);

    // Set the session variable
    $_SESSION['username'] = $un;

    header('location: ../php/Home.php');
}
?>
