$(document).ready( function () {
 

    var table = $('#TableSeal').DataTable({
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
    
      'select': {
         'style': 'multi'
      },
      'order': [[1, 'asc']],
      "pageLength": 10,
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


  var date_n=$('#fecha_n'); //our date input has the name "date"
  var date_i=$('#fecha_i');
  var date_f=$('#fecha_f');
  var contain=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  var opt={
    format: 'dd/mm/yyyy',
    container: contain,
    todayHighlight: true,
    autoclose: true,
  };
  date_n.datepicker(opt);
  date_i.datepicker(opt);
  date_f.datepicker(opt);
  });
