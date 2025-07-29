<?php
include 'includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      header('Location: dashboard.php');
      exit();
    }
  }
  $error = "Invalid credentials!";
}
?>

<?php include 'includes/header.php'; ?>

<main class="min-h-[70vh] flex items-center justify-center bg-blue-50 px-4 py-10">
  <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md">
    <!-- Login Icon -->
    <div class="flex justify-center mb-6">
      <svg class="w-14 h-14 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M18 15l3-3m0 0l-3-3m3 3H9" />
      </svg>
    </div>

    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>

    <?php if (isset($error)): ?>
      <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center">
        <?= $error ?>
      </div>
    <?php endif; ?>

    <form method="post" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">
        Login
      </button>
    </form>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
