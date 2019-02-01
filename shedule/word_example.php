<?php
include('config.php');
ini_set('max_execution_time', 300); 
include('timetime.php');
require('fpdf181\fpdf.php');

class PDF extends FPDF
{
	function Header(){
		$this->SetFont('Arial','B',15);
		$this->Cell(43);
		$this->Cell(100,7,"Total Seat(s): 0000",0,0,'C');
		$this->Ln();
	}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);

$getxx = $pdf->GetX();
$getyy = $pdf->GetY();
$pdf->MultiCell(50,7,"Basic Functional English and English Spoken",'LR','C');
$pdf->SetXY($getxx+50,$getyy);
$pdf->MultiCell(50,7,"Basic Functional English and English Spoken",'LR','C');

$lineCount = array(0,0,0,0,0,0,0,0,0);
$subname = substring("Basic Functional English and English Spoken",8);
	  foreach($subname as $sn){	
	  $pdf->Cell(50,7,$sn,'LR','C');
	  $lineCount[0]++;
	  $pdf->Ln();
	  }
if(1 > 0) { while($lineCount[0]!=8){$pdf->Cell(50,7,"",'LR','C'); $lineCount[0]++;$pdf->Ln();}}	  
$pdf->Output();
?>