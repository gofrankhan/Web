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
	
		if(empty($_POST['st_name'])) {
			throw new Exception('Name can not be empty');
		}
		
		if(empty($_POST['st_roll'])) {
			throw new Exception('Roll can not be empty');
		}
		
		if(empty($_POST['st_age'])) {
			throw new Exception('Age can not be empty');
		}
		
		if(empty($_POST['st_email'])) {
			throw new Exception('Email can not be empty');
		}
		
		
		//$result = mysql_query("insert into tbl_student (st_name,st_roll,st_age,st_email) values('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]') ");
		
		$statement = $db->prepare("insert into tbl_student (st_name,st_roll,st_age,st_email) values(?,?,?,?)");
		$statement->execute(array($_POST['st_name'],$_POST['st_roll'],$_POST['st_age'],$_POST['st_email']));
		
		$success_message = 'Data has been inserted successfully.';
		
	
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
	<title>Data Insert Page</title>
</head>
<body>

<h2>Insert Data</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<form action="" method="post">
<table>
	<tr>
		<td>Name: </td>
		<td><input type="text" name="st_name"></td>
	</tr>
	<tr>
		<td>Roll: </td>
		<td><input type="text" name="st_roll"></td>
	</tr>
	<tr>
		<td>Age: </td>
		<td><input type="text" name="st_age"></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><input type="text" name="st_email"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Insert" name="form1"></td>
	</tr>
</table>
</form>


<br>
<a href="index.php">back to previous</a>
	
</body>
</html>