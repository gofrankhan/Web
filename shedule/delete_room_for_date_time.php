<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
?>
<?php
include('config.php');

if(isset($_POST['id'])) {
	$id = $_POST['id'];
	echo $id;
	$statement = $db->prepare("select * from tb_room_column_status where id=?");
	$statement->execute(array($id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
			{
				$date = $row['date'];
				$time = $row['time'];
			}
	echo $date." ".$time;
	$statement = $db->prepare("delete from tb_room_column_status where date=? and time=?");
	$statement->execute(array($date, $time));
	$statement = $db->prepare("delete from tb_room_column_str where date=? and time=?");
	$statement->execute(array($date, $time));
	$statement = $db->prepare("delete from tb_room_tech_name where date=? and time=?");
	$statement->execute(array($date, $time));
	$statement = $db->prepare("delete from tb_room_course_status where date=? and time=?");
	$statement->execute(array($date, $time));
	$statement = $db->prepare("delete from tb_room_course_name where date=? and time=?");
	$statement->execute(array($date, $time));
	$statement = $db->prepare("delete from tb_room_section_status where date=? and time=?");
	$statement->execute(array($date, $time));
	$statement = $db->prepare("delete from tb_details_count where date=? and time=?");
	$statement->execute(array($date, $time));
	echo $date." ".$time;	
	header('location: view.php');
}
else {
	header('location: view.php');
}