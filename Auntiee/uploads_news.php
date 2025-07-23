<?php
// Enable full error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);



// Database connection
$conn = new mysqli("localhost", "root", "", "Adv");
if ($conn->connect_error) {
    showSweetAlert("error", "Connection failed: " . $conn->connect_error);
    exit;
}

// Sanitize inputs
$title = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');

// Validate inputs
if (empty($title) || empty($content)) {
    showSweetAlert("warning", "Please fill in all required fields.");
    exit;
}

// Validate uploaded image
if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    $uploadError = $_FILES['image']['error'];
    $errorMessages = [
        UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive specified in the HTML form.',
        UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
        UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
        UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
        UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
    ];
    $message = $errorMessages[$uploadError] ?? 'Unknown upload error.';
    showSweetAlert("error", "Image upload failed: $message");
    exit;
}

// Image processing
$imageName = basename($_FILES['image']['name']);
$imageTmp = $_FILES['image']['tmp_name'];

$uploadDir = __DIR__ . "/uploads/news_images/";
$dbPathPrefix = "uploads/news_images/";
$uniqueImageName = time() . "_" . $imageName;
$targetFilePath = $uploadDir . $uniqueImageName;
$dbImagePath = $dbPathPrefix . $uniqueImageName;

// Ensure upload directory exists
if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true)) {
    showSweetAlert("error", "Failed to create upload directory.");
    exit;
}

// Confirm temp file exists
if (!file_exists($imageTmp)) {
    showSweetAlert("error", "Temporary file does not exist.");
    exit;
}

// Move the file
if (!move_uploaded_file($imageTmp, $targetFilePath)) {
    showSweetAlert("error", "Failed to move uploaded image. Check directory permissions.");
    exit;
}

// Insert data into database
$stmt = $conn->prepare("INSERT INTO news (title, image, file, content) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    showSweetAlert("error", "Prepare failed: " . $conn->error);
    exit;
}

$stmt->bind_param("ssss", $title, $dbImagePath, $dbImagePath, $content);

if ($stmt->execute()) {
    header("Location: blog.php?success=1");
    exit;
} else {
    echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Database error: " . addslashes($stmt->error) . "',
                confirmButtonColor: '#d33'
            }).then(() => {
                window.location.href = 'blog.php';
            });
        };
    </script>";
}

$stmt->close();
$conn->close();
?>
