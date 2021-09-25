<?php 


$conn = mysqli_connect("localhost", "root", "", "juwsp");
// Check connection
if($conn === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{echo"Connection built<br>";}

//collecting data

$fName =  $_POST['fname'];
$lName =  $_POST['lname'];
$Faculty =  $_POST['faculty'];
$Department =  $_POST['department'];
$Batch =  $_POST['batch'];
$Class =  $_POST['uclass'];
$StudentId=  $_POST['studentid'];
$Email =  $_POST['email'];
$Password=  $_POST['password'];
$ConfirmPassword=  $_POST['confirmpassword'];


$sql = "INSERT INTO signup (FirstName,LastName,Email,StudentId,Password,ConfirmPassword,Faculty,Department,Batch,Class) VALUES('$fName','$lName','$Email','$StudentId','$Password','$ConfirmPassword','$Faculty','$Department','$Batch','$Class')"; 

if (mysqli_query($conn, $sql))

{
   $sql2 = "INSERT INTO users (FirstName,LastName,Email,StudentId,Faculty,Department,Batch,Class) VALUES('$fName','$lName','$Email','$StudentId','$Faculty','$Department','$Batch','$Class')"; 

   if (mysqli_query($conn, $sql2)){
   header('Location: Loginpage.php');}
}
   else 
   { echo "Error: "; 
   }

  // Close connection
mysqli_close($conn); 
?>