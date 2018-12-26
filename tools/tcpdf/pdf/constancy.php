<?php
class Constancy{

	public function print_Constancy(){
	require_once('tcpdf_include.php');
	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->AddPage();	
	//*Formato de Fecha
	date_default_timezone_set('America/Los_Angeles');
	$fecha = date('d')."/".date('n'). "/".date('Y') ;
	$ahora = time();
	//**Obteniendo el ID

	$html = <<<EOF
	
	
EOF;

$pdf->writeHTML($html, false, false, false, false, '');


$pdf->Output('constancy.pdf', 'I');
	}
}

$prueba = new Constancy();

$prueba -> print_Constancy();

?>