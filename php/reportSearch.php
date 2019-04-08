<!--
    Coder: Preston Whittaker
 Modified: 4/7/2019 by preston Whittaker
     Page: reportSearch output
-->

<!-- makes a connection to the database-->
<?php
$con = mysqli_connect("localhost","root" ,"","iopracticum");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//extracting the value that was attatched to the URL
$q = $_GET['q'];

// selects the value to search. $q is the value given from reportSearch.js

// if first number in string from url is 1 then it is a year search
if ($q[0] == "1"){
    $value = substr($q,1);
    $sql="SELECT * FROM report WHERE year = '".$value."'";
}

//if first number in string from url is 2 then it is a company search
else if ($q[0] == "2"){
    $value = substr($q,1);
    $sql="SELECT * FROM report WHERE company = '".$value."'";
}

//if first number in string from url is 3 then it is a company search and year search
else if ($q[0] == "3"){
    $value = substr($q,1,4);
    $value2 = substr($q,5);
    $sql="SELECT * FROM report WHERE company = '" . $value2 . "'" . "AND year = '" . $value . "'";
}

//all field search
else{
    $sql="SELECT * FROM report ORDER BY company";
}

//sending the query to the database
$result = mysqli_query($con,$sql);

//echo results table
echo "<table>
<tr>
<th>Name</th>
<th>Company</th>
<th>Year</th>
</tr>";

//loop through results
if (mysqli_num_rows($result) > 0) {
    // output data of search results
    while($row = mysqli_fetch_assoc($result)) {
        
     // use of explode to extract name from file path 
     $string = $row["filepath"];
     $str_arr = explode ("_", $string);  
      
        
      echo "<tr>";
      echo "<td>" . $str_arr[1] ."</td>";
      echo "<td>" . $row["company"] . "</td>";
      echo "<td>" . $row["year"] . "</td>";
      echo'<td><button type=button class="button" onclick="displayRes(\''.$row['filepath'].'\')">view</button></td>';
      echo "</tr>";
    }
  } 
echo "</table>";
mysqli_close($con);
?>

