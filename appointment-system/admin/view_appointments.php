<?php
session_start();
include '../includes/db.php';

if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit();
}

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['status'])) {
  $id = $_POST['id'];
  $status = $_POST['status'];

  $stmt = $conn->prepare("UPDATE appointments SET status = ? WHERE id = ?");
  $stmt->bind_param("si", $status, $id);
  $stmt->execute();
}

$result = $conn->query("SELECT appointments.*, users.username FROM appointments JOIN users ON appointments.user_id = users.id");
?>

<?php include '../includes/admin_header.php'; ?>

<main class="container mx-auto px-4 py-10 min-h-screen">
  <!-- Back Button -->
  <div class="mb-6">
    <a href="dashboard.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
      ← Back to Dashboard
    </a>
  </div>

  <h1 class="text-2xl font-bold text-gray-800 mb-6">📅 Manage Appointments</h1>

  <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
    <table class="min-w-full text-sm text-gray-700 border">
      <thead>
        <tr class="bg-gray-200 text-gray-700 text-left">
          <th class="px-4 py-3">User</th>
          <th class="px-4 py-3">Date</th>
          <th class="px-4 py-3">Time</th>
          <th class="px-4 py-3">Message</th>
          <th class="px-4 py-3">Status</th>
          <th class="px-4 py-3">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr class="border-t hover:bg-gray-50 transition">
          <td class="px-4 py-2"><?= htmlspecialchars($row['username']) ?></td>
          <td class="px-4 py-2"><?= $row['appointment_date'] ?></td>
          <td class="px-4 py-2"><?= $row['appointment_time'] ?></td>
          <td class="px-4 py-2"><?= $row['message'] ?></td>
          <td class="px-4 py-2 font-medium">
            <span class="<?php
              echo match ($row['status']) {
                'Pending' => 'text-yellow-600',
                'Approved' => 'text-green-600',
                'Rejected' => 'text-red-600',
                default => 'text-gray-600',
              };
            ?>">
              <?= $row['status'] ?>
            </span>
          </td>
          <td class="px-4 py-2">
            <form method="post">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <select name="status" onchange="this.form.submit()" class="border px-2 py-1 rounded focus:outline-none focus:ring">
                <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                <option value="Approved" <?= $row['status'] == 'Approved' ? 'selected' : '' ?>>Approved</option>
                <option value="Rejected" <?= $row['status'] == 'Rejected' ? 'selected' : '' ?>>Rejected</option>
              </select>
            </form>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</main>

<?php include '../includes/admin_footer.php'; ?>
