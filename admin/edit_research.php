<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';
include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/header.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid article ID.";
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM research_articles WHERE id = ?");
$stmt->execute([$id]);
$article = $stmt->fetch();

if (!$article) {
    echo "Article not found.";
    exit;
}
?>

<div class="max-w-4xl mx-auto px-6 py-10">
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Research Article</h2>
  <form action="update_research.php" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded shadow">
    <input type="hidden" name="id" value="<?= $article['id'] ?>">

    <div>
      <label class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" value="<?= htmlspecialchars($article['title']) ?>" required class="w-full p-2 border rounded">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Researcher</label>
      <input type="text" name="researcher" value="<?= htmlspecialchars($article['researcher']) ?>" required class="w-full p-2 border rounded">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Institution</label>
      <input type="text" name="institution" value="<?= htmlspecialchars($article['institution']) ?>" required class="w-full p-2 border rounded">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Summary</label>
      <textarea name="summary" required class="w-full p-2 border rounded"><?= htmlspecialchars($article['summary']) ?></textarea>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Full Content</label>
      <textarea name="content" rows="5" required class="w-full p-2 border rounded"><?= htmlspecialchars($article['content']) ?></textarea>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Current PDF:</label>
      <p class="text-sm text-blue-700 mb-2"><?= $article['pdf_filename'] ?></p>
      <label class="block text-sm font-medium text-gray-700">Upload New PDF (optional)</label>
      <input type="file" name="pdf" accept="application/pdf" class="w-full text-sm">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Current Image:</label>
      <?php if ($article['image_filename']): ?>
        <img src="uploads/<?= htmlspecialchars($article['image_filename']) ?>" class="w-24 h-24 rounded border mb-2" />
      <?php endif; ?>
      <label class="block text-sm font-medium text-gray-700">Upload New Image (optional)</label>
      <input type="file" name="image" accept="image/*" class="w-full text-sm">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update Article</button>
  </form>
</div>

<?php include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/footer.php'; ?>
