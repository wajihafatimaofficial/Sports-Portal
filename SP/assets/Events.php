<?php 
    
    include("loginprocess.php");   
?>


<html>
<head>

<title>Events</title>
<link rel="shortcut icon" href="images\pagelogo.jpg">
<style>
    

</style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--google fonts-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>

   
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


</script>

</head>
<style>
  
.hidden {
     visibility:hidden;
}
  
  
.main{
    margin-right: 120px;
    margin-left: 120px;
    margin-top: 100px;

}
  
  
   
  
  .nav-tabs li a {
    color: #2d2d30;
  }
  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: grey!important;
  }
  .navbar-nav li a:hover {
    color: black !important;
  }
  .navbar-nav li.active a {
    color: white !important;
    background-color: black !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #555;
    background-color: #2d2d30 !important;
  }
  .dropdown-menu li a {
    color: white !important;
  }
  .dropdown-menu li a:hover {
    background-color: white !important;
  }

.main-nav .dropdown-slide {
  position: static;
}

.main-nav .dropdown-slide .open > a, .main-nav .dropdown-slide .open > a:focus, .main-nav .dropdown-slide .open > a:hover {
  background: transparent;
}

.main-nav .dropdown-slide.full-width .dropdown-menu {
  left: 0 !important;
  right: 0 !important;
}

.main-nav .dropdown-slide:hover .dropdown-menu {
  border-top: 3px solid #ff6600;
  display: none;
  opacity: 1;
  display: block;
  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);
  opacity: 1;
  visibility: visible;
  color: #555;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}

.main-nav .dropdown-slide .dropdown-menu {
  min-width: 220px;
  margin-top: 0;
  border-radius: 0;
  opacity: 1;
  visibility: visible;
  position: absolute;
 
 padding: 5px 10px;
 
 
  -webkit-transition: .3s all;
  transition: .3s all;
  position: absolute;
  display: block;
  visibility: hidden;
  opacity: 0;
  -webkit-transform: translateY(30px);
          transform: translateY(30px);
  -webkit-transition: visibility 0.2s, opacity 0.2s, -webkit-transform 500ms cubic-bezier(0.43, 0.26, 0.11, 0.99);
  transition: visibility 0.2s, opacity 0.2s, -webkit-transform 500ms cubic-bezier(0.43, 0.26, 0.11, 0.99);
  transition: visibility 0.2s, opacity 0.2s, transform 500ms cubic-bezier(0.43, 0.26, 0.11, 0.99);
  transition: visibility 0.2s, opacity 0.2s, transform 500ms cubic-bezier(0.43, 0.26, 0.11, 0.99), -webkit-transform 500ms cubic-bezier(0.43, 0.26, 0.11, 0.99);
}

.main-nav .dropdown-slide .dropdown-menu .dropdown-item {
  font-size: 12px; text-align:left;
  padding: 5px 0;
  -webkit-transition: .3s ease;
  transition: .3s ease;
 text-decoration: none;
}

.main-nav .dropdown-slide .dropdown-menu .dropdown-item:not(:last-child) {

}

.main-nav .dropdown-slide .dropdown-menu .dropdown-item:hover {
  background: #2d2d30;
  color: black;
}

@media () {
  .main-nav .dropdown-slide .dropdown-menu {
    -webkit-transform: none;
            transform: none;
    left: auto;
    position: relative;
       
    opacity: 1;
    visibility: visible;
  }
}

/* Solid border */
.solid {
  border-bottom: 3px solid #a18aaa;
}

  footer {
    background-color: black;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  


/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}

 #newstable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
  

}


#news {
    box-shadow: 0 1px 1px black, 
              0 2px 2px black, 
              0 4px 4px black, 
              0 8px 8px black,
              0 16px 16px black;

         
}

#newscontainer{
    font-family: Arial, Helvetica, sans-serif;
  
  background-color: #f2f2f2;
  color: black;
 
}




	
   </style>


