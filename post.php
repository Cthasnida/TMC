<?php include('dbtmc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Traditional Music Club - Events</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Georgia', serif;
      background-color: #fff;
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

    .content {
      padding: 50px;
      display: flex;
      justify-content: center;
      gap: 80px;
      flex-wrap: wrap;
    }

    .event-box {
      text-align: center;
    }

    .event-box img {
      width: 500px;
      max-width: 90%;
      height: auto;
      border-radius: 5px;
    }

    .more-btn {
      margin-top: 20px;
      background-color: #000a44;
      color: white;
      padding: 10px 25px;
      border-radius: 30px;
      border: none;
      font-weight: bold;
      cursor: pointer;
    }

    .more-btn:hover {
      background-color: #1a1a99;
    }

    .event-title {
      font-size: 30px;
      font-weight: bold;
      margin-top: 10px;
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
      .event-section {
        flex-direction: column;
        text-align: center;
      }

      .event-details {
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

  <section class="content">
    <?php
      $sql = "SELECT * FROM event_post";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
          <div class="event-box">
            <img src="' . $row['image'] . '" alt="' . $row['semester'] . '">
            <div class="event-title">' . $row['semester'] . '</div>
            <a href="' . $row['description_post'] . '"><button class="more-btn">MORE</button></a>
          </div>';
        }
      } else {
        echo '<p style="text-align:center; font-size:18px;">No posts available.</p>';
      }
    ?>
  </section>

</body>
</html>
