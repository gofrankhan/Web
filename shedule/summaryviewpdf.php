<?php
ob_start();
session_start();
if($_SESSION['name']!='schedule')
{
	header('location: login.php');
}
include('config.php');
ini_set('max_execution_time', 300); 
include('timetime.php');
require('fpdf181\fpdf.php');

if(isset($_POST['pdf'])) {
	$id = $_POST['pdf'];
	$statement = $db->prepare("select * from tb_room_column_status where id=?");
	$statement->execute(array($id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
			{
				$date = $row['date'];
				$time = $row['time'];
			}
	$global_total = 0;
	$statement = $db->prepare("select count from tb_details_count where date=? and time=?");
	$statement->execute(array($date,$time));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
			{
				$global_total += $row['count'];
			}
	$statement = $db->prepare("select * from tb_routine where start_time=?");
	$statement->execute(array($time));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
			{
				$slot = $row['slot'];
				$end_time = $row['end_time'];
			}
}

	$statement = $db->prepare("select * from tb_exam_info where id=?");
	$statement->execute(array(1));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
		$exam_name = $row['name'];
		$semester = $row['semester'];
	}
			
			
class PDF extends FPDF
{
	

function Header()
{
	global $date, $time,$exam_name,$semester,$slot,$end_time,$global_total;
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(43);
    // Title
	$this->Cell(100,7,$exam_name." Examination, ".$semester,0,0,'C');
	$this->Ln();
	$this->Cell(45);
    $date1 = date_create($date);
    $this->Cell(100,7,"Date: ".date_format($date1,'d-m-Y')."     Slot: ".$slot." (".ampmtime($time)." - ".ampmtime($end_time).")",0,0,'C');
	$this->Ln();
	$this->Cell(47);
    $this->Cell(100,7,"Total Seat(s): ".$global_total,0,0,'C');
    // Line break
    $this->Ln(10);
	$this->Cell(185,0,'','T');
	$this->Ln(1);
	$this->Cell(185,0,'','T');
	$this->Ln(5);
	$this->Cell(185,0,'','T');
	$this->Ln();
}
function Footer()
{
	$this->Cell(185,0,'','T');
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(25,7,"Course ID",1,0,'L');
$pdf->Cell(55,7,"Course Title",1,0,'L');
$pdf->Cell(20,7,"Section",1,0,'L');
$pdf->Cell(20,7,"Count",1,0,'L');
$pdf->Cell(65,7,"Rooms",1,0,'L');
$pdf->Ln();
$i=0;

$pdf->SetFont('Arial','',10);
$st_time = $db->prepare("select course_id, course_title, batch_no from tb_routine where date=? and start_time=? order by course_id asc");
$st_time->execute(array($date,$time));
$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
foreach($r_time as $row_time)
{
	$cid=$row_time['course_id'];
	$batch = $row_time['batch_no'];
	$course_title = $row_time['course_title'];
	
	$st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=? order by section asc");
	$st_course->execute(array($cid,$batch));
	$countCourse = $st_course->rowCount();
	$r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
	$currentCount = 0;
	$line_flag = 0;
	foreach($r_course as $row_course)
	{
		$section = $row_course['section'];
		$students = $row_course['std_reg'];
		if($currentCount == 0){
			$pdf->Cell(25,7,$cid,'LR','L');
			$word_length =  strlen($course_title);
			if($word_length>=30){
				$line_flag = 1;
				$course_title1 = splitstring($course_title,0);
				$course_title2 = splitstring($course_title,1);
				$pdf->Cell(55,7,$course_title1,'LR','L');
			}else{
				$pdf->Cell(55,7,$course_title,'LR','L');
			}
		}else{
			$pdf->Cell(25,7,"",'LR','L');
			if($line_flag>0){
				$pdf->Cell(55,7,$course_title2,'LR','L');
				$line_flag = 0;
			}
			else{
				$pdf->Cell(55,7,"",'LR','L');
			}
		}
		$pdf->Cell(20,7,$section,1,0,'L');
		$pdf->Cell(20,7,$students,1,0,'L');
		
		$rooms = "";
		$statement = $db->prepare("select * from tb_room_course_status where date=? and time=?");
		$statement->execute(array($date,$time));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row)
		{
			$flag = 1;
			$room_no = $row['room_no'];
			if(strpos($row['c1'],$cid) !== false && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c1'],$section)!== false){
						$flag = 0;
						$rooms = $rooms.$room_no.", ";
					}
				}
			}
			if(strpos($row['c2'],$cid) !== false && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c2'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c3'],$cid) !== false && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c3'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c4'],$cid) !== false && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c4'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c5'],$cid) !== false && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c5'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c6'],$cid) !== false  && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c6'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c7'],$cid) !== false  && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c7'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c8'],$cid) !== false  && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c8'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
			if(strpos($row['c9'],$cid) !== false  && $flag > 0){
				$statement1 = $db->prepare("select * from tb_room_section_status where date=? and time=? and room_no=?");
				$statement1->execute(array($date,$time, $room_no));
				$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
				foreach($result1 as $row1){
					if(strpos( $row1['c9'],$section)!== false){
						$rooms = $rooms.$room_no.", ";
						$flag = 0;
					}
				}
			}
		}
		$pdf->Cell(65,7,$rooms,1,0,'L');
		$pdf->Ln();
		$currentCount++;
	}
	$pdf->Cell(80,0,'','T');
	$pdf->Ln();
}


$pdf->Output();
?>