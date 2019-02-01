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
	$this->Cell(190,0,'','T');
	$this->Ln(1);
	$this->Cell(190,0,'','T');
	$this->Ln(5);
	$this->Cell(190,0,'','T');
	$this->Ln();
}

function Footer()
{
	$this->Cell(190,0,'','T');
}

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(15,7,"Dept.",1,0,'C');
$pdf->Cell(18,7,"ID",1,0,'C');
$pdf->Cell(57,7,"Course Title",1,0,'C');
$pdf->Cell(20,7,"Tech. Int.",1,0,'C');
$pdf->Cell(20,7,"Section",1,0,'C');
$pdf->Cell(20,7,"Room No",1,0,'C');
$pdf->Cell(20,7,"Seat(s)",1,0,'C');
$pdf->Cell(20,7,"Total",1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',10);

$total = 1;
$countCourse = 0;
$countSection = 0;
$countRoom = 0;

$st_time = $db->prepare("select course_id, course_title, batch_no from tb_routine where date=? and start_time=? order by course_id asc");
$st_time->execute(array($date,$time));
$countCourse = $st_time->rowCount();
$r_time = $st_time->fetchAll(PDO::FETCH_ASSOC);
foreach($r_time as $row_time)
{
	$course_id = $row_time['course_id'];
	$course_title = $row_time['course_title'];
	$batch_no = $row_time['batch_no'];
	
	 $st_course = $db->prepare("select * from tb_course where course_id=? and batch_no=? order by section asc");
	 $st_course->execute(array($course_id,$batch_no));
	 $countSection = $st_course->rowCount();
	 $r_course = $st_course->fetchAll(PDO::FETCH_ASSOC);
	 $currentSectionCount = 0;
	 foreach($r_course as $row_course)
	 {
		 $tech_int = $row_course['tech_name'];
		 $section = $row_course['section'];
		 $t_count = $row_course['std_reg'] + 1;
		 $total = $total + $t_count;
		 
		 $st_details = $db->prepare("select room_no, count from tb_details_count where course_id=? and batch_no=? and section=? and date=? and time=? order by section asc");
		 $st_details->execute(array($course_id,$batch_no,$section,$date,$time));
		 $countRoom = $st_details->rowCount();
		 $r_details = $st_details->fetchAll(PDO::FETCH_ASSOC);
		 $currentRoomCount = 0;
		 $line_flag = 0;
		 foreach($r_details as $row_details)
		 {
			 $room_no = $row_details['room_no'];
			 $count = $row_details['count'];
			
			 if($currentSectionCount == 0){
                    if(strpos($section,"NFE")!==false)
                        $pdf->Cell(15,7,"NFE","LR",'C');
                    else
					 $pdf->Cell(15,7,"CSE","LR",'C');
					 $pdf->Cell(18,7,$course_id,"LR",'C');
					 $word_length = strlen($course_title);
					 if($word_length>=30){
						$line_flag = 1;
						$course_title1 = splitstring($course_title,0);
						$course_title2 = splitstring($course_title,1);
						$pdf->Cell(57,7,$course_title1,"LR",'C');
					 }else{
						$pdf->Cell(57,7,$course_title,"LR",'C'); 
					 }
				 }else{
					 $pdf->Cell(15,7,"","LR",'C');
					 $pdf->Cell(18,7,"","LR",'C');
					 if($line_flag>0){
						 $pdf->Cell(57,7,$course_title2,"LR",'C');
						 $line_flag = 0;
					 }else{
						$pdf->Cell(57,7,"","LR",'C');
					 }
				 }
			 if($currentRoomCount == 0){
				 $str_tech_init = splitstring($tech_int,0);
				 $pdf->Cell(20,7,$str_tech_init,"",'C');
				 $pdf->Cell(20,7,$section,"LR",'C');
			 }else 
			 {
				 $pdf->Cell(20,7,"","LR",'C');
				 $pdf->Cell(20,7,"","LR",'C');
			 }
			 $pdf->Cell(20,7,$room_no,1,0,'L');
			 $pdf->Cell(20,7,$count,1,0,'L');
			 if($currentRoomCount == 0){
				$pdf->Cell(20,7,$t_count,"LR",'C');
			 }else{
				 $pdf->Cell(20,7,"","LR",'C');
			 }
			 $currentRoomCount++;
			 $currentSectionCount++;
			 $pdf->Ln();
		 }
		 $pdf->Cell(90,0,'','LR');
		 $pdf->Cell(100,0,'','T');
		 $pdf->Ln();
	 }
	$pdf->Cell(190,0,'','T');
	$pdf->Ln();
}
$pdf->Cell(170,7,"Total",1,0,'L');
$pdf->Cell(20,7,$global_total,1,0,'L');
$pdf->Ln();
$pdf->Cell(190,0,'','T');
$pdf->Ln();

$pdf->Output();
?>