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
    <form action = "search_results.php" method = "POST">
        <input type="text" id="input" name = "input" placeholder="Search a tutor by ....." required>
        <input type="submit" value="Submit">
    </form>
  </div>
  
</body>

</html>

<?php 
    $servername = "localhost";
    $username = "will";
    $password = "";
    $dbname = "tutorio";
    
    $con = mysqli_connect($servername, $username, $password); 

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_errno(); 
    }
    
    if(isset($_POST['input'])) { 
        $search_term = $_POST['input'];     
        $query = "select
        tutor_for_class.class_name,
        users.name
        from
        (
            select
                class.crn, 
                class.class_name, 
                tutors_list.rin
            from
            (
                select 
                    crn, 
                    class_name
                from 
                    classes
                where 
                    class_name = '$search_term'
            ) as class
            join tutors_list on 
                tutors_list.crn = class.crn
        ) as tutor_for_class
        join users on 
            users.rin = tutor_for_class.rin"; 
    
        $result = mysqli_query($con, $query);
        if(!$result){
            echo"No tutors were found for the specified class";
        }
        else
        {
            echo"You searched for '$search_term': The resulting tutors and TAs are:";
            echo "<br>";
            while($row = $result->fetch_assoc()) 
            {
                $x = $row['name'];
                echo " $x";
                echo "<br>";
            }
        }
    }
?>
