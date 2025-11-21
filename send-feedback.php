<?php
include 'db.php';
$name = $_POST['name'];
$msg = $_POST['message'];
$conn->query("INSERT INTO feedback (name, message) VALUES ('$name', '$msg')");
echo "Thank you for your feedback!";
?>