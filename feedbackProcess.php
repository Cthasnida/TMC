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

$name = trim($_POST['name']);
$name = filter_var($name, FILTER_SANITIZE_STRING); 
if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    echo "Only letters and white space allowed";
}

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
}


$stmt->close();
$conn->close();
?>
