
<html>
<head>

<title>Admin/Edit Events</title>

<link rel="shortcut icon" href="images\pagelogo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>



$(document).ready(function(){

  
    
  
$('#eventadd').click(function(e){

    var newstable = document.getElementById ("newstable");
    newstable.refresh ();
  e.preventDefault();

  $("#eventadd").attr("disabled", false);

  var eventname = $("#eventname").val();
  var eventdetail = $("#eventdetail").val();
  
  

if(eventname!="" && eventdetail!="" ){
    
$("#eventadd").attr("disabled", true);

/

  
  $.ajax({
      type: "POST",	
      url: "insertevent.php",
      dataType: "json",
      data: {eventname:eventname, eventdetail:eventdetail},
      cache:false,
     
      success : function(data){
        var data = JSON.parse(data);
          if (data.code == "200"){
        
            $("#eventadd").removeAttr("disabled");
           
                        $('#addnewsform').find('input:text').val('');

           
      
      }}
     
          });
          
        
            }

      
else {


 if(eventname==""){
 var n=document.getElementById("eventname")
 n.style.borderColor="red";
 n.style.border="1px";
 n.style.borderStyle="solid";
 n.style.backgroundColor="#FFE4E1";
 
}

 if(eventdetail==""){
 var m=document.getElementById("eventdetail");
 m.style.borderColor="red";
 m.style.border="1px";
 m.style.borderStyle="solid";
 m.style.backgroundColor="#FFE4E1";
}
        

 
}
  
         
});


var newstable = document.getElementById ("newstable");
    newstable.refresh ();


    
  });



</script>
</head>

<style>
  #newstable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  box-shadow: 0 1px 1px rgba(0,0,0,0.12), 
              0 2px 2px rgba(0,0,0,0.12), 
              0 4px 4px rgba(0,0,0,0.12), 
              0 8px 8px rgba(0,0,0,0.12),
              0 16px 16px rgba(0,0,0,0.12);

}

#newstable td, #newstable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#newstable tr{background-color: #f2f2f2;}

#newstable tr:hover {background-color: #ddd;}

#newstable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:#a18aaa;
  color: white;

}

td:nth-child(1) {
  width: 10%px;
  text-align: center;

  }

/* the second */
td:nth-child(2) {
  width: 20%;
 color:#e60000;
 text-align: center;
 
}

/* the third */
td:nth-child(3) {
  width: 40%;
  text-align: justify;
  text-justify: inter-word;
 
 }

 /* the fourth*/
td:nth-child(4) {
  width: 15%;
 
  text-align:center;
 
 }
 /* the fifth*/
 td:nth-child(5) {
  width: 15%;
  text-align:center;
  
 
 }
 .newstable button {
		cursor: pointer;
    display: inline;
     margin:auto;
		min-width: 24px;
 
    }    
	
  
    

.rsidebar {
 
 background-color: white;
 height: 100%;
 width: 933px;
 position: fixed;
 z-index: 1;
 top:0;
 right: 0;
 font-family: Montserrat, sans-serif;
 overflow-x: hidden;
 padding-top: 16px;
}
.sidebar {
 
  background-color: #555;
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top:0;
  left: 0;
  font-family: Montserrat, sans-serif;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  display: block;
  transition: all 0.3s ease;
  color: white;  
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  letter-spacing: 2px;
}

.sidebar a:hover {
  background-color: #000;
}


.active {
  background-color: #a18aaa;
}
@media screen and (max-height: 450px) {
  .sidebar .rsidebar{padding-top: 15px;}
  .sidebar .rsidebar a {font-size: 10px;}
  .rsidebar{ width:340;}
}
h5{color:grey;}

.opacity-5 {
  opacity: 0.5; }

    .card .card-body {
    padding: 1.88rem 1.81rem; }
  .card-action a {
    display: inline-block;
    color: #fff;
    border-radius: 50%; }
    .card-action a:not(:last-child) {
      margin-right: 4px; }
    .card-action a i, .card-action a span {
      font-size: 12px; }

      
