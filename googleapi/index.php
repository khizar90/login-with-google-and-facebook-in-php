<?php

require_once 'function/function.php';
require_once 'config.php';
require_once 'vendor\autoload.php';

$register = new Register();
if(isset($_POST['submit'])){
    $result = $register->registration($_POST["fname"],$_POST["user_email_address"]);
    if($result == 1){
        echo "<script>alert('Register Suceesfully');</script>";
    }
   
}

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

   $_SESSION['user_first_name'] = $data['given_name'];

   $_SESSION['user_last_name'] = $data['family_name'];

   $_SESSION['user_email_address'] = $data['email'];

   $_SESSION['user_gender'] = $data['gender'];

   $_SESSION['user_image'] = $data['picture'];

   $result = $register->registration($data['given_name'],$data['email']);
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<button><a href="'.$google_client->createAuthUrl().'">Login With Google</a></button>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <link rel="stylesheet" type="text/css" href="loginwithfacebook/css/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <div class="panel panel-default">
   <?php
   if($login_button == '') {?>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <a class="navbar-brand" href="<?php echo BASE_URL; ?>">HOME</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="https://studio.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw"><i class="fa fa-youtube"> YouTube Chennal</i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://www.facebook.com/ahmadlogs"><i class="fa fa-facebook">acebook</i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://github.com/ahmadlogs/"><i class="fa fa-github"> GitHub</i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>    
		</ul>
	  </div>  
	</nav>
    <h1> <center>you login with google<center></h1>
    <div class="container" style="margin-top:30px">
	  <div class="row">
		<div class="col-sm-2">
		  <h2>About Me</h2>
		  <h5>Profile Picture:</h5>
		  <div class="fakeimg"><?php echo $_SESSION["user_image"]?></div>
          <!-- echo $_SESSION["user_image"] -->
		  <!-- echo $_SESSION['fb_user_pic']; -->
		  <hr class="d-sm-none">
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-8">


		  <h3>User Info</h3>
		  <ul class="nav nav-pills flex-column">
			<li class="nav-item">
			  <!-- <a class="nav-link" >Facebook ID: <?php echo  $_SESSION[""]; ?></a> -->
			</li>
			<li class="nav-item">
			  <a class="nav-link">Full Name: <?php echo $_SESSION['user_first_name'].' '.$_SESSION['user_last_name']; ?></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link">Email: <?php echo $_SESSION['user_email_address']; ?></a>
			</li>
		  </ul>
		  
		</div>
	  </div>
	</div>
    <?php }?>
   
    
    <!-- echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    require_once 'C:\xampp\htdocs\learnPHP\loginwithfacebook\index.php';
    echo '<h3><button><a href="logout.php">Logout</button></h3></a></div>';
   }
   ?> -->
   </div>
  </div>
 </body>
</html>

