<?php
include ("./AccountDetails.php");
$newN = $_POST['NewName'];
$newEid = $_POST['NewEid'];
$newEm = $_POST['NewEmail'];
$fksql = "INSERT INTO 'user' ('eid','name') VALUES ('$newEid','$newN')"; 
$sql = "INSERT INTO 'admin' ('AdmEid','email','Name') VALUES ('$newEid','$newEm','$newN')";
mysqli_query($con,$fksql);
mysqli_query($con,$sql);
?>