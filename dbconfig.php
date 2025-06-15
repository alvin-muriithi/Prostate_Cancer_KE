<?php
$servername = "localhost";
$username = "root";
$password = "Alvinmuriithi!8";
$dbname = "prostatecare_kenya";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  // Return clean JSON response for API error
  http_response_code(500);
  echo json_encode(["message" => "Database connection failed"]);
  exit;
}
?>
