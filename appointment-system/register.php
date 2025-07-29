<?php
include 'includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $email, $password);

  if ($stmt->execute()) {
    $_SESSION['user_id'] = $stmt->insert_id;
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit();
  } else {
    $error = "Email already exists!";
  }
}
?>

<?php include 'includes/header.php'; ?>

<main class="min-h-[70vh] flex items-center justify-center bg-gray-100 px-4">
  <div class="bg-white shadow-xl rounded-xl p-8 max-w-md w-full">
    <div class="flex flex-col items-center mb-6">
      <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Register Icon" class="w-16 h-16 mb-3">
      <h1 class="text-2xl font-bold text-gray-800">Register</h1>
    </div>

    <?php if (isset($error)): ?>
      <div class="bg-red-100 text-red-700 p-2 mb-4 rounded text-sm text-center">
        <?= $error ?>
      </div>
    <?php endif; ?>

    <form method="post" class="space-y-4">
      <div>
        <label class="block text-gray-700 mb-1">Username</label>
        <input type="text" name="username" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-gray-700 mb-1">Email</label>
        <input type="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
        Create Account
      </button>
    </form>

    <p class="mt-4 text-sm text-center text-gray-600">
      Already have an account? <a href="login.php" class="text-blue-600 hover:underline">Login here</a>.
    </p>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
