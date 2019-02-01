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
    <title>Show Registered Courses::Exam Hall Manager</title>
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
<body class="w3-light-green w3-content" style="max-width:1600px">
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
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href="room_status.php">ROOM</a></li>
		<li><a href="routine_view.php">ROUTINE</a></li>
		<li><a href="summary_view.php">SUMMARY</a></li>
		<li><a href="details_view.php">DETAILS</span></a></li>
        <li><a href="view.php">VIEW</a></li>
        
      </ul>
	  <ul class="nav navbar-nav navbar">
		<form class="navbar-form" role="search" action="" method="post">
				<div class="input-group add-on">
				  <input class="form-control" placeholder="Search" name="batch_search" id="srch-term" type="text">
				  <div class="input-group-btn">
					<button class="btn btn-default" type="submit" name="search"><i class="glyphicon glyphicon-search"></i></button>
				  </div>
				</div>
			  </form>
	  </ul>
      <ul class="nav navbar-nav navbar-right">
			
			<li><a href="insert_course_info.php" class="btn btn-xm pull-right" title="Add Course" ><span class="glyphicon glyphicon-plus"></span></a></li>
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
						<li class="active"><a href="batch_info.php">Batch<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="insert_batch_info.php">Insert batch <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a> 
						<li ><a href="insert_room_info.php">Insert room <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon "></span></a>        
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
				
				//$statement = $db->prepare("select distinct course_id from tb_course");
				//$statement->execute();
				//$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				//foreach($result as $row)
				//{
					$batch_id = $_POST['batch_search'];
				?>
			<?php
			try{
				$course_title = $db->prepare("select distinct course_id from tb_course where batch_no=?");
				$course_title->execute(array($batch_id));
				$course_title = $course_title->rowCount();
				if($course_title<=0){
					throw new Exception("Search value do not matched!");
				}
				
				
				?>
			<div class="panel panel-default">
			<div class="panel-heading"><b><i>Batch ID:  <?php echo  $batch_id; ?> </i></b></div>
			<div class="panel-body">
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th style="width: 30px;">Course Id</th>
				  <th style="width: 150px;">Course Name</th>
				  <th style="width: 30px;"align="center">Action</th>
				</tr>
			  </thead>
			  <?php

				$course_title = $db->prepare("select distinct course_id, course_title from tb_course where batch_no=?");
				$course_title->execute(array($batch_id));
				$rc = $course_title->fetchAll(PDO::FETCH_ASSOC);
				foreach($rc as $r)
				{
					
						$idofcourse = $db->prepare("select id from tb_course where course_id=? and batch_no=?");
						$idofcourse->execute(array($r['course_id'],$batch_id));
						$idof = $idofcourse->fetchAll(PDO::FETCH_ASSOC);
						foreach($idof as $idid)
						{
							$id = $idid['id'];
						}
							
					?>
			  <tbody>
				<tr>
				  <td style="width: 30px;"><?php echo  $r['course_id'];?></td>
				  <td style="width: 150px;"><?php echo  $r['course_title'];?></td>
				  <td style="width: 30px;" align="center">
				  <a href="update_batch.php?id=<?php echo $id;?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil" title = "Edit"></span></a>
				  <a onclick="return confirm_delete();" href="delete_batch.php?id=<?php echo $id; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" title="Delete"></span></a>
				  </td>
				</tr>
			  </tbody>
				<?php } 
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
				?>
			</table>
			</div>
			</div>
			<?php
			}else{
				$statement = $db->prepare("select distinct batch_no from tb_course order by batch_no asc");
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $row)
				{
					$batch_id = $row['batch_no'];
				?>
				
			<div class="panel panel-default">
			<div class="panel-heading"><b><i>Batch ID:  <?php echo  $batch_id;?></i></b></div>
			<div class="panel-body">
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th style="width: 30px;">Course Id</th>
				  <th style="width: 150px;">Course Name</th>
				  <th style="width: 30px;" align="center">Action</th>
				</tr>
			  </thead>
			  <?php

				$course_title = $db->prepare("select distinct course_id, course_title from tb_course where batch_no=?");
				$course_title->execute(array($batch_id));
				$rc = $course_title->fetchAll(PDO::FETCH_ASSOC);
				foreach($rc as $r)
				{
					$cid = $r['course_id'];
					$ct = $r['course_title'];
					
					$idofcourse = $db->prepare("select id from tb_course where course_id=? and batch_no=?");
					$idofcourse->execute(array($r['course_id'],$batch_id));
					$idof = $idofcourse->fetchAll(PDO::FETCH_ASSOC);
					foreach($idof as $idid)
					{
						$id = $idid['id'];
					}
				
				 ?>
			  <tbody>
				<tr>
				  <th style="width: 30px;"><?php echo  $r['course_id'];?></th>
				  <td style="width: 150px;"><?php echo  $r['course_title'];?></td>
				  <td style="width: 30px;" align="center">
				  <a href="update_batch.php?id=<?php echo $id;?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil" title = "Edit"></span></a>
				  <a onclick="return confirm_delete();" href="delete_batch.php?id=<?php echo $id; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" title = "Delete"></span></a>
				  </td>
				</tr>
			  </tbody>
				<?php } ?>
			</table>
			</div>
			</div>
			<?php }
				}
		
			?>
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