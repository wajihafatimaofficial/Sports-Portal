<?php 
    
    include("loginprocess.php");   
    
?>


<html>
<head>
<title>Login Failed</title>
 <link rel="shortcut icon" href="images\pagelogo.jpg">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--google fonts-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
 $(document).ready(function(){
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
})


</script>
</head>

<style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
 .fixed-bottom{position:fixed;
 width:100%:
 overflow: hidden;
 bottom:0;}
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: black;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
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
    color: black;
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
  color: black;
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
  footer {
    background-color: #2d2d30;
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
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }

.page-title {
  position: relative;
  padding: 165px 0 65px;
}

.page-title h3, .page-title li, .page-title a {
  color: #fff;
}

.page-title .title h3 {
  font-weight: 500;
  text-transform: uppercase;
}

.page-title .breadcrumb {
  background: transparent;
}

.page-title .breadcrumb .breadcrumb-item {
  float: none;
  display: inline-block;
  text-transform: uppercase;
}

.page-title .breadcrumb .breadcrumb-item.active {
  color: #fff;
}

.page-title .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
  content: "\f105";
  font-family: FontAwesome;
  color: #fff;
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


 </style>



  <?php
  if(isset($_SESSION["StudentId"])) {
  
  ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top" style="background-color:black;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span> 
      <a class="navbar-brand" href="#myPage" style=" background-color: black; width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Events.php">EVENTS</a></li>
        <li><a href="News.php">NEWS</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="profile.php">PROFILE</a></li> 
<li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown"><span>&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color:#777;">
              <a class="dropdown-item" href="logout.php" style="display:block;">-Log out</a>
              <a class="dropdown-item" href="makearequest.php" style="display:block;">-Make a Request</a>
              <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQ</a>
           
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php } else { ?>
  <nav class="navbar main-nav  navbar-default navbar-fixed-top" style="background-color:black;">
    <div class="container-fluid" >
      <div class="navbar-header">
        <!--Creating toggle bar-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <span> 
      <a class="navbar-brand" href="#myPage" style=" background-color: black; width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span> 
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right ">
          <li><a href="index.php">HOME</a></li>
          <li><a href="Events.php">EVENTS</a></li>
          <li><a href="News.php">NEWS</a></li>
          <li><a href="Contact.html">CONTACT US</a></li>
          <li class="nav-item dropdown dropdown-slide">
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
  </nav>
  <?php }?>


  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color:#a18aaa;">

<div class="jumbotron" style="background-color:#a18aaa;margin:100px;">


<h1 style="text-shadow: 1px 1px #808080;border-radius: 25px;color:black;text-align:center;" >Opppssss...</h1>


 <p style="text-shadow: 1px 1px #808080;border-radius: 25px;color:black;text-align:center;" >It seems their exsists no account with this Student Id or you have entered incorrect StudentId</p>


</div>

</body>
<!-- Footer -->



</html>

