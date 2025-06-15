<?php
// Connect to DB
$pdo = new PDO("mysql:host=localhost;dbname=prostatecare_kenya", "root", "Alvinmuriithi!8");

// Get JSON input
$data = json_decode(file_get_contents("php://input"));

$full_name = $data->full_name;
$email = $data->email;
$password = password_hash($data->password, PASSWORD_BCRYPT); // secure hash

// Check if email already exists
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->rowCount() > 0) {
    http_response_code(409);
    echo json_encode(["message" => "Email already exists"]);
    exit;
}

// Insert user
$stmt = $pdo->prepare("INSERT INTO users (full_name, email, password_hash) VALUES (?, ?, ?)");
if ($stmt->execute([$full_name, $email, $password])) {
    echo json_encode(["message" => "User registered successfully"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "Error creating user"]);
}
?>