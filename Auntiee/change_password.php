<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'includes/db_config.php';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

$current_password_hashed = sha1($current_password);
$new_password_hashed = sha1($new_password);

$user_id = $_SESSION['user_id'];

$sql = "SELECT password FROM user WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($db_password);
$stmt->fetch();
$stmt->close();

if ($db_password !== $current_password_hashed) {
    $_SESSION['swal'] = ['icon' => 'error', 'title' => 'Incorrect Password', 'text' => 'Your current password is incorrect.'];
    header("Location: change-password.php");
    exit();
}

if ($new_password !== $confirm_password) {
    $_SESSION['swal'] = ['icon' => 'warning', 'title' => 'Password Mismatch', 'text' => 'New password and confirm password do not match.'];
    header("Location: change-password.php");
    exit();
}

$update_sql = "UPDATE user SET password = ? WHERE id = ?";
$update_stmt = $conn->prepare($update_sql);
$update_stmt->bind_param("si", $new_password_hashed, $user_id);

if ($update_stmt->execute()) {
    $_SESSION['swal'] = ['icon' => 'success', 'title' => 'Password Changed', 'text' => 'Your password has been successfully updated.'];
} else {
    $_SESSION['swal'] = ['icon' => 'error', 'title' => 'Update Failed', 'text' => 'There was a problem updating your password.'];
}

$update_stmt->close();
$conn->close();
header("Location: change-password.php");
exit();
