<!--
    Coder: Preston Whittaker
 Modified: 3/21/2019 by Steven Perry
     Page: admin login 
-->

<?php

$con = mysqli_connect("localhost","root" ,"","iopracticum");


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Admin login</title>
  <link rel="stylesheet" type="text/css" href="../css/theme.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/reportSearch.js"></script>
  
</head>

<body>
  <!--main container for the whole page-->
  <div class="container">
    <header class="head">
      <img class="io_img" src="../images/header_logo.jpg">
      <img class="siue_faculty" src="../images/IO-faculty-students-April-2018.jpg">
      <h1 class="io_h1">I/O Practicum Program</h1>
      <img class="siue_logo" src="../images/SIUE-Logo-RED.jpg">



    </header>

    <!-- navbar that stays at the top at all times -->
    <nav class="navbar">
      <ul>
        <li><a  class="active" href="admin.php">Home</a></li>
        <li><a href="#companies">Companies</a></li>             <!-- Phil added navigation to companies  -->
        <li><a href="admin_survey.php">Supervisor Survey</a></li>
        <li><a href="AccountDetails.php">Account Details</a></li>
        <li><a href="#Manual">Administrator Manual</a></li>
        <li><a href="../html/HomeScreen.html">Logout</a></li>
      </ul>
    </nav>
    <!--end of navbar-->

    <!-- search box-->
    <div class="search">

      <div class="sub_nav">
        <ul>
          <li><a class="active" href="admin.php"> Search Reports</a></li>
          <li><a href="reports_tab.php"> Reports</a></li>
          <li><a href="surveys_tab.php"> Surveys</a></li>
          <li><a href="view_all_surveys_tab.php"> View all surveys</a></li>
        </ul>
      </div>

      <form class="dropbox"  >
        <label for="option">By Company: </label>
        <select class="option" id="company">
        <option value="allCompanys">All</option>
          <?php  $query = mysqli_query($con,"SELECT name FROM location"); 
          if (mysqli_num_rows($query) > 0) {
            // output data of each company name
            while($row = mysqli_fetch_assoc($query)) {
              echo '<option value="' . $row["name"] . '">' . $row["name"] . '</option>';
            }
          } 
          mysqli_close($con);
          ?>  
        </select>

        <label for="option">By Year: </label>
        <select class="option" id="date">
          <option value="allYears">All</option>
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
        </select>

        <button type="button" class="button" value="Search" style="border:2;" onclick="reportSearch()">Search</button>
    
      </form>
      
      <!-- will display search results -->
      <div id="results"></div>
      
      

    </div>
    <!--end of search box-->

  </div>

  <!--end of main container-->
</body>

</html>