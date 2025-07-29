<?php
session_start();

// Only remove admin session
unset($_SESSION['admin']);

// Redirect to admin login
header('Location: login.php');
exit();
?>
