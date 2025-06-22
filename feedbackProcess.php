<?php
include('dbtmc.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Thank you for your feedback!'); window.location.href='feedback.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
