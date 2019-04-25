<!--
    Coder: Phil Atkins
 Modified: 3/6/2019
     Page: Add Companies
-->

<?php 
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");
$DataEntry = "SELECT `id` FROM `location`";
$result = mysqli_query($con,$DataEntry);

if ($result->num_rows > 0) {
  // output data of eah row
  while($row = mysqli_fetch_assoc($result)){
  $select = $row['id'];
  
  }
 
} else {
  
  echo "0 results";
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Add Company Page</title>
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
        <li><a   href="../php/admin.php">Home</a></li>
        <li><a class="active" href="./companies.html">Companies</a></li>             
        <li><a href="./admin_surveys.html">Supervisor Survey</a></li>
        <li><a href="../php/AccountDetails.php">Account Details</a></li>
        <li><a href="#Manual">Administrator Manual</a></li>
        <li><a href="./HomeScreen.html">Logout</a></li>
      </ul>
    </nav>
    <!--end of navbar-->

    <!-- Add Company box-->
    <div class="search">

      <div class="sub_nav">
      <ul>
        <li><a href="../php/admin.php">View Companies</a></li>
        <li><a class="active" href="./addCompanies.html">Add Company</a></li>
      </ul>
    </div>

    <form class="dropbox">
    <label for="option">Enter Company Name: </label>
      <input type="text" name="companyName" value="Enter Company Name">

      <input type="submit" name="submit" class="button" value="Add Company" style="border:2;"/>

      <?php

              if(isset($_POST["submit"])){

              $Id = $select + 1;
              var $name = $_POST["companyName"];

              $insert = "INSERT INTO `location` (`id`, `name`) VALUES ('$Id', '$name')";
              mysqli_query($con,$insert);
            }

        ?>
    </form>

    </div>
    <!--end of Add Company box-->

  </div>
  <!--end of main container-->
  </body>
</html>