<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Help Desk</title>

   <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <link href="../css/dashboard.css" rel="stylesheet">

   <script src="../js/ie-emulation-modes-warning.js"></script>

 </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage  Notification</a></li>
            <li><a href="index.php?page=add_faculty"><span class="glyphicon glyphicon-user"></span>Register Mangers</a></li>
      
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Manage Manager's</a></li>
       <li><a href="index.php?page=res"><span class="glyphicon glyphicon-envelope"></span>Sent Queries to Managers</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="add_faculty")
      {
        include('registrationf.php');
      
      }
            if($page=="response")
      {
        include('res_stu.php');
      
      }

      if($page=="res")
      {
        include('snt_fal.php');
      
      }
      

      if($page=="delete_user")
      {
        include('delete_user.php');
      
      }
      
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			if($page=="delete_user")
      {
        include('delete_user.php');
      
      }
      
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
		  }
		  
		  else
		  {
		  ?>		  
		  <h1 class="page-header">Dashboard</h1>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
		  
		  <?php } ?>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/vendor/holder.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>