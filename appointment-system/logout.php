<?php
session_start();

// Only remove user session
unset($_SESSION['user_id']);
unset($_SESSION['username']);

// Redirect to homepage or login
header('Location: index.php');
exit();
?>
