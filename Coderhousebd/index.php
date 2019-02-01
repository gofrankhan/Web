<?php
ob_start();
session_start();
if($_SESSION['name']!='coderhousebd')
{
	header('location: login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to php-mysql database connection project</title>
</head>
<body>

<h2>Select your option</h2>

<ul>
	<li><a href="insert.php">Insert Data</a></li>
	<li><a href="view.php">Show Data</a></li>
	<li><a href="change_password.php">Change Password</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
	
</body>
</html>