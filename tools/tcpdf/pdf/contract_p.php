<?php
class Contract_P{

	public function print_Contract_P(){
	require_once('tcpdf_include.php');
	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
	//*Formato de Fecha
	date_default_timezone_set('America/Los_Angeles');
	$pdf->SetMargins(20,30,20);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->AddPage();	
	$fecha = date('d')."/".date('n'). "/".date('Y') ;
	$ahora = time();
	//**Obteniendo el ID
	$nombre = "Berlanga Ponce, Fernando Raúl";
	$dni = "40366755";
	$cargo = "ANÁLISIS Y EVALUACIÓN DE LOS SISTEMAS DE MEDICIÓN, ELABORACIÓN DE BALANCES DE ENERGÍA EN MEDIA Y BAJA TENSIÓN";
	$direccion = "la Calle señor de la caña 117, del Distrito de Cayma";
	$pago = "930.00";
	$pago_l = "novecientos treinta son 00/100 soles";
	$fecha_i = "31 de octubre del 2018";
	$fecha_f = "29 de diciembre del 2018";
	$html = <<<EOF
	<div style="font-size:9px; ;">
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:center; solid #666; color:#333;">
				<b>CONTRATO DE TRABAJO SUJETO A MODALIDAD PEQUEÑA EMPRESA</b>
			</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	Conste por el presente documento en duplicado, el contrato de trabajo sujeto a Modalidad según lo
	dispuesto por el Art. 63 del D. S. 003-97-TR para servicio especifico, y bajo el régimen de la micro y pequeña
	empresa al amparo de la Ley 28015 y el Reglamento D.S. 007-2008-TR, D.S.. 008-2008-TR Ley 28851, Ley
	30056, que celebran de una parte celebran de una parte, la empresa QUALITY SPECIAL SERVICE S.A.C.
	identificado con Registro Único De Contribuyente N° 20602221980, con domicilio en Urbanización Cabaña
	María Mz. L Lot. 12 del distrito de Arequipa, debidamente representada por el señor Feliciano Farfán
	Romero con Documento Nacional De Identidad N° 29214345, a quien en adelante se le denominara <b>EL EMPLEADOR</b> ; y por otra parte el Sr. $nombre, identificado con identificado con
	Documento Nacional De Identidad Nº $dni, con domicilio en $direccion, a quien en adelante se le denominará <b>EL TRABAJADOR </b>, convienen en celebrar el presente
	contrato, en los términos y condiciones siguientes:
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>PRIMERO,-</b> DEL EMPLEADOR: El empleador es una persona jurídica de derecho privado, dedicada al rubro
	de OTRAS ACTIVIDADES DE DOTACIÓN DE RECURSOS HUMANOS, en el distrito, provincia y región de
	Arequipa.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>SEGUNDA:</b> DE LA CONTRATACION: El Empleador requiere de los servicios de una persona especializada en
	“$cargo ”, por necesidades temporales de servicio debido al incremento de nuestras
	actividades y servicios del centro de trabajo, por lo que es necesario contratar personal para cubrir nuestras
	necesidades operativas en forma temporal, bajo el régimen de la micro y pequeña empresa.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>TERCERA.-</b> DEL OBJETO DE CONTRATO: por el presente documento el EMPLEADOR contrata los servicios
	personales del TRABAJADOR, que desempeñara las labores antes indicadas; sin embargo el empleador esta
	facultado para efectuar modificaciones razonables en función a la capacidad y aptitud del TRABAJADOR y a
	las necesidades y requerimientos del Empleador, tanto del horario, funciones, ámbito geográfico, sin que
	dichas variaciones signifiquen menoscabo de la categoría y/o remuneración.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>CUARTA:</b> DE LA JORNADA DE TRABAJO: Las partes acuerdan que la jornada laboral del trabajador será de 8
	horas diarias durante 6 días a la semana, distribuidas según el horario que establecerá la empresa, sin que
	sobrepase el promedio semanal de 48.00 horas; El empleador y según sus facultades puede regular la
	jornada de trabajo en acumulativas o partidas o rotativas, y todas las que permita la ley, declarando la
	trabajadora que no tiene problema de variar la jornada según los requerimientos del empleador y según los
	horarios habituales de la empresa; En cumplimiento a la legislación sobre jornada y horario de trabajo, el
	trabajador esta obligado a ceñirse a la jornada de trabajo legal, y que cualquier permanencia fuera de la
	jornada de trabajo, mas el tiempo prudencial para el ingreso y salida del centro de trabajo, será causal de
	falta grave y de su entera responsabilidad. La jornada adicional en sobretiempo solo será otorgada previa
	autorización y por escrito, previa verificación del trabajo a efectuarse, y al final de la jornada evaluar el
	trabajo desarrollado, caso contrario no serán reconocidas. La jornada de trabajo se cuenta por labor efectiva
	de trabajo, y no por la permanencia en el centro de trabajo.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>QUINTA:</b> DE LA REMUNERACION: Por este servicio las partes acuerdan que se pagara una remuneración S/
	$pago soles ($pago_l) mensuales. En acogimiento al régimen laboral especial,
	el trabajador tendrá derecho al pago de 2 gratificaciones anuales Equivalentes a ½ remuneración cada una, CTS Equivalentes a 15 días cada una y gozaran solo de 15 días de vacaciones después de un año de servicios.

	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">

	<b>SEXTA:</b> DEL PERIODO DE PRUEBA: El trabajador esta sujeto a un período de prueba de 3 meses contados a
	partir del inicio de la labor efectiva; en caso de que el centro de trabajo dejara de funcionar o tuviera que
	reducir sus operaciones el contrato de trabajo quedara resuelto de plano, con la sola comunicación al
	trabajador, sin que esto signifique ningún pago por indemnización por término del contrato de trabajo.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>SEPTIMA:</b> DE LA DURACION DEL CONTRATO: El presente contrato tendrá de vigencia desde el $fecha_i al $fecha_f.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>OCTAVA:</b> Las partes se comprometen a la firma del presente a actuar con diligencia en el desarrollo de sus
	funciones, prestarse mutua colaboración para la obtención de un mejor resultado del servicio.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>NOVENA:</b> JURISDICCION: En caso de problemas judiciales las partes se someten expresamente a los jueces
	de la localidad de Arequipa, dejando expresa constancia que serán notificados en los domicilios que
	aparecen en la introducción del presente contrato.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	<b>DECIMA:</b> El presente contrato será puesto en conocimiento de la Autoridad Administrativa de Trabajo
	dentro de los 15 días naturales siguientes a su suscripción, para su registro.
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	Leído cada uno de las cláusulas del presente Contrato de Trabajo, ambos intervinientes dan su conformidad
	de sus obligaciones y responsabilidades, y dejan expresa constancia que no ha mediado vicios de nulidad o
	anulabilidad que pudiera invalidarlo, las partes suscriben este documento, extendido por duplicado en la
	ciudad de Arequipa, a los 31 días del mes de octubre de 2018.
	</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="text-align:center;">EMPLEADOR</td>
			<td style="text-align:center;">TRABAJADOR</td>
		</tr>
		<tr>
			<td style="text-align:center;">Farfán Romero, Filiciano</td>
			<td style="text-align:center;">$nombre</td>
		</tr>
		<tr>
			<td style="text-align:center;">D.N.I. Nº 29214345</td>
			<td style="text-align:center;">D:N:I. Nº $dni</td>
		</tr>
	</table>
	</div>
EOF;

$pdf->writeHTML($html, false, false, false, false, '');


$pdf->Output('contract_p.pdf', 'I');
	}
}

$prueba = new Contract_P();

$prueba -> print_Contract_P();

?>