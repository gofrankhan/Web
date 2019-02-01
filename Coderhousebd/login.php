<?php

if(isset($_POST['form_login'])) 
{
	
	try {
	
		
		if(empty($_POST['username'])) {
			throw new Exception('Username can not be empty');
		}
		
		if(empty($_POST['password'])) {
			throw new Exception('Password can not be empty');
		}
	
		
		$password = $_POST['password']; // admin
		$password = md5($password);
	
	
		include('config.php');
		$num=0;
		//$result = mysql_query("select * from tbl_login where username='$_POST[username]' and password='$password'");
		//$num = mysql_num_rows($result);
		
		
		/*
		$statement = $db->prepare("select * from tbl_login where username=:username and password=:password");
		$statement->bindParam(":username", $_POST['username']);
		$statement->bindParam(":password", $password);
		$statement->execute();
		*/
		
		$statement = $db->prepare("select * from tbl_login where username=? and password=?");
		$statement->execute(array($_POST['username'],$password));		
		
		$num = $statement->rowCount();
		
		if($num>0) 
		{
			session_start();
			$_SESSION['name'] = "coderhousebd";
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


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<?php
if(isset($error_message))
{
	echo $error_message;
}
?>
<br>
<form action="" method="post">
<table>
	<tr>
		<td>Username: </td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Login" name="form_login"></td>
	</tr>
</table>
</form>


	
</body>
</html>