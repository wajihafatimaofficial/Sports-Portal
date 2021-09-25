<?php 


include "databaseconnect.php";

$Name =  $_POST['name'];
$Subject=  $_POST['msg_subject'];
$Email =  $_POST['email'];
$Request=  $_POST['message'];
$sql = "INSERT INTO jointeam (Name,Email,Subject,Message) VALUES('$Name','$Email','$Subject','$Request')"; 
if (mysqli_query($conn, $sql))
{ 
   header('Location: Response.html');
}
   else 
   { echo "Error: "; 
   }

  // Close connection
mysqli_close($conn); 
?>