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

$maximumLength = array();

$statement = $db->prepare("select * from tb_room_column_status where date=? and time=?");
$statement->execute(array($date, $time));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row)
{
	$statementRoom = $db->prepare("select * from tb_rooms where room_no=?");
	$statementRoom->execute(array($row['room_no']));
	$resultRoom = $statementRoom->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultRoom as $rowRoom)
	{
		$column1 = $rowRoom['col_1'];
		$column2 = $rowRoom['col_2'];
		$column3 = $rowRoom['col_3'];
		$column4 = $rowRoom['col_4'];
		$column5 = $rowRoom['col_5'];
		$column6 = $rowRoom['col_6'];
		$column7 = $rowRoom['col_7'];
		$column8 = $rowRoom['col_8'];
		$column9 = $rowRoom['col_9'];
	}
	$columnCount = 0;
	
      if($column1 > 0) $columnCount++;
	  if($column2 > 0) $columnCount++;
	  if($column3 > 0) $columnCount++;
	  if($column4 > 0) $columnCount++;
	  if($column5 > 0) $columnCount++;
	  if($column6 > 0) $columnCount++;
	  if($column7 > 0) $columnCount++;
	  if($column8 > 0) $columnCount++;
	  if($column9 > 0) $columnCount++;
	
		$statname = $db->prepare("select * from tb_room_course_name where room_no=?  and date=? and time=?");
		$statname->execute(array($row['room_no'], $date, $time));
		$resultname = $statname->fetchAll(PDO::FETCH_ASSOC);
		foreach($resultname as $rowname)
		{
			$maxLen = 0;
			if($column1>0){
				$str1 = substring($rowname['c1'],$columnCount);
				if(count($str1)>$maxLen)
					$maxLen = count($str1);
			}
			if($column2>0){
				$str2 = substring($rowname['c2'],$columnCount);
				if(count($str2)>$maxLen)
					$maxLen = count($str2);
			}
			if($column3>0){
				$str3 = substring($rowname['c3'],$columnCount);
				if(count($str3)>$maxLen)
					$maxLen = count($str3);
			}
			if($column4>0){
				$str4 = substring($rowname['c4'],$columnCount);
				if(count($str4)>$maxLen)
					$maxLen = count($str4);
			}
			if($column5>0){
				$str5 = substring($rowname['c5'],$columnCount);
				if(count($str5)>$maxLen)
					$maxLen = count($str5);
			}
			if($column6>0){
				$str6 = substring($rowname['c6'],$columnCount);
				if(count($str6)>$maxLen)
					$maxLen = count($str6);
			}
			if($column7>0){
				$str7 = substring($rowname['c7'],$columnCount);
				if(count($str7)>$maxLen)
					$maxLen = count($str7);
			}
			if($column8>0){
				$str8 = substring($rowname['c8'],$columnCount);
				if(count($str8)>$maxLen)
					$maxLen = count($str8);
			}
			if($column9>0){
				$str9 = substring($rowname['c9'],$columnCount);
				if(count($str9)>$maxLen)
					$maxLen = count($str9);
			}
			$maximumLength[] = $maxLen;
		}
}
$maximumLength[] = 0;
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
	global $date, $time,$exam_name,$semester,$slot,$end_time,$getxx,$getyy,$global_total;
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
}

}

 $pdf = new PDF();
// Column headings

