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

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
	echo $id;
	$statement = $db->prepare("select room_no from tb_rooms where r_id=?");
	$statement->execute(array($id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
			{
				$room_no = $row['room_no'];
			}
	echo $room_no;
	$statement = $db->prepare("delete from tb_block_room where room_no=?");
	$statement->execute(array($room_no));
	
	$statement = $db->prepare("delete from tb_rooms where r_id=?");
	$statement->execute(array($id));
	//$result = mysql_query("delete from tbl_student where st_id='$id'");
		
	header('location: room_status.php');
}
else {
	header('location: room_status.php');
}