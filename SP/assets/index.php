<?php 
    
    include("loginprocess.php");   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - JUW Sports Portal</title>
  <link rel="shortcut icon" href="images\pagelogo.png" >
  
  <link rel="shortcut icon" href="images\pagelogo.jpg">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
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

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};


  

$(document).ready(function(){

  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);


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
/* 
  ##Device = GALAXY FOLD
  
*/

@media (max-width: 280px) and (min-width: 280px) {

.jumbotron{padding-left:50px;}
h2{font-size: 0.7em;}
}

/* 
  ##Device = IPHONE 5/SE
  
*/
@media (max-width: 320px) and (min-width: 320px) {
  .jumbotron{padding-left:50PX;}
h2{font-size: 1em;}
}

/* 
  ##Device = IPHONE 6/7/8/X
  
*/
@media (max-width: 375px) and (min-width: 375px){
  
  h1{font-size: 1em;}
h2{font-size: 0.9em;}
}

/* 
  ##Device = BLACKBERRY Z30, GALAXY NOTE3, GALAXY NOTE II, MOTO G4, GALAXY S5
  
*/
@media (max-width: 360px) and (min-width: 360px){
  .jumbotron{padding-left:20%;}
h2{font-size: 0.9em;}
}


/* 
  ##Device = GALAXY FOLD
  
*/
@media (max-width: 425px) and (min-width: 425px) {

.jumbotron{padding-left:150px;}
h2{font-size: 1.4em;}
}

/* 
  ##Device = SURFACE DUO
  
*/
@media (max-width: 540px) and (min-width: 540px) {

.jumbotron{padding-left:120px;}
h2{font-size: 1.4em;}
}


/* 
  ##Device = BLACKBERRY PLAYBOOK
  
*/
@media (max-width: 600px) and (min-width: 600px) {

  .jumbotron{padding-left:20%;}
h2{font-size: 1.4em;}
}

/* 
  ##Device = KINDERFIRE HDX
  
*/
@media (max-width: 800px) and (min-width: 800px) {

.jumbotron{padding-left:25%;}
h2{font-size: 2em;}
}

/* 
  ##Device = IPAD
  
*/
@media (max-width: 768px) and (min-width:768px) {

.jumbotron{padding-left:25%;}
h2{font-size: 2em;}
}

/* 
  ##Device = IPAD PRO
  
*/
@media (max-width: 1024px) and (min-width:1024px) {

.jumbotron{padding-left:25%;}
h2{font-size: 2em;}
}

/* 
  ##Device = TOSHIBA
  
*/
@media (min-width: 1030px) {

.jumbotron{padding-left:25%;}
h2{font-size: 2em;}

}


img{  pointer-events: none;}

#fixed {
  position:fixed;
  bottom:0px;
  border:transparent;
  right:10px;
  overflow:hidden;
  z-index: 1;
  background-color:#a18aaa;
  text-align:center;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-right: 10px;
  padding-left: 10px;
letter-spacing: 2px;
}
  
#headerlink{
    text-decoration: none;
 text-shadow: 2px 2px 10px grey;
 margin:auto;
 margin-bottom:1%;
 border-radius:25px;
 background-color:#a18aaa;
 width:20%;
 color:white;

}


  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }

#about {
    

    padding:2%;          
}

#newscontainer{
    font-family: Arial, Helvetica, sans-serif;
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #f2f2f2;
  color: black;
 
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .nav-tabs li a {
    color: black;
  }
 
 
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: black;
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
    color: black !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #555;
    background-color: black !important;
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
  border-top: 3px solid #555;
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
/* Solid border */
hr.solid {
  border-top: 3px solid black;
}

  footer {
    background-color: black;
    overflow: hidden;
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
  

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;

        padding: 15px;     }
      .row.content {height:auto;} 
    }
  </style>


<?php 