$pdf->AddPage();
$room_Count = 1;
$totalLength = 0;
$maxChecker = 0;
$index = 0;
$statement = $db->prepare("select * from tb_room_column_status where date=? and time=?");
$statement->execute(array($date, $time));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row)
{
	$statementRoom = $db->prepare("select * from tb_rooms where room_no=?");
	$statementRoom->execute(array($row['room_no']));
	$resultRoom = $statementRoom->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultRoom as $rowRoom)
	{
		$column1 = $rowRoom['col_1'];
		$column2 = $rowRoom['col_2'];
		$column3 = $rowRoom['col_3'];
		$column4 = $rowRoom['col_4'];
		$column5 = $rowRoom['col_5'];
		$column6 = $rowRoom['col_6'];
		$column7 = $rowRoom['col_7'];
		$column8 = $rowRoom['col_8'];
		$column9 = $rowRoom['col_9'];
	}

	$room_no = $row['room_no'];
	$pdf->SetFont('Arial','B',13);
	$pdf->Ln(5);
	$pdf->Cell(10,6,"Room No. : ".$room_no,0,'LR');
	$pdf->Ln(10);
	
	  $columnCount = 0;
	
      if($column1 > 0) $columnCount++;
	  if($column2 > 0) $columnCount++;
	  if($column3 > 0) $columnCount++;
	  if($column4 > 0) $columnCount++;
	  if($column5 > 0) $columnCount++;
	  if($column6 > 0) $columnCount++;
	  if($column7 > 0) $columnCount++;
	  if($column8 > 0) $columnCount++;
	  if($column9 > 0) $columnCount++;	
	  
	  $columnLength = 190/$columnCount;
		
	  if($column1 > 0) $pdf->Cell($columnLength,7,"Col-1",1,0,'C');
	  if($column2 > 0) $pdf->Cell($columnLength,7,"Col-2",1,0,'C');
	  if($column3 > 0) $pdf->Cell($columnLength,7,"Col-3",1,0,'C');
	  if($column4 > 0) $pdf->Cell($columnLength,7,"Col-4",1,0,'C');
	  if($column5 > 0) $pdf->Cell($columnLength,7,"Col-5",1,0,'C');
	  if($column6 > 0) $pdf->Cell($columnLength,7,"Col-6",1,0,'C');
	  if($column7 > 0) $pdf->Cell($columnLength,7,"Col-7",1,0,'C');
	  if($column8 > 0) $pdf->Cell($columnLength,7,"Col-8",1,0,'C');
	  if($column9 > 0) $pdf->Cell($columnLength,7,"Col-9",1,0,'C');
	$pdf->Ln();
	
	$pdf->SetFont('Arial','',9);
	
	
	$statname = $db->prepare("select * from tb_room_course_name where room_no=?  and date=? and time=?");
	$statname->execute(array($row['room_no'], $date, $time));
	$resultname = $statname->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultname as $rowname)
	{
		$maxLen = 0;
		if($column1>0){
			$str1 = substring($rowname['c1'],$columnCount);
			if(count($str1)>$maxLen)
				$maxLen = count($str1);
		}
		if($column2>0){
			$str2 = substring($rowname['c2'],$columnCount);
			if(count($str2)>$maxLen)
				$maxLen = count($str2);
		}
		if($column3>0){
			$str3 = substring($rowname['c3'],$columnCount);
			if(count($str3)>$maxLen)
				$maxLen = count($str3);
		}
		if($column4>0){
			$str4 = substring($rowname['c4'],$columnCount);
			if(count($str4)>$maxLen)
				$maxLen = count($str4);
		}
		if($column5>0){
			$str5 = substring($rowname['c5'],$columnCount);
			if(count($str5)>$maxLen)
				$maxLen = count($str5);
		}
		if($column6>0){
			$str6 = substring($rowname['c6'],$columnCount);
			if(count($str6)>$maxLen)
				$maxLen = count($str6);
		}
		if($column7>0){
			$str7 = substring($rowname['c7'],$columnCount);
			if(count($str7)>$maxLen)
				$maxLen = count($str7);
		}
		if($column8>0){
			$str8 = substring($rowname['c8'],$columnCount);
			if(count($str8)>$maxLen)
				$maxLen = count($str8);
		}
		if($column9>0){
			$str9 = substring($rowname['c9'],$columnCount);
			if(count($str9)>$maxLen)
				$maxLen = count($str9);
		}
		for($i = 0; $i < $maxLen; $i++){
			if($column1>0){
				if($i < count($str1))
					$pdf->Cell($columnLength,5,$str1[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column2>0){
				if($i < count($str2))
					$pdf->Cell($columnLength,5,$str2[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column3>0){
				if($i < count($str3))
					$pdf->Cell($columnLength,5,$str3[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column4>0){
				if($i < count($str4))
					$pdf->Cell($columnLength,5,$str4[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column5>0){
				if($i < count($str5))
					$pdf->Cell($columnLength,5,$str5[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column6>0){
				if($i < count($str6))
					$pdf->Cell($columnLength,5,$str6[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column7>0){
				if($i < count($str7))
					$pdf->Cell($columnLength,5,$str7[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column8>0){
				if($i < count($str8))
					$pdf->Cell($columnLength,5,$str8[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			if($column9>0){
				if($i < count($str9))
					$pdf->Cell($columnLength,5,$str9[$i],"LR",'L');
				else
					$pdf->Cell($columnLength,5,"","LR",'L');
			}
			$pdf->Ln();
		}
		//$pdf->Cell(185,0,'','T');
	}
	//$pdf->Ln();
	$pdf->SetFont('Arial','B',9);
	$statcourse = $db->prepare("select * from tb_room_course_status where room_no=?  and date=? and time=?");
	$statcourse->execute(array($row['room_no'], $date, $time));
	$resultcourse = $statcourse->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultcourse as $rowcourse)
	{
	  if($column1 > 0) $pdf->Cell($columnLength,5,$rowcourse['c1'],"LR",'L');
	  if($column2 > 0) $pdf->Cell($columnLength,5,$rowcourse['c2'],"LR",'L');
	  if($column3 > 0) $pdf->Cell($columnLength,5,$rowcourse['c3'],"LR",'L');
	  if($column4 > 0) $pdf->Cell($columnLength,5,$rowcourse['c4'],"LR",'L');
	  if($column5 > 0) $pdf->Cell($columnLength,5,$rowcourse['c5'],"LR",'L');
	  if($column6 > 0) $pdf->Cell($columnLength,5,$rowcourse['c6'],"LR",'L');
	  if($column7 > 0) $pdf->Cell($columnLength,5,$rowcourse['c7'],"LR",'L');
	  if($column8 > 0) $pdf->Cell($columnLength,5,$rowcourse['c8'],"LR",'L');
	  if($column9 > 0) $pdf->Cell($columnLength,5,$rowcourse['c9'],"LR",'L');
	}
	$pdf->Ln();
	$pdf->SetFont('Arial','',9);
	$statsec = $db->prepare("select * from tb_room_section_status where room_no=?  and date=? and time=?");
	$statsec->execute(array($row['room_no'], $date, $time));
	$resultsec = $statsec->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultsec as $rowsec)
	{ 
		$section1 = $rowsec['c1'];
		$section2 = $rowsec['c2'];
		$section3 = $rowsec['c3'];
		$section4 = $rowsec['c4'];
		$section5 = $rowsec['c5'];
		$section6 = $rowsec['c6'];
		$section7 = $rowsec['c7'];
		$section8 = $rowsec['c8'];
		$section9 = $rowsec['c9'];
	}
	//$pdf->Ln();
	$two = 0;
	$secLen = 0;
	$stattech = $db->prepare("select * from tb_room_tech_name where room_no=?  and date=? and time=?");
	$stattech->execute(array($row['room_no'], $date, $time));
	$resulttech = $stattech->fetchAll(PDO::FETCH_ASSOC);
	foreach($resulttech as $rowtech)
	{
		if($columnCount==5)$secLen = 14;
		if($columnCount==6)$secLen = 12;
		if($columnCount==7)$secLen = 11;
		if($columnCount==8)$secLen = 9;
		if($columnCount==9)$secLen = 8;
		if($columnCount>=5){
		if(strlen($section1.$rowtech['c1'])>=$secLen)$two = 1;
		if(strlen($section2.$rowtech['c2'])>=$secLen)$two = 1;
		if(strlen($section3.$rowtech['c3'])>=$secLen)$two = 1;
		if(strlen($section4.$rowtech['c4'])>=$secLen)$two = 1;
		if(strlen($section5.$rowtech['c5'])>=$secLen)$two = 1;
		if(strlen($section6.$rowtech['c6'])>=$secLen)$two = 1;
		if(strlen($section7.$rowtech['c7'])>=$secLen)$two = 1;
		if(strlen($section8.$rowtech['c8'])>=$secLen)$two = 1;
		if(strlen($section9.$rowtech['c9'])>=$secLen)$two = 1;
		}
	}
	$stattech = $db->prepare("select * from tb_room_tech_name where room_no=?  and date=? and time=?");
	$stattech->execute(array($row['room_no'], $date, $time));
	$resulttech = $stattech->fetchAll(PDO::FETCH_ASSOC);
	foreach($resulttech as $rowtech)
	{
		if($two==1){
			if($column1 > 0)if(!empty($section1)){if(strlen($section1.$rowtech['c1'])<$secLen)$pdf->Cell($columnLength,5,$section1."(".$rowtech['c1'].")","LR",'L');else $pdf->Cell($columnLength,5,$section1,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column2 > 0)if(!empty($section2)){if(strlen($section2.$rowtech['c2'])<$secLen)$pdf->Cell($columnLength,5,$section2."(".$rowtech['c2'].")","LR",'L');else $pdf->Cell($columnLength,5,$section2,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column3 > 0)if(!empty($section3)){if(strlen($section3.$rowtech['c3'])<$secLen)$pdf->Cell($columnLength,5,$section3."(".$rowtech['c3'].")","LR",'L');else $pdf->Cell($columnLength,5,$section3,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column4 > 0)if(!empty($section4)){if(strlen($section4.$rowtech['c4'])<$secLen)$pdf->Cell($columnLength,5,$section4."(".$rowtech['c4'].")","LR",'L');else $pdf->Cell($columnLength,5,$section4,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column5 > 0)if(!empty($section5)){if(strlen($section5.$rowtech['c5'])<$secLen)$pdf->Cell($columnLength,5,$section5."(".$rowtech['c5'].")","LR",'L');else $pdf->Cell($columnLength,5,$section5,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column6 > 0)if(!empty($section6)){if(strlen($section6.$rowtech['c6'])<$secLen)$pdf->Cell($columnLength,5,$section6."(".$rowtech['c6'].")","LR",'L');else $pdf->Cell($columnLength,5,$section6,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column7 > 0)if(!empty($section7)){if(strlen($section7.$rowtech['c7'])<$secLen)$pdf->Cell($columnLength,5,$section7."(".$rowtech['c7'].")","LR",'L');else $pdf->Cell($columnLength,5,$section7,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column8 > 0)if(!empty($section8)){if(strlen($section8.$rowtech['c8'])<$secLen)$pdf->Cell($columnLength,5,$section8."(".$rowtech['c8'].")","LR",'L');else $pdf->Cell($columnLength,5,$section8,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column9 > 0)if(!empty($section9)){if(strlen($section9.$rowtech['c9'])<$secLen)$pdf->Cell($columnLength,5,$section9."(".$rowtech['c9'].")","LR",'L');else $pdf->Cell($columnLength,5,$section9,"LR",'L');} else $pdf->Cell($columnLength,5,"","LR",'L');
			$pdf->Ln();
			if($column1 > 0)if(!empty($section1)){if(strlen($section1.$rowtech['c1'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c1'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column2 > 0)if(!empty($section2)){if(strlen($section2.$rowtech['c2'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c2'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column3 > 0)if(!empty($section3)){if(strlen($section3.$rowtech['c3'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c3'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column4 > 0)if(!empty($section4)){if(strlen($section4.$rowtech['c4'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c4'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column5 > 0)if(!empty($section5)){if(strlen($section5.$rowtech['c5'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c5'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column6 > 0)if(!empty($section6)){if(strlen($section6.$rowtech['c6'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c6'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column7 > 0)if(!empty($section7)){if(strlen($section7.$rowtech['c7'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c7'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column8 > 0)if(!empty($section8)){if(strlen($section8.$rowtech['c8'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c8'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			if($column9 > 0)if(!empty($section9)){if(strlen($section9.$rowtech['c9'])<$secLen)$pdf->Cell($columnLength,5,"","LR",'L');else $pdf->Cell($columnLength,5,$rowtech['c9'],"LR",'L');}else $pdf->Cell($columnLength,5,"","LR",'L');
			
		}else{
		
		  if($column1 > 0) if(!empty($section1))$pdf->Cell($columnLength,5,$section1."(".$rowtech['c1'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column2 > 0) if(!empty($section2))$pdf->Cell($columnLength,5,$section2."(".$rowtech['c2'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column3 > 0) if(!empty($section3))$pdf->Cell($columnLength,5,$section3."(".$rowtech['c3'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column4 > 0) if(!empty($section4))$pdf->Cell($columnLength,5,$section4."(".$rowtech['c4'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column5 > 0) if(!empty($section5))$pdf->Cell($columnLength,5,$section5."(".$rowtech['c5'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column6 > 0) if(!empty($section6))$pdf->Cell($columnLength,5,$section6."(".$rowtech['c6'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column7 > 0) if(!empty($section7))$pdf->Cell($columnLength,5,$section7."(".$rowtech['c7'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column8 > 0) if(!empty($section8))$pdf->Cell($columnLength,5,$section8."(".$rowtech['c8'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		  if($column9 > 0) if(!empty($section9))$pdf->Cell($columnLength,5,$section9."(".$rowtech['c9'].")","LR",'L');else $pdf->Cell($columnLength,5,"","LR",'L');
		}
	}
	$pdf->Ln();
	
	$statStatus = $db->prepare("select * from tb_room_column_status where room_no=?  and date=? and time=?");
	$statStatus->execute(array($row['room_no'], $date, $time));
	$resultStatus = $statStatus->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultStatus as $rowStatus)
	{ 
		$currentStatus1 = $rowStatus['c1'];
		$currentStatus2 = $rowStatus['c2'];
		$currentStatus3 = $rowStatus['c3'];
		$currentStatus4 = $rowStatus['c4'];
		$currentStatus5 = $rowStatus['c5'];
		$currentStatus6 = $rowStatus['c6'];
		$currentStatus7 = $rowStatus['c7'];
		$currentStatus8 = $rowStatus['c8'];
		$currentStatus9 = $rowStatus['c9'];
	}
	
	$statstr = $db->prepare("select * from tb_room_column_str where room_no=?  and date=? and time=?");
	$statstr->execute(array($row['room_no'], $date, $time));
	$resultstr = $statstr->fetchAll(PDO::FETCH_ASSOC);
	foreach($resultstr as $rowstr)
	{ 
	  if($column1 > 0) if($currentStatus1<$column1 && $currentStatus1!=0)$pdf->Cell($columnLength,7,$rowstr['c1']."/".$column1,1,0,'L');else if($currentStatus1==0)$pdf->Cell($columnLength,7,$column1,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c1'],1,0,'L');
	  if($column2 > 0) if($currentStatus2<$column2 && $currentStatus2!=0)$pdf->Cell($columnLength,7,$rowstr['c2']."/".$column2,1,0,'L');else if($currentStatus2==0)$pdf->Cell($columnLength,7,$column2,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c2'],1,0,'L');
	  if($column3 > 0) if($currentStatus3<$column3 && $currentStatus3!=0)$pdf->Cell($columnLength,7,$rowstr['c3']."/".$column3,1,0,'L');else if($currentStatus3==0)$pdf->Cell($columnLength,7,$column3,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c3'],1,0,'L');
	  if($column4 > 0) if($currentStatus4<$column4 && $currentStatus4!=0)$pdf->Cell($columnLength,7,$rowstr['c4']."/".$column4,1,0,'L');else if($currentStatus4==0)$pdf->Cell($columnLength,7,$column4,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c4'],1,0,'L');
	  if($column5 > 0) if($currentStatus5<$column5 && $currentStatus5!=0)$pdf->Cell($columnLength,7,$rowstr['c5']."/".$column5,1,0,'L');else if($currentStatus5==0)$pdf->Cell($columnLength,7,$column5,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c5'],1,0,'L');
	  if($column6 > 0) if($currentStatus6<$column6 && $currentStatus6!=0)$pdf->Cell($columnLength,7,$rowstr['c6']."/".$column6,1,0,'L');else if($currentStatus6==0)$pdf->Cell($columnLength,7,$column6,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c6'],1,0,'L');
	  if($column7 > 0) if($currentStatus7<$column7 && $currentStatus7!=0)$pdf->Cell($columnLength,7,$rowstr['c7']."/".$column7,1,0,'L');else if($currentStatus7==0)$pdf->Cell($columnLength,7,$column7,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c7'],1,0,'L');
	  if($column8 > 0) if($currentStatus8<$column8 && $currentStatus8!=0)$pdf->Cell($columnLength,7,$rowstr['c8']."/".$column8,1,0,'L');else if($currentStatus8==0)$pdf->Cell($columnLength,7,$column8,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c8'],1,0,'L');
	  if($column9 > 0) if($currentStatus9<$column9 && $currentStatus9!=0)$pdf->Cell($columnLength,7,$rowstr['c9']."/".$column9,1,0,'L');else if($currentStatus9==0)$pdf->Cell($columnLength,7,$column9,1,0,'L');else $pdf->Cell($columnLength,7,$rowstr['c9'],1,0,'L');
	}
	$pdf->Ln(10);
	//$pdf->Cell($columnLength,5,$room_Count,1,0,'L');
	//$pdf->Ln(10);
	$totalLength += $maximumLength[$index];
	if($room_Count>2)$maxChecker = 12;else $maxChecker = 18;
	if(($totalLength + $maximumLength[$index+1] > $maxChecker) || $room_Count>3){
		$totalLength = 0;
		$room_Count = 0;
		$pdf->AddPage();
		$pdf->AliasNbPages();
	}
	$room_Count++;
	$index++;
}

$pdf->AliasNbPages();
$pdf->SetFont('Arial','',14);
$pdf->Output();
?>