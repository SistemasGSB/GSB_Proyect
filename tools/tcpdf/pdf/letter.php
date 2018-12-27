<?php
class Delivery{

	public function print_Delivery(){
	require_once('tcpdf_include.php');
	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	//*Formato de Fecha
	date_default_timezone_set('America/Los_Angeles');
	$pdf->SetMargins(25,30,25);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->AddPage();
	$fecha = date('d')."/".date('n'). "/".date('Y') ;
	$ahora = time();
	$ruc = $_POST['ruc'];
	$nombre = $_POST['razon'];
	//**Obteniendo el ID

	$imagen = "Imagen_test";
	$html = <<<EOF
	<div style="font-size:8px; ;">
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:left; solid #666; color:#333">Señores: $nombre</td>
			<td style="text-align:right; solid #666; color:#333">Arequipa, $fecha</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:left; solid #666; color:#333">Presente.-</td>
			<td style="text-align:right; solid #666; color:#333">RUC  : $ruc</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:left; solid #666; color:#333">De mi mayor consideracion: </td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333">A través de la presente tenemos el gusto de saludarlos y hacer de su conocimiento que somos la empresa TELCO AQP SAC una empresa dedicada al desarrollo de soluciones TI, socio estratégico de CLARO y pensando en las necesidades de su negocio contamos con un equipo de expertos en soluciones integrales que estaran a plena dispocición de su empresa. </td>
			</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333">Los servicios estan diseñados para que su empresa logre un manejo eficiente de sus recursos de Telecomunicaciones, de modo que le permita generear mayores oportunidades comerciales y un posicionamiento sobre-saliente. Atenderemos todas las consultas y requerimientos que solicite en:</td>
			</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333">- Soluciones de Productos Avanzados: Internet Dedicado(Fibra Óptica) y HFC</td>
			</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333">- Soluciones Móviles: Portabilidad Numérica, Lineas Nuevas plan de Voz/Datos a Medida</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333">Al respecto le presentamos nuestros planes detallados que incluyen todos los beneficios:</td>
			
		</tr>
	</table>
	<table style="text-align:center line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333"><span style="color:red;">¡MINUTOS ILIMITADOS</span> PARA LLAMAR A OTROS OPERADORES A NIVEL NACIONAL!</td>
			
		</tr>
	</table>

	<table style="text-align:center line-height: 20px; ">
		<tr>
			<td style="solid #666; color:#333">$imagen</td>
			
		</tr>
	</table>
	<table style="border:1px solid black; line-height: 20px; ">
		<tr>
			<td align="center" width="10%" style="vertical-align: middle; border:1px solid black; solid #666; color:#333" rowspan="6">VENTAJAS</td>
			<td width="90%" style="border:1px solid black;"> Comunicacion ILIMITADA a nivel nacional con todas las lineas moviles y fijos de CLARO</td>
		</tr>
		<tr>
			<td style="border:1px solid black;"> Minutos disponibles para llamadas a todo destino nacional e internacional (EE.UU, Canada, Chile, Puerto Rico, México y Fijos de Alemania y China) </td>
		</tr>
		<tr>
			<td style="border:1px solid black;"> Duplicamos las GB por 12 meses de portabilidad.</td>
		</tr>
		<tr>
			<td style="border:1px solid black;"> Cobertura sin Fronteras a 17 paises sin necesidad de activar el Roaming Internacional</td>
		</tr>
		<tr>
			<td style="border:1px solid black;"> Planes con GB Ilimitados </td>
		</tr>
		<tr>
			<td style="border:1px solid black;"> Comunicacion Ilimitada desde el Plan Claro Max Negocio 39.90. </td>
		</tr>
	</table>
	<table style=" line-height: 20px; ">
		<tr>
			<td>
			Sin otro particular y agradeciendole la atencion dispensada me despido de usted, quedando a su disposicion para atender cualquier inquietud al respecto.
			</td>
		</tr>

	</table>

	<table style=" line-height: 20px; ">
		<tr>
			<td style="text-align:right;">
			firma
			</td>
		</tr>

	</table>
	</div>
EOF;

$pdf->writeHTML($html, false, false, false, false, '');


$pdf->Output('letter.pdf', 'I');
	}
}

$prueba = new Delivery();

$prueba -> print_Delivery();

?>