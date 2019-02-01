<?php
require('fpdf181\fpdf.php');

class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(35,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(35,6,$col,1);
        $this->Ln();
    }
}

// Better table
function ImprovedTable($header, $data)
{
    // Column widths
    $w = array(40, 35, 40, 40, 40);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
	$middlecell = 0;
    foreach($data as $row)
    {
		$middlecell++;
		if($middlecell == 3)
			$this->Cell($w[0],6,$row[0],'LR');
		else
			$this->Cell($w[0],6,'','LR');
		$this->Cell($w[1],6,$row[1],1,'LR');
        $this->Cell($w[2],6,$row[2],1,'LR');
        $this->Cell($w[3],6,$row[3],1,'LR');
        $this->Cell($w[4],6,$row[4],1,'LR');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 40);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
		$this->Cell($w[0],6,$row[0],'LR',$fill);
		$this->Cell($w[1],6,number_format($row[1]),'LR',0,'R',$fill);
        $this->Cell($w[2],6,$row[2],'LR',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Cell($w[4],6,$row[4],'LR',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('Sectin', 'No of Student', 'Tech Int.', 'Batch', 'Action');
// Data loading
$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',14);
//$pdf->AddPage();
//$pdf->BasicTable($header,$data);
$pdf->AddPage();
$pdf->ImprovedTable($header,$data);
//$pdf->AddPage();
//$pdf->FancyTable($header,$data);
$pdf->Output();
?>