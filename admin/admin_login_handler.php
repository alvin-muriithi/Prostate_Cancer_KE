<?php
session_start();
include 'C:\xampp\htdocs\Prostate_Cancer_KE\dbconfig.php'; // Your DB connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);


try {
        $stmt = $conn->prepare("SELECT * FROM admins WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && password_verify($password, $admin["password"])) {
            $_SESSION["admin_logged_in"] = true;
            $_SESSION["admin_name"] = $admin["name"];
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: admin_login.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        header("Location: admin_login.php");
        exit();
    }
}
?>