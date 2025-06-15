<?php
$pdo = new PDO("mysql:host=localhost;prostatecare_kenya", "root", "Alvinmuriithi!8");

$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$password = $data->password;

// Check user
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password_hash'])) {
    echo json_encode([
        "message" => "Login successful",
        "user" => [
            "user_id" => $user["user_id"],
            "full_name" => $user["full_name"],
            "email" => $user["email"]
        ]
    ]);
} else {
    http_response_code(401);
    echo json_encode(["message" => "Invalid email or password"]);
}
?>