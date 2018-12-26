$(document).ready(function(){
  

  $('#specialTable tfoot th.foot').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" size="10" placeholder="Buscar '+title+'" />' );
    } );
    var table = $('#specialTable').DataTable({
      "dom": "Bfrtip",
      "buttons": [
            'excelHtml5', 'pdfHtml5'
        ],
      'columnDefs': [
        { "width": 5, "targets": 0 },
         {
            'targets': 0,
            'checkboxes': {
               'selectRow': true
            }
         }
      ],
    "rowCallback": function(row, data, index){
        if(data[5] === "Temprano"){
            $(row).find('td:eq(5)').css('color', 'green');
        }
        else{
            if(data[5] === "Tarde"){
                $(row).find('td:eq(5)').css('color', 'red');
            }    
        }
    },
    
      'select': {
         'style': 'multi'
      },
      'order': [[1, 'asc']],
      "pageLength": 50,
      "language": {

        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

      }

    });

    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
    $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
            console.log($('#datei').val());
            console.log($('#datef').val());
            var min =  new Date('December 17, 1995 03:24:00');
            var max =  new Date();
            var timemin = "00:00:00";
            var timemax = "24:00:00";
            if($('#datei').val() != ""){
              const [dayi, monthi, yeari] = $('#datei').val().split("/");
              min = new Date(yeari, monthi - 1, dayi);
            }
            if($('#datef').val() != ""){
              const [dayf, monthf, yearf] = $('#datef').val().split("/");
              max = new Date(yearf, monthf - 1, dayf);   
            }
            if($('#timei').val() != ""){
                timemin = $('#timei').val();
            }
            if($('#timef').val() != ""){
                timemax = $('#timef').val();
            }
            const [day, month, year] = data[3].split("/");
            var age = new Date(year, month - 1, day) || 0; // use data for the age column
            console.log(min <= age);
            console.log(age <= max);
            if ( ( min <= age && age <= max && timemin <= data[4] && data[4] <= timemax) )
            {
                return true;
            }
            return false;
        }
    );
    $( "#datei" ).change(function() {
        table.draw();
    });

    $( "#datef" ).change(function() {
        table.draw();       
    });
    $( "#timei" ).change(function() {
        table.draw();
        
    });
    $( "#timef" ).change(function() {
        table.draw();
        
    });
    $( "#constrain" ).change(function() {
        table.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
            var data = this.data();
            if(data[4] < $("#constrain").val()){
                table.cell(rowIdx,5).data("Temprano");
            }
            else{
                table.cell(rowIdx,5).data("Tarde");   
            }
        }).draw();
          
    });

  $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
        daysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Today",
        clear: "Clear",
        format: "mm/dd/yyyy",
        titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
        weekStart: 0
    };
  var date_input_s=$('input[name="datei"]'); //our date input has the name "date"
  var date_input_f=$('input[name="datef"]');
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  var options={
    format: 'dd/mm/yyyy',
    language: "es",
    container: container,
    todayHighlight: true,
    autoclose: true,
  };
  date_input_s.datepicker(options);
  date_input_f.datepicker(options);
  $('#timei').clockpicker({
    autoclose: true
  });
  $('#timef').clockpicker({
    autoclose: true
  });
  $('#constrain').clockpicker({
    autoclose: true
  });

  


})