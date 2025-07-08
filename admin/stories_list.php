<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';
include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/header.php';


$stories = $pdo->query("SELECT * FROM survivor_stories ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="max-w-7xl mx-auto px-6 mt-10">
  <h2 class="text-2xl font-bold text-teal-600 mb-6">Survivor Stories List</h2>

  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300 shadow-md rounded-lg overflow-hidden">
      <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
        <tr>
          <th class="px-4 py-3 text-left">Image</th>
          <th class="px-4 py-3 text-left">Name</th>
          <th class="px-4 py-3 text-left">Age</th>
          <th class="px-4 py-3 text-left">Location</th>
          <th class="px-4 py-3 text-left">Story</th>
          <th class="px-4 py-3 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach ($stories as $story): ?>
          <tr>
            <td class="px-4 py-3">
              <?php if ($story['image_filename']): ?>
                <img src="uploads/<?= $story['image_filename'] ?>" alt="Survivor Image" class="w-16 h-16 object-cover rounded">
              <?php endif; ?>
            </td>
            <td class="px-4 py-3"><?= htmlspecialchars($story['name']) ?></td>
            <td class="px-4 py-3"><?= $story['age'] ?></td>
            <td class="px-4 py-3"><?= htmlspecialchars($story['location']) ?></td>
            <td class="px-4 py-3 text-gray-600"><?= nl2br(htmlspecialchars($story['story'])) ?></td>
            <td class="px-4 py-3">
              <a href="delete_story.php?id=<?= $story['id'] ?>" 
                 class="text-red-600 hover:text-red-800 font-medium"
                 onclick="return confirm('Delete this story?')">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/footer.php'; ?>