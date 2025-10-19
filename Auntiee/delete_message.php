<?php
include 'includes/db_config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM contact WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Message deleted successfully!');
                window.location.href = 'message.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to delete message.');
                window.location.href = 'message.php';
              </script>";
    }

    $conn->close();
} else {
    header("Location: message.php");
    exit();
}
?>
