<?php
define('TCPDF_PATH','../../tcpdf/');
require_once TCPDF_PATH .'/config/tcpdf_config.php';
require_once TCPDF_PATH .'/tcpdf.php';
include "../../ketnoicsdl/thuvien.php";

$contentdethi=urldecode($_POST['contentdethi']);
// $tieude = $_POST('tieude');
// $monhoc = $_POST('monhoc');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Truong Nhut Hao');
$pdf->SetTitle('Đề Thi');
$pdf->SetSubject('Đề Thi');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// tắt header + footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
$html = $contentdethi;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('De_Thi.pdf', 'I');
