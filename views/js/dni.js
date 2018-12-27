$(function(){
	$('#search_dni').on('click', function(){
		
		$('.ajaxgif').removeClass('hide');
		var dni = $('#dni_s').val();
		var url = 'tools/ajax/buscar_empleado.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dni='+dni,
		dataType: "json",
		success: function(datos){
			$('.ajaxgif').addClass('hide');
			console.log(datos);
				$('#nombre').val(datos['nombre']);
				$('#direccion').val(datos['direccion']);
				$('#cargo').val(datos['cargo']);
				$('#fecha_i').val(datos['fecha_ingreso']);
				$('#fecha_f').val(datos['adenda_contrato']);
				$('#sueldo').val(datos['sueldo']);
				
				$('.btnDownloadD').show();
		}
	});
	return false;
	});
});
