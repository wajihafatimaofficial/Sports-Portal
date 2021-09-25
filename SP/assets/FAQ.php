<?php 
    
    include("loginprocess.php");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>FAQs</title>
    <link rel="shortcut icon" href="images\pagelogo.jpg">
</head>
<style>

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
body{
    background-color: #b77cbf;
}
.nav-tabs li a {
    color: #777;
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
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color:white !important;
  }
  .navbar-nav li.active a {
    color: white !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #555;
    background-color: #2d2d30 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color:#777 !important;
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
  background: #777;
  color: #ff6600;
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
.main{
    margin-right: 120px;
    margin-left: 120px;
    margin-top: 100px;

}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}
.text{
color: white;

}
.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

<?php
 if(isset($_SESSION["StudentId"])) {
 
 ?>
 
 <nav class="navbar main-nav  navbar-default navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <!--Creating toggle bar-->
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>                        
       </button>
       <span> 
      <a class="navbar-brand" href="#myPage" style=" ; width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right ">
         <li><a href="index.php">HOME</a></li>
         <li><a href="Events">EVENTS</a></li>
         <li><a href="News.php">NEWS</a></li>
         <li><a href="Contact.php">CONTACT US</a></li>
         <?php
  if($_SESSION["StudentId"]=='juw00000') {
  ?><li><a href="admin_eventsedit.php">ADMIN</a></li> 
     <li class="nav-item dropdown dropdown-slide">
             <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
             <!-- Dropdown list -->
             <div class="dropdown-menu" style="background-color:#777;">
               <a class="dropdown-item" href="Logout.php" style="display:block;">-Logout</a>
              
             </div>
         </li>
  <?php } else { ?>
         <li><a href="profile.php">PROFILE</a></li> 
         <li class="nav-item dropdown dropdown-slide">
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
<nav class="navbar main-nav  navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span> 
      <a class="navbar-brand" href="#myPage" style="  #555; width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Events.php">EVENTS</a></li>
        <li><a href="News.php">NEWS</a></li>
        <li><a href="Contact.php">CONTACT US</a></li>
        <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color: #eee;">
            <a class="dropdown-item" href="signup.php" style="display:block;">-Sign In</a>
              <a class="dropdown-item" href="loginpage.php" style="display:block;">-Log In</a>
              
              <a class="dropdown-item" href="makearequest.php" style="display:block;">-Make a Request</a>
              <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQs</a>
           
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php }?>
</head>
<body>
    
    <div class="main">
   <center> <h2 class="text">We have Answers
        for your FAQ</h2></center>
</center>
   <button class="accordion">What is SportsPortal</button>
<div class="panel">
  <p> SportsPortal is a sports management platform that helps sports organizations (clubs, leagues...) to execute all operations including registrations, collect payments, make teams and schedules, run leagues and tournaments, manage fields, staff, shop items... SportsPlus helps coaches to coach their players and manage their teams, athletes to excel at sports, and everybody else to get connected with their club or team.</p>
</div>

<button class="accordion">Any additional charges or support fees?</button>
<div class="panel">
  <p>Absolutely No.The fee includes everything. We don't charge for the support or even consulting.</p>
</div>

<button class="accordion">How do we make a request?
</button>
<div class="panel">
  <p>You just have to register your account first and then fill out the request form.
</p>
</div>

<button class="accordion">How do we apply for participation in sports?
</button>
<div class="panel">
  <p>After register your account you have apply for the sports you want participate in then we will give you answer if you are selected or not.
</p>
</div>

<button class="accordion">Will I be able to see other people's profile?
</button>
<div class="panel">
  <p>Sorry, due to some privacy policy we didn't allow our users to see other peoples profile.
</p>
</div>
<button class="accordion">How many languages does SportsPlus support?
</button>
<div class="panel">
  <p>Currently, SportsPortal is only available in English.

</p>
</div>

<button class="accordion">What is the purpose of Sports Portal?
</button>
<div class="panel">
  <p>The purpose of Sports Portal is to facilitate the students to apply for the sports they interested in from anywhere get updates about the upcoming events held in the Uniiversity.
</p>
</div>




<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
<footer >

<p style="text-align:center;">&copy;  2021 JUWSP.com.All rights reserved.</p>
</footer>


</html>