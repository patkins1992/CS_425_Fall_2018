<?php
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");
$DataEntry = "SELECT `id` FROM `surveyquestions`";
$result = mysqli_query($con,$DataEntry);

if ($result->num_rows > 0) {
  // output data of eah row
  while($row = mysqli_fetch_assoc($result)){
  $select = $row['id'];
  
  }
 
} else {
  
  echo "0 results";
}
$DataEntry1 = 1;
 
 
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
        <li><a   href="admin.php">Home</a></li>
        <li><a  href="./companies.html">Companies</a></li>             
        <li><a class="active" href="admin_survey.php">Supervisor Survey</a></li>
        <li><a  href="AccountDetails.php">Account Details</a></li>
        <li><a href="#Manual">Administrator Manual</a></li>
        <li><a href="./HomeScreen.html">Logout</a></li>
      </ul>
    </nav>


      
      
    </form>
    <form class = "ShortAnswer">
      <header class = "Short">Short Answer Questions </header>     
      <br><?php $query1 = mysqli_query($con,"SELECT `question1` FROM `surveyquestions` ORDER BY `id` DESC LIMIT 1"); 
            if (mysqli_num_rows($query1) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query1)) {
               echo $row["question1"];
                      }
              }?> <br>
     
      <br><?php $query2 = mysqli_query($con,"SELECT `question2` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query2) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query2)) {
               echo $row["question2"];
                      }
              }?><br>
      
      <br><?php $query3 = mysqli_query($con,"SELECT `question3` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query3) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query3)) {
               echo $row["question3"];
                      }
              }?><br>
      
      <br><?php $query4 = mysqli_query($con,"SELECT `question4` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query4) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query4)) {
               echo $row["question4"];
                      }
              }?><br>
      
      <br> <?php $query5 = mysqli_query($con,"SELECT `question5` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query5) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query5)) {
               echo $row["question5"];
                      }
              }?><br>
      
      <br> <?php $query6 = mysqli_query($con,"SELECT `question6` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query6) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query6)) {
               echo $row["question6"];
                      }
              }?><br>
     
      <br><?php $query7 = mysqli_query($con,"SELECT `question7` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query7) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query7)) {
               echo $row["question7"];
                      }
              }?><br>
      
      <br><?php $query8 = mysqli_query($con,"SELECT `question8` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query8) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query8)) {
               echo $row["question8"];
                      }
              }?><br>
      
      <br><?php $query9 = mysqli_query($con,"SELECT `question9` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query9) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query9)) {
               echo $row["question9"];
                      }
              }?><br>
      
      <br> <?php $query10 = mysqli_query($con,"SELECT `question10` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query10) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query10)) {
               echo $row["question10"];
                      }
              }?><br>
