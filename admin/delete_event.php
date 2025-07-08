<?php

include 'C:\xampp\htdocs\Prostate_Cancer_KE\dbconfig.php';

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT image_filename FROM events WHERE event_id = ?");
    $stmt->execute([$_GET['id']]);
    $event = $stmt->fetch();

    // Delete image
    if ($event && $event['image_filename']) {
        $filepath = "uploads/" . $event['image_filename'];
        if (file_exists($filepath)) {
            unlink($filepath);
        }
    }

    // Delete record
    $stmt = $pdo->prepare("DELETE FROM events WHERE event_id = ?");
    $stmt->execute([$_GET['id']]);

    header("Location: events_list.php?deleted=1");
    exit();
}
?>