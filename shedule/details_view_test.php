<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php include('config.php');
include('timetime.php');?>                                                                                                                                                                                                                     <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Details::Exam Hall Manager</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="bootstarap/css/bootstrap.css" type="text/css">
    <link rel="icon" href="images/tf.png" type="image/png" sizes="16x16">
    <script src="bootstarap/js/jquery-3.0.0.min.js"></script>
    <script src="bootstarap/js/bootstrap.min.js"></script>
	
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
		<li><a href="routine_view.php">ROUTINE</a></li>
        <li><a href="summary_view.php">SUMMARY</a></li>
        <li class="active"><a href="details_view.php">DETAILS <span class="sr-only">(current)</span></a></li>
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
						<li ><a href="routine_view.php">Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="summary_view.php">Summary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li class="active"><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="batch_info.php">Batch<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li> <a href="insert_batch_info.php">Insert Batch <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>
						<li > <a href="insert_room_info.php">Insert room <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
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
						$date = $_POST['date_search'];
						$start_time = $_POST['time_search'];
						$date1 = date_create($date);
				?>
				<div class="panel panel-default">
				<div class="panel-heading"><b>Date: <?php echo date_format($date1,'d-m-Y');?> Start Time: <?php $timeampm = ampmtime($start_time); echo $timeampm;?> </b>	</div>
				<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="col-md-1">Dept.</th>
							<th class="col-md-1">Course Code</th>
							<th class="col-md-2">Course Title</th>
							<th class="col-md-1">Teach. Int.</th>
							<th class="col-md-1">Sec.</th>
							<th class="col-md-1">Room No.</th>
							<th class="col-md-1">Seat(s)</th>
							<th class="col-md-1">Total Stu.</th>
						</tr>
					</thead>
					<tbody>
						<tr class="something">
							<th class="col-md-1" rowspan = "500">CSE</th>
							</tr>
							<?php
							$total = 0;
							$spanCount = 0;
							$st_time = $db->prepare("select course_id, course_title, batch_no from tb_routine where date=? and start_time=? order by course_id asc");
							$st_time->execute(array($date,$start_time));
							$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
							foreach($r_time as $row_time)
							{
								$course_id = $row_time['course_id'];
								$course_title = $row_time['course_title'];
								$batch_no = $row_time['batch_no'];
								
							?>
							<td class="col-md-1" rowspan = "100"><?php echo $course_id ;?></td>
							<td class="col-md-2" rowspan = "100"><?php echo $course_title ;?></td>
							<?php
							 $st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=? order by section asc");
							 $st_course->execute(array($course_id,$batch_no));
							 $r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
							 foreach($r_course as $row_course)
							 {
								 $tech_int = $row_course['tech_name'];
								 $section = $row_course['section'];
								 $t_count = $row_course['std_reg'] + 1;
								 $total = $total + $t_count;
							 ?> 
							<td class="col-md-1" rowspan = "5"><?php echo $tech_int; ?></td>
							<td class="col-md-1" rowspan = "5"><?php echo $section; ?></td>
							<?php 
							 $spaner = 0;
							 $st_details = $db->prepare("select room_no, count from tb_details_count where course_id=? and batch_no=? and section=? and date=? and time=? order by section asc");
							 $st_details->execute(array($course_id,$batch_no,$section,$date,$start_time));
							 $r_details = $st_details->fetchAll(PDO::FETCH_ASSOC);
							 foreach($r_details as $row_details)
							 {
								 $room_no = $row_details['room_no'];
								 $count = $row_details['count'];
								 ?>
							<td class="col-md-1" ><?php echo $room_no;?></td>
							<td class="col-md-1" ><?php echo $count;?></td>
							<?php
							if($spaner == 0){ $spaner = 1;
							
							?>
							<td class="col-md-1" rowspan = "5"><?php echo $t_count;?></td>
							<?php
							}?>
							
							<tr>
							<?php } ?>
							<tr>
							</tr>
							<tr>
							<tr>
							<tr>
							<?php 
							}
							for($i = 0; $i <80; $i++){
								echo "<tr>";
							}
							} 
							?>
							<th class="col-md-1" colspan = "6">Total</th>
							<td><?php echo $total;?></td>
						</tr>
					</tbody>
				</table>
				</div>
				</div>
				<?php
				$s = $db->prepare("select id from tb_room_column_status where date=? and time=?");
				$s->execute(array($date, $start_time));
				$res = $s->fetchAll(PDO::FETCH_ASSOC);
				foreach($res as $r)
				{
					$id = $r['id'];
					break;
				}
				?>
				<form method="post" action="detailsviewpdf.php">
				<div>
				<button for="example-time-input" type="submit" formtarget="_blank" name="pdf" value="<?php echo $id; ?>" class="col-xs-3 btn btn-default">PDF</button>
				</div>
				</form>
				<?php
				}else{
					?>
					<div class="container">
					<div class="row">
					<?php
					$count = 0;
					$datetime = $db->prepare("select distinct date, time from tb_room_column_status order by date, time asc");
					$datetime->execute();
					$date_time = $datetime->fetchAll(PDO::FETCH_ASSOC);
					foreach($date_time as $row_date_time)
					{
						$date = $row_date_time['date'];
						$time = $row_date_time['time'];
						$count++;
						$date1 = date_create($date);
						?>
						<form method="post" action="details_view.php">
						<div class="col-md-3">
							<input type="hidden" name="date_search" value=<?php echo $date?> />
							<input type="hidden" name="time_search" value=<?php echo $time?> />
							<button href="#" type="submit" name="search" class="btn btn-default btn-lg btn-block btn-huge">
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span><?php echo " ".date_format($date1,'d-m-Y')." | ".ampmtime($time); ?></button>
						</div>
						</form>
					<?php 
					if($count == 3){?>
						 </div>
						 <div class="row">
						 <?php
						$count = 0;
					}
					} ?>
					<form method="post" action="detailviewpdfall.php">
						<div class="col-md-3">
							<button href="#" type="submit" name="all" formtarget="_blank" class="btn btn-default btn-lg btn-block btn-huge">
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span> Print All</button>
						</div>
					</form>
				</div>	
				<?php }?>
				<!----------------------------------------------------------->
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