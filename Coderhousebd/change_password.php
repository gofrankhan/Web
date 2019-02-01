<?php
ob_start();
session_start();
if($_SESSION['name']!='coderhousebd')
{
	header('location: login.php');
}
?>
<?php
include('config.php');
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['old_password'])) {
			throw new Exception("Old password field can not be empty");
		}
		
		if(empty($_POST['new_password'])) {
			throw new Exception("New password field can not be empty");
		}
		
		if(empty($_POST['confirm_password'])) {
			throw new Exception("Confirm password field can not be empty");
		}
		
		// Checking old password
		$password = $_POST['old_password'];
		$password = md5($password);
		
		$num=0;
		
		
		$statement = $db->prepare("select * from tbl_login where password=?");
		$statement->execute(array($password));
		$num = $statement->rowCount();
		
		//$result = mysql_query("select * from tbl_login where password='$password'");
		//$num = mysql_num_rows($result);
		
		
		
		
		if($num==0) {
			throw new Exception("Old password is wrong!");
		}
		
		
		
		
		if($_POST['new_password'] != $_POST['confirm_password']) {
			throw new Exception("New passwords does not match!");
		}
		
		$new_password = $_POST['new_password'];
		$new_password = md5($new_password);
		
		$statement = $db->prepare("update tbl_login set password=? where id=1");
		$statement->execute(array($new_password));
		
		//$result = mysql_query("update tbl_login set password='$new_password' where id=1");
		
		$success_message = 'Password is changed successfully.';
		
	
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
	<title>Change Password Page</title>
</head>
<body>

<h2>Change Password</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<form action="" method="post">
<table>
	<tr>
		<td>Old Password: </td>
		<td><input type="text" name="old_password"></td>
	</tr>
	<tr>
		<td>New Password: </td>
		<td><input type="text" name="new_password"></td>
	</tr>
	<tr>
		<td>Confirm New Password: </td>
		<td><input type="text" name="confirm_password"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit" value="Update" name="form1"></td>
	</tr>
</table>
</form>


<br>
<a href="index.php">back to previous</a>
	
</body>
</html>