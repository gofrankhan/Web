<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exam room sheduler</title>
	<link rel="stylesheet" href="bootstarap/css/bootstrap.css" type="text/css">
	<script src="bootstarap/js/jquery-3.0.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstarap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="images/tf.png" type="image/png" sizes="16x16">
   
  </head>
  <style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
   <script>
	$(document).ready(function () {           
            $('.carousel').carousel();       
        });
	</script>
<body class="w3-light-grey w3-content" style="max-width:1600px">

 <div class="container">
 <div class="row">
  <nav class="navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/tf.png" alt=""></a>
	  <div class="navbar-header">
      <a class="navbar-brand" href="#">Daffodil</a>
	   </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href="room_status.php">ROOM</a></li>
		<li><a href="routine_view.php">ROUTINE</a></li>
        <li><a href="summary_view.php">SUMMARY</a></li>
        <li><a href="details_view.php">DETAILS</a></li>
        <li><a href="view.php">VIEW</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li><a href="settings.php" class="glyphicon glyphicon-cog" title="Settings"> </a></li>
            <li><a href="logout.php" class="glyphicon glyphicon-log-out" title="Log Out"></a></li>
            <li role="separator" class="divider"></li>
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<div class="container">
		  <br>
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="images/students.jpg" alt="students">
			  </div>

			  <div class="item">
				<img src="images/students.jpg" alt="class_room" width="526" height="349">
			  </div>
			
			  <div class="item">
				<img src="images/students.jpg" alt="room" width="526" height="349">
			  </div>

			  <div class="item">
				<img src="images/students.jpg" alt="Exam" width="526" height="349">
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
	<!-- ENDOF LEFT LIST-->
		<!-- Overlay effect when opening sidenav on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

         <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px">

        <div class="col-md-9 col-sm-4">
            
        </div>
        </div>
		</div>
    </div>
  </div>
</body>
</html>