</form>
            <div id = "Change" class = "modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <form action = "" method = "post">
            Short Answer Question 1: <br>
            <input type = "text" class = "AdminEid" name = "LA1"/><br>
            Short Answer Question 2: <br>
            <input type = "text" class = "AdminEid" name = "LA2"/><br>
            Short Answer Question 3: <br>
            <input type = "text" class = "AdminEid" name = "LA3"/><br>
            Short Answer Question 4: <br>
            <input type = "text" class = "AdminEid" name = "LA4"/><br>
            Short Answer Question 5: <br>
            <input type = "text" class = "AdminEid" name = "LA5"/><br>
            Short Answer Question 6: <br>
            <input type = "text" class = "AdminEid" name = "LA6"/><br>
            Short Answer Question 7: <br>
            <input type = "text" class = "AdminEid" name = "LA7"/><br>
            Short Answer Question 8: <br>
            <input type = "text" class = "AdminEid" name = "LA8"/><br>
            Short Answer Question 9: <br>
            <input type = "text" class = "AdminEid" name = "LA9"/><br>
            Short Answer Question 10: <br>
            <input type = "text" class = "AdminEid" name = "LA10"/><br>
            Radio Choice Question 1: <br>
            <input type = "text" class = "AdminEid" name = "RC1"/><br>
            Radio Choice Question 2: <br>
            <input type = "text" class = "AdminEid" name = "RC2"/><br>
            Radio Choice Question 3: <br>
            <input type = "text" class = "AdminEid" name = "RC3"/><br>
            Radio Choice Question 4: <br>
            <input type = "text" class = "AdminEid" name = "RC4"/><br>
            Radio Choice Question 5: <br>
            <input type = "text" class = "AdminEid" name = "RC5"/><br>
            Radio Choice Question 6: <br>
            <input type = "text" class = "AdminEid" name = "RC6"/><br>
            Radio Choice Question 7: <br>
            <input type = "text" class = "AdminEid" name = "RC7"/><br>
            Radio Choice Question 8: <br>
            <input type = "text" class = "AdminEid" name = "RC8"/><br>
            Radio Choice Question 9: <br>
            <input type = "text" class = "AdminEid" name = "RC9"/><br>
            Radio Choice Question 10: <br>
            <input type = "text" class = "AdminEid" name = "RC10"/><br>
            Radio Choice Question 11: <br>
            <input type = "text" class = "AdminEid" name = "RC11"/><br>
            Radio Choice Question 12: <br>
            <input type = "text" class = "AdminEid" name = "RC12"/><br>
            Radio Choice Question 13: <br>
            <input type = "text" class = "AdminEid" name = "RC13"/><br>
            Radio Choice Question 14: <br>
            <input type = "text" class = "AdminEid" name = "RC14"/><br>
            Radio Choice Question 15: <br>
            <input type = "text" class = "AdminEid" name = "RC15"/><br>
            Radio Choice Question 16: <br>
            <input type = "text" class = "AdminEid" name = "RC16"/><br>
            Radio Choice Question 17: <br>
            <input type = "text" class = "AdminEid" name = "RC17"/><br>
            Radio Choice Question 18: <br>
            <input type = "text" class = "AdminEid" name = "RC18"/><br>
            Radio Choice Question 19: <br>
            <input type = "text" class = "AdminEid" name = "RC19"/><br>
            Radio Choice Question 20: <br>
            <input type = "text" class = "AdminEid" name = "RC20"/><br>
            
            <input type = "submit" class = "Save" name = "Save" value = "Save"/>
            </form>
            <?php
              if(isset($_POST['Save'])){
                $LA1 = $_POST['LA1'];
                $LA2 = $_POST['LA2'];
                $LA3 = $_POST['LA3'];
                $LA4 = $_POST['LA4'];
                $LA5 = $_POST['LA5'];
                $LA6 = $_POST['LA6'];
                $LA7 = $_POST['LA7'];
                $LA8 = $_POST['LA8'];
                $LA9 = $_POST['LA9'];
                $LA10 = $_POST['LA10'];
                $RC1  = $_POST['RC1'];
                $RC2  = $_POST['RC2'];
                $RC3  = $_POST['RC3'];
                $RC4  = $_POST['RC4'];
                $RC5  = $_POST['RC5'];
                $RC6  = $_POST['RC6'];
                $RC7  = $_POST['RC7'];
                $RC8  = $_POST['RC8'];
                $RC9  = $_POST['RC9'];
                $RC10 = $_POST['RC10'];
                $RC11 = $_POST['RC11'];
                $RC12 = $_POST['RC12'];
                $RC13 = $_POST['RC13'];
                $RC14 = $_POST['RC14'];
                $RC15 = $_POST['RC15'];
                $RC16 = $_POST['RC16'];
                $RC17 = $_POST['RC17'];
                $RC18 = $_POST['RC18'];
                $RC19 = $_POST['RC19'];
                $RC20 = $_POST['RC20'];
                $select = $select + 1;
                if($LA1 == ""){
                  echo "<p> input not recieved </p>";
                }else{

                $Surveyinsert = "INSERT INTO `surveyquestions` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `rc1`, `rc2`, `rc3`, `rc4`, `rc5`, `rc6`, `rc7`, `rc8`, `rc9`, `rc10`, `rc11`, `rc12`, `rc13`, `rc14`, `rc15`, `rc16`, `rc17`, `rc18`, `rc19`, `rc20`) VALUES ('$select','$LA1','$LA2','$LA3','$LA4','$LA5','$LA6','$LA7','$LA8','$LA9','$LA10','$RC1','$RC2','$RC3','$RC4','$RC5','$RC6','$RC7','$RC8','$RC9','$RC10','$RC11','$RC12','$RC13','$RC14','$RC15','$RC16','$RC17','$RC18','$RC19','$RC20')";

                mysqli_query($con,$Surveyinsert);
                }
              }
              ?>
            </div>
          </div>
  <form class = "RadioButtons">
  
  <br>  <header class = "Radio">Radion Button Questions  </header>     
          <br><?php $query11 = mysqli_query($con,"SELECT `rc1` FROM `surveyquestions`   ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query11) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query11)) {
               echo $row["rc1"];
                      }
              }?><br>
         
          <br><?php $query12 = mysqli_query($con,"SELECT `rc2` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query12) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query12)) {
               echo $row["rc2"];
                      }
              }?><br>
           
          <br><?php $query13 = mysqli_query($con,"SELECT `rc3` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query13) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query13)) {
               echo $row["rc3"];
                      }
              }?><br>
          
          <br><?php $query14 = mysqli_query($con,"SELECT `rc4` FROM `surveyquestions` ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query14) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query14)) {
               echo $row["rc4"];
                      }
              }?><br>
            
          <br><?php $query15 = mysqli_query($con,"SELECT `rc5` FROM `surveyquestions` ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query15) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query15)) {
               echo $row["rc5"];
                      }
              }?><br>
         
          <br><?php $query16 = mysqli_query($con,"SELECT `rc6` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query16) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query16)) {
               echo $row["rc6"];
                      }
              }?><br>
        
          <br><?php $query17 = mysqli_query($con,"SELECT `rc7` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query17) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query17)) {
               echo $row["rc7"];
                      }
              }?><br>
       
          <br><?php $query18 = mysqli_query($con,"SELECT `rc8` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query18) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query18)) {
               echo $row["rc8"];
                      }
              }?><br>
         
          <br><?php $query19 = mysqli_query($con,"SELECT `rc9` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query19) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query19)) {
               echo $row["rc9"];
                      }
              }?><br>
         
          <br><?php $query20 = mysqli_query($con,"SELECT `rc10` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query20) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query20)) {
               echo $row["rc10"];
                      }
              }?><br>
      
          <br><?php $query21 = mysqli_query($con,"SELECT `rc11` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query21) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query21)) {
               echo $row["rc11"];
                      }
              }?><br>
           
          <br><?php $query22 = mysqli_query($con,"SELECT `rc12` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query22) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query22)) {
               echo $row["rc12"];
                      }
              }?><br>
          
          <br><?php $query23 = mysqli_query($con,"SELECT `rc13` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query23) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query23)) {
               echo $row["rc13"];
                      }
              }?><br>
           
          <br><?php $query24 = mysqli_query($con,"SELECT `rc14` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query24) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query24)) {
               echo $row["rc14"];
                      }
              }?><br>
       
          <br><?php $query25 = mysqli_query($con,"SELECT `rc15` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query25) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query25)) {
               echo $row["rc15"];
                      }
              }?><br>
             
          <br><?php $query26 = mysqli_query($con,"SELECT `rc16` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query26) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query26)) {
               echo $row["rc16"];
                      }
              }?><br>

          <br><?php $query27 = mysqli_query($con,"SELECT `rc17` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query27) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query27)) {
               echo $row["rc17"];
                      }
              }?><br>
         
          <br><?php $query28 = mysqli_query($con,"SELECT `rc18` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query28) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query28)) {
               echo $row["rc18"];
                      }
              }?><br> 
         
          <br><?php $query29 = mysqli_query($con,"SELECT `rc19` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query29) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query29)) {
               echo $row["rc19"];
                      }
              }?><br>
   
          <br><?php $query30 = mysqli_query($con,"SELECT `rc20` FROM `surveyquestions`  ORDER BY `id` DESC LIMIT 1 "); 
            if (mysqli_num_rows($query30) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query30)) {
               echo $row["rc20"];
                      }
              }?><br>
          
      </form>
    
          <br><input type = "button" class = "button" value = "Edit" style = "border:2;" id = "ChangeLA"/>  <input type="submit" name= "Send" id = "Send" class="button" value="Send" style="border:2;"/>
    </div>
    <!--end of search box-->


  </div>
  <div id = "SendEmail" class = "modal">
            <div class="modal-content">
            <span class="close2">&times;</span>
            <form action = "" method = "post">
            Supervisor Email:<br>
            <input type = "text" class = "SupEmail" name = "SupEmail"/><br>
            Subject:<br>
            <input type = "text" class = "SupSubject" name = "SupSubject"/><br>
             Email: <br>
            <textarea id = "myTextArea" rows = "3" cols = "80" name = "EmailBody"></textarea><br>
            
            
            <input type = "checkbox" class = "SaveSup" name = "SaveSup"/> Save Supervisor<br>
            <input type = "submit" class = "SendEmail" name = "SendEmail" value = "Send Email"/>
            

    
            </form>
            </div>
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
        <script>
        
        var modal2 = document.getElementById('SendEmail');


        var btn2 = document.getElementById("Send");


        var span2 = document.getElementsByClassName("close2")[0];

 
        btn2.onclick = function() {
        modal2.style.display = "block";
        }   


        span2.onclick = function() {
        modal2.style.display = "none";
        }


        window2.onclick = function(event2) {
        if (event2.target == modal) {
        modal2.style.display = "none";
        }
    }

        </script>

  </body>
</html>

<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/PHPMailer-master/src/Exception.php';
require '../phpmailer/PHPMailer-master/src/PHPMailer.php';
require '../phpmailer/PHPMailer-master/src/SMTP.php';
$reciverEmail = '';

if(isset($_POST['SendEmail'])){
  $reciverEmail = $_POST['SupEmail'];
  $recieverSubject = $_POST['SupSubject'];
  $recieverBody = $_POST['EmailBody'];
  if($reciverEmail == ""){
    echo "<p> no input for supervisor email </p>";
  }else{
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = "soulichigo95@gmail.com";
$mail->Password = "bviqqnefxqnasmjq";
$mail->setFrom("soulichigo95@gmail.com", "Matthew Morton");
$mail->addAddress($reciverEmail, "Matthew Morton");
$mail->Subject = $recieverSubject;
$mail->Body = $recieverBody . "      http://localhost/CS_425_Fall_2018/php/SupervisorSurvey.php?QuestionId=$select";

 //$mail->msgHTML(file_get_contnts('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
  }
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}
}




?>