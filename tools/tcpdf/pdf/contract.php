<?php




require_once('../../NumerosLetras.php');
require_once('tcpdf_include.php');
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = getcwd().'\..\images\logo.jpg';
        $this->Image($image_file, 10, 10, 30, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
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


class Contract{

	public function print_Contract(){
	
	// create new PDF document
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	//*Formato de Fecha
	date_default_timezone_set('America/Los_Angeles');
	$pdf->SetMargins(25,30,25);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->AddPage();	
	$fecha = date('d')."/".date('n'). "/".date('Y') ;
	$ahora = time();
	$dni = $_POST['dni'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	//**Obteniendo el ID
	$n_contrato = "46484646";
	$pago = $_POST['sueldo'];
	$p_conversion= NumeroALetras::convertir($pago,"soles");
	$empresa_t = "SOCIEDAD ELECTRICA DEL SUR OESTE AREQUIPA";
	$fecha_c= "25 de Junio de 2018";
	$registro_u ="20100188628";
	$dirrecion_e = "calle consuelo N° 310 - Arequipa";
	$cargo = $_POST['cargo'];
	$fecha_i= $_POST['fecha_i'];
	$fecha_f= $_POST['fecha_f'];
	$html = <<<EOF
	<div style ="font-size:9px">
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:center; solid #666; color:#333"><b> CONTRATO DE TRABAJO PARA OBRA DETERMINADA O SERVICIO ESPECÍFICO </b></td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333"> Conste por el presente documento el contrato de trabajo, de conformidad con lo establecido en el TUO de la Ley de Promoción de la Competitividad, Formalización y Desarrollo de La Micro Y Pequeña Empresa Del Acceso Al Empleo Decente, en adelante ley MYPE, aprobado por Decreto Supremo N° 007-2008-TR, su reglamento, aprobado por Decreto Supremo N° 002-2008-TR, y el TUO de la ley de productividad y competitividad laboral, aprobado por Decreto Supremo N° 003-97-TR; que celebran de una parte, la empresa <b>GEESEBE S.R.L.</b>  identificado con Registro Único De Contribuyente N° 20453972977, con domicilio en Urbanización Los Rosales B-5 del distrito de Arequipa, debidamente representada por el señor Feliciano Farfán Romero con Documento Nacional De Identidad N° 29214345 según poder inscrito en la partida Registral N°  11047581 del Registro de Personas Jurídicas de Arequipa,  en adelante “<b> EL EMPLEADOR </b>”; y de la otra parte <b> $nombre </b>, identificado con Documento Nacional De Identidad N° $dni, domiciliado en $direccion, a quien en adelante se le denominara “<b> EL TRABAJADOR </b>”, en los términos y condiciones siguientes:</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333"> <b>ANTECEDENTES </b></td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333"> <b>PRIMERO:</b> <b> EL EMPLEADOR </b>  es una empresa jurídica, dedicada al rubro de actividades de arquitectura e ingeniería y actividades conexas de consultoría técnica, en el distrito, provincia y región de Arequipa.</td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333"><b>SEGUNDO: </b><b> EL EMPLEADOR </b> requiere cubrir las necesidades  de recursos humanos con el objeto de atender la contratación del servicio de tercerización del centro de atención al cliente en plataforma, celebrado entre <b> EL EMPLEADOR </b> y la empresa <b> $empresa_t </b>, de fecha $fecha_c; con Registro Único De Contribuyente N° $registro_u con domicilio en $dirrecion_e, de conformidad a los requerimientos de personal y a los términos del contrato <b> N° $n_contrato </b> </td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333"><b> OBJETO DEL CONTRATO </b>

</td>
			
		</tr>
	</table>
		<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333"><b> TERCERA: </b> Por lo señalado en la cláusula precedente, <b> EL EMPLEADOR </b> contrata temporalmente los servicios de <b> EL TRABAJADOR </b>, los mismos que se desarrollan a plazo fijo y bajo subordinación a cambio de la remuneración convenida en la cláusula sexta.
Esta contratación se realiza en conformidad con lo establecido en el artículo 58° de la ley de productividad y competitividad laboral (D.S. 003-97-TR).


</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333">
				<b>CUARTO:</b> Por en presente documento, <b> EL EMPLEADOR </b> contrata a <b> EL TRABAJADOR </b> para que ocupe el cargo de <b> $cargo </b>, asumiendo las responsabilidades y obligaciones propias de dicho cargo, el cual ejercerá de acuerdo a las instrucciones que le imparta <b> EL EMPLEADOR </b>.
			</td>


		</tr>
	</table>


	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333">

			<b> EL EMPLEADOR </b> está facultado a efectuar modificaciones razonables en función a la capacidad y aptitud de <b> EL TRABAJADOR </b> y las necesidades y requerimientos de la misma, sin que dichas variaciones signifiquen menoscabo de categoría y/o remuneración
</td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333">

			Queda entendido que la prestación de servicios deberá ser efectuada de manera personal, no pudiendo <b> EL TRABAJADOR </b> ser reemplazado ni ayudado por tercera persona
</td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
			<td style="text-align:justify; solid #666; color:#333">
			<b>JORNADA DE TRABAJO:</b>
</td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
			<b>QUINTA:</b> Las partes estipulan que el horario de trabajo es de ocho (8) horas diarias, de acuerdo a la programación efectuada por <b> EL EMPLEADOR </b>.
		</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
			En uso de sus facultades directrices, <b> EL EMPLEADOR </b> está facultado a efectuar modificaciones razonables en la jornada de trabajo de acuerdo a sus necesidades operativas respetando el máximo legal de 48 horas semanales, sin que dichas variaciones  signifiquen menoscabo de categoría y/o remuneración.
De otro lado, queda establecido que <b> EL EMPLEADOR </b>  se compromete a cumplir con el otorgamiento del día de descanso semanal obligatorio al que tiene el derecho <b> EL TRABAJADOR </b> de conformidad con lo establecido en el decreto legislativo N° 713, norma que regula los descansos remunerados.

		</td>
			
		</tr>
	</table>

		<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
			Así mismo, debido a la naturaleza de las labores que realiza <b> EL TRABAJADOR </b> este se encuentra sujeto a fiscalización inmediata, por lo que estará obligado al llenado del registro de control de asistencia y salida de <b> EL TRABAJADOR </b>, conforme lo que establece al Decreto Supremo N° 004-2006-TR y sus modificatoria, Decreto Supremo N°011-2006-TR.

		</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
		<b>REMUNERACION:</b>

		</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
		 	<b>SEXTA:</b> <b> EL TRABAJADOR </b> percibirá como contraprestación por sus servicios una remuneración ascendente a <b> S/.$pago soles ($p_conversion) </b> por periodo mensual, durante el tiempo de duración de la relación laboral,  además de las horas extras remuneradas de acuerdo a ley. 

		</td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
		 	Las partes convienen que la remuneración establecida en el párrafo precedente, se pagara en una armada de periodicidad mensual.
		</td>
			
		</tr>
	</table>

	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
		 	La remuneración mensual de <b> EL TRABAJADOR </b> esta afecta a las retenciones correspondientes por conceptos de impuesto a la renta, aportes a la respectiva administradora de fondos de pensiones y demás contribuciones sociales y tributos que graven las remuneraciones del personal dependiente.
		</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
Las ausencias injustificadas por parte de <b> EL TRABAJADOR </b> implican la perdida de la remuneración proporcionalmente a la duración de dicha ausencia, sin perjuicio de las facultades disciplinarias propias de <b> EL EMPLEADOR </b> previstas en la legislación laboral y normas internas de la empresa.		</td>
			
		</tr>
	</table>




	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
	<b>DURACION DEL CONTRATO:</b>
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>SETIMA:</b> El plazo del presente contrato rige a partir del $fecha_i al $fecha_f, pudiendo cualquiera de las partes ponerle termino en la forma de señala el Texto Único Ordenado Del Decreto Legislativo 728, Ley De Productividad Y Competitividad Laboral, aprobado por Decreto Supremo N° 003-97-TR o la norma legal que lo sustituya en el momento en que se produzca la terminación del contrato. Vencido el plazo del contrato este concluirá indefectiblemente, salvo la prorroga o renovación expresa a que se refiere la cláusula octava.
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>OCTAVA:</b> Las partes podrán prorrogar o renovar el presente contrato hasta alcanzar el máximo legal de 5 años previsto en el artículo 74° de La Ley De Productividad Y Competitividad Laboral (D.S. 003-97-TR).
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>PERIODO DE PRUEBA:</b>
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>NOVENA:</b><b> EL TRABAJADOR </b> estará sujeto a 3 meses de periodo de prueba, de conformidad con lo establecido en los artículos 10° y 75° del D.S. 003-97-TR.
De producirse renovación de contrato no se establecerá nuevo periodo de prueba, salvo que la labor a desempeñar sea cualitativa y notoriamente distinta a la que es objeto del presente contrato, conforme lo que dispone el artículo 84° del reglamento de la ley de fomento del empleo (D.S. 001-96-TR).
		</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DERECHOS DEL TRABAJADOR : </b>
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA:</b> <b> EL TRABAJADOR </b> tendrá derecho a un mínimo de 30 (treinta) días de descanso vacacional por año de trabajo. Este tiempo podrá ser reducido hasta 7 (siete) días al año, mediante la respectiva compensación  por los días laborados, lo que deberá  constar en un acuerdo escrito.
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL TRABAJADOR </b> tendrá derecho al pago de una remuneración por concepto de gratificaciones legales de Fiestas Patrias y Navidad.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL TRABAJADOR </b> tendrá derecho al pago de una remuneración por concepto de compensación por tiempo de servicios (CTS), que serán depositados en una entidad bancaria en la primera quincena de Mayo y de Noviembre Respectivamente.
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>OBLIGACIONES DE EL TRABAJADOR </b>:
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA PRIMERA: </b> <b> EL TRABAJADOR </b> se compromete a cumplir sus obligaciones con lealtad y eficiencia, aplicando para tal fin toda su experiencia y capacidad y velando por los interese de <b> EL EMPLEADOR </b>.
Asimismo, deberá ejercer las funciones propias de su cargo con la mayor diligencia y responsabilidad. <b> EL TRABAJADOR </b>  se compromete a observar las políticas y normas que disponga <b> EL EMPLEADOR </b>, teniendo como objetivo su proceso y permanente desarrollo.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL TRABAJADOR </b> se compromete, igualmente, a mantener en secreto toda información que llegue a su conocimiento en relación a las actividades de <b> EL EMPLEADOR </b>, sus asociados y/o clientes. Esta obligación subsistirá aun después de terminada la relación laboral y su cumplimiento genera la correspondiente responsabilidad por daños y perjuicios, sin desmedro de la persecución penal por el delito previsto en el artículo 165 del Código Penal.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL TRABAJADOR </b> conviene en consagrar íntegramente su capacidad a la atención de las labores que emanen de su cargo, comprometiéndose a desempeñar las mismas de acuerdo con los reglamentos, prácticas y políticas de <b> EL EMPLEADOR </b>, las cuales declara conocer y se obliga a cumplir fielmente. Asimismo, <b> EL TRABAJADOR </b> declara conocer que sus servicios a <b> EL EMPLEADOR </b> serán a tiempo completo y de carácter exclusivo, conforme a lo regulado en las clausulas precedentes.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>EXCLUSIVIDAD:</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA SEGUNDA: </b><b> EL TRABAJADOR </b> es contratado en forma exclusiva por <b> EL EMPLEADOR </b> de manera tal que aquel no podrá dedicarse a otra actividad distinta que la que emana del presente contrato siempre y cuando diera otra actividad implique competencia directa o indirecta de las actividades de <b> EL EMPLEADOR </b>, a criterio de este.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
Lo anterior no se aplicara en caso de  autorización previa expresa y escrita de <b> EL EMPLEADOR </b>.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>RESERVA, CONFIDENCIALIDAD Y COMPETENCIA </b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMO TERCERA:</b> <b> EL TRABAJADOR </b> se compromete a mantener en reserva y confidencialidad absoluta en relación con la información y documentación obtenida con ocasión de su trabajo para <b> EL EMPLEADOR </b>, así como a no competir con el mismo, en los términos y condiciones que se pactan a continuación:
 </td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>1.	RESERVA Y CONFIDENCIALIDAD</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
a.	A observar ante cualquier persona, entidad o empresa una discreción absoluta sobre cualquier actividad o información sobre <b> EL EMPLEADOR </b> y/o sus representantes, a las que hubiera tenido acceso con motivo de la prestación de sus servicios para <b> EL EMPLEADOR </b> y no haya sido autorizado a revelarlas.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
b.	A no revelar a ninguna persona, entidad o empresa, ni usar para ningún propósito, en provecho propio o de terceros,  cualquier información vinculada a <b> EL EMPLEADOR </b> y/o sus representantes de cualquier naturaleza, en  la medida que no haya sido autorizado.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
c.	A no revelar a ninguna persona que no preste servicios a <b> EL EMPLEADOR </b>  ningún tipo de información confidencial o de propiedad de esta. Salvo que dicha persona necesite conocer tal información por razón de sus funciones. Si hubiese cualquier duda sobre lo que constituye información confidencial o sobre si la información  debe ser revelada y a quien, <b> EL TRABAJADOR </b> se obliga a solicitar autorización a sus superiores.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
d.	A no usar de forma inapropiada ni revelar información confidencial alguna o de propiedad de la persona, entidad o empresa para la cual laboro con anterioridad a ser contratado por <b> EL EMPLEADOR </b>, así como a no introducir en las instalaciones de <b> EL EMPLEADOR </b>, ningún documento que no haya sido publicado ni ninguna clase de bien que pertenezca a cualquiera de dichas personas, entidades o empresas, sin su consentimiento previo, por escrito. <b> EL TRABAJADOR </b> se obliga, igualmente, a no violar ningún convenio de confidencialidad o sobre derechos de propiedad que haya firmado en conexión con tales personas, entidades o empresas.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
e.	A devolver a <b> EL EMPLEADOR </b>, al terminar o resolverse el presente contrato, sea cual fuere la causa, cualquier documento, materiales de estudio, diskettes, casettes, CD´s y cualquier otro material contenido o fijado en cualquier otro medio que contenga o revele información que sea confidencial o de propiedad de <b> EL EMPLEADOR </b>.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">


<b>2.	COMPETENCIA</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
a.	A no prestar servicios en forma dependiente o independiente para personas, instituciones o empresas que compitan, directa o indirectamente con <b> EL EMPLEADOR </b>.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
b.	A no utilizar la información de carácter reservado que le fue proporcionada por <b> EL EMPLEADOR </b> y/o sus representantes para desarrollar por cuenta propia o de terceros, actividades que compitan con las que realiza o planeara realizar <b> EL EMPLEADOR </b>.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
c.	A no inducir o intentar influenciar, ni directa ni indirectamente, a ningún trabajador de <b> EL EMPLEADOR </b> a que termine su empleo con este para que labore para <b> EL TRABAJADOR </b> o para cualquier otra persona, entidad o empresa, que compita con <b> EL EMPLEADOR </b>.
	</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
Las obligaciones que <b> EL TRABAJADOR </b> asume en los literales a), b), c) y d) del numeral 1 y en el literal b) del numeral 2 de esta cláusula regirán indefinidamente, con prescindencia de la vigencia del presente contrato. Las demás obligaciones regirán hasta los (2) años después de concluido del presente contrato de trabajo. El incumplimiento por parte de <b> EL TRABAJADOR </b>, de cualquiera de las obligaciones contenidas en esta cláusula, facultara a <b> EL EMPLEADOR </b> a iniciar las acciones legales que pudieran corresponder en defensa de sus derechos y a obtener la indemnización por daños y perjuicios a que hubiera lugar.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>OBLIGACIONES DE EL EMPLEADOR </b>:
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMO CUARTA:</b> Adicionalmente a sus obligaciones legales, <b> EL EMPLEADOR </b> se compromete a brindar los permisos que fueren necesarios  para la capacitación y/o actualización de conocimientos por parte de <b> EL TRABAJADOR </b>, hasta, debiendo ser recuperados dichos permisos fuera de la jornada ordinaria de trabajo. 
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
		
