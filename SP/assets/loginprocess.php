<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        if($_POST["studentid"]=='juw00000' && $_POST['password']=='juwspadmin'){
            $_SESSION["StudentId"]='juw00000';
            header("Location:admin.php");
        }//if end
        else{
        $con = mysqli_connect('localhost','root','','juwsp') ;

        $result = mysqli_query($con,"SELECT *  FROM signup WHERE StudentId='" . $_POST["studentid"] . "' and Password = '". $_POST["password"]."'");
       
        
        while($row = mysqli_fetch_array($result)){
            $FirstName= $row['FirstName'];
            $LastName= $row['LastName'];
            $_SESSION["StudentId"] = $row['StudentId'];
            $Email= $row['Email'];
            $_SESSION["Password"] = $row['Password'];
        }//while end
        if($result){
            if(isset($_SESSION["StudentId"])) {
              
                header("Location:profile.php");
            }
            else{ header("Location:loginfailed.php");}
        }
        else{}
    }//else end

}//if end
        
        
         
        
    
    
?>