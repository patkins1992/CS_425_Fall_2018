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
    <link rel="stylesheet" type="text/css" href="../css/studentAddReport.css">
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
        <li><a  href="studentViewReports.php">Your Reports</a></li>
        <li><a class = "active" href="studentAddReports.php">Add Report</a></li>
      </ul>
    </div>
    <div class ="AddReports">
          <div class = "DropBox">
            <img class = "folder-pic" src = "../images/sub-folder-clipart-1.jpg">
            <a>Add your reports you would like to upload</a>

          </div>
          <form method = "post" enctype = "multipart/form-data">
          <!--opens file explorer for only for pdfs-->
          <input type = "file" name = "myfile" accept = "application/pdf"/>
          <button name = "Select"> Add </button> <!--is used in test.php to upload files-->
          </form>
        <form>

        </form>
    </div>
   
    
    <!--end of search box-->

  </div>
  <!--end of main container-->
  </body>
</html>