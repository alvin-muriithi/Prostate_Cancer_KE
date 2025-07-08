<?php
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $location = $_POST['location'];
  $story = $_POST['story'];

  // Handle image upload
  $image = $_FILES['image']['name'];
  $target = 'uploads/' . basename($image);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $stmt = $pdo->prepare("INSERT INTO survivor_stories (name, age, location, story, image_filename) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $age, $location, $story, $image]);
   header("Location: stories_list.php?success=1");
    exit();
    } else {   }
}
?>