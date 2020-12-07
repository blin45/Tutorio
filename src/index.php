<?php
require_once 'vendor/jasig/phpcas/CAS.php';

phpCAS::setDebug();
phpCAS::setVerbose(true);
phpCAS::client(CAS_VERSION_3_0, 'cas-auth.rpi.edu', 443, '/cas');
phpCAS::setNoCasServerValidation();

if (isset($_REQUEST['login'])) {
   phpCAS::forceAuthentication();
   header("Location: index.php");
   exit();
}

if (isset($_REQUEST['logout'])) {
   phpCAS::logout();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Tutorio</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link href="Style/home.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Give+You+Glory&display=swap" rel="stylesheet">

<script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
</head>
<body>
  <div class="headband1">
    <span class="dashboard-menubar">
      <nav class="site-icon">Tutorio</nav>
    </span>
  </div>
  <div class="headband2"></div>
  <div id="content">

    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>

    <div id="menu" class="nav">
      <a href="#" class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
      </a>
      <a href="index.html">About</a>
      <?php
        if (!phpCAS::checkAuthentication()) {
           echo '<li class="nav-item"><a id="login" href="?login=">Log In</a></li>';
        } else {
           echo '<li class="nav-item"><a class="nav-link" id="login" href="?logout=">Logout</a></li>';
           echo "<div id='usern'>YOU ARE LOGGED IN AS " . phpCAS::getUser()."</div>";
        }
      ?>
      <a href="contact.html">Contact</a>
    </div>
  </div>

  <div class="main-body">
    <h1> Welcome to Tutorio, <?php echo''. strtolower(phpCAS::getUser()); ?>! Tutorio is a one-stop shop for Tutoring at RPI </h1>
    <p>Get Started As:</p>
    <h1><button class = "button1">Mentor/TA</button></h1>
    <h1><button class = "button2">Tutor</button></h1>
    <h1><button class = "button3">Student</button></h1>


  </div>




</body>
</html>