.card-columns .card {
  margin-bottom: 0.75rem; }
    .gradient-1, .dropdown-mega-menu .ext-link.link-1 a, .morris-hover, .datamaps-hoverover {
  background-image: linear-gradient(230deg, #759bff, #843cf6); }

.gradient-2, .dropdown-mega-menu .ext-link.link-3 a {
  background-image: linear-gradient(230deg, #fc5286, #fbaaa2); }

.gradient-3, .dropdown-mega-menu .ext-link.link-2 a, .header-right .icons .user-img .activity {
  background-image: linear-gradient(230deg, #ffc480, #ff763b); }

.gradient-4, .sidebar-right .nav-tabs .nav-item .nav-link.active::after, .sidebar-right .nav-tabs .nav-item .nav-link.active span i::before {
  background-image: linear-gradient(230deg, #0e4cfd, #6a8eff); }

  .eemail {
    color: red;
}
  .emsg {
    color: red;
}
.hidden {
     visibility:hidden;
}
  
  .text-white{color:white;}
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
 


<nav class="navbar main-nav  navbar-default navbar-fixed-top">
  
    <div class="navbar-header">
      <!--Creating toggle bar-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<span> 
      <a class="navbar-brand" href="admin.php" style=" background-color: #555; width: 160px;">
      <img src="images\pagelogo.jpg" alt="logo" width="32" height="28" style="display:inline-block; border-radius: 50%;">
      JUWSP</a> </span>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Events.php">EVENTS</a></li>
        <li><a href="News.php">NEWS</a></li>
     
<li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">&#x25BC;</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu" style="background-color:#777;">
              
              <a class="dropdown-item" href="logout.php" style="display:block;">-Log Out</a>
              
           
            </div>
        </li>
      </ul>
    </div>

</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-3 ">
<div class="sidebar">

<br><br>
<a  href="admin.php"><i class="fa fa-home"></i> Dashboard</a> 
  <a  class="active" href="admin_eventsedit.php"><i class="fa fa-calendar"></i> Edit Events</a> 
  <a  href="admin_newsedit.php"><i class="fa fa-edit"></i> Edit News</a>
  <a href="admin_requests.php"><i class="fa fa-envelope"></i> Requests</a> 
  <a href="admin_participants.php"><i class="fa fa-address-book"></i> Users</a> 
  <a href="admin_feedback.php"><i class="fa fa-comments"></i> Feedback & Complaints</a> 
</div>
</div>

        <div class="col-xs-9 ">
            <div class="rsidebar">
                <br><br>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Add Events</a></li>
              
                    <li><a data-toggle="tab" href="#settings">Uploaded Events</a></li>
                  </ul>
    
                  
              <div  class="tab-content">
                <div class="tab-pane active" id="home" style="background-color: white;">
                    
                    <form action="insertevent.php" method="POST" name="addnewsform"  id="addnewsform">

                          <div class="form-group" style="background-color: #d5d5d5;" >
                            
                              <div class="col-xs-6" >
                                

                                 <h4><strong>Main Heading</strong></h4>
                                 <input style="border-radius:25px;" type="text" id="eventname"  name="eventname" class="form-control" placeholder="News Header" >
                                 <h4><strong>Brief Text</strong></h4>
                                  <input style="border-radius:25px;" type="text" id="eventdetail"  name="eventdetail" class="form-control" placeholder="Write the brief news" >
                                  <button  id="eventadd" style="background-color: #a18aaa;border-radius:25px;margin-left: 2%;margin-top: 4%;" class="btn btn-lg btn-success" type="submit" name="save"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                      
                          
                                </div>
    
                          </div>
                             
                          </div>
                         </form>  
                          
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                             
                          </div>
                         
              
                          
                  
                 </div><!--/tab-pane-->
                
                 <div class="tab-pane" id="settings"  >
                        
    
                     
                      <form  class="form" method="post" id="setting" >
                        
                          <div class="form-group" >
                        
                              <div class="col-xs-12" style="overflow-x:auto;overflow-y:auto;">
                                 <h2>Events</h2>
                             
                                  <table id="newstable" >
                                 <tr>
                                 <th>S.No</th>
                                <th>Event Name</th>
                                <th>Event Details</th>
                                <th>Post Date</th>
                                <th>Post Time</th>
                                 </tr>
               <?php include "databaseconnect.php"; 
               
               $result = mysqli_query($conn,"SELECT * FROM events");
               for ($x = 1; $x <= 10; $x++) {
               while($row = mysqli_fetch_array($result)){
               
                  ?>
                                 <tr>
                                 <td><?php echo $x;?></td>
                                    <td><?php echo $row['EventName'];?></td>
                                    <td><?php echo $row['EventDetail'];?></td>
                                   
                                    <td><?php echo $row['PostDate'];?></td>
                                    <td><?php echo $row['PostTime'];?></td>
                                    
                               </tr>
                                     <?php $x++;}} ?>
                                     
							              
                          </table> 
                          <br>
               </div>
                      </form>
                  </div><!--/tab-pane-->
              </div><!--/tab-content-->
    </div>
            </div><!--/col-9-->
            
        </div><!--/row-->
            </div>

</div></div>
</div>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" >



</body>


</html>                                                      