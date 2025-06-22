<?php
$conn = new mysqli("localhost", "root", "", "dbtmc");
if ($conn->connect_error) die("Connection failed");

$id = $_GET['id'];
$sql = "SELECT * FROM announcements WHERE announcement_id = $id";
$result = $conn->query($sql);
$announcement = $result->fetch_assoc();
?>

<h1><?php echo $announcement['title']; ?></h1>
<img src="<?php echo $announcement['image_filename']; ?>" style="width:100%;">
<p><?php echo $announcement['description']; ?></p>
