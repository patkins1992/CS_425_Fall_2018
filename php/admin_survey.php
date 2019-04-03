<?php
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");
$DataEntry1 = 1;
$DataEntry2 = 1;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_surveys.css">
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
        <li><a  href="./companies.html">Companies</a></li>             
        <li><a class="active" href="./admin_surveys.html">Supervisor Survey</a></li>
        <li><a  href="../php/AccountDetails.php">Account Details</a></li>
        <li><a href="#Manual">Administrator Manual</a></li>
        <li><a href="./HomeScreen.html">Logout</a></li>
      </ul>
    </nav>


      
      
    </form>
    <form class = "ShortAnswer">
      <header class = "Short">Short Answer Questions <input type = "button" class = "button" value = "Edit" style = "border:2;" id = "ChangeLA"/> </header>     
      <br><?php $query1 = mysqli_query($con,"SELECT `question1` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query1) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query1)) {
               echo $row["question1"];
                      }
              }?> <br>
     
      <br><?php $query2 = mysqli_query($con,"SELECT `question2` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query2) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query2)) {
               echo $row["question2"];
                      }
              }?><br>
      
      <br><?php $query3 = mysqli_query($con,"SELECT `question3` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query3) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query3)) {
               echo $row["question3"];
                      }
              }?><br>
      
      <br><?php $query4 = mysqli_query($con,"SELECT `question4` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query4) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query4)) {
               echo $row["question4"];
                      }
              }?><br>
      
      <br> <?php $query5 = mysqli_query($con,"SELECT `question5` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query5) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query5)) {
               echo $row["question5"];
                      }
              }?><br>
      
      <br> <?php $query6 = mysqli_query($con,"SELECT `question6` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query6) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query6)) {
               echo $row["question6"];
                      }
              }?><br>
     
      <br><?php $query7 = mysqli_query($con,"SELECT `question7` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query7) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query7)) {
               echo $row["question7"];
                      }
              }?><br>
      
      <br><?php $query8 = mysqli_query($con,"SELECT `question8` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query8) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query8)) {
               echo $row["question8"];
                      }
              }?><br>
      
      <br><?php $query9 = mysqli_query($con,"SELECT `question9` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query9) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query9)) {
               echo $row["question9"];
                      }
              }?><br>
      
      <br> <?php $query10 = mysqli_query($con,"SELECT `question10` FROM `surveyquestions` WHERE $DataEntry1 "); 
            if (mysqli_num_rows($query10) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query10)) {
               echo $row["question10"];
                      }
              }?><br>


            <div id = "Change" class = "modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <form action = "" method = "post">
            Question1: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question2: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question3: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question4: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question5: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question6: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question7: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question8: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question9: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question10: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            </form>
            <?php
            if(isset($_POST['submit'])){

               
            
            }



            ?>
            </div>
          </div>
      
  </form>
  <form class = "RadioButtons">
  
  <br>  <header class = "Radio">Radion Button Questions  <input type = "submit" class = "button" value = "Edit" style = "border:2;" id = "RadioChoice" /> </header>     
          <br><?php $query11 = mysqli_query($con,"SELECT `rc1` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query11) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query11)) {
               echo $row["rc1"];
                      }
              }?><br>
         
          <br><?php $query12 = mysqli_query($con,"SELECT `rc2` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query12) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query12)) {
               echo $row["rc2"];
                      }
              }?><br>
           
          <br><?php $query13 = mysqli_query($con,"SELECT `rc3` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query13) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query13)) {
               echo $row["rc3"];
                      }
              }?><br>
          
          <br><?php $query14 = mysqli_query($con,"SELECT `rc4` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query14) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query14)) {
               echo $row["rc4"];
                      }
              }?><br>
            
          <br><?php $query15 = mysqli_query($con,"SELECT `rc5` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query15) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query15)) {
               echo $row["rc5"];
                      }
              }?><br>
         
          <br><?php $query16 = mysqli_query($con,"SELECT `rc6` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query16) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query16)) {
               echo $row["rc6"];
                      }
              }?><br>
        
          <br><?php $query17 = mysqli_query($con,"SELECT `rc7` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query17) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query17)) {
               echo $row["rc7"];
                      }
              }?><br>
       
          <br><?php $query18 = mysqli_query($con,"SELECT `rc8` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query18) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query18)) {
               echo $row["rc8"];
                      }
              }?><br>
         
          <br><?php $query19 = mysqli_query($con,"SELECT `rc9` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query19) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query19)) {
               echo $row["rc9"];
                      }
              }?><br>
         
          <br><?php $query20 = mysqli_query($con,"SELECT `rc10` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query20) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query20)) {
               echo $row["rc10"];
                      }
              }?><br>
      
          <br><?php $query21 = mysqli_query($con,"SELECT `rc11` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query21) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query21)) {
               echo $row["rc11"];
                      }
              }?><br>
           
          <br><?php $query22 = mysqli_query($con,"SELECT `rc12` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query22) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query22)) {
               echo $row["rc12"];
                      }
              }?><br>
          
          <br><?php $query23 = mysqli_query($con,"SELECT `rc13` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query23) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query23)) {
               echo $row["rc13"];
                      }
              }?><br>
           
          <br><?php $query24 = mysqli_query($con,"SELECT `rc14` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query24) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query24)) {
               echo $row["rc14"];
                      }
              }?><br>
       
          <br><?php $query25 = mysqli_query($con,"SELECT `rc15` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query25) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query25)) {
               echo $row["rc15"];
                      }
              }?><br>
             
          <br><?php $query26 = mysqli_query($con,"SELECT `rc16` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query26) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query26)) {
               echo $row["rc16"];
                      }
              }?><br>

          <br><?php $query27 = mysqli_query($con,"SELECT `rc17` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query27) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query27)) {
               echo $row["rc17"];
                      }
              }?><br>
         
          <br><?php $query28 = mysqli_query($con,"SELECT `rc18` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query28) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query28)) {
               echo $row["rc18"];
                      }
              }?><br> 
         
          <br><?php $query29 = mysqli_query($con,"SELECT `rc19` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query29) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query29)) {
               echo $row["rc19"];
                      }
              }?><br>
   
          <br><?php $query30 = mysqli_query($con,"SELECT `rc20` FROM `surveyquestions` WHERE $DataEntry2 "); 
            if (mysqli_num_rows($query30) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query30)) {
               echo $row["rc20"];
                      }
              }?><br>
          
      </form>
      <div id = "ChangeRC" class = "modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <form action = "" method = "post">
            Question1: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question2: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question3: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question4: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question5: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question6: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question7: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question8: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question9: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question10: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question11: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question12: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question13: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question14: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question15: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question16: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question17: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question18: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question19: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            Question20: <br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>

            </form>
            <?php
            if(isset($_POST['submit'])){

               
            
            }



            ?>
            </div>
          </div>
      <input type="submit" class="button" value="Send" style="border:2;"/>
    </div>
    <!--end of search box-->


  </div>
  <script>
        
        var modal = document.getElementById('Change');


        var btn = document.getElementById("ChangeLA");


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
  <!--end of main container-->
  </body>
</html>