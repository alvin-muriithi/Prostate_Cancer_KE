<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch and delete associated files
    $stmt = $pdo->prepare("SELECT image_filename, pdf_filename FROM research_articles WHERE id = ?");
    $stmt->execute([$id]);
    $article = $stmt->fetch();

    if ($article) {
        if (!empty($article['image_filename'])) {
            $imagePath = "uploads/research_images/" . $article['image_filename'];
            if (file_exists($imagePath)) unlink($imagePath);
        }

        if (!empty($article['pdf_filename'])) {
            $pdfPath = "uploads/research_pdfs/" . $article['pdf_filename'];
            if (file_exists($pdfPath)) unlink($pdfPath);
        }

        $deleteStmt = $pdo->prepare("DELETE FROM research_articles WHERE id = ?");
        $deleteStmt->execute([$id]);
    }
}

header("Location: research_list.php");
exit;
