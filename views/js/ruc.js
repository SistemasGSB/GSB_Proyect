$(function(){
	$('#search_ruc').on('click', function(){
		var ruc = $('#ruc').val();
		var url = 'tools/sunat/consulta_sunat.php';
		$('.ajaxgif').removeClass('hide');
		console.log("EN");
		$.ajax({
		type:'POST',
		url:url,
		data:'ruc='+ruc,
		success: function(datos_dni){
			$('.ajaxgif').addClass('hide');
			var datos = eval(datos_dni);
				var nada ='nada';
				if(datos[0]==nada){
					$('.btnDownloadR').hide();
					alert('DNI o RUC no válido o no registrado');
				}else{
					$('#razon').val(datos[1]);
					$('.btnDownloadR').show();
				}		
		}
	});
	return false;
	});
});