<b>SEGURIDAD Y SALUD EN EL TRABAJO. OBLIGACIONES DEL EMPLEADOR </b>:
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA QUINTA:</b> <b> EL EMPLEADOR </b> proveerá a <b> EL TRABAJADOR </b> de instalaciones bien equipadas y acondicionadas para su buen desenvolvimiento.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL EMPLEADOR </b> se encargara de que <b> EL TRABAJADOR </b>  se realice sus respectivos exámenes médicos, antes y después de terminado el vínculo laboral.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL EMPLEADOR </b>, se encargara de capacitar a <b> EL TRABAJADOR </b>  respecto a seguridad y salud en el trabajo hasta en cuatro oportunidades que se desarrollaran de forma anual.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>SEGURIDAD Y SALUD EN EL TRABAJO. OBLIGACIONES DEL TRABAJADOR </b>:
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA SEXTA: </b><b> EL TRABAJADOR </b> tendrá la obligación de comunicar a <b> EL EMPLEADOR </b>, en caso las instalaciones o el lugar donde desarrolla sus labores, no se encuentre en condiciones óptimas para trabajar.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL TRABAJADOR </b>, está obligado a asistir a las capacitaciones sobre seguridad y salud en el trabajo que imparta <b> EL EMPLEADOR </b>.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b> EL EMPLEADOR </b> y <b> EL TRABAJADOR </b>, deberán cumplir con todo lo que especifica la ley N° 29783, Ley de Seguridad y Salud en el Trabajo.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>COMUNICACIÓN A LA AUTORIDAD:</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA SETIMA:</b> De conformidad con el artículo 73° de texto único ordenado del Decreto Legislativo 728, Ley De Productividad Y Competitividad Laboral, aprobado por decreto supremo N° 003-97-TR,  el presente contrato será puesto en conocimiento de la autoridad administrativa de trabajo para efectos de su registro y archivo, dentro de los quince (15) días calendarios de sus suscripción.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>MODIFICACION LEGAL:</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA OCTAVA:</b> En todo lo no previsto expresamente en el presente contrato, regirán las leyes vigentes en el Perú al momento de producirse el acontecimiento que las regule. En tal virtud, las estipulaciones del presente contrato serán modificadas por las normas legales que se dicten durante la vigencia del presente contrato.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DOMICILIO:</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>DÉCIMA NOVENA: </b>Las partes señalan como sus respectivos domicilios los especificados en la introducción del presente contrato, por lo que se reputaran  validas todas las comunicaciones y notificaciones dirigidas a las mismas con motivo de la ejecución del presente contrato. El cambio de domicilio de cualquiera de las partes surtirá efecto desde la fecha de comunicación desde la fecha de comunicación de dicho cambio a la contraparte, por cualquier medio escrito.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>SOLUCION DE CONTROVERSIAS:</b>
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
<b>VIGESIMA:</b> Ambas partes se someten expresamente a la competencia de las autoridades judiciales y administrativas de Arequipa, Haciendo renuncia expresa al fuero de sus domicilios.
</td>
			
		</tr>
	</table>
	<table style="line-height: 20px; ">
		<tr>
		<td style="text-align:justify; solid #666; color:#333">
En señal de conformidad las partes suscriben este documento, extendido por  duplicado en la ciudad de Arequipa, $fecha_f
</td>
			
		</tr>
	</table>
	<br/> <br/>
	<br/> <br/>
	<br/> <br/>
	<br/> <br/>
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


$pdf->Output('contract.pdf', 'I');
	}
}

$prueba = new Contract();

$prueba -> print_Contract();

?>