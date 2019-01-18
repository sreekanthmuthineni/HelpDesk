<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Help Desk</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Help Desk</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
 	</ul>
<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=login1" style="color: blue"><span class="glyphicon glyphicon-user"></span>Manager Login</a></li>
      <li><a href="index.php?option=login"style="color: blue"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>
    </ul>
</div>
</nav>	
<div class="container-fluid">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.mmm.edu/live/image/gid/47/width/1080/height/400/crop/1/11633_students.rev.1472489473.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="http://www.collegepond.com/wp-content/uploads/2012/05/4.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="https://www.jacobs-university.de/sites/default/files/styles/headerimage_big/public/images/summer_camps.jpg?itok=CpdMZFLl" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="login")
			{
			include('login.php');
			}
		else if($opt=="login1")
			{
			include('login1.php');
			}
		else if($opt=="contact1")
			{
			include('registrationf.php');
			}
		
		}

		else
		{
		echo "<h2>Welcome to Online Help Desk</h2> 
		";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body">
    this is the best website
	you can search anything here
about the campus
  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>