<!--
    Coder: Preston Whittaker
 Modified: 4/12/2019 by preston Whittaker
     Page: pdf web viewer
-->


<?php 
  
  // Store the file name into variable 
  $file = '../reports/Ameren_bill_2018.pdf'; 
  $filename = '../reports/Ameren_bill_2018.pdf'; 
    
  // Header content type 
  header('Content-type: application/pdf'); 
    
  header('Content-Disposition: inline; filename="' . $filename . '"'); 
    
  header('Content-Transfer-Encoding: binary'); 
    
  header('Accept-Ranges: bytes'); 
    
  // Read the file 
  @readfile($file); 
    
  ?> 
  