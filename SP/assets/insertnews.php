<?php 


$conn = mysqli_connect("localhost", "root", "", "juwsp");
// Check connection
if($conn === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{}

$Newsheader =  $_POST['newsheader'];
$Newstext=  $_POST['newstext'];

$sql = "INSERT INTO news (Header,NewsDetail) VALUES('$Newsheader','$Newstext')"; 
if (mysqli_query($conn, $sql))

{
   
    header('Location: admin_newsedit.php'); 
}
    
   else 
   { echo "Error: "; 
   }

  // Close connection
mysqli_close($conn); 
?>