<?php
session_start();

// Include database configuration
include 'includes/db_config.php';

$email = $_POST['email'];
$pass = sha1($_POST['password']); // Hash password

$sql = "SELECT * FROM user WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if ($user['password'] === $pass) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: index.php?error=incorrect_password");
        exit();
    }
} else {
    header("Location: index.php?error=user_not_found");
    exit();
}

$stmt->close();
$conn->close();
?>
