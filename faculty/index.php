<?php 
session_start();
include('../connection.php');
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from faculty where email='$user'");
$users=mysqli_fetch_assoc($sql);
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
          <a class="navbar-brand" href="#">Hello <?php echo $users['email'];?></a>
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
            <li class="active"><a href="index.php">Help Desk <span class="sr-only">(current)</span></a></li>
			<?php 
			$q=mysqli_query($conn,"select image from faculty where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here" style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here"  style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=update_profile"><span class="glyphicon glyphicon-user"></span> Update Profile</a></li>
            <li><a href="index.php?page=mng_std"><span class="glyphicon glyphicon-user"></span> Manage Students</a></li>
			 <li><a href="index.php?page=reg_std"><span class="glyphicon glyphicon-user"></span>Register Students</a></li>
      

       <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Notification</a></li>       
       <li><a href="index.php?page=Sent_Queries"><span class="glyphicon glyphicon-envelope"></span>Sent Queries to Admin</a></li>
            <li><a href="index.php?page=chart"><span class="glyphicon glyphicon-envelope"></span>Chart With Managers</a></li>
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
      if($page=="reg_std")
      {
        include('registrationf.php');
      
      }
      if($page=="delete_user")
      {
        include('delete_user.php');
      
      }
      
      if($page=="mng_std")
      {
        include('manage_users.php');
      
      }

      if($page=="update_notice")
      {
        include('update_notice.php');
      
      }
    
			if($page=="notification")
			{
				include('notification.php');
			
			}
    
      if($page=="Sent_Queries")
      {
        include('sent_queries.php');
      
      }
    
      if($page=="chart")
      {
        include('add_notice.php');
      
      }


      if($page=="response")
      {
        include('res_stu.php');
      
      }
      


			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="update_profile_pic")
			{
				include('update_profile_pic.php');
			
			}
		  }
		  else
		  {
		  include('notification.php');
		  ?>
		  <!-- container end-->
		   
		  
		  <h1 class="page-header">Help Desk</h1>
		  
		  
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
