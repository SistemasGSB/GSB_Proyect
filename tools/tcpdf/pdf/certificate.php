<?php
class Certificate{

	public function print_Certificate(){
	require_once('tcpdf_include.php');
	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
	//*Formato de Fecha
	date_default_timezone_set('America/Los_Angeles');
	$pdf->SetMargins(30,50,30);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->AddPage();	
	$fecha = date('d')."/".date('n'). "/".date('Y') ;
	$ahora = time();
	//**Obteniendo el ID
	$nombre = "PAMELA GISSELL, MEDINA ZUÑIGA";
	$dni = "44685356";
	$fecha_i = "26 de junio del año 2018";
	$fecha_f = "24 de julio del año 2018";
	$cargo = "Gestor de Atención al Cliente";
	$hoy_l = "24 de julio del 2018";
	$html = <<<EOF
	<div style="font-size:10px; ;">
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:center; solid #666; color:#333; font-size:24px ">
				<b>CERTIFICADO DE TRABAJO</b>
			</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:right; solid #666; color:#333">
	El que suscribe Gerente General, de la empresa GeeSeBe S.R.L,
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:right; solid #666; color:#333">
	Feliciano Farfan Romero, certifica que la Srta.:
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:center; solid #666; color:#333; font-size:20px;">
		$nombre
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify solid #666; color:#333">
	Identificada con el DNI N° $dni, laboró en nuestra empresa como personal destacado de SOCIEDAD ELECTRICA DEL SUR OESTE S.A., desde el $fecha_i hasta el $fecha_f, desempeñando
	el cargo de $cargo.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify solid #666; color:#333">
	Se expide el presente documento a solicitud de la interesada para los fines
	que crea convenientes.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333">
	Arequipa, $hoy_l
	</td>
		</tr>
	</table>
	</div>
EOF;

$pdf->writeHTML($html, false, false, false, false, '');


$pdf->Output('certificate.pdf', 'I');
	}
}

$prueba = new Certificate();

$prueba -> print_Certificate();

?>