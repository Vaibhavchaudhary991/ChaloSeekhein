<?php include 'db.php'; ?>
<?php
$host = 'localhost';
$db = 'rural_edu'; // change this to your database name
$user = 'root';
$pass = ''; // default XAMPP password is empty

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $filename = basename($_FILES['file']['name']);
        $targetFile = $uploadDir . $filename;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            // Insert into database
            $stmt = $conn->prepare("INSERT INTO uploads (filename, filepath) VALUES (?, ?)");
            $stmt->bind_param("ss", $filename, $targetFile);
            if ($stmt->execute()) {
                echo "✅ File uploaded and saved in database!";
            } else {
                echo "⚠️ File uploaded, but failed to save in DB.";
            }
            $stmt->close();
        } else {
            echo "❌ Failed to upload file.";
        }
    } else {
        echo "⚠️ No file selected or upload error.";
    }
}

$conn->close();
?>