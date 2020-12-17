<!doctype html>

<html>

<head>
  <title>Search</title>
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
      <a href="student_dashboard.html">Home</a>
      <a href="index.html">Logout</a>
      <a href="search.html">Tutor Search</a>
      <a href="user_profile.html">Profile</a>
      
    </div>
  </div>
  <br />

  <div class="search">
    <h1> Looking for a Tutor?</h1>

    <input type="text" id="Input" placeholder="Search by Keyword or Major.....">


  </div>
</body>

</html>
