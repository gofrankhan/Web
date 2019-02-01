<?php
if(isset($_POST['login_form'])) 
{
	
	try {
		
		if(empty($_POST['username'])) {
			throw new Exception('Username can not be empty');
		}
		
		if(empty($_POST['password'])) {
			throw new Exception('Password can not be empty');
		}
	
		include('config.php');
		$num=0;
		
		$statement = $db->prepare("select * from tb_login where username=? and password=?");
		$statement->execute(array($_POST['username'],$_POST['password']));		
		
		$num = $statement->rowCount();
		
		if($num>0) 
		{
			session_start();
			$_SESSION['name'] = "schedule";
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			header("location: index.php");
		}
		else
		{
			throw new Exception('Invalid Username and/or password');
		}
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
}
		
?>
 
<html>
<head>
  <title>Log In page</title>
  <link rel="stylesheet" href="style-login.css">
</head>

<?php
if(isset($error_message))
{
	echo $error_message;
}
?>

<body>

	<div class="login-page">
	  <div class="form">
		<form class="login-form" action="" method="post">
		  <input type="text" name="username" placeholder="Username"/>
		  <input type="password" name="password" placeholder="Password"/>
		  <button type="submit" name="login_form">login</button>
		  <p class="message">Not registered? Please contact with Administrator.</p>
		</form>
	  </div>
	</div>

</body>

</html>