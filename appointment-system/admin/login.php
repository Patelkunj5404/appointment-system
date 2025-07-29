<?php
session_start();
include '../includes/db.php';

// Redirect to dashboard if already logged in
if (isset($_SESSION['admin'])) {
  header('Location: dashboard.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Static login (replace with DB check for production)
  if ($username === 'admin' && $password === 'admin123') {
    $_SESSION['admin'] = $username;
    header('Location: dashboard.php');
    exit();
  } else {
    $error = "Invalid admin credentials!";
  }
}
?>

<?php include '../includes/header.php'; ?>

<main class="min-h-[70vh] flex items-center justify-center bg-gray-100 px-4">
  <div class="bg-white rounded-xl shadow-md p-8 w-full max-w-md">
    <div class="text-center mb-6">
      <div class="text-4xl text-blue-600 mb-2">
        <i class="fas fa-user-shield"></i>
      </div>
      <h1 class="text-2xl font-semibold text-gray-800">Admin Login</h1>
    </div>

    <?php if (isset($error)): ?>
      <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded mb-4 text-sm">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" name="username" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
        <i class="fas fa-sign-in-alt mr-1"></i> Login
      </button>
    </form>
  </div>
</main>

<?php include '../includes/footer.php'; ?>
