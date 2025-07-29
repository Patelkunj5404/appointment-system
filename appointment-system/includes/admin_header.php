<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: ../login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-blue-700 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-lg font-bold">Admin Panel</h1>
      <span>Welcome , <?= htmlspecialchars($_SESSION['admin']) ?> </span>
    </div>
  </header>
