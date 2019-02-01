<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php include('config.php'); 
include('timetime.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Routine::Exam Hall Manager</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="bootstarap/css/bootstrap.css" type="text/css">
    <link rel="icon" href="images/tf.png" type="image/png" sizes="16x16">
    <script src="bootstarap/js/jquery-3.0.0.min.js"></script>
    <script src="bootstarap/js/bootstrap.min.js"></script>
	<script>
		function confirm_delete() {
			return confirm('Are you sure want to delete this data?');
		}
	</script>
	
  </head>
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
		<li class="active"><a href="routine_view.php">ROUTINE</a></li>
        <li><a href="summary_view.php">SUMMARY</a></li>
        <li ><a href="details_view.php">DETAILS <span class="sr-only">(current)</span></a></li>
		<li><a href="view.php">VIEW</a></li>
      </ul >
	  <ul class="nav navbar-nav navbar">
		<form class="navbar-form" role="search" action="" method="post">
			<div class="input-group">
			<?php date_default_timezone_set("Asia/Dhaka");?>
			  <input class="form-control" type="date" name="date_search" value="<?php echo date("Y-m-d");?>" id="example-date-input">
			 </div>
			 <div class="input-group add-on">
				<input class="form-control" type="time" name="time_search" value="<?php echo date("h:i");?>" id="example-time-input">
			  <div class="input-group-btn">
				<button class="btn btn-default" type="submit" name="search"><i class="glyphicon glyphicon-search"></i></button>
			  </div>
			</div>
		  </form>
	  </ul>
      <ul class="nav navbar-nav navbar-right">
			<li><a href="insert_routine.php" class="btn btn-xm pull-right" title = "Add routine"><span class="glyphicon glyphicon-plus"></span></a></li>
            <li><a href="settings.php" class="glyphicon glyphicon-cog" title="Settings"> </a></li>
            <li><a href="logout.php" class="glyphicon glyphicon-log-out" title="Log Out"></a></li>
            <li role="separator" class="divider"></li>
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
	<div class="row">
	<!-- lEFT LIST START -->
			<nav class="navbar navbar-default sidebar" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>      
					</div>
					<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li ><a href="index.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="room_status.php">Room Status<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="course_wise_registration.php">Registration<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li  class="active"><a href="routine_view.php">Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="summary_view.php">Summary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="batch_info.php">Batch<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li> <a href="insert_batch_info.php">Insert Batch <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>
						<li > <a href="insert_room_info.php">Insert room <span style="font-size:28px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
						<li ><a href="insert_routine.php">Insert Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a></li>        
						<li ><a href="insert_course_info.php">Insert Courses<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="#">Log off<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
					  </ul>
					</div>
				</div>
			</nav>
			
			<div class="col-md-9 col-sm-4">
			
				<?php
			if(isset($_POST['search'])) {
				//$i=0;
				//$s = $db->prepare("select distinct date from tb_routine where date="$_POST['date_search']"");
				//$s = $_POST['date_search'];
				//$s->execute();
				//$r = $s->fetchAll(PDO::FETCH_ASSOC);
				//foreach($r as $row)
				//{ 
				$d = $_POST['date_search'];
				$t = $_POST['time_search'];
				
				?>
				<div class="panel panel-default">
				<div class="panel-heading"><b>Date: <?php echo $d?> Start Time: <?php echo $t?> </b>	</div>
				<div class="panel-body">
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="width: 100px;">Start Time</th>
							<th style="width: 80px;">Slot</th>
							<th style="width: 100px;">Course ID</th>
							<th style="width: 350px;">Course Title</th>
							<th style="width: 70px;">Batch</th>
							<th style="width: 100px;">Action</th>
						</tr>
					</thead>
				<?php
				$i=0;
				$st_time = $db->prepare("select * from tb_routine where date=? and start_time=? order by course_id asc");
				$st_time->execute(array($d,$t));
				$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
				foreach($r_time as $row_time)
				{
				?>					
					<tbody>
						<tr>
							<td style="width: 100px;"><?php $timeampm = ampmtime($row_time['start_time']); echo $timeampm; ?></td>
							<td style="width: 80px;"><?php echo $row_time['slot']; ?></td>
							<td style="width: 100px;"><?php echo $row_time['course_id']; ?></td>
							<td style="width: 350px"><?php echo $row_time['course_title']; ?></td>
							<td style="width: 70px;"><?php echo $row_time['batch_no']; ?></td>
							<td>
							<a href="insert_routine_add.php?id=<?php echo $row_time['ID'];?>" class="btn btn-xs btn-default" title = "Add" ><span class="glyphicon glyphicon-plus"></span></a>
							<a href="update_routine.php?id=<?php echo $row_time['ID'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil" title = "Edit"></span></a>
							<a onclick="return confirm_delete();" href="delete_routine.php?id=<?php echo $row_time['ID']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" title = "Delete"></span></a>
							</td>
						</tr>
					</tbody>
					<?php 
					} ?> 
				</table>
				</div>
				</div>
				</div>
				<?php 
				}else {
				$i=0;
				
				$s = $db->prepare("select distinct date from tb_routine order by date asc");
				$s->execute();
				$r = $s->fetchAll(PDO::FETCH_ASSOC);
				foreach($r as $row)
				{ 
				$d = $row['date'];
				?>
				<div class="panel panel-default">
				<div class="panel-heading"><b>Date: <?php echo $d?> </b></div>
				<div class="panel-body">
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="width: 120px;">Start Time</th>
							<th style="width: 80px;">Slot</th>
							<th style="width: 120px;">Course ID</th>
							<th style="width: 300px;">Course Title</th>
							<th style="width: 120px;">Batch</th>
							<th style="width: 100px;">Action</th>
						</tr>
					</thead>
				<?php
				$i=0;
				
				$st_time = $db->prepare("select * from tb_routine where date=? order by start_time asc, course_id asc");
				$st_time->execute(array($d));
				$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
				foreach($r_time as $row_time)
				{
				?>					
					<tbody>
						<tr>
							<td style="width: 120px;"><?php $timeampm = ampmtime($row_time['start_time']); echo $timeampm; ?></td>
							<td style="width: 80px;"><?php echo $row_time['slot']; ?></td>
							<td style="width: 120px;"><?php echo $row_time['course_id']; ?></td>
							<td style="width: 300px"><?php echo $row_time['course_title']; ?></td>
							<td style="width: 120px;"><?php echo $row_time['batch_no']; ?></td>
							<td>
							<a href="insert_routine_add.php?id=<?php echo $row_time['ID'];?>" class="btn btn-xs btn-default" ><span class="glyphicon glyphicon-plus" title = "Add"></span></a>
							<a href="update_routine.php?id=<?php echo $row_time['ID'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil" title = "Edit"></span></a>
							<a onclick="return confirm_delete();" href="delete_routine.php?id=<?php echo $row_time['ID']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" title = "Delete"></span></a>
							</td>
						</tr>
					</tbody>
					<?php 
					} ?>
				</table>
				</div>
				</div>
				<?php 
				}
				} ?>
			</div>	
			
	</div>
	<!-- ENDOF LEFT LIST-->
		<!-- Overlay effect when opening sidenav on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

         <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px">

            
        </div>
        </div>
		</div>
    </div>
  </div>
</body>
</html>