<?php
 if(isset($_SESSION["StudentId"])) {
 
 ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top"style="background-color:black;" >
  <div class="container-fluid" >
    <div class="navbar-header" >
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span> 
      <a class="navbar-brand" href="#myPage" style=" width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"style="background-color:black;" >
      <ul class="nav navbar-nav navbar-right " >
        <li><a href="index.php">HOME</a></li>
        <li><a href="Events.php">EVENTS</a></li>
        <li><a href="News.php">NEWS</a></li>
        <li><a href="Contact.php">CONTACT US</a></li>
        <?php
 if($_SESSION["StudentId"]=='juw00000') {
 ?><li><a href="admin_eventsedit.php">ADMIN</a></li> 
    <li class="nav-item dropdown dropdown-slide" style="background-color:black;">
            <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color:#777;">
              <a class="dropdown-item" href="Logout.php" style="display:block;">-Logout</a>
             
            </div>
        </li>
 <?php } else { ?>
        <li><a href="profile.php">PROFILE</a></li> 
        <li class="nav-item dropdown dropdown-slide" style="background-color:black;">
            <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color:#777;">
            
              <a class="dropdown-item" href="makearequest.php" style="display:block;">-Make a Request</a>
              <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQs</a>
              <a class="dropdown-item" href="Logout.php" style="display:block;">-Logout</a>
             
            </div>
        </li>
        <?php }?>
   
      </ul>
    </div>
  </div>
</nav>
<?php } else { ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top" style="background-color:black;">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:black;"> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span> 
      <a class="navbar-brand" href="#myPage" style=" width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="background-color:black;">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Events.php">EVENTS</a></li>
        <li><a href="News.php">NEWS</a></li>
        <li><a href="Contact.php">CONTACT US</a></li>
        <li class="nav-item dropdown dropdown-slide" style="background-color:black;">
          <a class="nav-link" href="#" data-toggle="dropdown"><span>&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color:#777;">
              <a class="dropdown-item" href="signup.php" style="display:block;">-Sign In</a>
              <a class="dropdown-item" href="loginpage.php" style="display:block;">-Log In</a>
              <a class="dropdown-item" href="makearequest.php" style="display:block;">-Make a Request</a>
              <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQ</a>
 
            </div>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>
<?php }?>
</div>
</div>


<div class="jumbotron" style="background-color:#a18aaa;text-align:center;color:white;">
<br><br>
  <h1 style="text-shadow: 2px 2px 10px black;">LATEST NEWS</h1>  
  
 </div>
      
<div class="container" >
  <div class="row"> 


  <div class="col-xs-12" >

     
         <div  >
                                 
                            
               <?php include "databaseconnect.php"; 
               
               $result = mysqli_query($conn,"SELECT * FROM events ORDER BY ID DESC");
       
               while($row = mysqli_fetch_array($result)){
               
                  ?>
                                <div class="container" >
                                    <div class="row" style="background:white;border-radius:25px;border:2px solid #a18aaa;background-color:#DCDCDC;">
                                    <div class="col-xs-12" >
                                  <h3 class="solid" style="padding:1%;color:white;text-shadow: 2px 2px 10px black;" > <?php echo $row['EventName'];?></h3>
                                 
                                  <br>
                                  
                                    </div>        
                
                                   
                                   <div class="col-xs-12" >
                                   <p><?php echo $row['EventDetail'];?></p>
                                  <p style="text-align:right;">Dated: <?php echo $row['PostDate'];?></p>
            
                                   </div> 
                                    
                                     </div>
                                    
                                
                                      </div> <br><br>
                                     <?php } ?>
                                     
							              
                               </div> 
            
    </div>
 </div>
</div>
    


<br>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color:white;">
</body>

<!-- Footer -->

<footer>

<p style="text-align:center;">&copy;  2021 JUWSP.com.All rights reserved.</p>
</footer>



</html>
