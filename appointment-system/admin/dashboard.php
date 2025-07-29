<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit();
}
?>

<?php include '../includes/admin_header.php'; ?>

<main class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-100 flex items-center justify-center p-4">
  <div class="w-full max-w-6xl bg-white rounded-3xl shadow-xl p-10">
    
    <!-- Top Section -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8">
      <div>
        <h1 class="text-4xl font-bold text-gray-800 mb-2">👋 Welcome, Admin</h1>
        <p class="text-gray-600 text-lg">
          Manage appointments, view system updates, and navigate with ease.
        </p>
      </div>
      <a href="logout.php"
         class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full font-semibold transition">
         🚪 Logout
      </a>
    </div>

    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Manage Appointments -->
      <a href="view_appointments.php"
         class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="flex items-center justify-between mb-2">
          <div class="text-3xl">📅</div>
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M8 7V3m8 4V3m-9 4h10a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold">Manage Appointments</h3>
        <p class="text-sm mt-1 opacity-80">View, update and control user bookings</p>
      </a>

    </div>

    <!-- Footer/Note -->
    <div class="mt-10 text-center text-sm text-gray-500">
      &copy; <?php echo date("Y"); ?> Admin Panel — All rights reserved.
    </div>

  </div>
</main>

<?php include '../includes/admin_footer.php'; ?>
