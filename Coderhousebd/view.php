<?php
ob_start();
session_start();
if($_SESSION['name']!='coderhousebd')
{
	header('location: login.php');
}
?>
<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data View Page</title>
	
	<script>
		function confirm_delete() {
			return confirm('Are you sure want to delete this data?');
		}
	</script>
	
	
</head>
<body>

<h2>View All Data from Database</h2>

<?php  
//if(isset($error_message)) {echo $error_message;}
//if(isset($success_message)) {echo $success_message;}
?>

<br>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>Serial No</th>
		<th>Name</th>
		<th>Roll</th>
		<th>Age</th>
		<th>Email Address</th>
		<th>Action</th>
	</tr>
	<?php
	$i=0;
	
	$statement = $db->prepare("select * from tbl_student");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
		$i++;
		?>
		
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['st_name']; ?></td>
		<td><?php echo $row['st_roll']; ?></td>
		<td><?php echo $row['st_age']; ?></td>
		<td><?php echo $row['st_email']; ?></td>
		<td>
			<a href="update.php?id=<?php echo $row['st_id'];?>">Edit</a>&nbsp;|&nbsp;
			<a onclick="return confirm_delete();" href="delete.php?id=<?php echo $row['st_id']; ?>">Delete</a>
		</td>
		</tr>
		
		<?php
	}
	
	?>
	
	
</table>


<br>
<a href="index.php">back to previous</a>
	
</body>
</html>