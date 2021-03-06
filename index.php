<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>IT Infrastructure Management - CIO's Desk</title>
  <!-- CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    


    <style>
     *{margin: 0px; padding: 0px; font-size: 15px; list-style: none}
        html, body{ background-color: #16F5E8; width: 100%; height:100%; position: relative;}
        .header{ height:20%; background:blue; }
/*        .footer{ height:35%; background:blue;bottom:0; position: absolute; width: 100%}*/
        

@media only screen and (max-width: 600px) {
  .hide-on-med-and-down {
    display: none !important;
  }
  .page-footer {
/* margin-top: 2%;*/
    
 bottom:0;
 position: absolute;
 width: 100%;    
/*  padding-top: 20px;*/
  color: #fff;
/*  background-color: #ee6e73;*/
}    
}


    </style>    
    
</head>
    
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
}
?>    
<body>
<nav class="dark-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">IIM Logo</a>
      <ul class="right hide-on-med-and-down">
        <li style="padding-right: 10px; font-size: 30px;"><button type="button" class="btn btn-info " > <a href="Register.html" style="padding: 2%">Register</a></button></li> 
          <li><button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"> Login</button></li>
        
      </ul>

      <ul id="nav-mobile" class="sidenav" >
        <li><button type="button" class="btn btn-info " > <a href="Register.html">Register</a></button></li> 
          <li><button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Login</button></li>
       
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div> 
  </nav>
    
         <!-- Trigger the modal1 with a button -->
 <div class="modal fade" id="myModal" style="width: 70%; height: 35%" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; font-style: bold; color: blue">Login As A</h4>
        </div>
        <div class="modal-body" >
            <span class="btn btn-info btn-lg" >Chief Executive Officer</span> &nbsp;&nbsp;
            <span class="btn btn-info btn-lg"> <a href="#modal-2" data-toggle="modal" data-dismiss="modal" style="color: brown">Chief Information Officer</a></span>    &nbsp;&nbsp;
          <span class="btn btn-info btn-lg">Human Resources</span>  &nbsp;&nbsp;  
            <span class="btn btn-info btn-lg"><a href="login.html" style="color:brown">Dev Team</a></span>    
        </div>
        <div class="modal-footer">
<!--          <button type="button" class="btn btn-default" data-dismiss="modal" style="color: blue; margin-left: 40%; position: ">Close</button>-->
        </div>
  </div>
    
             <!-- Trigger the modal2 from modal1 -->
 <div class="modal fade" id="modal-2" style="width: 40%; height: 55%" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; font-style: bold; color: blue">Login </h4>
        </div>
        <div class="modal-body" >
            <form action="login.php" method="POST">
           <input type="text" class="form-control" name="email" placeholder="Email id or Phone number" required="required"> </br>
           <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            <span style="padding-left:30%"><button name="login" class="btn btn-info btn-lg" >Submit</a></button> &nbsp;&nbsp; &nbsp;&nbsp; <button name="Cancel" class="btn btn-info btn-lg">Cancel</button></span>
            </form>
            
        </div>
        <div class="modal-footer">
            <a href="#modal-4" data-toggle="modal" data-dismiss="modal">Forget Passwod</a>
        </div>
  </div>
    
  <!-- Trigger the modal3 from modal2 -->
 <div class="modal fade" id="modal-3" style="width: 30%; height: 45%" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; font-style: bold; color: blue"> OTP Verification </h4>
        </div>
        <div class="modal-body" >
            <form accesskey="">
           <input type="text" class="form-control" name="OTP" placeholder="One Time Password" required="required"> </br>
           
            <span style="padding-left:30%"><button name="submit" class="btn btn-info btn-lg" >Verify</button> &nbsp;&nbsp; &nbsp;&nbsp; </span>
            </form>
            
        </div>
        <div class="modal-footer">
          <a href=""> Didn't Receive the OTP</a>
        </div>
  </div>
        

 <!-- Trigger the Forgetpassword from modal1 -->
 <div class="modal fade" id="modal-4" style="width: 35%; height: 45%" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; font-style: bold; color: blue"> Forget Password </h4>
        </div>
        <div class="modal-body" >
            <form accesskey="">
           <input type="email" class="form-control" name="email" placeholder="Enter the Email Id" required="required"> </br>
           
            <span style="padding-left:30%"><button name="submit" class="btn btn-info btn-lg" >Submit</button> &nbsp;&nbsp; &nbsp;&nbsp; </span>
            </form>
            
        </div>
        <div class="modal-footer">
<!--          <a href=""> Didn't Receive the OTP</a>-->
        </div>
  </div>

    
    
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel1" data-slide-to="4"></li>
    </ul>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/cio1.jpg" alt="CIO1">
        <div class="carousel-caption">
          <h3>IT Infrastructure Management</h3>
          <p> IT Environment</p>
        </div>
      </div>

      <div class="item">
        <img src="img/cio2.jpg" alt="CIO2">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/cio3.jpg" alt="CIO3">
        <div class="carousel-caption">
<!--          <h3>IT Infrastructure Management</h3>-->
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="img/cio4.jpg" alt="CIO4" >
        <div class="carousel-caption">
<!--          <h3>IT Infrastructure Management</h3>-->
          <p></p>
        </div>
      </div>
      <div class="item">
        <img src="img/cio5.jpg" alt="CIO5" >
        <div class="carousel-caption">
<!--          <h3>IT Infrastructure Management</h3>-->
          <p></p>
        </div>
      </div>    
        
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    </div>
  </div>


  <footer class="page-footer " style="background-color: #0904FF">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Project IIM</h5>
          <p class="grey-text text-lighten-4">This project is being developed for codegiest hackathon. All tasks, progress and features are aligned to fit within this deadline.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Register</a></li>
            <li><a class="white-text" href="#!">Login</a></li>
            
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Fb</a></li>
            <li><a class="white-text" href="#!">Github</a></li>
            <li><a class="white-text" href="#!">LinkedIn</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
     <a class="orange-text text-lighten-3" href="https://github.com/" target="_blank">Developed by IIM Team</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
