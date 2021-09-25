<?php 


$conn = mysqli_connect("localhost", "root", "", "juwsp");
// Check connection
if($conn === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{}

$eventname =  $_POST['eventname'];
$eventdetail=  $_POST['eventdetail'];

$sql = "INSERT INTO events (EventName,EventDetail) VALUES('$eventname','$eventdetail')"; 
if (mysqli_query($conn, $sql))

{
   
    header('Location: admin_eventsedit.php'); 
}
    
   else 
   { echo "Error: "; 
   }

  // Close connection
mysqli_close($conn); 
?>