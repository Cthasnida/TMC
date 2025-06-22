<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Traditional Music Club</title>
  <style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body, html {
  height: 100%;
  font-family:'Georgia', serif;
}

.hero {
  background: url('UTHM.jpg') no-repeat center center/cover;
  height: 100vh;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
}

.hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4); /* Adjust 0.4 to 0.5 for darker */
  z-index: 0;
}

.hero > * {
  position: relative;
  z-index: 1;
}

.top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 50px;
}

.logo {
  display: flex;
  align-items: center;
  }

.logo img {
  height: 60px;
  margin-right: 15px;
}

.club-name {
font-size: 16px;
font-weight: bold;
text-transform: uppercase;
color: white;
line-height: 1.3;
}

    .navbar {
      display: flex;
      gap: 25px;
      list-style: none;
    }

    .dropbtn {
      background: none;
      border: none;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #001144;
      min-width: 180px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.5);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #002266;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .hero-content {
      text-align: center;
      padding-bottom: 40px;
    }

    .hero-content h2 {
      font-size: 60px;
      font-weight: bold;
      text-transform: uppercase;
      line-height: 1.2;
    }

    .explore-arrow {
      margin-top: 150px;
    }

    .explore {
      font-size: 18px;
      color: white;
    }

    .arrow {
      font-size: 24px;
      display: block;
      margin-top: 5px;
    }

    .welcome {
      background: #eeeeff;
      text-align: center;
      padding: 70px;
    }

    .welcome h3 {
      font-size: 24px;
      color: #001144;
      font-weight: bold;
    }

    @media (max-width: 992px) {
      .top-bar {
        flex-direction: column;
        align-items: center;
        padding: 20px;
        gap: 10px;
      }

      .logo {
        justify-content: center;
        margin-bottom: 10px;
      }

      .club-name {
        font-size: 14px;
        text-align: center;
      }

      .navbar {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
      }

      .dropbtn {
        font-size: 14px;
      }

      .hero-content h2 {
        margin-top: 10px;
        font-size: 42px;
      }

      .explore-arrow {
        margin-top: 40px;
      }

      .explore {
        font-size: 16px;
      }
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
    .club-info-section {
      padding: 50px 20px;
      background-color: #f8f8ff;
    }

    .info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      grid-template-areas:
        "welcome   visit     about"
        "logo      logo      about"
        "impact    impact    impact";
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .info-card {
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.08);
      font-family: 'Georgia', serif;
      color: #111;
    }

    .info-card h3 {
      margin-bottom: 15px;
      font-size: 20px;
      color: #001144; 
    }

    .info-card p {
      font-size: 15px;
      line-height: 1.6;
    }

    .info-card.dark {
      background-color: #00094b;
      color: white;
    }

    .info-card.light {
      background-color: #eeeeff;
    }

    .info-card.wide {
      grid-column: span 3;
    }

    .info-card.center {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .logo-center {
      max-width: 80%;
      height: auto;
    }

    .visit-btn {
      margin-top: 15px;
      padding: 8px 16px;
      border: 2px solid white;
      background: transparent;
      color: white;
      border-radius: 20px;
      cursor: pointer;
      font-family: 'Georgia', serif;
      transition: background 0.3s ease;
    }

    .visit-btn:hover {
      background: white;
      color: #00094b;
    }
  </style>
</head>
<body>
  <header class="hero">
    <div class="top-bar">
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
          <button class="dropbtn">Event</button>
          <div class="dropdown-content">
            <a href="pastevent.php">Past Event</a>
            <a href="upcomingevent.php">Upcoming Event</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">News</button>
          <div class="dropdown-content">
            <a href="post.php">Post</a>
            <a href="announcement.php">Announcement</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Info</button>
          <div class="dropdown-content">
            <a href="instrument.php">Instrument</a>
            <a href="music.php">Music</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Gallery</button>
          <div class="dropdown-content">
            <a href="classsession.php">Class Session</a>
            <a href="activities.php">Activities</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">About</button>
          <div class="dropdown-content">
            <a href="backgroundclub.php">Background Club</a>
            <a href="register.php">Registration</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Contact Us</button>
          <div class="dropdown-content">
            <a href="clubinformation.php">Club Information</a>
            <a href="feedback.php">Feedback</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="hero-content">
      <h2>PRESERVING TRADITION,<br>INSPIRING GENERATION</h2>
      <div class="explore-arrow">
        <p class="explore">Explore<br><span class="arrow">↓</span></p>
      </div>
    </div>
  </header>
  <section class="welcome">
    <h3>WELCOME TO TRADITIONAL MUSIC CLUB PORTAL</h3>
  </section>
  <section class="club-info-section">
    <div class="info-grid">
      <div class="info-card dark">
        <h3>Welcome from the Instructor</h3>
        <p>Welcome to the Traditional Music Club of UTHM!<br><br>Here, we celebrate Malaysia’s rich cultural heritage through the mesmerizing rhythms and melodies of traditional instruments. Join us to preserve, share, and enjoy the beauty of traditional music.</p>
      </div>

      <div class="info-card dark">
        <h3>Arrange a Visit or Performance</h3>
        <p>Explore the charm of traditional music! Arrange a visit to our club or book a performance to experience the lively sounds of gamelan, kompang, sape, and more, performed by our talented members.</p>
        <button class="visit-btn">Arrange a visit</button>
      </div>

      <div class="info-card dark center">
        <img src="logo.png" alt="Club Logo" class="logo-center">
      </div>

      <div class="info-card light">
        <h3>About the Club</h3>
        <p>Discover our mission to preserve and promote traditional Malaysian music, inspire appreciation for our cultural roots, and foster a community of passionate musicians and enthusiasts.</p>
      </div>

      <div class="info-card light wide">
        <h3>Our Impact and Value</h3>
        <p>At the Traditional Music Club, we believe music is a bridge between generations and cultures. Our activities include performances, workshops, and collaborations that promote appreciation for Malaysia’s diverse musical traditions.</p>
      </div>
    </div>
  </section>
</body>
</html>