if (isset($_SESSION["StudentId"])){ ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top" style="background-color:black;">
  
  <div class="navbar-header">
    <!--Creating toggle bar-->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"  style="background-color:black;">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
    <span> 
      <a class="navbar-brand" href="#myPage" style=" background-color: #555; width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar"  style="background-color:black;">
    <ul class="nav navbar-nav navbar-right ">
      <li><a href="index.php">HOME</a></li>
      <li><a href="Events.php">EVENTS</a></li>
      <li><a href="News.php">NEWS</a></li>
      <li><a href="profile.php">PROFILE</a></li> 
<li class="nav-item dropdown dropdown-slide">
        <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
          <!-- Dropdown list -->
          <div class="dropdown-menu" style="background-color:#777;">
            
            
            <a class="dropdown-item" href="makearequest.php" style="display:block;">-Make a Request</a>
            <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQs</a>
            <a class="dropdown-item" href="logout.php" style="display:block;">-Log Out</a>  
          </div>
      </li>
    </ul>
  </div>

</nav><?php } else { ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top"  style="background-color:black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"  style="background-color:black;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span> 
      <a class="navbar-brand" href="#myPage" style=" width: 160px;">
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
          <a class="nav-link" href="#" data-toggle="dropdown"><span>&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color:#777;">
              <a class="dropdown-item" href="http://localhost/SP/assets/signup.php" style="display:block;">-Sign Up</a>
              <a class="dropdown-item" href="http://localhost/SP/assets/loginpage.php" style="display:block;">-Log In</a>
              <a class="dropdown-item" href="makearequest.php" style="display:block;">-Make a Request</a>
              <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQs</a>
 
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php }
?>
</div>
</div>


<body>


   


  <div class="jumbotron" style="background-color:black;">
<br><br>
<span style="display:inline-block;">
<h2 style="background-color:WHITE;color:black; writing-mode: vertical-rl;text-shadow: 2px 2px 10px grey;">&nbsp; WE CARE &nbsp;</h2> 

</span>

  <span style="display:inline-block;" >
  <h2 style="letter-spacing:5px;color:white; text-shadow: 2px 2px 10px black; top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);"> ABOUT YOUR </h2>  
  
  
  <h2  class="txt-rotate"
     data-period="2000"
     data-rotate='[ "HEALTH", "FITNESS"]' style="letter-spacing:20px;color:	white; text-shadow: 2px 2px 10px black;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);"></h2>  
  </span>



 </div>
      

 <div id="fixed"> 
 
 
 <a href="signup.php" target="_blank" id="headerlink"  >Join Now</a></div>

 <div class="container-fluid" >

 <div class="col-md-9" >
<h2 style="padding:1%;letter-spacing:2px;color:#a18aaa;">ABOUT JUWSP</h2>
 <p style="padding:1%; text-align: justify; text-justify: inter-word;color:balck; "> To promote physical activities and healthy environment, JUW is facilitating its students with different sport activities in their leisure time. A qualified sport instructor is there to guide and train students for different types of inter-faculty tournaments.

The sports club organizes sports festivals almost in every semester. Students from all faculties (Science, Arts, Business Administration and Pharmacy) show keen interest and actively participate in different games of the festival.</p>
  
</div>

<div class="col-xs-2" ></div><!--col in mobile-->
<div class="col-md-3 col-xs-8" >

<img src="images/pagelogo.jpg" style="width:100%;">
</div><!--col end-->

<div class="col-xs-2" ></div><!--col in mobile-->
  </div><!--container end-->
<br>

  <div class="container-fluid" style="background-color:#c7c1bf;" >
    <div class="row g-10">
    <div class="col-md-12 col-xs-12 col-lg-12">
    <h2 style="padding-left:1%;letter-spacing:2px;color:white;margin-bottom: 1%;">LATEST NEWS</h2>
  <br>
  </div><!--col end-->
  
    
     </div><!--row end-->
   
   
     <?php include "databaseconnect.php"; 
               
               $result = mysqli_query($conn,"SELECT * FROM news  ORDER BY NEWSID DESC limit 2");
       
               while($row = mysqli_fetch_array($result)){
               
                  ?>


<div class="container-fluid"  style="margin-bottom: 1%;" >
     
     <div class="row "  >
<div class="col-md-12 col-xs-12 col-lg-12" style="padding-bottom:20px;">
<h4 style="letter-spacing:2px;color:black;text-decoration:underline;"> <?php echo $row['Header'];?></h4>
    
    <span style="display: inline-block;">
    <h5  style="color:rgb(94, 87, 87);"></h5>
    </span>
    <h5 style="color:#3b3837;letter-spacing:1px; text-align: justify; text-justify: inter-word;"><?php echo $row['NewsDetail'];?></h5>
    <h6 style="text-align:right;"><strong>Posted On:</strong> <?php echo $row['PostDate'];?> </h6>

</div> <!--col end-->


</div> <!--row end-->
</div> <!--container end-->

<?php } ?>
</div> <!--container end-->



<!--code for event glimpse-->

<!--glimpse end-->

<div class="container-fluid ">
    <div class="row">
    
</div><!-- row end -->

</div><!-- container end -->


</body>
<!-- Footer -->

<footer >

<p style="text-align:center;">&copy;  2021 JUWSP.com.All rights reserved.</p>
</footer>




</html>
