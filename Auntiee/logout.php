<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login with a success message
header("Location: login.php?message=logged_out");
exit();
?>
