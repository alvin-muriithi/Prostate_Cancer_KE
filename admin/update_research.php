<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';

$id = $_POST['id'];
$title = $_POST['title'];
$researcher = $_POST['researcher'];
$institution = $_POST['institution'];
$summary = $_POST['summary'];
$content = $_POST['content'];

// Get existing record
$stmt = $pdo->prepare("SELECT * FROM research_articles WHERE id = ?");
$stmt->execute([$id]);
$existing = $stmt->fetch();
if (!$existing) {
    die("Research article not found.");
}

$pdfName = $existing['pdf_filename'];
$imageName = $existing['image_filename'];

// PDF upload
if (!empty($_FILES['pdf']['name'])) {
    $pdfName = uniqid() . "_" . basename($_FILES['pdf']['name']);
    $pdfTmp = $_FILES['pdf']['tmp_name'];
    move_uploaded_file($pdfTmp, 'uploads/' . $pdfName);
}

// Image upload
if (!empty($_FILES['image']['name'])) {
    $imageName = uniqid() . "_" . basename($_FILES['image']['name']);
    $imageTmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($imageTmp, 'uploads/' . $imageName);
}

// Update DB
$stmt = $pdo->prepare("UPDATE research_articles SET title=?, researcher=?, institution=?, summary=?, content=?, pdf_filename=?, image_filename=?, updated_at=NOW() WHERE id=?");
$stmt->execute([$title, $researcher, $institution, $summary, $content, $pdfName, $imageName, $id]);

header("Location: research_list.php?success=research_updated");
exit;
