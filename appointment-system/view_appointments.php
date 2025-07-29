<?php
include 'includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit();
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM appointments WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<?php include 'includes/header.php'; ?>

<main class="min-h-[80vh] bg-gray-100 py-10 bg-white">
  <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Your Appointments</h1>

  <div class="flex justify-center px-4">
    <div class="w-full max-w-6xl overflow-x-auto bg-white shadow-xl rounded-xl p-6">
      <table class="w-full text-left border border-gray-200 rounded-lg">
        <thead>
          <tr class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
            <th class="py-3 px-6 border-b">Date</th>
            <th class="py-3 px-6 border-b">Time</th>
            <th class="py-3 px-6 border-b">Message</th>
            <th class="py-3 px-6 border-b">Status</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm">
          <?php while ($row = $result->fetch_assoc()): ?>
          <tr class="border-b hover:bg-gray-50">
            <td class="py-3 px-6"><?= htmlspecialchars($row['appointment_date']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($row['appointment_time']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($row['message']) ?></td>
            <td class="py-3 px-6">
              <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold
                <?php
                $status = strtolower($row['status']);
                echo match ($status) {
                  'pending' => 'bg-yellow-100 text-yellow-800',
                  'approved' => 'bg-green-100 text-green-800',
                  'rejected' => 'bg-red-100 text-red-800',
                  default => 'bg-gray-200 text-gray-800'
                };
                ?>">
                <?= htmlspecialchars($row['status']) ?>
              </span>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
