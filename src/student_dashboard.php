<?php
require_once 'vendor/jasig/phpcas/CAS.php';

phpCAS::setDebug();
phpCAS::setVerbose(true);
phpCAS::client(CAS_VERSION_3_0, 'cas-auth.rpi.edu', 443, '/cas');
phpCAS::setNoCasServerValidation();

if (isset($_REQUEST['login'])) {
   phpCAS::forceAuthentication();
   header("Location: student_dashboard.php");
   exit();
}

if (isset($_REQUEST['logout'])) {
   phpCAS::logout();
}

?>

<!doctype html>

<html>

<head>
<title>Qutors Student Dashboard</title>
<link href="Style/site_style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Give+You+Glory&display=swap" rel="stylesheet">
<link href='./resources/fullcalendar/main.css' rel='stylesheet' />
<script src='./resources/fullcalendar/main.js'></script>
<body>
<div class="headband1">
  <span class="dashboard-menubar">
    <nav class="site-icon">Tutorio</nav>
    <nav class="menu-link">
      <a href="./search.html">Search</a>
    </nav>
    <nav class="menu-link"> Past Sessions </nav>
    <nav class="menu-link">
      <a href="user_profile.html">Profile</a>
    </nav>
  </span>
</div>
<div class="headband2"></div>
<?php
    if (!phpCAS::checkAuthentication()) {
       echo '<li class="nav-item"><a class="nav-link" id="login" href="?login=">Log In</a></li>';
    } else {
       echo '<li class="nav-item"><a class="nav-link" id="login" href="?logout=">Logout</a></li>';
       echo "YOU ARE LOGGED IN AS " . phpCAS::getUser();
    }
  ?>
<br />

<div class="main-body">
  <h1> Welcome to Tutorio, Student1 </h1>
  <h2 class="dashboard-subheading"> Today is <time datetime="2020-10-7"> 10/7/2020 </h2>



  <div class="msg-box display-window">
    <h3 class="centered">Messages:</h3>
    <ul class="msg-list">
      <li class="msg">
        <strong>Justin:</strong> Hi, a friendly remainder that our session is starting in a bit
      </li>
      <li class="msg">
        <strong>Amanda:</strong> Hi, I'm the alac tutor for today's DS review session. We will start at 6pm tonight, feel free to join us in the library or via Webex!
      </li>
    </ul>
  </div>

  <div class="upcoming session display-window">
    <h3 class="centered">Upcoming Sessions:</h3>
    <ul class="current-students">
      <li class="tutor">
      <b>Intro to HCI - Justin Kim</b>
      <p>2:30 p.m. - 4:00 p. m. October 7th, 2020</p>
      <p>Webex link goes here</p>
      </li>
      <li class="review">
      <b>Data Structure - ALAC Tutors</b>
      <p>6:00 p.m. - 9:00 p.m. Octorber 7th, 2020</p>
      <p>Webex link goes here</p>
      </li>
      <li class="review">
      <b>Foundation of Computer Science - John Doodle</b>
      <p>4:00 p.m. - 6:00 p.m. Octorber 10th, 2020</p>
      <p>Amos Eaten 215</p>
      </li>
    </ul>
  </div>
  <div class="notification display-window">
    <h3 class="centered">Notification:</h3>
    <ul class="msg-list">
      <li class="msg">
        <strong>You have:</strong> 2 Meetings today
      </li>
    </ul>
  </div>

</div>
</body>

</html>
