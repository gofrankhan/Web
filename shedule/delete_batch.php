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
	
	$statement = $db->prepare("select course_id, batch_no from tb_course where id=?");
	$statement->execute(array($id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
			{
				$course_id = $row['course_id'];
				$batch_no = $row['batch_no'];
			}
	$statement1 = $db->prepare("delete from tb_block_course where course_id=? and batch_no=?");
	$statement1->execute(array($course_id,$batch_no));
	
	$statement = $db->prepare("delete from tb_course where course_id=? and batch_no=?");
	$statement->execute(array($course_id,$batch_no));
	
	//$result = mysql_query("delete from tbl_student where st_id='$id'");
		
	header('location: batch_info.php');
}
else {
	header('location: batch_info.php');
}