<?php
session_start();

function checkUser() {
    if (!isset($_SESSION['username'])) {
        header('location: ../../Index.php');
        exit();
    }
}

function reflectUser() {
    if (isset($_SESSION['username'])) {
        $un = $_SESSION['username'];
        return $un;
    } else {
        echo "Variable not set or destroyed.";
    }
}

function sessionTimeout() {
    $timeout_duration = 300; // 5 minutes

    if (isset($_SESSION['last_activity'])) {
        $last_activity = $_SESSION['last_activity'];
    } else {
        $last_activity = time();
        $_SESSION['last_activity'] = $last_activity;
    }

    if (time() - $last_activity > $timeout_duration) {
        session_unset();
        session_destroy();
        header('location: ../php/Login.php');
        exit();
    }

    $_SESSION['last_activity'] = time();
}
?>
