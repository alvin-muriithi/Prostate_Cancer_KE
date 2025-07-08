<?php
include 'C:\xampp\htdocs\Prostate_Cancer_KE\dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $location = $_POST['location'];
    $registration_required = isset($_POST['registration_required']) ? 1 : 0;

    // Handle image upload
    $image_filename = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $image_filename = time() . '_' . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_filename;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }

    $stmt = $pdo->prepare("INSERT INTO events (title, description, event_date, start_time, end_time, location, registration_required, image_filename)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$title, $description, $event_date, $start_time, $end_time, $location, $registration_required, $image_filename]);

    header("Location: events_list.php?success=1");
    exit();
}
?>
