<?php

$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Student page</title>
    <link rel="stylesheet" type="text/css" href="../css/ContactUs.css">
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
        <li><a  href="../html/HomeScreen.html">Home</a></li>
        <li><a  href="../html/Temporary-Login.html">Login</a></li>
        <li><a class = "active" href = "ContactUs.php"> Contact Us </a></li>
        
      </ul>
    </nav>
    <!--end of navbar-->
<div>
<table>
<tr>
    <th class = "Questions"> Any Questions Please Contact </th> 
</tr>
<tr class = "TableData">
<td>
<?php  $query = mysqli_query($con,"SELECT `Name` FROM `admin`"); 
    if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        echo $row["Name"];
    }
} else {
    echo "0 results";
}
?>  
</td>
<td>
<?php  
 $sql = mysqli_query($con, "SELECT `email` FROM `admin` ");
if (mysqli_num_rows($sql) > 0) {
// output data of each row
while($column = mysqli_fetch_assoc($sql)) {
        echo $column["email"];
}
} else {
echo "0 results";
}   
?>   
            
</td>
</tr>
</table>

</div>






    </body>
</html>