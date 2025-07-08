<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $stmt = $pdo->prepare("SELECT image_filename FROM survivor_stories WHERE id = ?");
  $stmt->execute([$id]);
  $story = $stmt->fetch();

  if ($story && $story['image_filename']) {
    $filePath = 'uploads/' . $story['image_filename'];
    if (file_exists($filePath)) {
      unlink($filePath);
    }
  }

  $pdo->prepare("DELETE FROM survivor_stories WHERE id = ?")->execute([$id]);
}

header('Location: stories_list.php');
exit;