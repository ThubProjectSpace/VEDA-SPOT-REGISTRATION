<?php
require('plugins/fpdf181/fpdf.php');
include 'api/config.php';
session_start();


$rol=base64_decode($_GET['id']);

$query="SELECT * FROM `student` WHERE `id`='".$rol."'";
$result =mysqli_query($con,$query);
$fetch=mysqli_fetch_array($result);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('images/receipt.jpg','0','0','210');
$pdf->SetFont('Arial','B',8);




// first part

$pdf->setXY('40','27');
$pdf->Cell('0','0','id');

$pdf->setXY('40','33');
$pdf->Cell('0','0',$fetch['rollno']);

$pdf->setXY('40','39');
$pdf->Cell('0','0',$fetch['studentname']);

$pdf->setXY('40','46');
$pdf->Cell('0','0',$fetch['college']);

$pdf->setXY('40','52');
$pdf->Cell('0','0',$fetch['mobile']);

$pdf->setXY('40','58');
$pdf->Cell('0','0',$fetch['email']);

$pdf->setXY('40','65');
$pdf->Cell('0','0',$fetch['department']);

$pdf->setXY('40','71');
$pdf->Cell('0','0',$fetch['event']);

$pdf->setXY('40','78');
$pdf->Cell('0','0',$fetch['fee']);
// date
$pdf->setXY('79','27');
$pdf->Cell('0','0',date('d-m-y'));

// second part

$pdf->SetFont('Arial','B',8);	

$pdf->setXY('145','26.5');
$pdf->Cell('0','0','id');

$pdf->setXY('145','33');
$pdf->Cell('0','0',$fetch['rollno']);

$pdf->setXY('145','39');
$pdf->Cell('0','0',$fetch['studentname']);

$pdf->setXY('145','45.5');
$pdf->Cell('0','0',$fetch['college']);


$pdf->setXY('145','52');
$pdf->Cell('0','0',$fetch['department']);

$pdf->setXY('145','58');
$pdf->Cell('0','0',$fetch['event']);

$pdf->setXY('145','65');
$pdf->Cell('0','0',$fetch['fee']);

$pdf->setXY('145','72');
$pdf->Cell('0','0',$fetch['event_location']);

$pdf->setXY('184','27');
$pdf->Cell('0','0',date('d-m-y'));


$pdf->Output();
?>
