<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exam room sheduler</title>
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
		<li class="active"><a href="room_status.php">ROOM<span class="sr-only">(current)</span></a></li>
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
						<li class="active"><a href="#">General<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="summary_view.php">Summary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="course_wise_registration.php">Registration<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="routine_view.php">Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li> <a href="insert_room_info.php">Insert room <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
						<li ><a href="insert_routine.php">Insert Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a></li>        
						<li ><a href="insert_course_info.php">Insert Courses<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="insert_batch_info.php">Insert batchs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="#">Log off<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
					  </ul>
					</div>
				</div>
			</nav>
			
			<div class="col-md-9 col-sm-4">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><h2>Final/Midterm Examination</h2></th>
						</tr>
					</thead>
					<?php $id=$_REQUEST['id'];
					$dt = $db->prepare("select date, start_time, end_time from tb_routine where ID=?");
					$dt->execute(array($id));
					$r = $dt->fetchAll(PDO::FETCH_ASSOC);
					foreach($r as $rw){
					$date=$rw['date'];
					$start_time=$rw['start_time'];
					$end_time=$rw['end_time'];
					
					 //sorting_by_reg_student
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
					
					}
					?>
					<tbody>
						<tr>
							<td><b>Date: <?php echo $date;?></b></td>
							<td><b>Slot: <?php echo $start_time; ?> - <?php echo $end_time; ?></b></td>
						</tr>
					</tbody>
				</table>
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
						$st_course->execute(array($course_id,$batch_no));
						$r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
						foreach($r_course as $row_course)
						{
							$section = $row_course['section'];
							$std_reg = $row_course['std_reg'] + 1;
							
							
							$bp = $db->prepare("select * from tb_building_priority order by level");
							$bp->execute();
							$result_bp = $bp->fetchAll(PDO::FETCH_ASSOC);
							foreach($result_bp as $row_bp){
							
							$bn= $row_bp['building_no'];
							$statement = $db->prepare("select * from tb_rooms where building_no=?");
							$statement->execute(array($bn));
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach($result as $row)
							{ 
								$room_no = $row['room_no'];
		
							 if($row['col_1'] > 0 && $std_reg > 0){
												$flag = 1;
										        $checkcol = $db->prepare("select room_no from tb_room_column_status where room_no=?");
												$checkcol->execute(array($room_no));
												$num = $checkcol->rowCount();
												if($num<=0){
													$bookcol = $db->prepare("insert into tb_room_column_status (room_no, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?)");
													$bookcol->execute(array($room_no, 0,0,0,0,0,0,0,0,0));
													
													$bookcourse = $db->prepare("insert into tb_room_course_status (room_no, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?)");
													$bookcourse->execute(array($room_no, "","","","","","","","",""));
													
													$booksec = $db->prepare("insert into tb_room_section_status (room_no, c1, c2, c3, c4, c5, c6, c7, c8, c9) values(?,?,?,?,?,?,?,?,?,?)");
													$booksec->execute(array($room_no, "","","","","","","","",""));
												}
													$checkcol = $db->prepare("select * from tb_room_column_status where room_no=?");
													$checkcol->execute(array($room_no));
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
													
													$checkcou = $db->prepare("select * from tb_room_course_status where room_no=?");
													$checkcou->execute(array($room_no));
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
													
													$checksec = $db->prepare("select * from tb_room_section_status where room_no=?");
													$checksec->execute(array($room_no));
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
									
										 if($row['col_1'] > 0 ) 
													if ( $std_reg  > 0 && $c1 == 0 /*< $row['col_1']*/) {
															//echo $c1." ";
															if($c2_course != $course_id){
															$std_reg = $std_reg - ($row['col_1'] - $c1);
														
															$c1 = $c1 + ($row['col_1'] - $c1);
															if($std_reg < 0)
																$c1 = $c1 + $std_reg;
															//echo $c1."-".$std_reg." ";
															$statcol1 = $db->prepare("update tb_room_column_status set c1=? where room_no=?"); 
															$statcol1->execute(array($c1,$room_no));
															if($c1_course == "")
																$c1_course = $c1_course.$course_id;
															else
																$c1_course = $c1_course." & ".$course_id;
															$statcou1 = $db->prepare("update tb_room_course_status set c1=? where room_no=?"); 
															$statcou1->execute(array($c1_course,$room_no));
															if($c1_sec == "")
																$c1_sec = $c1_sec.$section;
															else
																$c1_sec = $c1_sec." & ".$section;
															$statsec1 = $db->prepare("update tb_room_section_status set c1=? where room_no=?"); 
															$statsec1->execute(array($c1_sec,$room_no));
															}
														}
																	
											  if($row['col_2'] > 0 ) 
												    if ( $std_reg > 0 && $c2 == 0 /*< $row['col_2']*/) { 
															if($c1_course != $course_id && $c3_course != $course_id){
															//echo $c2." ";
															$std_reg = $std_reg - ($row['col_2'] - $c2);
															
															$c2 = $c2 + ($row['col_2'] - $c2);
															if($std_reg < 0)
																$c2 = $c2 + $std_reg;
															//echo $c2."-".$std_reg." ";
															$statcol2 = $db->prepare("update tb_room_column_status set c2=? where room_no=?"); 
															$statcol2->execute(array($c2,$room_no));
															if($c2_course == "")
																$c2_course = $c2_course.$course_id;
															else
																$c2_course = $c2_course." & ".$course_id;
															$statcou2 = $db->prepare("update tb_room_course_status set c2=? where room_no=?"); 
															$statcou2->execute(array($c2_course,$room_no));
															if($c2_sec == "")
																$c2_sec = $c2_sec.$section;
															else
																$c2_sec = $c2_sec." & ".$section;
															$statsec2 = $db->prepare("update tb_room_section_status set c2=? where room_no=?"); 
															$statsec2->execute(array($c2_sec,$room_no));
															}
														}
																	
											  if($row['col_3'] > 0 ) 
													if ( $std_reg > 0 && $c3 == 0 /* < $row['col_3']*/) { 
															//echo $c3." ";
															if($c2_course != $course_id && $c4_course != $course_id){
															$std_reg = $std_reg - ($row['col_3'] - $c3);
															
															$c3 = $c3 + ($row['col_3'] - $c3);
															if($std_reg < 0)
																$c3 = $c3 + $std_reg;
															//echo $c3."-".$std_reg." ";
															$statcol3 = $db->prepare("update tb_room_column_status set c3=? where room_no=?"); 
															$statcol3->execute(array($c3,$room_no));
															if($c3_course == "")
																$c3_course = $c3_course.$course_id;
															else
																$c3_course = $c3_course." & ".$course_id;
															$statcou3 = $db->prepare("update tb_room_course_status set c3=? where room_no=?"); 
															$statcou3->execute(array($c3_course,$room_no));
															if($c3_sec == "")
																$c3_sec = $c3_sec.$section;
															else
																$c3_sec = $c3_sec." & ".$section;
															$statsec3 = $db->prepare("update tb_room_section_status set c3=? where room_no=?"); 
															$statsec3->execute(array($c3_sec,$room_no));
															}
														}
																	
											  if($row['col_4'] > 0 ) 
													if ( $std_reg > 0 && $c4 == 0 /*< $row['col_4']*/) { 
															//echo $c4." ";
															if($c3_course != $course_id && $c5_course != $course_id){
															$std_reg = $std_reg - ($row['col_4'] - $c4);
															
															$c4 = $c4 + ($row['col_4'] - $c4);
															if($std_reg < 0)
																$c4 = $c4 + $std_reg;
															//echo $c4."-".$std_reg." ";
															$statcol4 = $db->prepare("update tb_room_column_status set c4=? where room_no=?"); 
															$statcol4->execute(array($c4,$room_no));
															if($c4_course == "")
																$c4_course = $c4_course.$course_id;
															else
																$c4_course = $c4_course." & ".$course_id;
															$statcou4 = $db->prepare("update tb_room_course_status set c4=? where room_no=?"); 
															$statcou4->execute(array($c4_course,$room_no));
															if($c4_sec == "")
																$c4_sec = $c4_sec.$section;
															else
																$c4_sec = $c4_sec." & ".$section;
															$statsec4 = $db->prepare("update tb_room_section_status set c4=? where room_no=?"); 
															$statsec4->execute(array($c4_sec,$room_no));
															}
														}
																	
											  if($row['col_5'] > 0 ) 
													if ( $std_reg > 0 && $c5 == 0 /*< $row['col_5']*/) { 
															//echo $c5." ";
															if($c4_course != $course_id && $c6_course != $course_id){
															$std_reg = $std_reg - ($row['col_5'] - $c5);
															
															$c5 = $c5 + ($row['col_5'] - $c5);
															if($std_reg < 0)
																$c5 = $c5 + $std_reg;
															//echo $c5."-".$std_reg." ";															
															$statcol5 = $db->prepare("update tb_room_column_status set c5=? where room_no=?"); 
															$statcol5->execute(array($c5,$room_no));
															if($c5_course == "")
																$c5_course = $c5_course.$course_id;
															else
																$c5_course = $c5_course." & ".$course_id;
															$statcou5 = $db->prepare("update tb_room_course_status set c5=? where room_no=?"); 
															$statcou5->execute(array($c5_course,$room_no));
															if($c5_sec == "")
																$c5_sec = $c5_sec.$section;
															else
																$c5_sec = $c5_sec." & ".$section;
															$statsec5 = $db->prepare("update tb_room_section_status set c5=? where room_no=?"); 
															$statsec5->execute(array($c5_sec,$room_no));
															}
														}
															
											  if($row['col_6'] > 0 ) 
													if ( $std_reg > 0 && $c6 == 0 /*< $row['col_6']*/) { 
															//echo $c6." ";
															if($c5_course != $course_id && $c7_course != $course_id){
															$std_reg = $std_reg - ($row['col_6'] - $c6);
															
															$c6 = $c6 + ($row['col_6'] - $c6);
															if($std_reg < 0)
																$c6 = $c6 + $std_reg;
															//echo $c6."-".$std_reg." ";
															$statcol6 = $db->prepare("update tb_room_column_status set c6=? where room_no=?"); 
															$statcol6->execute(array($c6,$room_no));
															if($c6_course == "")
																$c6_course = $c6_course.$course_id;
															else
																$c6_course = $c6_course." & ".$course_id;
															$statcou6 = $db->prepare("update tb_room_course_status set c6=? where room_no=?"); 
															$statcou6->execute(array($c6_course,$room_no));
															if($c6_sec == "")
																$c6_sec = $c6_sec.$section;
															else
																$c6_sec = $c6_sec." & ".$section;
															$statsec6 = $db->prepare("update tb_room_section_status set c6=? where room_no=?"); 
															$statsec6->execute(array($c6_sec,$room_no));
															}
														}
																	
											  if($row['col_7'] > 0 ) 
													if ( $std_reg > 0 && $c7 == 0 /*< $row['col_7']*/) 
														{ 
															//echo $c7." ";
															if($c6_course != $course_id && $c8_course != $course_id)
															{
																$std_reg = $std_reg - ($row['col_7'] - $c7); 
																
																$c7 = $c7 + ($row['col_7'] - $c7);
																if($std_reg < 0)
																	$c7 = $c7 + $std_reg;
																//echo $c7."-".$std_reg." ";
																$statcol7 = $db->prepare("update tb_room_column_status set c7=? where room_no=?"); 
																$statcol7->execute(array($c7,$room_no));
																if($c7_course == "")
																	$c7_course = $c7_course.$course_id;
																else
																	$c7_course = $c7_course." & ".$course_id;
																$statcou7 = $db->prepare("update tb_room_course_status set c7=? where room_no=?"); 
																$statcou7->execute(array($c7_course,$room_no));
																if($c7_sec == "")
																	$c7_sec = $c7_sec.$section;
																else
																	$c7_sec = $c7_sec." & ".$section;
																$statsec7 = $db->prepare("update tb_room_section_status set c7=? where room_no=?"); 
																$statsec7->execute(array($c7_sec,$room_no));
															}
														}
																
											  if($row['col_8'] > 0 ) 
													if ( $std_reg > 0 && $c8 == 0 /* < $row['col_8']*/) {
															//echo $c8." ";	
															if($c7_course != $course_id && $c9_course != $course_id){
															$std_reg = $std_reg - ($row['col_8'] - $c8);															
															$c8 = $c8 + ($row['col_8'] - $c8);
															if($std_reg < 0)
																$c8 = $c8 + $std_reg;
															//echo $c8."-".$std_reg." ";
															$statcol8 = $db->prepare("update tb_room_column_status set c8=? where room_no=?"); 
															$statcol8->execute(array($c8,$room_no));
															if($c8_course == "")
																$c8_course = $c8_course.$course_id;
															else
																$c8_course = $c8_course." & ".$course_id;
															$statcou8 = $db->prepare("update tb_room_course_status set c8=? where room_no=?"); 
															$statcou8->execute(array($c8_course,$room_no));
															if($c8_sec == "")
																$c8_sec = $c8_sec.$section;
															else
																$c8_sec = $c8_sec." & ".$section;
															$statsec8 = $db->prepare("update tb_room_section_status set c8=? where room_no=?"); 
															$statsec8->execute(array($c8_sec,$room_no));
															}
														}
																	
											  if($row['col_9'] > 0 ) 
													if ( $std_reg > 0 && $c9 == 0 /*< $row['col_9']*/) { 
															//echo $c9." ";
															if($c8_course != $course_id){
															$std_reg = $std_reg - ($row['col_9'] - $c9); 
														
															$c9 = $c9 + ($row['col_9'] - $c9);
															if($std_reg < 0)
																$c9 = $c9 + $std_reg;
															//echo $c9."-".$std_reg." ";
															$statcol9 = $db->prepare("update tb_room_column_status set c9=? where room_no=?"); 
															$statcol9->execute(array($c9,$room_no));
															if($c9_course == "")
																$c9_course = $c9_course.$course_id;
															else
																$c9_course = $c9_course." & ".$course_id;
															$statcou9 = $db->prepare("update tb_room_course_status set c9=? where room_no=?"); 
															$statcou9->execute(array($c9_course,$room_no));
															if($c9_sec == "")
																$c9_sec = $c9_sec.$section;
															else
																$c9_sec = $c9_sec." & ".$section;
															$statsec9 = $db->prepare("update tb_room_section_status set c9=? where room_no=?"); 
															$statsec9->execute(array($c9_sec,$room_no));
															}
														}

									}
								}
							}
						}
					}
					?>
					<?php
					$i=0;
					
					$statement = $db->prepare("select * from tb_room_column_status");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $row)
					{
						?>
				<h5>Room No: <?php echo  $row['room_no'];?></h5>
				<table class="table table-bordered">
					<thead>
						<tr>
							<?php if($row['c1'] > 0) echo "<th>COL-1</th>";
								  if($row['c2'] > 0) echo "<th>COL-2</th>";
								  if($row['c3'] > 0) echo "<th>COL-3</th>";
								  if($row['c4'] > 0) echo "<th>COL-4</th>";
								  if($row['c5'] > 0) echo "<th>COL-5</th>";
								  if($row['c6'] > 0) echo "<th>COL-6</th>";
								  if($row['c7'] > 0) echo "<th>COL-7</th>";
								  if($row['c8'] > 0) echo "<th>COL-8</th>";
								  if($row['c9'] > 0) echo "<th>COL-9</th>";
								  ?>
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php	$statcourse = $db->prepare("select * from tb_room_course_status where room_no=?");
								$statcourse->execute(array($row['room_no']));
								$resultcourse = $statcourse->fetchAll(PDO::FETCH_ASSOC);
								foreach($resultcourse as $rowcourse)
								{
						
							      if($row['c1'] > 0) echo "<td>".$rowcourse['c1']."</td>";
								  if($row['c2'] > 0) echo "<td>".$rowcourse['c2']."</td>";
								  if($row['c3'] > 0) echo "<td>".$rowcourse['c3']."</td>";
								  if($row['c4'] > 0) echo "<td>".$rowcourse['c4']."</td>";
								  if($row['c5'] > 0) echo "<td>".$rowcourse['c5']."</td>";
								  if($row['c6'] > 0) echo "<td>".$rowcourse['c6']."</td>";
								  if($row['c7'] > 0) echo "<td>".$rowcourse['c7']."</td>";
								  if($row['c8'] > 0) echo "<td>".$rowcourse['c8']."</td>";
								  if($row['c9'] > 0) echo "<td>".$rowcourse['c9']."</td>";
								}
								?>
						</tr>
						<tr>
						<?php	$statsec = $db->prepare("select * from tb_room_section_status where room_no=?");
								$statsec->execute(array($row['room_no']));
								$resultsec = $statsec->fetchAll(PDO::FETCH_ASSOC);
								foreach($resultsec as $rowsec)
								{ 
								  if($row['c1'] > 0) echo "<td>".$rowsec['c1']."</td>";
								  if($row['c2'] > 0) echo "<td>".$rowsec['c2']."</td>";
								  if($row['c3'] > 0) echo "<td>".$rowsec['c3']."</td>";
								  if($row['c4'] > 0) echo "<td>".$rowsec['c4']."</td>";
								  if($row['c5'] > 0) echo "<td>".$rowsec['c5']."</td>";
								  if($row['c6'] > 0) echo "<td>".$rowsec['c6']."</td>";
								  if($row['c7'] > 0) echo "<td>".$rowsec['c7']."</td>";
								  if($row['c8'] > 0) echo "<td>".$rowsec['c8']."</td>";
								  if($row['c9'] > 0) echo "<td>".$rowsec['c9']."</td>";
								}
								?>
							
						</tr>
						<tr>
							<?php if($row['c1'] > 0) echo "<td>".$row['c1']."</td>";
								  if($row['c2'] > 0) echo "<td>".$row['c2']."</td>";
								  if($row['c3'] > 0) echo "<td>".$row['c3']."</td>";
								  if($row['c4'] > 0) echo "<td>".$row['c4']."</td>";
								  if($row['c5'] > 0) echo "<td>".$row['c5']."</td>";
								  if($row['c6'] > 0) echo "<td>".$row['c6']."</td>";
								  if($row['c7'] > 0) echo "<td>".$row['c7']."</td>";
								  if($row['c8'] > 0) echo "<td>".$row['c8']."</td>";
								  if($row['c9'] > 0) echo "<td>".$row['c9']."</td>";
							 ?>
						</tr>
					</tbody>
				</table>
				<?php 
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
</body>
</html>