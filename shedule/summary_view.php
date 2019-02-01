<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php include('config.php'); 
include('timetime.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Summary::Exam Hall Manager</title>
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
        <li class="active"><a href="summary_view.php">SUMMARY <span class="sr-only">(current)</span></a></li>
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
						<li class="active"><a href="summary_view.php">Summary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="batch_info.php">Batch<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li> <a href="insert_batch_info.php">Insert Batch <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a> 
						<li> <a href="insert_room_info.php">Insert room <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
						<li ><a href="insert_routine.php">Insert Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a></li>        
						<li ><a href="insert_course_info.php">Insert Courses<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="#">Log off<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
					  </ul>
					</div>
				</div>
			</nav>
			<div class="col-md-9 col-sm-4">
	<!-- ENDOF LEFT LIST-->
		<!-- Overlay effect when opening sidenav on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
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
				$date1 = date_create($d);
				$t = $_POST['time_search'];
				
				?>
				<div class="panel panel-default">
				<div class="panel-heading"><b>Date: <?php echo date_format($date1,'d-m-Y');?> Start Time: <?php echo ampmtime($t);?> </b>	</div>
				<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr class="something">
							<th class="col-md-1">Course Id</th>
							<th class="col-md-3">Course Title</th>
							<th class="col-md-1">Section</th>
							<th class="col-md-1">Reg Stud.</th>
							<th class="col-md-3">Room No.</th>
						</tr>
					</thead>
					<?php
						$i=0;
						$st_time = $db->prepare("select course_id, course_title, batch_no from tb_routine where date=? and start_time=? order by course_id asc");
						$st_time->execute(array($d,$t));
						$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
						foreach($r_time as $row_time)
						{
					?>
					<thead></thead>
					<tbody>
						<tr class="something">
							
							<td class="col-md-1" rowspan = "50"><?php echo $row_time['course_id'];?></td>
							<td class="col-md-3" rowspan = "50"><?php echo $row_time['course_title'];?></td>
							<?php 
							$cid=$row_time['course_id'];
							$batch = $row_time['batch_no'];
							$st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=? order by section asc");
							$st_course->execute(array($cid,$batch));
							$r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
							foreach($r_course as $row_course)
							{
								$section = $row_course['section'];
							?>
							<td class="col-md-1">Sec: <?php echo $row_course['section'];?></td>
							<?php$students=$row_course['std_reg'];?>
							<td class="col-md-1"> <?php echo $row_course['std_reg'];?></td>
							<?php
							    $rooms = "";
								$statement = $db->prepare("select * from tb_room_course_status where date=? and time=?");
								$statement->execute(array($d,$t));
								$result = $statement->fetchAll(PDO::FETCH_ASSOC);
								foreach($result as $row)
								{
									$flag = 1;
									$room_no = $row['room_no'];
									if(strpos($row['c1'],$cid) !== false && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c1'],$section)!== false){
												$flag = 0;
												$rooms = $rooms.$room_no.", ";
											}
										}
									}
									if(strpos($row['c2'],$cid) !== false && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c2'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c3'],$cid) !== false && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c3'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c4'],$cid) !== false && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c4'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c5'],$cid) !== false && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c5'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c6'],$cid) !== false  && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c6'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c7'],$cid) !== false  && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c7'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c8'],$cid) !== false  && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c8'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
									if(strpos($row['c9'],$cid) !== false  && $flag > 0){
										$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
										$statement1->execute(array($d,$t, $room_no));
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1){
											if(strpos( $row1['c9'],$section)!== false){
												$rooms = $rooms.$room_no.", ";
												$flag = 0;
											}
										}
									}
								}
								?>
							<td class="col-md-3"><?php echo $rooms ?></td>
							<tr>
							<?php 
							}
							?>
						</tr>
					</tbody>
				<?php
				$s = $db->prepare("select id from tb_room_column_status where date=? and time=?");
				$s->execute(array($d, $t));
				$res = $s->fetchAll(PDO::FETCH_ASSOC);
				foreach($res as $r)
				{
					$id = $r['id'];
					break;
				}
					}?>
				</table>
				</div>
				</div>
				<?php
				?>
				<form method="post" action="summaryviewpdf.php">
				<div>
				<button for="example-time-input" type="submit" formtarget="_blank" name="pdf" value="<?php echo $id; ?>" class="col-xs-3 btn btn-default">PDF</button>
				</div>
				</form>
				<?php
				} else{
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
						<form method="post" action="summary_view.php">
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
					<form method="post" action="summaryviewpdfall.php">
						<div class="col-md-3">
							<button href="#" type="submit" name="all" formtarget="_blank" class="btn btn-default btn-lg btn-block btn-huge">
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span> Print All</button>
						</div>
					</form>
				</div>	
				<?php }
				?>
				
				<?php
				if(isset($_POST['search_all'])) {
				$d = $_POST['date_search'];
				$s = $db->prepare("select distinct course_id, course_title, batch_no, start_time from tb_routine where date=? order by start_time asc, course_id asc");
				$s->execute(array($d));
				$r = $s->fetchAll(PDO::FETCH_ASSOC);
				foreach($r as $row)
				{ 
				$t = $row['start_time'];
				?>
			
				<table class="table table-striped">
					<tbody>
						<tr>
							<td><b>Date: <?php echo $d?> </b></td>
							<td><b>Start Time: <?php echo $t?> </b></td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="col-md-1">Course Id</th>
							<th class="col-md-3">Course Title</th>
							<th class="col-md-1">Section</th>
							<th class="col-md-1">Reg Stud.</th>
							<th class="col-md-3">Room No.</th>
						</tr>
					</thead>
					<!--</table>
					<table class="table table-bordered">-->
					<thead></thead>
					<tbody>
						<tr>
							
							<td class="col-md-1" rowspan = "50"><?php echo $row['course_id'];?></td>
							<td class="col-md-3" rowspan = "50"><?php echo $row['course_title'];?></td>
							<?php 
							$cid=$row['course_id'];
							$batch = $row['batch_no'];
							$st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=? order by section asc");
							$st_course->execute(array($cid, $batch));
							$r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
							foreach($r_course as $row_course)
							{
							?>
							<td class="col-md-1">Sec: <?php echo $row_course['section'];?></td>
							<?php$students=$row_course['std_reg'];?>
							<td class="col-md-1"> <?php echo $row_course['std_reg'];?></td>
							<?php
								//$i=0;
								//$b_no='DT5';
								//$statement = $db->prepare("select * from tb_rooms where building_no=?");
								//$statement->execute(array($b_no));
								//$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							//	foreach($result as $row)
								//{
								//	$room_no = $row['room_no'];
								//	$statement = $db->prepare("insert into tb_summary (room_no,date, time, sec,c1,c2,c3,c4,c5,c6,c7,c8,c9,course_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
								//	$statement->execute(array($row['room_no'],$_POST['date_search'],$_POST['time_search'],$row_course['section'],$row['col_1'],$row['col_2'],$row['col_3'],$row['col_4'],$row['col_5'],$row['col_6'],$row['col_7'],$row['col_8'],$row['col_9'],$row_time['course_id']));
								?>
							<td class="col-md-3">101AB, 601DT5, 402CSEB</td>
							<tr>
							<?php 
							}
							?>
						</tr>
						</tr>
					</tbody>
				</table>
				<?php
					}
				} ?>
				</div>
         <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px">
            
        </div>
        </div>
		</div>
    </div>
  </div>
</body>
</html>