<?php
header("Content-Type: application/json");

require_once __DIR__ . 'dbconfig.php';
try {
  $data = json_decode(file_get_contents("php://input"));

  $email = filter_var($data->email, FILTER_VALIDATE_EMAIL);
  $name = trim($data->name);

  if (!$email || !$name) {
    http_response_code(400);
    echo json_encode(["message" => "Invalid input"]);
    exit;
  }

  // Check if user exists
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);

  if ($stmt->rowCount() === 0) {
    // New user from Google login, insert into database
    $insert = $pdo->prepare("INSERT INTO users (full_name, email, password_hash, provider) VALUES (?, ?, '', 'google')");
    $insert->execute([$name, $email]);
  }

  // success 
  echo json_encode(["message" => "User synced"]);
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode(["message" => "Server error: " . $e->getMessage()]);
}
?>
