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
if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
if(isset($_POST['form_batch'])) {

	try {
	
		if(empty($_POST['course_title'])) {
			throw new Exception('course_title can not be empty');
		}
		
		if(empty($_POST['course_id'])) {
			throw new Exception('course_id can not be empty');
		}
		
		if(empty($_POST['section'])) {
			throw new Exception('No. of section can not be empty');
		}
		if($_POST['section']<=0) {
			throw new Exception('No. of section must at least one');
		}
		
		if(empty($_POST['batch_no'])) {
			throw new Exception('batch_no can not be empty');
		}
		$course_details = $db->prepare("select * from tb_course where course_id=? and batch_no=?");
		$course_details->execute(array($_POST['course_id'],$_POST['batch_no']));
		$course_details = $course_details->rowCount();
		if($course_details > 0)
		{
			throw new Exception('Same Batch and Course already exist!');	
		}
		
		$statement = $db->prepare("update tb_course set course_title=?, course_id=? where batch_no=? and course_id=?");
		$statement->execute(array($_POST['course_title'],$_POST['course_id'], $_POST['batch_no'],$_POST['old_course_id']));
		
		$success_message = 'Data has been updated successfully.';
		header('location: batch_info.php');
	
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
    <title>Insert Couse::Exam Hall Manager</title>
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
						<li ><a href="batch_info.php">Batch<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li class="active"> <a href="insert_batch_info.php">Update Batch <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>  
						<li> <a href="insert_room_info.php">Insert room <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
						<li ><a href="insert_routine.php">Insert Routine<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a></li>        
						<li ><a href="insert_course_info.php">Insert Courses<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="#">Log off<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
					  </ul>
					</div>
				</div>
			</nav>
	<!-- ENDOF LEFT LIST-->
	
			<?php
				$course_title = $db->prepare("select * from tb_course where id=?");
				$course_title->execute(array($id));
				$rc = $course_title->fetchAll(PDO::FETCH_ASSOC);
				foreach($rc as $r)
				{
					$course_id = $r['course_id'];
					$course_title = $r['course_title'];
					$batch_id = $r['batch_no'];
					$section = $r['section'];
					
					$count = $db->prepare("select * from tb_course where batch_no=? and course_id=?");
					$count->execute(array($batch_id, $course_id));
					$count = $count->rowCount();
					
					
				}
			?>
			<div class="col-md-9 col-sm-4">
			<div class="panel panel-default">
			<div class="panel-heading">Insert Course Information</div>
			<div class="panel-body">
			<form action="" method="post">
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Course Name</label>
				  <div class="col-xs-8">
					<input class="form-control" type="text" name="course_title" value="<?php echo $course_title;?>" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Course ID</label>
				  <div class="col-xs-8">
					<input class="form-control" type="text" name="course_id" value="<?php echo $course_id;?>" id="example-text-input">
					<input class="form-control" type="hidden" name="old_course_id" value="<?php echo $course_id;?>" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">No. of Section</label>
				  <div class="col-xs-8">
					<input class="form-control" type="number" name="section" value="<?php echo $count;?>" id="example-text-input" readonly>
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Batch no.</label>
				  <div class="col-xs-8">
					<input class="form-control" type="text" name="batch_no" value="<?php echo $batch_id;?>" id="example-text-input" readonly>
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Evening</label>
				  <div class="col-xs-8">
				  <?php if(strpos($section,"EVE")=== false){?>
					  <label><input class="form-control" type="checkbox" name="even" value="no" id="example-text-input">Yes</label>
				  <?php }else{?>
					<label><input class="form-control" type="checkbox" name="even" value="yes" id="example-text-input" checked>Yes</label>
				  <?php }?>
				  </div>
				</div>
				</div>
				</div>
				<div class="form-group">
				<button for="example-time-input" type="submit" name="form_batch" class="col-xs-3 btn btn-success">Update</button>
				</div>
				</form>
			</div>
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