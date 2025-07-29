<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meeting Appointment System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.remove('translate-x-full');
    menu.classList.add('translate-x-0');
  }

  function closeMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.remove('translate-x-0');
    menu.classList.add('translate-x-full');
  }
</script>

</head>

<!-- Header -->
<header class="bg-gray-800 border-b border-gray-700 shadow-sm sticky top-0 z-50 w-full">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">

    <!-- Logo -->
    <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-wide flex items-center gap-2">
      <i class="fa-solid fa-calendar-check text-blue-400"></i>
      <a href="/appointment-system/index.php" class="hover:text-blue-500 transition">
        Bookly
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
      <button onclick="toggleMenu()" class="text-gray-300 focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:flex items-center space-x-6 font-medium text-sm">
      <a href="/appointment-system/index.php" class="text-gray-300 hover:text-blue-400 transition">Home</a>
      <a href="/appointment-system/about.php" class="text-gray-300 hover:text-blue-400 transition">About</a>
      <a href="/appointment-system/contact.php" class="text-gray-300 hover:text-blue-400 transition">Contact</a>

      <?php if (isset($_SESSION['username'])): ?>
        <a href="/appointment-system/view_appointments.php" class="text-gray-300 hover:text-blue-400 transition">My Appointments</a>
        <a href="/appointment-system/dashboard.php" class="text-blue-400 hover:text-blue-300 font-semibold transition">Book Appointment</a>
        <span class="text-sm text-gray-400 italic">Hi, <?= htmlspecialchars($_SESSION['username']) ?></span>
        <a href="/appointment-system/logout.php">
          <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500 transition">Logout</button>
        </a>
      <?php elseif (isset($_SESSION['admin'])): ?>
        <a href="/appointment-system/admin/dashboard.php" class="text-gray-300 hover:text-blue-400 transition">Dashboard</a>
        <a href="logout.php">
          <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500 transition">Logout</button>
        </a>
      <?php else: ?>
        <a href="/appointment-system/admin/login.php">
          <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-400 transition">Admin Login</button>
        </a>
        <a href="/appointment-system/login.php">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 transition">Login</button>
        </a>
        <a href="/appointment-system/register.php">
          <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500 transition">Register</button>
        </a>
      <?php endif; ?>
    </nav>
  </div>

  <!-- Mobile Navigation -->
  <!-- Slide-in Mobile Navigation (Right to Left) -->
<div id="mobile-menu"
     class="fixed top-0 right-0 h-full w-64 bg-gray-900 text-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 lg:hidden">

  <div class="flex justify-between items-center p-4 border-b border-gray-700">
    <span class="text-lg font-semibold">Menu</span>
    <button onclick="closeMenu()" class="text-gray-300 hover:text-white">
      <i class="fas fa-times text-xl"></i>
    </button>
  </div>

  <nav class="flex flex-col space-y-4 p-4">
    <a href="/appointment-system/index.php" class="hover:text-blue-400">Home</a>
    <a href="/appointment-system/about.php" class="hover:text-blue-400">About</a>
    <a href="/appointment-system/contact.php" class="hover:text-blue-400">Contact</a>

    <?php if (isset($_SESSION['username'])): ?>
      <a href="/appointment-system/view_appointments.php" class="hover:text-blue-400">My Appointments</a>
      <a href="/appointment-system/dashboard.php" class="text-blue-400 hover:text-blue-300 font-semibold">Book Appointment</a>
      <span class="text-sm text-gray-400 italic">Hi, <?= htmlspecialchars($_SESSION['username']) ?></span>
      <a href="/appointment-system/logout.php">
        <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500 w-full">Logout</button>
      </a>
    <?php elseif (isset($_SESSION['admin'])): ?>
      <a href="/appointment-system/admin/dashboard.php" class="hover:text-blue-400">Dashboard</a>
      <a href="/appointment-system/logout.php">
        <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500 w-full">Logout</button>
      </a>
    <?php else: ?>
      <a href="/appointment-system/admin/login.php">
        <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-400 w-full">Admin Login</button>
      </a>
      <a href="/appointment-system/login.php">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 w-full">Login</button>
      </a>
      <a href="/appointment-system/register.php">
        <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500 w-full">Register</button>
      </a>
    <?php endif; ?>
  </nav>
</div>

</header>
