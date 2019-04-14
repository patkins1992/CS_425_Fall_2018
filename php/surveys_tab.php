<!--
    Coder: Preston Whittaker
 Modified: 2/9/2019
     Page: admin login -surveys tab
-->


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
        <li><a href="#Companies">Companies</a></li>
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
          <li><a href="reports_tab.php"> Reports</a></li>
          <li><a class="active" href="surveys_tab.php"> Surveys</a></li>
          <li><a href="view_all_surveys_tab.php"> View all surveys</a></li>
        </ul>
      </div>

      <p>
        No recent surveys available
      </p>

    </div>
    <!--end of search box-->

  </div>
  <!--end of main container-->
</body>

</html>