<?php
$errorMSG = "";

/* NAME */
if (empty($_POST["name"])) {
    $errorMSG = "<li>Name is required</<li>";
} else {
    $name = $_POST["name"];
}


/* EMAIL */
if (empty($_POST["email"])) {
    $errorMSG .= "<li>Email is required</li>";
} else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMSG .= "<li>Invalid email format</li>";
}else {
    $email = $_POST["email"];
}


/* MSG SUBJECT */
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "<li>Subject is required</li>";
} else {
    $msg_subject = $_POST["msg_subject"];
}


/* MESSAGE */
if (empty($_POST["message"])) {
    $errorMSG .= "<li>Message is required</li>";
} else {
    $message = $_POST["message"];
}


if(empty($errorMSG)){
	$msg = "Name: ".$name.", Email: ".$email.", Subject: ".$msg_subject.", Message:".$message;
	echo json_encode(['code'=>200, 'msg'=>$msg]);
	exit;
}

echo json_encode(['code'=>404, 'msg'=>$errorMSG]);

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
   echo " <p>Congratulations!</p> <div class='alert alert-success'> <strong>Success!</strong> Successfully Updated Intke. </div>"; 
   
}
   else 
   { echo "Error: "; 
   }

  // Close connection
mysqli_close($conn); 
?>
