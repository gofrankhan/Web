<?php
$dbhost = 'localhost';
$dbname = 'coderhousebd';
$dbuser = 'root';
$dbpass = '';

try {
	//$db = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
	//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	$conn = mysqli_connect('localhost','root','', 'coderhousebd');
	mysqli_select_db($conn, 'coderhousebd');
	

// Check connection
	echo "Connected successfully";
}

catch(Exception $e) {
	echo "Connection error: ".$e->getMessage();
}
?>