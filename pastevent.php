<?php 
  include('dbtmc.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Past Event - Traditional Music Club</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Georgia', serif;
      background-color: white;
      color: black;
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

    .page-title {
      font-size: 40px;
      font-weight: bold;
      margin: 40px;
    }

    .events-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      padding: 0 40px 80px;
    }

    .event-card {
      width: 340px;
      max-width: 100%;
    }

    .event-card img {
      width: 100%;
      height: auto;
      display: block;
    }

    .event-title {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }

    .event-desc {
      font-size: 15px;
      margin-top: 10px;
      line-height: 1.6;
      text-align: justify;
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
      .events-container {
        flex-direction: column;
        align-items: center;
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
      <div class="dropdown">
        <button class="dropbtn">EVENT</button>
        <div class="dropdown-content">
          <a href="pastevent.php">Past Event</a>
          <a href="upcomingevent.php">Upcoming Event</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">NEWS</button>
        <div class="dropdown-content">
          <a href="post.php">Post</a>
          <a href="announcement.php">Announcement</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">INFO</button>
        <div class="dropdown-content">
          <a href="instrument.php">Instrument</a>
          <a href="music.php">Music</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">GALLERY</button>
        <div class="dropdown-content">
          <a href="classsession.php">Class Session</a>
          <a href="activities.php">Activities</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">ABOUT</button>
        <div class="dropdown-content">
          <a href="backgroundclub.php">Background Club</a>
          <a href="register.php">Registration</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">CONTACT US</button>
        <div class="dropdown-content">
          <a href="clubinformation.php">Club Information</a>
          <a href="feedback.php">Feedback</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="page-title">PAST EVENT</div>

  <div class="events-container">
    <?php
      $sql = "SELECT * FROM past_event";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
          <div class="event-card">
            <img src="' . $row["image"] . '" alt="' . $row["title"] . ' Poster">
            <div class="event-title">' . $row["title"] . '</div>
            <div class="event-desc">' . $row["description"] . '</div>
          </div>';
        }
      } else {
        echo '<p style="text-align:center;">No past events available.</p>';
      }
    ?>
  </div>
</body>
</html>

