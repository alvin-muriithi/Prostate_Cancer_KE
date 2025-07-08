<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';
include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/header.php';

$articles = $pdo->query("SELECT * FROM research_articles ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="max-w-7xl mx-auto px-6 mt-10">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">All Research Articles</h2>

  <div class="overflow-x-auto bg-white shadow-md rounded-lg border border-gray-200">
    <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
      <thead class="bg-gray-100 text-gray-700 uppercase">
        <tr>
          <th class="px-4 py-3">Title</th>
          <th class="px-4 py-3">Researcher</th>
          <th class="px-4 py-3">Institution</th>
          <th class="px-4 py-3">Summary</th>
          <th class="px-4 py-3">PDF</th>
          <th class="px-4 py-3">Image</th>
          <th class="px-4 py-3">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <?php foreach ($articles as $article): ?>
        <tr>
          <td class="px-4 py-3 font-medium text-gray-800"><?= htmlspecialchars($article['title']) ?></td>
          <td class="px-4 py-3"><?= htmlspecialchars($article['researcher']) ?></td>
          <td class="px-4 py-3"><?= htmlspecialchars($article['institution']) ?></td>
          <td class="px-4 py-3 line-clamp-2 max-w-xs"><?= htmlspecialchars($article['summary']) ?></td>
          <td class="px-4 py-3">
            <?php if (!empty($article['pdf_filename'])): ?>
              <a href="uploads/research_pdfs/<?= $article['pdf_filename'] ?>" target="_blank" class="text-blue-600 hover:underline">📄 View</a>
            <?php endif; ?>
          </td>
          <td class="px-4 py-3">
            <?php if (!empty($article['image_filename'])): ?>
              <img src="uploads/research_images/<?= $article['image_filename'] ?>" alt="Research Image" class="w-16 h-16 rounded-full object-cover border">
            <?php endif; ?>
          </td>
          <td class="px-4 py-3">
            <a href="delete_research.php?id=<?= $article['id'] ?>"
              onclick="return confirm('Are you sure you want to delete this research article?');"
              class="text-red-600 hover:text-red-800 font-semibold text-sm">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/footer.php'; ?>
