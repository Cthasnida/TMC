<?php
  include('dbtmc.php');

  $sql = "SELECT * FROM upcoming_event ORDER BY event_date ASC LIMIT 1";
  $result = $conn->query($sql);

  $event = null;
  if ($result->num_rows > 0) {
    $event = $result->fetch_assoc();
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upcoming Event - Traditional Music Club</title>
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

    .event-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      padding: 0 40px 80px;
      gap: 30px;
    }

    .event-img {
      max-width: 500px;
      width: 100%;
      height: auto;
    }

    .event-details {
      max-width: 400px;
    }

    .event-details h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .event-details p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .more-btn {
      background-color: #00094b;
      color: white;
      padding: 10px 20px;
      font-size: 14px;
      border: none;
      border-radius: 30px;
      cursor: pointer;
    }

    .more-btn:hover {
      background-color: #001866;
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

  <div class="page-title">UPCOMING EVENT</div>

  <section class="event-section">
    <?php if ($event): ?>
      <img src="<?php echo htmlspecialchars($event['image_path']); ?>" alt="<?php echo htmlspecialchars($event['event_name']); ?>" class="event-img">
      <div class="event-details">
        <h2><?php echo htmlspecialchars($event['event_name']); ?></h2>
        <p><?php echo date("l, F j, Y", strtotime($event['event_date'])); ?></p>
        <button class="more-btn">MORE</button>
      </div>
    <?php else: ?>
      <div class="event-details">
        <h2>No Upcoming Events</h2>
        <p>Please check back later!</p>
      </div>
    <?php endif; ?>
  </section>
</body>
</html>

