<?php
session_start();

// If admin is already logged in
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit();
} else {
    // If not logged in, redirect to login
    header("Location: login.php");
    exit();
}
?>
