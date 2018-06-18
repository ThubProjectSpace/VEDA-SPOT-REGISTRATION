<?php
require('../fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->setXY('80','48');
$pdf->Cell('0','0','Hello World!');

$pdf->setXY('80','78');
$pdf->Cell('0','0','Hello World!');

$pdf->Output();
?>
