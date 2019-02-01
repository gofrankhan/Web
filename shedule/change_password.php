<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>
<?php include('config.php'); 
if(isset($_POST['form_change_password'])) {
	function do_success($msg) 
		{
			echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
		}

	try {
		
		if(empty($_POST['old_password'])) {
			throw new Exception('old_password can not be empty');
		}
		
		if(empty($_POST['new_password'])) {
			throw new Exception('new_password can not be empty');
		}
		
		if(empty($_POST['re_new_password'])) {
			throw new Exception('re_new_password can not be empty');
		}
		
		if(strcmp($password,$_POST['old_password'])!=0){
			throw new Exception('Old password is not currect');
		}
		
		$pass1 = $_POST['new_password'];
		$pass2 = $_POST['re_new_password'];
		
		if(strcmp($pass1,$pass2) != 0){
			throw new Exception('new password mismatch');
		}
		
		$statement = $db->prepare("update tb_login set password=? where username=?");
		$statement->execute(array($_POST['new_password'],$username));
		
		$success_message = 'Data has been inserted successfully.';
		
		do_success($success_message);
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
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
    <title>Change Password</title>
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
					   <li ><a href="exam_registration.php">Exam Registration<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li><a href="settings.php">Block Room<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="big_room.php">Big Room<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li><a href="building_priority.php">Set Building Priority<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="block_course.php">Block Course<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="user_register.php">User Registration<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li class="active"><a href="change_password.php">Change Password<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
						<li ><a href="#">Log off<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon"></span></a></li>
					  </ul>
					</div>
				</div>
			</nav>
			<div class="col-md-9 col-sm-4">
				<form action="" method="post">
				<div class="panel panel-default">
				<div class="panel-heading">Change Password</div>
				<div class="panel-body">
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Old Password</label>
				  <div class="col-xs-8">
					<input class="form-control" type="password" name="old_password"  placeholder="Old password" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">New Password</label>
				  <div class="col-xs-8">
					<input class="form-control" type="password" name="new_password"  placeholder="New password" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Re-enter new password</label>
				  <div class="col-xs-8">
					<input class="form-control" type="password" name="re_new_password"  placeholder="Re-enter new Password" id="example-text-input">
				  </div>
				</div>
				</div>
				</div>
				<div class="form-group">
					<button for="example-time-input" type="submit" name="form_change_password"class="col-xs-3 btn btn-success">Change Password</button>
				</div>
				</form>
			</div>
			
	</div>
	<!-- ENDOF LEFT LIST-->
		<!-- Overlay effect when opening sidenav on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

         <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px">
            
        </div>
        </div>
		</d>
    </div>
  </div>
</body>
</html>