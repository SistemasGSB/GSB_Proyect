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
			var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
			var fi = datos['fecha_i'].split("-");
			var fa = datos['fecha_a'].split("-");
			$('#nombre').val(datos['nombre']);
			$('#direccion').val(datos['direccion']);
			$('#cargo').val(datos['cargo']);
			$('#fecha_i').val(fi[2]+" de "+meses[parseInt(fi[1])-1]+" del "+ fi[0]);
			$('#fecha_f').val(fa[2]+" de "+meses[parseInt(fa[1])-1]+" del "+ fa[0])
			$('#sueldo').val("S/. "+datos['sueldo']);
			
			$('.btnDownloadD').show();
		}
	});
	return false;
	});
});
