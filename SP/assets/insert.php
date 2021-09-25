<?php 


$conn = mysqli_connect("localhost", "root", "", "juwsp");
// Check connection
if($conn === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{echo"Connection built<br>";}

$Name =  $_POST['name'];
$Subject=  $_POST['msg_subject'];
$Email =  $_POST['email'];
$Message=  $_POST['message'];
$sql = "INSERT INTO contactform (Name,Email,Subject,Message) VALUES('$Name','$Email','$Subject','$Message')"; 
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