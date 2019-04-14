<!--
    Coder: Preston Whittaker
  created: 2/9/2019
 Modified: 4/13/2019
     Page: admin login -reports tab
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
          <li><a  href="admin.php">Search Reports</a></li>
          <li><a  class="active" href="reports_tab.php"> Reports</a></li>
          <li><a href="surveys_tab.php"> Surveys</a></li>
          <li><a href="view_all_surveys_tab.php"> View all surveys</a></li>
        </ul>
      </div>


<!-- results of search for current year -->
      <div id="results">
          <?php  
          $result = mysqli_query($con,'SELECT * FROM report WHERE year = "'.date("Y").'"'); 

          //echo results table
echo "<table>
<tr>
<th>Name</th>
<th>Company</th>
<th>Year</th>
</tr>";

//loop through results
if (mysqli_num_rows($result) > 0) {
    // output data of search results
    while($row = mysqli_fetch_assoc($result)) {
        
     // use of explode to extract name from file path 
     $string = $row["filepath"];
     $str_arr = explode ("_", $string);  
      
      
      echo "<tr>";
      echo "<td>" . $str_arr[1] ."</td>";
      echo "<td>" . $row["company"] . "</td>";
      echo "<td>" . $row["year"] . "</td>";
      echo'<td><a href="'.$string.'" target="_blank" class="button">view</a></td>';
      echo "</tr>";
    }
  } 
echo "</table>";
mysqli_close($con);
          ?>    
      </div>

    </div>
    <!--end of search box-->

  </div>
  <!--end of main container-->
</body>

</html>