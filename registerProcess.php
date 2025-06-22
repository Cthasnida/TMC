<?php
include('dbtmc.php'); // connects to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['Name'];
  $email = $_POST['email'];
  $phone = $_POST['PhoneNo'];
  $matric = $_POST['MatricNo'];

  // Prepare and bind
  $stmt = $conn->prepare("INSERT INTO registration (name, email, phone_no, matric_no) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $phone, $matric);

  if ($stmt->execute()) {
    echo "<script>alert('Registration Successful!'); window.location.href='register.php';</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}
$conn->close();
?>
