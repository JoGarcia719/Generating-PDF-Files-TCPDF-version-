<?php

require "../vendor/autoload.php";

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Joseph Garcia');
$pdf->SetTitle('Display Information PDF');
$pdf->SetSubject('PDC10 Activity TCPDF');
$pdf->SetKeywords('TCPDF, PDF, activity');

$pdf->SetHeaderData("", "0", "For Academic Purposes Only", "by Joseph Garcia", array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set margins


$pdf->setPrintFooter(true);
$pdf->setPrintHeader(true);

$pdf->AddPage();

$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->SetFont('courier','',20);
$pdf->Write(10,'"I had a dream."','',false,'J');
$pdf->Ln(15);
$pdf->Write(10,'- Martin Luther King JR.','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('freesans','',20);
$pdf->Write(10,'""The time is always right to do what is right."."');
$pdf->Ln(15);
$pdf->Write(10,' - Martin Luther King JR.','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('freemonoi','',20);
$pdf->Write(10,'"Injustice anywhere is a threat to justice everywhere."');
$pdf->Ln(15);
$pdf->Write(10,' - Martin Luther King JR.','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('freeserif','',20);
$pdf->Write(10,'"Our lives begin to end the day we become silent about things that matter."');
$pdf->Ln(15);
$pdf->Write(10,' - Martin Luther King','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('helvetica','',20);
$pdf->Write(10,'"We must accept finite disappointment, but never lose infinite hope."');
$pdf->Ln(15);
$pdf->Write(10,' - Martin Luther King JR.','',false,'R');
$pdf->Ln(30);

$pdf->Output('display-info.pdf', 'I');
