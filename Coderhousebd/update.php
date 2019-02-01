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

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
else {
	header('location: view.php');
}

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
		
		
		//$result = mysql_query("update tbl_student set st_name='$_POST[st_name]',st_roll='$_POST[st_roll]',st_age='$_POST[st_age]',st_email='$_POST[st_email]' where st_id='$id'");
		
		$statement = $db->prepare("update tbl_student set st_name=?,st_roll=?,st_age=?,st_email=? where st_id=?");
		$statement->execute(array($_POST['st_name'],$_POST['st_roll'],$_POST['st_age'],$_POST['st_email'],$id));	
					
		
		$success_message = 'Data has been updated successfully.';
		
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
	<title>Data Update Page</title>
</head>
<body>

<h2>Update Data</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<?php

$statement = $db->prepare("select * from tbl_student where st_id=?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row)
{
	$st_name_old = $row['st_name'];
	$st_roll_old = $row['st_roll'];
	$st_age_old = $row['st_age'];
	$st_email_old = $row['st_email'];
}

?>


<form action="" method="post">
<table>
	<tr>
		<td>Name: </td>
		<td><input type="text" name="st_name" value="<?php echo $st_name_old; ?>"></td>
	</tr>
	<tr>
		<td>Roll: </td>
		<td><input type="text" name="st_roll" value="<?php echo $st_roll_old; ?>"></td>
	</tr>
	<tr>
		<td>Age: </td>
		<td><input type="text" name="st_age" value="<?php echo $st_age_old; ?>"></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><input type="text" name="st_email" value="<?php echo $st_email_old; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update" name="form1"></td>
	</tr>
</table>

<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>


<br>
<a href="index.php">back to previous</a>
	
</body>
</html>