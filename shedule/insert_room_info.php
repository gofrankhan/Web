<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php
include('config.php');

if(isset($_POST['form_room'])) {

	try {
	
		if(empty($_POST['room_no'])) {
			throw new Exception('Room no. can not be empty');
		}
		
		if($_POST['col_1']=="") {
			throw new Exception('col_1 can not be empty');
		}
		
		if($_POST['col_2']=="") {
			throw new Exception('col_2 can not be empty');
		}
		
		if($_POST['col_3']=="") {
			throw new Exception('col_3 can not be empty');
		}
		if($_POST['col_4']=="") {
			throw new Exception('col_4 can not be empty');
		}
		
		if($_POST['col_5']=="") {
			throw new Exception('col_5 can not be empty');
		}
		
		if($_POST['col_6']=="") {
			throw new Exception('col_6 can not be empty');
		}
		if($_POST['col_7']=="") {
			throw new Exception('col_7 can not be empty');
		}
		
		if($_POST['col_8']=="") {
			throw new Exception('col_8 can not be empty');
		}
		
		if($_POST['col_9']=="") {
			throw new Exception('col_9 can not be empty');
		}
		if($_POST['col_1']<0) {
			throw new Exception('col_1 can not be negative');
		}
		
		if($_POST['col_2']<0) {
			throw new Exception('col_2 can not be negative');
		}
		
		if($_POST['col_3']<0) {
			throw new Exception('col_3 can not be negative');
		}
		if($_POST['col_4']<0) {
			throw new Exception('col_4 can not be negative');
		}
		
		if($_POST['col_5']<0) {
			throw new Exception('col_5 can not be negative');
		}
		
		if($_POST['col_6']<0) {
			throw new Exception('col_6 can not be negative');
		}
		if($_POST['col_7']<0) {
			throw new Exception('col_7 can not be negative');
		}
		
		if($_POST['col_8']<0) {
			throw new Exception('col_8 can not be negative');
		}
		
		if($_POST['col_9']<0) {
			throw new Exception('col_9 can not be negative');
		}
		if(empty($_POST['building_no'])) {
			throw new Exception('building_no can not be empty');
		}
		
		$statement1 = $db->prepare("select room_no from tb_rooms where room_no=?");
		$statement1->execute(array($_POST['room_no']));
		$statement1 = $statement1->rowCount();
		if($statement1>0){
			throw new Exception("Same Room does exist!");
		}
		
		$statement1 = $db->prepare("select building_no from tb_building_priority where building_no=?");
		$statement1->execute(array($_POST['building_no']));
		$statement1 = $statement1->rowCount();
		if($statement1<=0){
			throw new Exception("Building No. is not correct");
		}
		//$result = mysql_query("insert into tbl_student (st_name,st_roll,st_age,st_email) values('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]') ");
		
		$statement = $db->prepare("insert into tb_rooms (room_no,col_1,col_2,col_3,col_4,col_5,col_6,col_7,col_8,col_9,building_no) values(?,?,?,?,?,?,?,?,?,?,?)");
		$statement->execute(array($_POST['room_no'],$_POST['col_1'],$_POST['col_2'],$_POST['col_3'],$_POST['col_4'],$_POST['col_5'],$_POST['col_6'],$_POST['col_7'],$_POST['col_8'],$_POST['col_9'],$_POST['building_no']));
		
		$statement = $db->prepare("insert into tb_block_room (room_no, status, bigroom) values(?,?,?)");
		$statement->execute(array($_POST['room_no'],'0','0'));
		$success_message = 'Data has been inserted successfully.';
		header('location: room_status.php');
	
		}
	
		catch(Exception $e) {
			$error_message = $e->getMessage();
			echo $error_message;
			function do_alert($msg) 
				{
					echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
				}
			do_alert($error_message);
		}
	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Room Info::Exam Hall Manager</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="bootstarap/css/bootstrap.css" type="text/css">
    <link rel="icon" href="images/tf.png" type="image/png" sizes="16x16">
    <script src="bootstarap/js/jquery-3.0.0.min.js"></script>
    <script src="bootstarap/js/bootstrap.min.js"></script>
	<script src="js/my.js"></script>
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
						<li ><a href="summary_view.php">Summary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="details_view.php">Details<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="view.php">View<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li class="active"> <a href="insert_room_info.php">Insert room <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
						<li ><a href="insert_routine.php">Insert Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a></li>        
						<li ><a href="insert_course_info.php">Insert Courses<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="#">Log off<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
					  </ul>
					</div>
				</div>
			</nav>
			<!-- ENDOF LEFT LIST-->
			<div class="col-md-9 col-sm-4">
			<div class="panel panel-default">
			<div class="panel-heading">Insert Room Information</div>
			<div class="panel-body">
				<form action="" method="post">
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-3 col-form-label">Room No.</label>
				  <div class="col-xs-12">
					<input class="form-control" type="text" name="room_no" placeholder ="Enter room number" id="example-text-input">
				  </div>
				</div>
				
				
				<div class="form-group row">
					<label for="example-text-input" class="col-xs-12 col-form-label" >Enter each Column Capacity <small>(if no column exist enter 0)</small></label>
					<div class="col-xs-4">
					<input class="form-control" type="number" name="col_1" placeholder ="Col-1" id="example-text-input">
				  </div>
				  <div class="col-xs-4">
					<input class="form-control" type="number" name="col_2" placeholder ="Col-2" id="example-text-input">
				  </div>
				  <div class="col-xs-4">
					<input class="form-control" type="number" name="col_3" placeholder ="Col-3" id="example-text-input">
				  </div>
				  </div>
				<div class="form-group row">
					<label for="example-text-input" class="col-xs-12 col-form-label" ></label>
				  <div class="col-xs-4">
					<input class="form-control" type="number" name="col_4" placeholder ="Col-4" id="example-text-input">
				  </div>
				  <div class="col-xs-4">
					<input class="form-control" type="number" name="col_5" placeholder ="Col-5" id="example-text-input">
				  </div>
				   <div class="col-xs-4">
					<input class="form-control" type="number" name="col_6" placeholder ="Col-6" id="example-text-input">
				  </div>
				  </div>
				 <div class="form-group row">
					<label for="example-text-input" class="col-xs-12 col-form-label" ></label> 
				  <div class="col-xs-4">
					<input class="form-control" type="number" name="col_7" placeholder ="Col-7" id="example-text-input">
				  </div>
				  <div class="col-xs-4">
					<input class="form-control" type="number" name="col_8" placeholder ="Col-8" id="example-text-input">
				  </div>
				   <div class="col-xs-4">
					<input class="form-control" type="number" name="col_9" placeholder ="Col-9" id="example-text-input">
				  </div>
				</div>
						
				
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-6 col-form-label">Building <small>(DT5, CSEB, AB and MC only)</small></label>
				  <div class="col-xs-12">
					<input class="form-control" type="text" name="building_no" placeholder ="Enter Building" id="example-text-input">
				  </div>
				</div>
				</div>
				</div>
				<div class="form-group">
				<button for="example-time-input" type="submit" name="form_room"class="col-xs-3 btn btn-success">Save</button>
				</div>
				</form>
			</div>
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