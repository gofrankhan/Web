<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php include('config.php');
ini_set('max_execution_time', 300); 
include('timetime.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Room View::Exam Hall Manager</title>
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
		<li><a href="routine_view.php">ROUTINE</a></li>
        <li ><a href="summary_view.php">SUMMARY <span class="sr-only">(current)</span></a></li>
        <li><a href="details_view.php">DETAILS</a></li>
        <li class="active"><a href="view.php">VIEW</a></li>
      </ul>
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
						<li ><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li class="active"><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
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
				$date = $_POST['date_search'];
				$start_time = $_POST['time_search'];
				 $checkdatetime = $db->prepare("select * from tb_room_column_status where date=? and time=?");
				 $checkdatetime->execute(array($date, $start_time));
					$numdatetime = $checkdatetime->rowCount();
					if($numdatetime<=0){
					?>
					<?php
				
					$st_time = $db->prepare("select distinct course_id, batch_no from tb_routine where date=? and start_time=?");
					$st_time->execute(array($date,$start_time));
					$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
					foreach($r_time as $row_time)
					{
						$std_reg = 0;
						$course_id = $row_time['course_id'];
						$batch_no = $row_time['batch_no'];
						$st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=?");
						$st_course->execute(array($course_id,$batch_no));
						$r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
						foreach($r_course as $row_course){
							$std_reg += $row_course['std_reg'] + 1;
						}
							$statement = $db->prepare("insert into tb_sorting_num_of_student (course_id, num_of_student,batch_no) values(?,?,?)");
							$statement->execute(array($course_id,$std_reg,$batch_no));
					}
					
					?>
				<?php
					$i=0;
					$st_time = $db->prepare("select * from tb_sorting_num_of_student order by num_of_student desc");
					$st_time->execute();
					$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
					foreach($r_time as $row_time)
					{
						$course_id = $row_time['course_id'];
						$batch_no = $row_time['batch_no'];
						$st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=?");
						$st_course->execute(array($course_id, $batch_no));
						$r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
						foreach($r_course as $row_course)
						{
							$course_title = $row_course['course_title'];
							$tech_name = $row_course['tech_name'];
							$section = $row_course['section'];
							$std_reg = $row_course['std_reg'] + 1;
							
							$bp = $db->prepare("select * from tb_building_priority order by level");
							$bp->execute();
							$result_bp = $bp->fetchAll(PDO::FETCH_ASSOC);
							foreach($result_bp as $row_bp){
							
							$bn= $row_bp['building_no'];
							$statement = $db->prepare("select * from tb_rooms where building_no=? order by room_no asc");
							$statement->execute(array($bn));
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach($result as $row)
							{ 
								$room_no = $row['room_no'];
								
							$stat = $db->prepare("select status,bigroom from tb_block_room where room_no=?");
							$stat->execute(array($room_no));
							$resu = $stat->fetchAll(PDO::FETCH_ASSOC);
							foreach($resu as $roww)
							{
								$status = $roww['status'];
								$bigroom = $roww['bigroom'];
       						}
							if($status == 0){
							 if($row['col_1'] > 0 && $std_reg > 0){
												$flag = 1;
										        $checkcol = $db->prepare("select room_no from tb_room_column_status where room_no=? and date=? and time=?");
												$checkcol->execute(array($room_no, $date, $start_time));
												$num = $checkcol->rowCount();
												if($num<=0){
													$bookcol = $db->prepare("insert into tb_room_column_status (room_no, date, time, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?,?,?)");
													$bookcol->execute(array($room_no, $date, $start_time, 0,0,0,0,0,0,0,0,0));
													
													$bookcourse = $db->prepare("insert into tb_room_course_status (room_no, date, time, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?,?,?)");
													$bookcourse->execute(array($room_no,$date,$start_time, "","","","","","","","",""));
													
													$bookstr = $db->prepare("insert into tb_room_column_str (room_no, date, time, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?,?,?)");
													$bookstr->execute(array($room_no,$date,$start_time, "","","","","","","","",""));
													
													$booksec = $db->prepare("insert into tb_room_section_status (room_no,date, time, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?,?,?)");
													$booksec->execute(array($room_no,$date, $start_time, "","","","","","","","",""));
													
													$bookname = $db->prepare("insert into tb_room_course_name (room_no,date, time, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?,?,?)");
													$bookname->execute(array($room_no,$date, $start_time, "","","","","","","","",""));
													
													$booktech = $db->prepare("insert into tb_room_tech_name (room_no,date, time, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?,?,?)");
													$booktech->execute(array($room_no,$date, $start_time, "","","","","","","","",""));
												}
													$checkcol = $db->prepare("select * from tb_room_column_status where room_no=? and date=? and time=?");
													$checkcol->execute(array($room_no, $date, $start_time));
													$resultcol = $checkcol->fetchAll(PDO::FETCH_ASSOC);
													foreach($resultcol as $rowcol)
													{
														$c1 = $rowcol['c1'];
														$c2 = $rowcol['c2'];
														$c3 = $rowcol['c3'];
														$c4 = $rowcol['c4'];
														$c5 = $rowcol['c5'];
														$c6 = $rowcol['c6'];
														$c7 = $rowcol['c7'];
														$c8 = $rowcol['c8'];
														$c9 = $rowcol['c9'];
													}
													
													$checkstr = $db->prepare("select * from tb_room_column_str where room_no=? and date=? and time=?");
													$checkstr->execute(array($room_no, $date, $start_time));
													$resultstr = $checkstr->fetchAll(PDO::FETCH_ASSOC);
													foreach($resultstr as $rowstr)
													{
														$c1_str = $rowstr['c1'];
														$c2_str = $rowstr['c2'];
														$c3_str = $rowstr['c3'];
														$c4_str = $rowstr['c4'];
														$c5_str = $rowstr['c5'];
														$c6_str = $rowstr['c6'];
														$c7_str = $rowstr['c7'];
														$c8_str = $rowstr['c8'];
														$c9_str = $rowstr['c9'];
													}
													$checkname = $db->prepare("select * from tb_room_course_name where room_no=? and date=? and time=?");
													$checkname->execute(array($room_no, $date, $start_time));
													$resultname = $checkname->fetchAll(PDO::FETCH_ASSOC);
													foreach($resultname as $rowname)
													{
														$c1_name = $rowname['c1'];
														$c2_name = $rowname['c2'];
														$c3_name = $rowname['c3'];
														$c4_name = $rowname['c4'];
														$c5_name = $rowname['c5'];
														$c6_name = $rowname['c6'];
														$c7_name = $rowname['c7'];
														$c8_name = $rowname['c8'];
														$c9_name = $rowname['c9'];
														$c9_name = $rowname['c9'];
													}
													
													$checktech = $db->prepare("select * from tb_room_tech_name where room_no=? and date=? and time=?");
													$checktech->execute(array($room_no, $date, $start_time));
													$resulttech = $checktech->fetchAll(PDO::FETCH_ASSOC);
													foreach($resulttech as $rowtech)
													{
														$c1_tech = $rowtech['c1'];
														$c2_tech = $rowtech['c2'];
														$c3_tech = $rowtech['c3'];
														$c4_tech = $rowtech['c4'];
														$c5_tech = $rowtech['c5'];
														$c6_tech = $rowtech['c6'];
														$c7_tech = $rowtech['c7'];
														$c8_tech = $rowtech['c8'];
														$c9_tech = $rowtech['c9'];
														$c9_tech = $rowtech['c9'];
													}
													
													$checkcou = $db->prepare("select * from tb_room_course_status where room_no=? and date=? and time=?");
													$checkcou->execute(array($room_no,$date, $start_time));
													$resultcol = $checkcou->fetchAll(PDO::FETCH_ASSOC);
													foreach($resultcol as $rowcol)
													{
														$c1_course = $rowcol['c1'];
														$c2_course = $rowcol['c2'];
														$c3_course = $rowcol['c3'];
														$c4_course = $rowcol['c4'];
														$c5_course = $rowcol['c5'];
														$c6_course = $rowcol['c6'];
														$c7_course = $rowcol['c7'];
														$c8_course = $rowcol['c8'];
														$c9_course = $rowcol['c9'];
													}
													
													$checksec = $db->prepare("select * from tb_room_section_status where room_no=? and date=? and time=?");
													$checksec->execute(array($room_no, $date, $start_time));
													$resultcol = $checksec->fetchAll(PDO::FETCH_ASSOC);
													foreach($resultcol as $rowcol)
													{
														$c1_sec = $rowcol['c1'];
														$c2_sec = $rowcol['c2'];
														$c3_sec = $rowcol['c3'];
														$c4_sec = $rowcol['c4'];
														$c5_sec = $rowcol['c5'];
														$c6_sec = $rowcol['c6'];
														$c7_sec = $rowcol['c7'];
														$c8_sec = $rowcol['c8'];
														$c9_sec = $rowcol['c9'];
													}
													$count = 0;
										 if($row['col_1'] > 0 )
													if ( $std_reg  > 0 && $c1 < $row['col_1']) {
															//echo $c1." ";
															if(strpos($c2_course, $course_id) === false || $bigroom>0){
															if(strlen($c1_course)==0 || strpos($c1_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_1'] - $c1);
															$c11 = $c1;
															$c1 = $c1 + ($row['col_1'] - $c1);
															if($std_reg < 0)
																$c1 = $c1 + $std_reg;
															$count = $count + $c1- $c11;
															//echo $c1."-".$std_reg." ";
															//$statcol1 = $db->prepare("update tb_room_column_status set c1=? where room_no=? and date=? and time=?"); 
															//$statcol1->execute(array($c1,$room_no,$date,$start_time));
															
															if($c1_str == "")
																$c1_str = $c1-$c11;
															else
																$c1_str = $c1_str."+".($c1-$c11);
															
															//$statstr = $db->prepare("update tb_room_column_str set c1=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c1_str,$room_no,$date,$start_time));
															
															if($c1_course == ""){
																$c1_course = $c1_course.$course_id;
																$c1_name = $c1_name.$course_title;
																}
															else if(strpos($c1_course,$course_id)===false){
																$c1_course = $c1_course."+".$course_id;
																$c1_name = $c1_name."+".$course_title;
															}
															//$statcou1 = $db->prepare("update tb_room_course_status set c1=? where room_no=?  and date=? and time=?"); 
															//$statcou1->execute(array($c1_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c1=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c1_name,$room_no ,$date,$start_time));
															if($c1_sec == ""){
																$c1_sec = $c1_sec.$section;
																$c1_tech = $c1_tech.$tech_name;
															}
															else{
																$c1_sec = $c1_sec."+".$section;
																if(strpos($c1_tech,$tech_name)===false)
																	$c1_tech = $c1_tech."+".$tech_name;
															}
															//$statsec1 = $db->prepare("update tb_room_section_status set c1=? where room_no=?  and date=? and time=?"); 
															//$statsec1->execute(array($c1_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c1=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c1_tech,$room_no ,$date,$start_time));
															}
															}
														}
																	
											  if($row['col_2'] > 0 )
												    if ( $std_reg > 0 && $c2 < $row['col_2']) { 
															if((strpos($c1_course ,$course_id) === false && strpos($c3_course, $course_id)=== false) || $bigroom>0){
															if(strlen($c2_course) == 0 || strpos($c2_course, $course_id)!==false){
															//echo $c2." ";
															$std_reg = $std_reg - ($row['col_2'] - $c2);
															$c22 = $c2;
															$c2 = $c2 + ($row['col_2'] - $c2);
															if($std_reg < 0)
																$c2 = $c2 + $std_reg;
															$count = $count + $c2 - $c22;
															//echo $c2."-".$std_reg." ";
															//$statcol2 = $db->prepare("update tb_room_column_status set c2=? where room_no=?  and date=? and time=?"); 
															//$statcol2->execute(array($c2,$room_no ,$date,$start_time));
															
															if($c2_str == "")
																$c2_str = $c2 - $c22;
															else
																$c2_str = $c2_str."+".($c2 - $c22);
															
															//$statstr = $db->prepare("update tb_room_column_str set c2=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c2_str,$room_no,$date,$start_time));
															
															if($c2_course == ""){
																$c2_course = $c2_course.$course_id;
																$c2_name = $c2_name.$course_title;
															}
															else if(strpos($c2_course,$course_id)===false){
																$c2_course = $c2_course."+".$course_id;
																$c2_name = $c2_name."+".$course_title;
															}
															//$statcou2 = $db->prepare("update tb_room_course_status set c2=? where room_no=?  and date=? and time=?"); 
															//$statcou2->execute(array($c2_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c2=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c2_name,$room_no ,$date,$start_time));
															if($c2_sec == ""){
																$c2_sec = $c2_sec.$section;
																$c2_tech = $c2_tech.$tech_name;
															}
															else{
																$c2_sec = $c2_sec."+".$section;
																if(strpos($c2_tech,$tech_name)===false)
																	$c2_tech = $c2_tech."+".$tech_name;
															}
															//$statsec2 = $db->prepare("update tb_room_section_status set c2=? where room_no=?  and date=? and time=?"); 
															//$statsec2->execute(array($c2_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c2=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c2_tech,$room_no ,$date,$start_time));
															}
															}
														}
																	
											  if($row['col_3'] > 0 ) 
													if ( $std_reg > 0 && $c3 < $row['col_3']) { 
															//echo $c3." ";
															if((strpos($c2_course ,$course_id)=== false && strpos($c4_course, $course_id)=== false) || $bigroom>0){
															if(strlen($c3_course) == 0 || strpos($c3_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_3'] - $c3);
															$c33 = $c3;
															$c3 = $c3 + ($row['col_3'] - $c3);
															if($std_reg < 0)
																$c3 = $c3 + $std_reg;
															$count = $count + $c3-$c33;
															//echo $c3."-".$std_reg." ";
															//$statcol3 = $db->prepare("update tb_room_column_status set c3=? where room_no=?  and date=? and time=?"); 
															//$statcol3->execute(array($c3,$room_no ,$date,$start_time));
															if($c3_str == "")
																$c3_str = $c3 - $c33;
															else
																$c3_str = $c3_str."+".($c3 - $c33);
															
															//$statstr = $db->prepare("update tb_room_column_str set c3=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c3_str,$room_no,$date,$start_time));
															if($c3_course == ""){
																$c3_course = $c3_course.$course_id;
																$c3_name = $c3_name.$course_title;
															}
															else if(strpos($c3_course,$course_id)===false){
																$c3_course = $c3_course."+".$course_id;
																$c3_name = $c3_name."+".$course_title;
															}
															//$statcou3 = $db->prepare("update tb_room_course_status set c3=? where room_no=?  and date=? and time=?"); 
															//$statcou3->execute(array($c3_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c3=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c3_name,$room_no ,$date,$start_time));
															if($c3_sec == ""){
																$c3_sec = $c3_sec.$section;
																$c3_tech = $c3_tech.$tech_name;
															}
															else{
																$c3_sec = $c3_sec."+".$section;
																if(strpos($c3_tech,$tech_name)===false)
																	$c3_tech = $c3_tech."+".$tech_name;
															}
															//$statsec3 = $db->prepare("update tb_room_section_status set c3=? where room_no=?  and date=? and time=?"); 
															//$statsec3->execute(array($c3_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c3=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c3_tech,$room_no ,$date,$start_time));
															}
															}
														}
																	
											  if($row['col_4'] > 0 ) 
													if ( $std_reg > 0 && $c4 < $row['col_4']) { 
															//echo $c4." ";
															if((strpos($c3_course ,$course_id)=== false && strpos($c5_course, $course_id)=== false) || $bigroom>0){
															if(strlen($c4_course) == 0 || strpos($c4_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_4'] - $c4);
															$c44 = $c4;
															$c4 = $c4 + ($row['col_4'] - $c4);
															if($std_reg < 0)
																$c4 = $c4 + $std_reg;
															$count = $count + $c4-$c44;
															//echo $c4."-".$std_reg." ";
															//$statcol4 = $db->prepare("update tb_room_column_status set c4=? where room_no=?  and date=? and time=?"); 
															//$statcol4->execute(array($c4,$room_no ,$date,$start_time));
															
															if($c4_str == "")
																$c4_str = $c4 - $c44;
															else
																$c4_str = $c4_str."+".($c4 - $c44);
															//$statstr = $db->prepare("update tb_room_column_str set c4=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c4_str,$room_no,$date,$start_time));
															
															if($c4_course == ""){
																$c4_course = $c4_course.$course_id;
																$c4_name = $c4_name.$course_title;
															}
															else if(strpos($c4_course,$course_id)===false){
																$c4_course = $c4_course."+".$course_id;
																$c4_name = $c4_name."+".$course_title;
															}
															//$statcou4 = $db->prepare("update tb_room_course_status set c4=? where room_no=?  and date=? and time=?"); 
															//$statcou4->execute(array($c4_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c4=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c4_name,$room_no ,$date,$start_time));
															if($c4_sec == ""){
																$c4_sec = $c4_sec.$section;
																$c4_tech = $c4_tech.$tech_name;
															}
															else{
																$c4_sec = $c4_sec."+".$section;
																if(strpos($c4_tech,$tech_name)===false)
																	$c4_tech = $c4_tech."+".$tech_name;
															}
															//$statsec4 = $db->prepare("update tb_room_section_status set c4=? where room_no=?  and date=? and time=?"); 
															//$statsec4->execute(array($c4_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c4=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c4_tech,$room_no ,$date,$start_time));
															}
															}
														}
																	
											  if($row['col_5'] > 0 ) 
													if ( $std_reg > 0 && $c5 < $row['col_5']) { 
															//echo $c5." ";
															if((strpos($c4_course ,$course_id)=== false && strpos($c6_course, $course_id)=== false) || $bigroom>0){
															if(strlen($c5_course) == 0 || strpos($c5_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_5'] - $c5);
															$c55 = $c5;
															$c5 = $c5 + ($row['col_5'] - $c5);
															if($std_reg < 0)
																$c5 = $c5 + $std_reg;
															$count = $count + $c5-$c55;
															//echo $c5."-".$std_reg." ";															
															//$statcol5 = $db->prepare("update tb_room_column_status set c5=? where room_no=?  and date=? and time=?"); 
															//$statcol5->execute(array($c5,$room_no ,$date,$start_time));
															if($c5_str == "")
																$c5_str = $c5 - $c55;
															else
																$c5_str = $c5_str."+".($c5 - $c55);
															
															//$statstr = $db->prepare("update tb_room_column_str set c5=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c5_str,$room_no,$date,$start_time));
															if($c5_course == ""){
																$c5_course = $c5_course.$course_id;
																$c5_name = $c5_name.$course_title;
															}
															else if(strpos($c5_course,$course_id)===false){
																$c5_course = $c5_course."+".$course_id;
																$c5_name = $c5_name."+".$course_title;
															}
															//$statcou5 = $db->prepare("update tb_room_course_status set c5=? where room_no=?  and date=? and time=?"); 
															//$statcou5->execute(array($c5_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c5=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c5_name,$room_no ,$date,$start_time));
															if($c5_sec == ""){
																$c5_sec = $c5_sec.$section;
																$c5_tech = $c5_tech.$tech_name;
															}
															else{
																$c5_sec = $c5_sec."+".$section;
																if(strpos($c5_tech,$tech_name)===false)
																	$c5_tech = $c5_tech."+".$tech_name;
															}
															//$statsec5 = $db->prepare("update tb_room_section_status set c5=? where room_no=?  and date=? and time=?"); 
															//$statsec5->execute(array($c5_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c5=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c5_tech,$room_no ,$date,$start_time));
															}
															}
														}
															
											  if($row['col_6'] > 0 ) 
													if ( $std_reg > 0 && $c6 < $row['col_6']) { 
															//echo $c6." ";
															if((strpos($c5_course ,$course_id)=== false && strpos($c7_course, $course_id)=== false) || $bigroom>0){
															if(strlen($c6_course) == 0 || strpos($c6_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_6'] - $c6);
															$c66 = $c6;
															$c6 = $c6 + ($row['col_6'] - $c6);
															if($std_reg < 0)
																$c6 = $c6 + $std_reg;
															$count = $count + $c6-$c66;
															//echo $c6."-".$std_reg." ";
															//$statcol6 = $db->prepare("update tb_room_column_status set c6=? where room_no=?  and date=? and time=?"); 
															//$statcol6->execute(array($c6,$room_no ,$date,$start_time));
															if($c6_str == "")
																$c6_str = $c6 - $c66;
															else
																$c6_str = $c6_str."+".($c6 - $c66);
															
															//$statstr = $db->prepare("update tb_room_column_str set c6=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c6_str,$room_no,$date,$start_time));
															if($c6_course == ""){
																$c6_course = $c6_course.$course_id;
																$c6_name = $c6_name.$course_title;
															}
															else if(strpos($c6_course,$course_id)===false){
																$c6_course = $c6_course."+".$course_id;
																$c6_name = $c6_name."+".$course_title;
															}
															//$statcou6 = $db->prepare("update tb_room_course_status set c6=? where room_no=?  and date=? and time=?"); 
															//$statcou6->execute(array($c6_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c6=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c6_name,$room_no ,$date,$start_time));
															if($c6_sec == ""){
																$c6_sec = $c6_sec.$section;
																$c6_tech = $c6_tech.$tech_name;
															}
															else{
																$c6_sec = $c6_sec."+".$section;
																if(strpos($c6_tech,$tech_name)===false)
																	$c6_tech = $c6_tech."+".$tech_name;
															}
															//$statsec6 = $db->prepare("update tb_room_section_status set c6=? where room_no=?  and date=? and time=?"); 
															//$statsec6->execute(array($c6_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c6=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c6_tech,$room_no ,$date,$start_time));
															}
															}
														}
																	
											  if($row['col_7'] > 0 ) 
													if ( $std_reg > 0 && $c7 < $row['col_7']) 
														{ 
															//echo $c7." ";
															if((strpos($c6_course ,$course_id)=== false && strpos($c8_course, $course_id)=== false) || $bigroom>0)
															{
																if(strlen($c7_course) == 0 || strpos($c7_course, $course_id)!==false){
																$std_reg = $std_reg - ($row['col_7'] - $c7); 
																$c77 = $c7;
																$c7 = $c7 + ($row['col_7'] - $c7);
																if($std_reg < 0)
																	$c7 = $c7 + $std_reg;
																$count = $count + $c7-$c77;
																//echo $c7."-".$std_reg." ";
																//$statcol7 = $db->prepare("update tb_room_column_status set c7=? where room_no=?  and date=? and time=?"); 
																//$statcol7->execute(array($c7,$room_no ,$date,$start_time));
																if($c7_str == "")
																	$c7_str = $c7 - $c77;
																else
																	$c7_str = $c7_str."+".($c7 - $c77);
															
																//$statstr = $db->prepare("update tb_room_column_str set c7=? where room_no=? and date=? and time=?"); 
																//$statstr->execute(array($c7_str,$room_no,$date,$start_time));
																if($c7_course == ""){
																	$c7_course = $c7_course.$course_id;
																	$c7_name = $c7_name.$course_title;
																}
																else if(strpos($c7_course,$course_id)===false){
																	$c7_course = $c7_course."+".$course_id;
																	$c7_name = $c7_name."+".$course_title;
																}
																//$statcou7 = $db->prepare("update tb_room_course_status set c7=? where room_no=?  and date=? and time=?"); 
																//$statcou7->execute(array($c7_course,$room_no ,$date,$start_time));
																//$statname = $db->prepare("update tb_room_course_name set c7=? where room_no=?  and date=? and time=?"); 
															   // $statname->execute(array($c7_name,$room_no ,$date,$start_time));
																if($c7_sec == ""){
																	$c7_sec = $c7_sec.$section;
																	$c7_tech = $c7_tech.$tech_name;
																}
																else{
																	$c7_sec = $c7_sec."+".$section;
																	if(strpos($c7_tech,$tech_name)===false)
																		$c7_tech = $c7_tech."+".$tech_name;
																}
																//$statsec7 = $db->prepare("update tb_room_section_status set c7=? where room_no=?  and date=? and time=?"); 
																//$statsec7->execute(array($c7_sec,$room_no ,$date,$start_time));
																//$stattech = $db->prepare("update tb_room_tech_name set c7=? where room_no=?  and date=? and time=?"); 
															    //$stattech->execute(array($c7_tech,$room_no ,$date,$start_time));
															}
															}
														}
																
											  if($row['col_8'] > 0 ) 
													if ( $std_reg > 0 && $c8 < $row['col_8']) {
															//echo $c8." ";	
															if((strpos($c7_course ,$course_id) === false && strpos($c9_course, $course_id) === false) || $bigroom>0){
															if(strlen($c8_course) == 0 || strpos($c8_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_8'] - $c8);	
															$c88 = $c8;
															$c8 = $c8 + ($row['col_8'] - $c8);
															if($std_reg < 0)
																$c8 = $c8 + $std_reg;
															$count = $count + $c8-$c88;
															//echo $c8."-".$std_reg." ";
															//$statcol8 = $db->prepare("update tb_room_column_status set c8=? where room_no=?  and date=? and time=?"); 
															//$statcol8->execute(array($c8,$room_no ,$date,$start_time));
															if($c8_str == "")
																$c8_str = $c8 - $c88;
															else
																$c8_str = $c8_str."+".($c8 -$c88);
															
															//$statstr = $db->prepare("update tb_room_column_str set c8=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c8_str,$room_no,$date,$start_time));
															if($c8_course == ""){
																$c8_course = $c8_course.$course_id;
																$c8_name = $c8_name.$course_title;
															}
															else if(strpos($c8_course,$course_id)===false){
																$c8_course = $c8_course."+".$course_id;
																$c8_name = $c8_name."+".$course_title;
															}
															//$statcou8 = $db->prepare("update tb_room_course_status set c8=? where room_no=?  and date=? and time=?"); 
															//$statcou8->execute(array($c8_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c8=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c8_name,$room_no ,$date,$start_time));
															if($c8_sec == ""){
																$c8_sec = $c8_sec.$section;
																$c8_tech = $c8_tech.$tech_name;
															}
															else{
																$c8_sec = $c8_sec."+".$section;
																if(strpos($c8_tech,$tech_name)===false)
																	$c8_tech = $c8_tech."+".$tech_name;
															}
															//$statsec8 = $db->prepare("update tb_room_section_status set c8=? where room_no=?  and date=? and time=?"); 
															//$statsec8->execute(array($c8_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c8=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c8_tech,$room_no ,$date,$start_time));
															}
															}
														}
																	
											  if($row['col_9'] > 0 ) 
													if ( $std_reg > 0 && $c9 < $row['col_9']) { 
															//echo $c9." ";
															if(strpos($c8_course, $course_id)=== false || $bigroom>0){
															if(strlen($c9_course) == 0 || strpos($c9_course, $course_id)!==false){
															$std_reg = $std_reg - ($row['col_9'] - $c9); 
														    $c99 = $c9;
															$c9 = $c9 + ($row['col_9'] - $c9);
															if($std_reg < 0)
																$c9 = $c9 + $std_reg;
															$count = $count + $c9-$c99;
															//echo $c9."-".$std_reg." ";
															//$statcol9 = $db->prepare("update tb_room_column_status set c9=? where room_no=?  and date=? and time=?"); 
															//$statcol9->execute(array($c9,$room_no ,$date,$start_time));
															if($c9_str == "")
																$c9_str = $c9 - $c99;
															else
																$c9_str = $c9_str."+".($c9 - $c99);
															
															//$statstr = $db->prepare("update tb_room_column_str set c9=? where room_no=? and date=? and time=?"); 
															//$statstr->execute(array($c9_str,$room_no,$date,$start_time));
															if($c9_course == ""){
																$c9_course = $c9_course.$course_id;
																$c9_name = $c9_name.$course_title;
															}
															else if(strpos($c9_course,$course_id)===false){
																$c9_course = $c9_course."+".$course_id;
																$c9_name = $c9_name."+".$course_title;
															}
															//$statcou9 = $db->prepare("update tb_room_course_status set c9=? where room_no=?  and date=? and time=?"); 
															//$statcou9->execute(array($c9_course,$room_no ,$date,$start_time));
															//$statname = $db->prepare("update tb_room_course_name set c9=? where room_no=?  and date=? and time=?"); 
															//$statname->execute(array($c9_name,$room_no ,$date,$start_time));
															if($c9_sec == ""){
																$c9_sec = $c9_sec.$section;
																$c9_tech = $c9_tech.$tech_name;
															}
															else{
																$c9_sec = $c9_sec."+".$section;
																if(strpos($c9_tech,$tech_name)===false)
																	$c9_tech = $c9_tech."+".$tech_name;
															}
															//$statsec9 = $db->prepare("update tb_room_section_status set c9=? where room_no=?  and date=? and time=?"); 
															//$statsec9->execute(array($c9_sec,$room_no ,$date,$start_time));
															//$stattech = $db->prepare("update tb_room_tech_name set c9=? where room_no=?  and date=? and time=?"); 
															//$stattech->execute(array($c9_tech,$room_no ,$date,$start_time));
															}
															}
														}
													$statcol = $db->prepare("update tb_room_column_status set c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,c7=?,c8=?,c9=? where room_no=? and date=? and time=?"); 
												    $statcol->execute(array($c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9, $room_no,$date,$start_time));
													
													$statstr = $db->prepare("update tb_room_column_str set c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,c7=?,c8=?,c9=? where room_no=? and date=? and time=?"); 
													$statstr->execute(array($c1_str,$c2_str,$c3_str,$c4_str,$c5_str,$c6_str,$c7_str,$c8_str,$c9_str,$room_no,$date,$start_time));
													
													$statcou = $db->prepare("update tb_room_course_status set c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,c7=?,c8=?,c9=? where room_no=?  and date=? and time=?"); 
													$statcou->execute(array($c1_course,$c2_course,$c3_course,$c4_course,$c5_course,$c6_course,$c7_course,$c8_course,$c9_course,$room_no ,$date,$start_time));
													$statname = $db->prepare("update tb_room_course_name set c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,c7=?,c8=?,c9=? where room_no=?  and date=? and time=?"); 
													$statname->execute(array($c1_name,$c2_name,$c3_name,$c4_name,$c5_name,$c6_name,$c7_name,$c8_name,$c9_name,$room_no ,$date,$start_time));
													
													$statsec = $db->prepare("update tb_room_section_status set c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,c7=?,c8=?,c9=? where room_no=?  and date=? and time=?"); 
													$statsec->execute(array($c1_sec,$c2_sec,$c3_sec,$c4_sec,$c5_sec,$c6_sec,$c7_sec,$c8_sec,$c9_sec,$room_no ,$date,$start_time));
													$stattech = $db->prepare("update tb_room_tech_name set c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,c7=?,c8=?,c9=? where room_no=?  and date=? and time=?"); 
													$stattech->execute(array($c1_tech,$c2_tech,$c3_tech,$c4_tech,$c5_tech,$c6_tech,$c7_tech,$c8_tech,$c9_tech,$room_no ,$date,$start_time));
													if($count > 0){
													$detail = $db->prepare("insert into tb_details_count (room_no, course_id, section, batch_no, count, date, time) values(?,?,?,?,?,?,?)");
													$detail->execute(array($room_no,$course_id, $section, $batch_no , $count,$date,$start_time));
													}
													
													
									}
								}
							}
							}
						}
						$delete = $db->prepare("delete from tb_sorting_num_of_student"); 
						$delete->execute();
					}
					}
					?>
					<?php
					$statement = $db->prepare("select * from tb_room_column_status where date=? and time=?");
					$statement->execute(array($date, $start_time));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $row)
					{
						$date1 = date_create($date);
						$statementRoom = $db->prepare("select * from tb_rooms where room_no=?");
						$statementRoom->execute(array($row['room_no']));
						$resultRoom = $statementRoom->fetchAll(PDO::FETCH_ASSOC);
						foreach($resultRoom as $rowRoom)
						{
							$column1 = $rowRoom['col_1'];
							$column2 = $rowRoom['col_2'];
							$column3 = $rowRoom['col_3'];
							$column4 = $rowRoom['col_4'];
							$column5 = $rowRoom['col_5'];
							$column6 = $rowRoom['col_6'];
							$column7 = $rowRoom['col_7'];
							$column8 = $rowRoom['col_8'];
							$column9 = $rowRoom['col_9'];
						}
						?>
				<div class="panel panel-default">
				<div class="panel-heading">Room No: <?php echo  $row['room_no']. " Date: ".date_format($date1,'d-m-Y')." Time: ".ampmtime($start_time);?></div>
				<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<?php if($column1 > 0) echo "<th>COL-1</th>";
								  if($column2 > 0) echo "<th>COL-2</th>";
								  if($column3 > 0) echo "<th>COL-3</th>";
								  if($column4 > 0) echo "<th>COL-4</th>";
								  if($column5 > 0) echo "<th>COL-5</th>";
								  if($column6 > 0) echo "<th>COL-6</th>";
								  if($column7 > 0) echo "<th>COL-7</th>";
								  if($column8 > 0) echo "<th>COL-8</th>";
								  if($column9 > 0) echo "<th>COL-9</th>";
								  ?>
						</tr>
					</thead>
					<tbody>
					    <tr>
						<?php	$statname = $db->prepare("select * from tb_room_course_name where room_no=?  and date=? and time=?");
								$statname->execute(array($row['room_no'], $date, $start_time));
								$resultname = $statname->fetchAll(PDO::FETCH_ASSOC);
								foreach($resultname as $rowname)
								{
						
							      if($column1 > 0) echo "<td>".$rowname['c1']."</td>";
								  if($column2 > 0) echo "<td>".$rowname['c2']."</td>";
								  if($column3 > 0) echo "<td>".$rowname['c3']."</td>";
								  if($column4 > 0) echo "<td>".$rowname['c4']."</td>";
								  if($column5 > 0) echo "<td>".$rowname['c5']."</td>";
								  if($column6 > 0) echo "<td>".$rowname['c6']."</td>";
								  if($column7 > 0) echo "<td>".$rowname['c7']."</td>";
								  if($column8 > 0) echo "<td>".$rowname['c8']."</td>";
								  if($column9 > 0) echo "<td>".$rowname['c9']."</td>";
								}
								?>
						</tr>
						<tr>
						<?php	$statcourse = $db->prepare("select * from tb_room_course_status where room_no=?  and date=? and time=?");
								$statcourse->execute(array($row['room_no'], $date, $start_time));
								$resultcourse = $statcourse->fetchAll(PDO::FETCH_ASSOC);
								foreach($resultcourse as $rowcourse)
								{
						
							      if($column1 > 0) echo "<td>".$rowcourse['c1']."</td>";
								  if($column2 > 0) echo "<td>".$rowcourse['c2']."</td>";
								  if($column3 > 0) echo "<td>".$rowcourse['c3']."</td>";
								  if($column4 > 0) echo "<td>".$rowcourse['c4']."</td>";
								  if($column5 > 0) echo "<td>".$rowcourse['c5']."</td>";
								  if($column6 > 0) echo "<td>".$rowcourse['c6']."</td>";
								  if($column7 > 0) echo "<td>".$rowcourse['c7']."</td>";
								  if($column8 > 0) echo "<td>".$rowcourse['c8']."</td>";
								  if($column9 > 0) echo "<td>".$rowcourse['c9']."</td>";
								}
								?>
						</tr>
						<tr>
						<?php	$statsec = $db->prepare("select * from tb_room_section_status where room_no=?  and date=? and time=?");
								$statsec->execute(array($row['room_no'], $date, $start_time));
								$resultsec = $statsec->fetchAll(PDO::FETCH_ASSOC);
								foreach($resultsec as $rowsec)
								{ 
								  if($column1 > 0) echo "<td>".$rowsec['c1']."</td>";
								  if($column2 > 0) echo "<td>".$rowsec['c2']."</td>";
								  if($column3 > 0) echo "<td>".$rowsec['c3']."</td>";
								  if($column4 > 0) echo "<td>".$rowsec['c4']."</td>";
								  if($column5 > 0) echo "<td>".$rowsec['c5']."</td>";
								  if($column6 > 0) echo "<td>".$rowsec['c6']."</td>";
								  if($column7 > 0) echo "<td>".$rowsec['c7']."</td>";
								  if($column8 > 0) echo "<td>".$rowsec['c8']."</td>";
								  if($column9 > 0) echo "<td>".$rowsec['c9']."</td>";
								}
								?>
							
						</tr>
						<tr>
						<?php	$stattech = $db->prepare("select * from tb_room_tech_name where room_no=?  and date=? and time=?");
								$stattech->execute(array($row['room_no'], $date, $start_time));
								$resulttech = $stattech->fetchAll(PDO::FETCH_ASSOC);
								foreach($resulttech as $rowtech)
								{ 
								  if($column1 > 0) echo "<td>".$rowtech['c1']."</td>";
								  if($column2 > 0) echo "<td>".$rowtech['c2']."</td>";
								  if($column3 > 0) echo "<td>".$rowtech['c3']."</td>";
								  if($column4 > 0) echo "<td>".$rowtech['c4']."</td>";
								  if($column5 > 0) echo "<td>".$rowtech['c5']."</td>";
								  if($column6 > 0) echo "<td>".$rowtech['c6']."</td>";
								  if($column7 > 0) echo "<td>".$rowtech['c7']."</td>";
								  if($column8 > 0) echo "<td>".$rowtech['c8']."</td>";
								  if($column9 > 0) echo "<td>".$rowtech['c9']."</td>";
								}
								?>
							
						</tr>
						<tr>
						<?php   $statstr = $db->prepare("select * from tb_room_column_str where room_no=?  and date=? and time=?");
								$statstr->execute(array($row['room_no'], $date, $start_time));
								$resultstr = $statstr->fetchAll(PDO::FETCH_ASSOC);
								foreach($resultstr as $rowstr)
								{ 
             					  if($column1 > 0) echo "<td>".$rowstr['c1']."</td>";
								  if($column2 > 0) echo "<td>".$rowstr['c2']."</td>";
								  if($column3 > 0) echo "<td>".$rowstr['c3']."</td>";
								  if($column4 > 0) echo "<td>".$rowstr['c4']."</td>";
								  if($column5 > 0) echo "<td>".$rowstr['c5']."</td>";
								  if($column6 > 0) echo "<td>".$rowstr['c6']."</td>";
								  if($column7 > 0) echo "<td>".$rowstr['c7']."</td>";
								  if($column8 > 0) echo "<td>".$rowstr['c8']."</td>";
								  if($column9 > 0) echo "<td>".$rowstr['c9']."</td>";
								}
							 ?>
						</tr>
					</tbody>
				</table>
				</div>
				</div>
				<?php 
					}
				
				
				
				$s = $db->prepare("select id from tb_room_column_status where date=? and time=?");
				$s->execute(array($date, $start_time));
				$res = $s->fetchAll(PDO::FETCH_ASSOC);
				foreach($res as $r)
				{
					$id = $r['id'];
					break;
				}
				?>
				<form method="post" action="delete_room_for_date_time.php">
				<div class="form-group">
				<button onclick="return confirm_delete();" for="example-time-input" type="submit" name="id" value="<?php echo $id; ?>" class="col-xs-3 btn btn-danger">Delete</button>
				</div>
				</form>
				<form method="post" action="roomstatusviewpdf.php">
				<div>
				<button for="example-time-input" type="submit" formtarget="_blank" name="pdf" value="<?php echo $id; ?>" class="col-xs-3 btn btn-default" >PDF</button>
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
						<form method="post" action="view.php">
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
					
				</div>	
				<?php }
				?>
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