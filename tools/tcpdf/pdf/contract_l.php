<?php



require_once('../../NumerosLetras.php');
require_once('tcpdf_include.php');

class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = getcwd().'\..\images\logo2.jpg';
        $this->Image($image_file, 10, 10, 60, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Pagina '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

class Contrac_l{

	public function print_Contrac_l(){
	
	// create new PDF document
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	//*Formato de Fecha
	date_default_timezone_set('America/Los_Angeles');
	$pdf->SetMargins(20,30,20);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->AddPage();	
	
	$fecha = date('d')."/".date('n'). "/".date('Y') ;
	$ahora = time();
	$dni = $_POST['dni'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$cargo = $_POST['cargo'];
	$pago = $_POST['sueldo'];
	$pago_l = NumeroALetras::convertir($pago,"soles");
	//**Obteniendo el ID
	$duracion = "30";
	$duracion_l = "Treinta";
	$fecha_i = $_POST['fecha_i'];
	$fecha_f = $_POST['fecha_f'];
	$html = <<<EOF
	<div style="font-size:9px; ">
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:center; solid #666; color:#333;">
				<b>CONTRATO DE LOCACIÓN DE SERVICIOS</b>
			</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
Conste por el presente instrumento el CONTRATO DE LOCACIÓN DE SERVICIOS que celebran de una parte,
<b>QUALITY SPECIAL SERVICE S.A.C,</b> con RUC Nº 20602221980, con domicilio en la Urb. Cabaña María Mz. L Lt. 12,
Arequipa, Arequipa, debidamente representada por su Gerente General Sr Feliciano Farfán Romero identificado
con D.N.I. Nº 29214345, a quien en adelante se le denominará <b> QUASS S.A.C </b>. y de la otra parte <b> $nombre, </b> con D.N.I. Nº $dni, con domicilio en $direccion,
Arequipa, a quien en adelante se le denominará <b> EL LOCADOR </b>, en los términos y condiciones siguientes:
	</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
<b>PRIMERO: ANTECEDENTES </b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">

<b><b>1.1</b> QUASS S.A.C </b>., es una empresa dedicada a OTRAS ACTIVIDADES DE DOTACIÓN DE RECURSOS HUMANOS que
requiere la prestación del servicio con experiencia en $cargo.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">

<b><b>1.2</b> EL LOCADOR </b> declara desarrollarse en actividades de esta índole operacional y administrativa relacionados
con $cargo.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>SEGUNDO: OBJETO DEL CONTRATO</b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">

<b>2.1</b> Por intermedio del presente contrato de locación de servicios, <b>QUASS S.A.C.</b> contrata los servicios de <b> EL
LOCADOR </b> a fin de que éste preste servicios en los que declara desarrollarse.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>TERCERO: OBLIGACIONES DEL LOCADOR </b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>3.1</b> Elaboración de Actas de Reunión, documentos internos, cartas e informes
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>3.2</b> Preparación de documentación referente a incidentes y accidentes de trabajo laborales del periodo 2016 -
2018.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>3.3</b> Elaboración de cargos y actas para la transferencia de documentación del CSST saliente – entrante.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>3.4</b> Inventario de documentación del comité del año 2012 hasta el presente año.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>3.5</b> Atender los requerimientos otras actividades y de información solicitados por la jefatura.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>CUARTO: RETRIBUCION DEL LOCADOR </b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>4.1</b> Como contraprestación por los servicios materia del presente contrato que prestará <b> EL LOCADOR </b>, referidos
en cláusula tercera precedente, las partes acuerdan fijar una retribución mensual neta a favor del <b> EL LOCADOR </b> ascendente a S/$pago ($pago_l) mensuales.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>4.2</b> Tales sumas deberán ser abonadas mensualmente dentro de los primeros tres días hábiles siguientes de
otorgada el acta de conformidad por parte del área usuaria.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>QUINTO: OBLIGACIONES DE QUASS</b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b><b>5.1</b> QUASS S.A.C </b> deberá cumplir puntualmente con el pago de la retribución acordada en la cláusula precedente
a favor del <b> EL LOCADOR </b>.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b><b>5.2</b> QUASS S.A.C </b>. realizara la retención correspondiente a un importe de S/$pago ($pago_l), para realizar el pago de ESSALUD por aseguramiento independiente.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>SEXTO: VIGENCIA DEL CONTRATO</b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b><b>6.1</b></b> El presente contrato tendrá una duración de ($duracion) $duracion_l días, computados desde el $fecha_i,
debiendo culminar el $fecha_f.

</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	

<b>6.2</b> No obstante lo anterior, las partes podrán acordar la renovación del presente contrato, a cuyo efecto deberán
llegar a un acuerdo por escrito sobre el nuevo plazo de vigencia o de condiciones contractuales, o la
celebración de un nuevo contrato, antes de la expiración del presente, en ambos casos.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>6.3</b> Si no se llegase a un acuerdo por escrito, el presente contrato quedará automáticamente concluido
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>SÉPTIMO: RESOLUCIÓN DEL CONTRATO</b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>7.1</b> Las partes acuerdan que todas y cada una de las cláusulas del presente contrato tienen la condición de
esenciales, por lo que el incumplimiento de cualquiera de ellas, permitirá que la parte afectada pueda
declarar automáticamente resuelto este contrato, comunicándolo a la otra mediante carta notarial.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>7.2</b> De producirse la resolución del presente contrato <b> QUASS S.A.C </b>. no tendrá la obligación de abonar suma
alguna adicional a <b> El LOCADOR </b>, salvo que le corresponda del monto pactado por los días trascurridos en la
semana en que se materialice la resolución.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	

<b>7.3</b> Así mismo el presente contrato no generara ningún tipo de vínculo laboral con <b> QUASS S.A.C </b>. ya que se trata
de un contrato de locación de servicios.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>OCTAVO: DOMICILIO, NOTIFICACIONES Y FUERO APLICABLE </b>
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>8.1</b> Las partes señalan como sus domicilios los que se indican en la introducción del presente contrato siendo
entendido que sólo podrán variarse previa comunicación notarial a la otra parte, con una anticipación no
menor a 5 días útiles.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>8.2</b> Al domicilio así señalado deberán cursarse todas las comunicaciones en ejecución de este contrato, y en
general para todo lo que se refiere a la ejecución y cumplimiento del mismo.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">
	
<b>8.3</b> Si no se observaran estas formalidades para el cambio de domicilio, surten efecto las comunicaciones que se
dirijan al domicilio señalado en la introducción del presente instrumento.
</td>
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333;">

Se firma este contrato con la previa ratificación de las partes de todas y cada una de las cláusulas del mismo, en
dos ejemplares de igual tenor, uno para <b> QUASS S.A.C </b>. y otra para <b> EL LOCADOR </b>, en la ciudad de Arequipa, $fecha_f.
	</td>
		</tr>
	</table>
	<br/><br/>
	<br/><br/>
	<br/><br/>
	<br/><br/>
	<table>
		<tr>
			<td style="text-align:center;">QUASS S.A.C.</td>
			<td style="text-align:center;">EL LOCADOR</td>
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
EOF;

$pdf->writeHTML($html, false, false, false, false, '');


$pdf->Output('contract_l.pdf', 'I');
	}
}

$prueba = new Contrac_l();

$prueba -> print_Contrac_l();

?>