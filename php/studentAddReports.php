<?php 
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");
$DataEntry = "SELECT `id` FROM `report`";
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
        <li><a class="active" href="../php/student.php">Home</a></li>
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
    <div class ="AddReports" >
          <div class = "DropBox">
            <form method = 'POST' action = "" enctype = "multipart/form-data">
          Company:<br>
            <input type = "text" class = "AdminEid" name = "StudentCompany"/><br>
            First and Last Name:<br>
            <input type ="text" class = "AdminName" name = "StudentName"/><br>
            Current Year:<br>
            <input type ="text" class = "AdminEmail" name = "CurrentYear"/><br>
            Midterm or Final:<br>
            <input type = "text" class = "Final" name = "SemsterChoice"/><br>
            <input type = "file" id = "myfile" name = "myfile"  accept = "application/pdf"/>
            <input name = "submit" type = "submit" Value = "Add"/>

          </form>
            <?php
            if(isset($_FILES["myfile"])){
              $name = $_FILES["myfile"]["name"];
              $tmp_name = $_FILES['myfile']['tmp_name'];
              $error = $_FILES['myfile']['error'];
              $type = $_FILES['myfile']['type'];
              
              

              if(isset($_POST["submit"])){
              $target = "../reports/";
              $allowedExt = "pdf";
              $targetGo = $target.$name;
              $Company = $_POST["StudentCompany"];
              $StudentName = $_POST["StudentName"];
              $Year = $_POST["CurrentYear"];
              
              $Choice = $_POST["SemsterChoice"];
              $Id = $select + 1;
              $FindID = 1;
              $selectName = "";
              while($FindID < $select){
              $FindCompany = "SELECT `name` FROM `location` WHERE `id` = $FindID";
              $resultCompany = mysqli_query($con,$FindCompany);
              if ($resultCompany->num_rows > 0) {
                // output data of eah row
                while($row1 = mysqli_fetch_assoc($resultCompany)){
                $selectName = $row1['name'];
                
                }
               
              }
              if($Company == $selectName){
                $newfileName = $Company . "_". $StudentName ."_". $Year.".pdf"; 
                move_uploaded_file($_FILES["myfile"]["tmp_name"],$target.$newfileName); 
  
  
                $insert = "INSERT INTO `report` (`id`, `filepath`, `final`, `company`, `year`) VALUES ('$Id', '../reports/$newfileName',NULL, '$Company', '$Year')";
                mysqli_query($con,$insert);
                break;

              }
              $FindID = $FindID + 1;
            }
            
            if($FindID >= $select){
              echo "Please enter the correct company";
              
            }

          }
        }

            
          
            ?>

          </div>
         
        <form>

        </form>
    </div>
   
            <?php
           
            
            



            


            ?>
            
    
    <!--end of search box-->

  </div>
  <!--end of main container-->
  </body>
</html>


<?php


?>

<script>
        
        var modal = document.getElementById('AddReport');


        var btn = document.getElementById("Select");


        var span = document.getElementsByClassName("close")[0];

 
        btn.onclick = function() {
        modal.style.display = "block";
        }   


        span.onclick = function() {
        modal.style.display = "none";
        }


        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }

        </script>



