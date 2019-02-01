<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
include('config.php');
$myFile = "data.txt";
$lines = file($myFile);//file in to an array

$new_flag = 0;
$course_id = "";
$batch_id = "";
$course_title = "";
$section = "";
$std_count = 0;
$tech_init = "";

foreach($lines as $line) 
{
	if(strpos($line,"new")===0){
		$new_flag = 1;
		$course_id = "";
		$batch_id = "";
		$course_title = "";
	}else{
		if($new_flag == 1){
			$var = explode(' ', $line);
			$course_id = $var[0];
			$batch_id = $var[1];
			$count = 0;
			foreach($var as $v)
			{
				$count++;
				if($count>2){
					if(empty($course_title))
						$course_title = $v;
					else
						$course_title = $course_title." ".$v;
				}
			}
			$new_flag = 0;
		}else{
			$var = explode(' ', $line);
			$count = 0;
			foreach($var as $v)
			{
				if($count == 0)
					$section = $v;
				if($count == 2)
					$std_count = $v;
				if($count == 4)
					$tech_init = $v;
				$count++;
			}
			$course_avail = $db->prepare("select * from tb_course where course_id=? and course_title=? and section=? and batch_no=?");
			$course_avail->execute(array($course_id,$course_title,$section,$batch_id));
			$course_avail = $course_avail->rowCount();
			if($course_avail<=0){
				$statement = $db->prepare("insert into tb_course (course_title,course_id,section,std_reg,tech_name,batch_no) values(?,?,?,?,?,?)");
				$statement->execute(array($course_title,$course_id,$section,$std_count,$tech_init,$batch_id));
			}else{
				$statement = $db->prepare("update tb_course set std_reg=?, tech_name=? where batch_no=? and course_id=? and course_title=? and section=?");
				$statement->execute(array($std_count,$tech_init,$batch_id, $course_id, $course_title, $section));
			}
		}
	}
}
header('location: course_wise_registration.php');
?>