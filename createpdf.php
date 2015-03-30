<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->SetFont('Arial','B',16);
$pdf->AddPage();
$pdf->Cell(40,10,'hhhhhhhhhhhhhhhhhhhhhhh');
$pdf->Cell(200,10,"bbbbbbbbbbbbbbbbbbbbbbbb");
$pdf->Cell(40,10,"eeeeeeeeeeeeeeeeeeeeeeeee");
$pdf->header();
$pdf->Ln(20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(200,10,"CELL TEST 200,10");
$pdf->Cell(40,10,"STEVE");
$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
$pdf->Output();

echo "hello"; ////weeeeeeeeeeeeeeeeeeeeeee
?>