<?php 
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';
include 'C:/xampp/htdocs/Prostate_Cancer_KE/admin/templates/header.php';

$title = $_POST['title'];
$researcher = $_POST['researcher'];
$institution = $_POST['institution'];
$summary = $_POST['summary'];
$content = $_POST['content'];

// Handle PDF upload
$pdfName = $_FILES['pdf']['name'];
$pdfTmp = $_FILES['pdf']['tmp_name'];
$pdfDest = 'admin/uploads/research_pdfs/' . basename($pdfName);
move_uploaded_file($pdfTmp, $pdfDest);

// Handle image upload
$imageName = '';
if (!empty($_FILES['image']['name'])) {
  $imageName = $_FILES['image']['name'];
  $imageTmp = $_FILES['image']['tmp_name'];
  $imageDest = 'admin/uploads/research_images/' . basename($imageName);
  move_uploaded_file($imageTmp, $imageDest);
}

$stmt = $pdo->prepare("INSERT INTO research_articles (title, researcher, institution, summary, content, pdf_filename, image_filename) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$title, $researcher, $institution, $summary, $content, $pdfName, $imageName]);

header("Location: research_list.php?success=research_added");
exit;
?>
