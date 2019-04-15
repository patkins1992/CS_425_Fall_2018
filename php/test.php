


<?php
include ("../html/studentAddReports.html");
// Create connection
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");

//when the button is clicked
if(isset($_POST['Select'])){
   $name = $_FILES['myfile']['name'];
   $data = addslashes($_FILES['myfile']['tmp_name']);
   $data = file_get_contents($data);
   $data = base64_encode($data);
//query to inster the file into the database   
$query = mysqli_query($con,"INSERT INTO  reports(Name,Data)values('$name','$data')");
}
?>

