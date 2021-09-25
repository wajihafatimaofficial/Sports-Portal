<?php 


include "databaseconnect.php";

$Newsheader =  $_POST['header'];

$sql = "SELECT FROM news (Header) WHERE Header='$Newsheader' "; 

$edit = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($edit)){
      $Header= $row['Header'];
    }
      

if (mysqli_query($edit))

{
   
   
    
}
    
   else 
   { echo "Error: "; 
   }

  // Close connection
mysqli_close($conn); 
?>