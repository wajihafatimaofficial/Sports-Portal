<?php 

$conn = mysqli_connect("localhost", "root", "", "juwsp");


if(isset($_POST['Settingsave'])) // when click on Update button
{
    $Bio= $_POST['addbio'];
    
    $sql="UPDATE signup SET Bio='$Bio' WHERE StudentId='" . $_SESSION["StudentId"] . "'  ";
    $edit = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($edit)){
      $Bio= $row['Bio'];
    }
    

    if($edit)
    {
        mysqli_close($conn); // Close connection
     
        
        exit; 
    }
    else
    {
        echo mysqli_error();
    }    

    
}
else
{
    
$result = mysqli_query($conn,"SELECT  Bio from signup whereStudentId='" . $_SESSION["StudentId"] . "' "); // select query
while($row = mysqli_fetch_array($result)){
    $Bio= $row['Bio'];
    
}

    }
?>