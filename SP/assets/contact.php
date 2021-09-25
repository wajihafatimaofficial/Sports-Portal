<?php 
    
    include("loginprocess.php");   
?>




<html>
<head>
<title>Contact Us</title>
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
src="email-validation.js"
  
 $(document).ready(function(){
  var $mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  $('#email').on('keypress keydown keyup',function(){
             if (!$(email).val().match($mailformat)) {
              // there is a mismatch, hence show the error message
                 $('.eemail').removeClass('hidden');
                 $('.eemail').show();
             }
           else{
                // else, do not display message
                $('.eemail').addClass('hidden');
               }
         });
  $('#submit').click(function(e){
  
        e.preventDefault();
    
        $("#submit").attr("disabled", false);
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var message = $("#message").val();

        

if(name!="" && email!="" && msg_subject!="" && message!=""){
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var check=document.getElementById("email");
  if(check.value.match(mailformat)){
          
  $("#submit").attr("disabled", true);
  window.location.replace("Response.php");
        $.ajax({
            type: "POST",	
            url: "insert.php",
            dataType: "json",
            data: {name:name, email:email, msg_subject:msg_subject, message:message},
            cache:false,
           
            success : function(data){
              var data = JSON.parse(data);
                if (data.code == "200"){
              
                  $("#submit").removeAttr("disabled");
                 
						      $('#contactForm').find('input:text').val('');
    
                 
            
            }}
                });
              }
            


            else{
              var email_alert=document.getElementById("email_alert");
           
                if (email_alert.style.display === "none") {
                  email_alert.style.display = "block";}
          
          }  }
else {
  
  var x = document.getElementById("alert");
  if (x.style.display === "none") {
    x.style.display = "block";

       if(name==""){
       var n=document.getElementById("name")
       n.style.borderColor="red";
       n.style.border="1px";
       n.style.borderStyle="solid";
       n.style.backgroundColor="#FFE4E1";
       
      }
  
      if(email==""){
       var e=document.getElementById("email");
       e.style.borderColor="red";
       e.style.border="1px";
       e.style.borderStyle="solid";
       e.style.backgroundColor="#FFE4E1";}
  
      if(msg_subject==""){
       var s=document.getElementById("msg_subject");
       s.style.borderColor="red";
       s.style.border="1px";
       s.style.borderStyle="solid";
       s.style.backgroundColor="#FFE4E1";}
      
       if(message==""){
       var m=document.getElementById("message");
       m.style.borderColor="red";
       m.style.border="1px";
       m.style.borderStyle="solid";
       m.style.backgroundColor="#FFE4E1";
      }
              
    
       
  }
		}
               
  });
  
 
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

label{color:rgb(48, 44, 44);}
 .active{color: white;
 background-color:grey;}

.eemail {
    color: red;
}
 
.hidden {
     visibility:hidden;
}
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
    color: black !important;
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
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container">
<div class="row">
<?php 

if (isset($_SESSION["StudentId"])){ ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top" style="background-color:black;">
  
  <div class="navbar-header">
    <!--Creating toggle bar-->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"style="background-color:black;">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
    <span> 
      <a class="navbar-brand" href="#myPage" style="  width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right ">
      <li><a href="index.php">HOME</a></li>
      <li><a href="Events.php">EVENTS</a></li>
      <li><a href="News.php">NEWS</a></li>
      <li><a href="profile.php">PROFILE</a></li> 
<li class="nav-item dropdown dropdown-slide">
        <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
          <!-- Dropdown list -->
          <div class="dropdown-menu" style="background-color:#777;">
            
            
            <a class="dropdown-item" href="makearequst.php" style="display:block;">-Make a Request</a>
            <a class="dropdown-item" href="FAQ.php" style="display:block;">-FAQs</a>
            <a class="dropdown-item" href="logout.php" style="display:block;">-Log Out</a>  
          </div>
      </li>
    </ul>
  </div>

</nav><?php } else { ?>
<nav class="navbar main-nav  navbar-default navbar-fixed-top" style="background-color:black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:black;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span> 
      <a class="navbar-brand" href="#myPage" style="  width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Events.php">EVENTS</a></li>
        <li><a href="News.php">NEWS</a></li>
      
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
<?php }
?>
</div>
</div>

<div class="container" >
  <br><br><br>
  <div class="row"  style="background-color: rgb(69, 233, 197);box-shadow: 3px 3px 5px 5px;border-radius: 25px;">
    <h1 style="text-align:center;color:black;">Contact Us</h1>
    <hr>
    <form action="insert.php" method="POST" name="contactform"  id="contactForm">

      <div class="alert alert-danger fade in" id="alert" style="display:none;">
        All fields are required </div>
    
        <div class="alert alert-danger fade in" id="email_alert" style="display:none;">
          <strong>Invalid email!</strong>  Please enter a valid email </div>

  
    <div class="col-sm-6">
      <div class="form-group">
        <div class="controls">
         
          <label>Name</label>
          <input style="border-radius:25px;" type="text"  class="form-control"
          
          
            id='name' name='name' placeholder='Name'
             >
        </div>
      </div>

    </div>   

   <div class="col-sm-6">
    
    <div class="form-group">
      <div class="controls">
        <label>Email</label>
        <input style="border-radius:25px;" required type="text" name="email"  class="email form-control" id="email" placeholder="user@somewhere.com" >
      </div>
    </div>
    <p><span class="eemail hidden">Please enter a valid email</span></p>

  
  
</div>

<div class="col-sm-12">

  <div class="form-group">
    <div class="controls">
      <label>Subject</label>
    
       <select style="border-radius:25px;" id="msg_subject"  name="msg_subject" class="form-control" placeholder="Please enter the subject">
        <option value="" selected disabled hidden>Please select subject</option>        
        <option>Complain</option>
        <option>Feedback</option>
        <option>Other</option>
       
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <label>Message</label>
      <textarea  style="border-radius:25px;" id="message" name="message"  rows="7" placeholder="Please enter your message" class="form-control "></textarea>
    </div>  
  </div>
  
  <div class="col-sm-4"></div>

  <div class="col-sm-4">
    <div class="row">
    <button  style="margin:auto;margin-bottom:2%;border-radius:25px;" type="submit" id="submit" class="btn btn-secondary btn-lg btn-block" value="save" name="save">Submit</button>
  </div>
  
  <br>
  </div>
  <div class="col-sm-4"></div>
  

  </form>
  </div>
</div>

</div>

<!-- Footer -->

<footer >

<p style="text-align:center;">&copy;  2021 JUWSP.com.All rights reserved.</p>
</footer>

</body>

</html>
