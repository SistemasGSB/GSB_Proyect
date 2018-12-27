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
  });