<!--
    Coder: Matthew Morton
 Modified: 1/5/2019
     Page: student-Your Reports
-->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Student page</title>
    <link rel="stylesheet" type="text/css" href="../css/studentViewReports.css">
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
        <li><a class="active" href="#Home">Home</a></li>
        <li><a href= "../html/HomeScreen.html">Logout</a></li>
      </ul>
    </nav>
    <!--end of navbar-->

    <!-- search box-->
    <div class="search">

      <div class="sub_nav">
      <ul>
        <li><a href="student.php">Search Reports</a></li>
        <li><a class = "active" href="studentViewReports.php">Your Reports</a></li>
        <li><a href="studentAddReports.php">Add Report</a></li>
      </ul>
    </div>
    <div class ="StudentReports">
        <form>
        <a class = "Reports"> Most_Recent_Report.pdf </a>
        <!-- This is swapped around to put the view reports first -->
        <button class ="ViewReports"> Delete</button>
        
        <button class = "DeleteReports">View</button>
        </form>
    </div>
   
    
    <!--end of search box-->

  </div>
  <!--end of main container-->
  </body>
</html>