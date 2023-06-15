<?php
session_start();

$con = mysqli_connect('localhost', 'root', ''); // connection to the database

mysqli_select_db($con, 'project'); // Selecting the database

$email = $_POST['email']; // Student Email @cvsu.com
$pass = $_POST['password']; // POST pass

$sql = "SELECT * FROM info WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {
    // Fetch the username from the database result
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];

    // Set the session variables
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pass;

    header('location: ../php/Home.php');
} else {
    echo "Check your credentials if correct or contact the administrator";
}


?>
