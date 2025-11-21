<?php
include 'db.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$timing = $_POST['timing'];
$qualification = $_POST['qualification'];
$days = isset($_POST['days']) ? implode(',', $_POST['days']) : '';
$reason = $_POST['reason'];

$sql = "INSERT INTO teachers (name, subject, email, phone, timing, qualification, days, reason) 
        VALUES ('$name', '$subject', '$email', '$phone', '$timing', '$qualification', '$days', '$reason')";

if ($conn->query($sql)) {
  echo "Thank you for volunteering!";
} else {
  echo "Error: " . $conn->error;
}
?>