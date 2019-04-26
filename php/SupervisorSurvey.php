<?php
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");
$QuestionId = $_GET["QuestionId"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Supervisor Survery</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/SupervisorStyle.css">
    </head>
    <body>
        <!-- Top part of the web page   -->
        <div class = "top-of-page">
            <header class = "head">
                <img class = "io_img" src = "../images/header_logo.jpg">
                <h1 class ="io_h1">I/O Practicum Program</h1>
                
            </header>

        </div>
        
        <!-- Start of survey-->
        <div class = "body-of-page">
        

        <form class = "ShortAnswer">
        Question 1: <?php $query1 = mysqli_query($con,"SELECT `question1` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query1) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query1)) {
               echo $row["question1"];
                      }
              }?> <br>
            <textarea name = "r1" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 4: <?php $query2 = mysqli_query($con,"SELECT `question2` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query2) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query2)) {
               echo $row["question2"];
                      }
              }?>?<br>
            <textarea name = "r2" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 3: <?php $query3 = mysqli_query($con,"SELECT `question3` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query3) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query3)) {
               echo $row["question3"];
                      }
              }?><br>
            <textarea name = "r3" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 4: <?php $query4 = mysqli_query($con,"SELECT `question4` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query4) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query4)) {
               echo $row["question4"];
                      }
              }?><br>
            <textarea name = "r4" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 5: <?php $query5 = mysqli_query($con,"SELECT `question5` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query5) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query5)) {
               echo $row["question5"];
                      }
              }?><br>
            <textarea name = "r5" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 6: <?php $query6 = mysqli_query($con,"SELECT `question6` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query6) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query6)) {
               echo $row["question6"];
                      }
              }?><br>
            <textarea name = "r6" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 7: <?php $query7 = mysqli_query($con,"SELECT `question7` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query7) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query7)) {
               echo $row["question7"];
                      }
              }?><br>
            <textarea name = "r7" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 8: <?php $query8 = mysqli_query($con,"SELECT `question8` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query8) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query8)) {
               echo $row["question8"];
                      }
              }?><br>
            <textarea name = "r8" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 9:  <?php $query9 = mysqli_query($con,"SELECT `question9` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query9) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query9)) {
               echo $row["question9"];
                      }
              }?><br>
            <textarea name = "r9" class = "r1" placeholder="Enter your response here"></textarea><br>
            Question 10:  <?php $query10 = mysqli_query($con,"SELECT `question10` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query10) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query10)) {
               echo $row["question10"];
                      }
              }?><br>
            <textarea name = "r10" class = "r1" placeholder="Enter your response here"></textarea><br>
        </form>
        <form class = "RadioButtons">
                <br>Question 11: <?php $query11 = mysqli_query($con,"SELECT `rc1` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query11) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query11)) {
               echo $row["rc1"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 12: <?php $query12 = mysqli_query($con,"SELECT `rc2` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query12) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query12)) {
               echo $row["rc2"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 13: <?php $query13 = mysqli_query($con,"SELECT `rc3` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query13) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query13)) {
               echo $row["rc3"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 14: <?php $query14 = mysqli_query($con,"SELECT `rc4` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query14) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query14)) {
               echo $row["rc4"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
            <br>Question 15: <?php $query15 = mysqli_query($con,"SELECT `rc5` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query15) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query15)) {
               echo $row["rc5"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 16: <?php $query16 = mysqli_query($con,"SELECT `rc6` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query16) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query16)) {
               echo $row["rc6"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 17: <?php $query17 = mysqli_query($con,"SELECT `rc7` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query17) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query17)) {
               echo $row["rc7"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 18: <?php $query18 = mysqli_query($con,"SELECT `rc8` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query18) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query18)) {
               echo $row["rc8"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 19: <?php $query19 = mysqli_query($con,"SELECT `rc9` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query19) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query19)) {
               echo $row["rc9"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 20: <?php $query20 = mysqli_query($con,"SELECT `rc10` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query20) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query20)) {
               echo $row["rc10"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 21: <?php $query21 = mysqli_query($con,"SELECT `rc11` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query21) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query21)) {
               echo $row["rc11"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 22: <?php $query22 = mysqli_query($con,"SELECT `rc12` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query22) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query22)) {
               echo $row["rc12"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 23: <?php $query23 = mysqli_query($con,"SELECT `rc13` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query23) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query23)) {
               echo $row["rc13"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 24: <?php $query24 = mysqli_query($con,"SELECT `rc14` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query24) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query24)) {
               echo $row["rc14"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 25: <?php $query25 = mysqli_query($con,"SELECT `rc15` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query25) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query25)) {
               echo $row["rc15"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 26: <?php $query26 = mysqli_query($con,"SELECT `rc16` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query26) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query26)) {
               echo $row["rc16"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 27: <?php $query27 = mysqli_query($con,"SELECT `rc17` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query27) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query27)) {
               echo $row["rc17"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>  
                <br>Question 28: <?php $query28 = mysqli_query($con,"SELECT `rc18` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query28) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query28)) {
               echo $row["rc18"];
                      }
              }?><br> 
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 29: <?php $query29 = mysqli_query($con,"SELECT `rc19` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query29) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query29)) {
               echo $row["rc19"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>   
                <br>Question 30: <?php $query30 = mysqli_query($con,"SELECT `rc20` FROM `surveyquestions` WHERE `id` = $QuestionId"); 
            if (mysqli_num_rows($query30) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($query30)) {
               echo $row["rc20"];
                      }
              }?><br>
                <input type = "radio" name = "scale" class = "one"> <label for = "one">1</label>
                <input type = "radio" name = "scale" class = "two"> <label for = "two">2</label> 
                <input type = "radio" name = "scale" class = "three"> <label for = "three">3</label> 
                <input type = "radio" name = "scale" class = "four"> <label for = "four">4</label> 
                <input type = "radio" name = "scale" class = "five"> <label for = "five">5</label>
            </form>
            <div class = "buttonHolder">
                <input type = "submit" name ="submit" Value = "Submit Survey" class = "submitSurvey"/> 
            </div>
        </div>





    </body>
</html>