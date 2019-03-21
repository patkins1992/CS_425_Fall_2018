<!--
    Coder: Preston Whittaker
 Modified: 3/21/2019 by Steven Perry
     Page: admin login 
-->

<?php

$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Admin login</title>
  <link rel="stylesheet" type="text/css" href="../css/theme.css">
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
        <li><a  class="active" href="./admin.html">Home</a></li>
        <li><a href=../html/companies.html>Companies</a></li>             <!-- Phil added navigation to companies  -->
        <li><a href="../html/admin_surveys.html">Supervisor Survey</a></li>
        <li><a href="../php/AccountDetails.php">Account Details</a></li>
        <li><a href="#Manual">Administrator Manual</a></li>
        <li><a href="../html/HomeScreen.html">Logout</a></li>
      </ul>
    </nav>
    <!--end of navbar-->

    <!-- search box-->
    <div class="search">

      <div class="sub_nav">
        <ul>
          <li><a class="active" href="./admin.html"> Search Reports</a></li>
          <li><a href="../html/reports_tab.html"> Reports</a></li>
          <li><a href="../html/surveys_tab.html"> Surveys</a></li>
          <li><a href="../html/view_all_surveys_tab.html"> View all surveys</a></li>
        </ul>
      </div>

      <form class="dropbox">
        <label for="option">By Company: </label>
        <select class="option">
          <?php  $query = mysqli_query($con,"SELECT name FROM location"); 
          if (mysqli_num_rows($query) > 0) {
            // output data of each company name
            while($row = mysqli_fetch_assoc($query)) {
              echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
            }
          } 
          ?>  
        </select>

        <label for="option">By Year: </label>
        <select class="option">
          <option value="33">2019</option>
          <option value="33">2018</option>
          <option value="33">2017</option>
          <option value="33">2016</option>
          <option value="33">2015</option>
          <option value="33">2014</option>
        </select>

        <input type="submit" class="button" value="Search" style="border:2;" />
      </form>

    </div>
    <!--end of search box-->

  </div>
  <!--end of main container-->
</body>

</html>