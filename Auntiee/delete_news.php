<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);

        $conn = new mysqli("localhost", "root", "", "Adv");
        if ($conn->connect_error) {
            echo 'error';
            exit;
        }

        $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error';
        }

        $stmt->close();
        $conn->close();
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
