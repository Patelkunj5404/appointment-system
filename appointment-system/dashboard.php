<?php
include 'includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $date = $_POST['date'];
  $time = $_POST['time'];
  $message = $_POST['message'];
  $user_id = $_SESSION['user_id'];

  $stmt = $conn->prepare("INSERT INTO appointments (user_id, appointment_date, appointment_time, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("isss", $user_id, $date, $time, $message);
  $stmt->execute();

  $success = "✅ Appointment requested successfully!";
}
?>

<?php include 'includes/header.php'; ?>

<main class="max-w-full mx-auto pt-12 px-4 md:px-10 pb-20 bg-white">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white p-8 rounded-2xl shadow-2xl items-center">
    
    <!-- Left: Form Section -->
    <div>
      <h1 class="text-3xl font-bold text-blue-700 mb-6 text-left">📅 Book an Appointment</h1>

      <?php if (isset($success)): ?>
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
          <?= htmlspecialchars($success) ?>
        </div>
      <?php endif; ?>

      <form method="post" class="space-y-6">
        <!-- Date -->
        <div>
          <label class="block mb-1 font-semibold text-gray-800">Date:</label>
          <input type="date" name="date" required
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none">
        </div>

        <!-- Time -->
        <div>
          <label class="block mb-1 font-semibold text-gray-800">Time:</label>
          <input type="time" name="time" required
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none">
        </div>

        <!-- Message -->
        <div>
          <label class="block mb-1 font-semibold text-gray-800">Message:</label>
          <textarea name="message" required rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none resize-none"
                    placeholder="Enter any notes or meeting details..."></textarea>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit"
                  class="w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-semibold shadow">
            ➕ Book Appointment
          </button>
        </div>
      </form>
    </div>

    <!-- Right: Image Section -->
    <div class="hidden md:flex justify-center items-center">
  <img src="https://cdn-icons-png.freepik.com/512/10620/10620360.png"
       alt="Appointment Illustration"
       class="w-72 h-auto object-contain" />
</div>

  </div>
</main>

<?php include 'includes/footer.php'; ?>
