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
    <title>Show Rooms::Exam Hall Manager</title>
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
		<li class="active"><a href="room_status.php">ROOM<span class="sr-only">(current)</span></a></li>
		<li><a href="routine_view.php">ROUTINE</a></li>
        <li><a href="summary_view.php">SUMMARY</a></li>
        <li><a href="details_view.php">DETAILS</a></li>
		<li><a href="view.php">VIEW</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
			<li><a href="insert_room_info.php" class="btn btn-xm" title = "Add room" ><span class="glyphicon glyphicon-plus"></span></a></li>
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
						<li class="active"><a href="room_status.php">Room Status<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="course_wise_registration.php">Registration<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="routine_view.php">Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="summary_view.php">Summary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
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
			<?php
					$buildings = array();
					$total_count = array();
					$total = 0;
					$count = 0;
					$total_seats = 0;
					$i=0;
					$statement1 = $db->prepare("select * from tb_building_priority order by level asc");
					$statement1->execute();
					$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
					foreach($result1 as $row1)
					{ 
					 $building_no = $row1['building_no'];
					 $buildings[] = $building_no;
					 $total = 0;
					$statement = $db->prepare("select * from tb_rooms where building_no=? order by room_no asc");
					$statement->execute(array($building_no));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $row)
					{ 
						$count = 0;
					?>
				<div class="panel panel-default">
				<div class="panel-heading"><b>Room No: <?php echo  $row['room_no'];?></b></div>
				<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<?php if($row['col_1'] > 0) echo "<th>COL-1</th>";
								  if($row['col_2'] > 0) echo "<th>COL-2</th>";
								  if($row['col_3'] > 0) echo "<th>COL-3</th>";
								  if($row['col_4'] > 0) echo "<th>COL-4</th>";
								  if($row['col_5'] > 0) echo "<th>COL-5</th>";
								  if($row['col_6'] > 0) echo "<th>COL-6</th>";
								  if($row['col_7'] > 0) echo "<th>COL-7</th>";
								  if($row['col_8'] > 0) echo "<th>COL-8</th>";
								  if($row['col_9'] > 0) echo "<th>COL-9</th>";
								  ?>
								  <th style="width: 100px;">Total</th>
								  <th style="width: 100px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<!--<tr>
							<td>CSE-311</td>
							<td>CSE-323</td>
							<td>CSE-311</td>
							<td>CSE-323</td>
							<td>CSE-311</td>
							<td>CSE-323</td>
							<td>CSE-323</td>
							<td>CSE-311</td>
							<td>CSE-323</td>
						</tr>
						<tr>
							<td>EVE-A</td>
							<td>EVE-B</td>
							<td>EVE-A</td>
							<td>EVE-B</td>
							<td>EVE-A</td>
							<td>EVE-B</td>
							<td>EVE-B</td>
							<td>EVE-A</td>
							<td>EVE-B</td>
						</tr>-->
						<tr>
							<?php if($row['col_1'] > 0) {echo "<td>" .$row['col_1']. "</td>"; $count = $count+$row['col_1'];}
							if($row['col_2'] > 0) {echo "<td>".$row['col_2']."</td>";$count = $count+$row['col_2'];}
							 if($row['col_3'] > 0) {echo "<td>".$row['col_3']."</td>";$count = $count+$row['col_3'];}
							 if($row['col_4'] > 0) {echo "<td>".$row['col_4']."</td>";$count = $count+$row['col_4'];}
							 if($row['col_5'] > 0) {echo "<td>".$row['col_5']."</td>";$count = $count+$row['col_5'];}
							 if($row['col_6'] > 0) {echo "<td>".$row['col_6']."</td>";$count = $count+$row['col_6'];}
							if($row['col_7'] > 0) {echo "<td>".$row['col_7']."</td>";$count = $count+$row['col_7'];}
							if($row['col_8'] > 0) {echo "<td>".$row['col_8']."</td>";$count = $count+$row['col_8'];}
							 if($row['col_9'] > 0) {echo "<td>".$row['col_9']."</td>";$count = $count+$row['col_9'];}
							 
							 ?>
							 <td><?php echo $count; $total = $total+$count;?></td>
							 <td>
							<a href="update_room.php?id=<?php echo $row['r_id'];?>" class="btn btn-xs btn-default" title = "Edit"><span class="glyphicon glyphicon-pencil"></span></a>
							<a onclick="return confirm_delete();" href="delete_room.php?id=<?php echo $row['r_id']; ?>" class="btn btn-xs btn-danger" title = "Delete"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				</div>
				<?php 
					}$total_count[] = $total; $total_seats += $total;}?>
					<div class="panel panel-default">
					<div class="panel-heading"><b>Total Seats: <?php echo  $total_seats;?></b></div>
					<div class="panel-body">
					<table class="table table-bordered">
					<thead>
						<tr><th>Building</th><th>Seats</th></tr>
					</thead>
					<tbody>
						<?php
						$index = 0;
						foreach($buildings as $build){
							echo "<tr><td>".$build."</td><td>".$total_count[$index++]."</td></tr>";
						}
					?>
					</tbody>
					</table>
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