<?php
include('dbtmc.php');
$sql = "SELECT * FROM instrument";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Traditional Instruments</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Georgia', serif;
      background-color: white;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      background-color: #00094b;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo img {
      height: 60px;
    }

    .club-name {
      font-size: 20px;
      font-weight: bold;
      color: white;
      line-height: 1.3;
    }

    .navbar {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .dropdown {
      position: relative;
    }

    .dropbtn {
      background: none;
      border: none;
      color: white;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #001144;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.4);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;
      padding: 10px 14px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #002266;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .gallery {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 40px 0;
    }

    .instrument-inner {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .gallery-title {
      font-size: 30px;
      font-weight: bold;
      margin-top: 10px;
      margin-bottom: 70px;
    }

    .instrument-block {
      margin-bottom: 70px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .instrument-block img {
      width: 300px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .dropdown-btn {
      flex-direction: column;
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #000a44;
      color: white;
      border: none;
      cursor: pointer;
      font-weight: bold;
      border-radius: 5px;
    }

    .dropdown-content-box {
      display: none;
      margin-top: 15px;
      background-color: #f9f9f9;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: left;
      max-width: 300px;
    }

    .link {
      color: #FFFFFF;
    }

    .link a {
      color: #FFFFFF;
      text-decoration: none;
    }

    .link a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 768px) {
      .gallery-section {
        flex-direction: column;
        text-align: center;
      }

      .gallery {
        max-width: 90%;
      }

      .page-title {
        text-align: center;
      }

      .navbar {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
      }
    }
  </style>
  <script>
    function toggleDescription(id) {
      const content = document.getElementById(id);
      content.style.display = content.style.display === 'block' ? 'none' : 'block';
    }
  </script>
</head>
<body>
  <header class="top-bar">
    <div class="logo">
      <img src="image.png" alt="Club Logo">
      <div class="club-name">
        <div class="link">
          <a href="homepage.php">TRADITIONAL<br>MUSIC CLUB</a>
        </div>
      </div>
    </div>
    <nav class="navbar">
      <div class="dropdown"><button class="dropbtn">EVENT</button>
        <div class="dropdown-content">
          <a href="pastevent.php">Past Event</a>
          <a href="upcomingevent.php">Upcoming Event</a>
        </div>
      </div>
      <div class="dropdown"><button class="dropbtn">NEWS</button>
        <div class="dropdown-content">
          <a href="post.php">Post</a>
          <a href="announcement.php">Announcement</a>
        </div>
      </div>
      <div class="dropdown"><button class="dropbtn">INFO</button>
        <div class="dropdown-content">
          <a href="instrument.php">Instrument</a>
          <a href="music.php">Music</a>
        </div>
      </div>
      <div class="dropdown"><button class="dropbtn">GALLERY</button>
        <div class="dropdown-content">
          <a href="classsession.php">Class Session</a>
          <a href="activities.php">Activities</a>
        </div>
      </div>
      <div class="dropdown"><button class="dropbtn">ABOUT</button>
        <div class="dropdown-content">
          <a href="backgroundclub.php">Background Club</a>
          <a href="register.php">Registration</a>
        </div>
      </div>
      <div class="dropdown"><button class="dropbtn">CONTACT US</button>
        <div class="dropdown-content">
          <a href="clubinformation.php">Club Information</a>
          <a href="feedback.php">Feedback</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="gallery">
    <img src="instrument1.png" alt="Main Instrument Set">
    <div class="gallery-title">CLUB'S INSTRUMENT</div>
  </div>

  <?php
    if ($result->num_rows > 0):
      $i = 1;
      while ($row = $result->fetch_assoc()):
  ?>
    <div class="instrument-block">
      <div class="instrument-inner">
        <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
        <button class="dropdown-btn" onclick="toggleDescription('desc<?php echo $i; ?>')">
          <?php echo htmlspecialchars($row['name']); ?>
        </button>
        <div class="dropdown-content-box" id="desc<?php echo $i; ?>">
          <p><?php echo htmlspecialchars($row['description']); ?></p>
        </div>
      </div>
    </div>
  <?php
        $i++;
      endwhile;
    else:
      echo "<p style='text-align:center;'>No instruments found.</p>";
    endif;
    $conn->close();
  ?>

</body>
</html>
