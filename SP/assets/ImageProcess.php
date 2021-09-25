
<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "juwsp");
  if (isset($_POST['save_profile'])) {

   
    // for the database
    $profileImageName =  $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "UPDATE signup SET ProfilePic='$profileImageName' WHERE StudentId='" . $_SESSION["StudentId"] . "'";
        (mysqli_query($conn, $sql));
        
            

            }


        } 
        
        else {
           
        
        }
      } 
      
      else {
         
      }
    
  
?>

