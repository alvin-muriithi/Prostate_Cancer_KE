<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';
include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/header.php';



$events = $pdo->query("SELECT * FROM events ORDER BY event_date ASC")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="max-w-6xl mx-auto px-6 mt-10">
  <h2 class="text-2xl font-bold text-blue-600 mb-6">All Events</h2>

  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300 shadow-md rounded-lg overflow-hidden">
      <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
        <tr>
          <th class="px-4 py-3 text-left">Title</th>
          <th class="px-4 py-3 text-left">Date</th>
          <th class="px-4 py-3 text-left">Time</th>
          <th class="px-4 py-3 text-left">Location</th>
          <th class="px-4 py-3 text-left">Registration</th>
          <th class="px-4 py-3 text-left">Image</th>
          <th class="px-4 py-3 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach ($events as $event): ?>
        <tr>
          <td class="px-4 py-3 font-medium text-gray-800"><?= htmlspecialchars($event['title']) ?></td>
          <td class="px-4 py-3"><?= $event['event_date'] ?></td>
          <td class="px-4 py-3"><?= $event['start_time'] ?> - <?= $event['end_time'] ?></td>
          <td class="px-4 py-3"><?= htmlspecialchars($event['location']) ?></td>
          <td class="px-4 py-3"><?= $event['registration_required'] ? 'Yes' : 'No' ?></td>
          <td class="px-4 py-3">
            <?php if ($event['image_filename']): ?>
              <img src="uploads/<?= $event['image_filename'] ?>" alt="Event Image" class="w-24 h-16 object-cover rounded-md border">
            <?php endif; ?>
          </td>
          <td class="px-4 py-3">
            <a href="delete_event.php?id=<?= $event['event_id'] ?>"
              onclick="return confirm('Are you sure you want to delete this event?');"
              class="text-red-600 hover:text-red-800 text-sm font-semibold">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/footer.php'; ?>

