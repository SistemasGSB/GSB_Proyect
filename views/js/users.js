$(document).ready( function () {
 

    var table = $('#specialTableuser').DataTable({
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

    jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es OBLIGATORIO",
    remote: "Please fix this field.",
    email: "Ingrese un email valido",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Solo se permiten NUMEROS",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("No mas de {0} numeros."),
    minlength: jQuery.validator.format("No menos de {0} numeros."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Solo valores entre {0} y {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});
//Validador de expresiones regulares
jQuery.validator.addMethod("accept", function(value, element, param) {
  return value.match(new RegExp(param + "$"));
}, "Inicial con Mayuscula y Solo Letras");
    $('#user-form').validate({ // initialize the plugin
        rules: {

            newName: {
                required: true,
                accept: "^[A-Z][a-z ]+",
            },
            newSurname: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },
            
        },
        showErrors: function(errorMap, errorList) {
            $.each(this.successList, function(index, value) {
              return $(value).popover("hide");
            });
            return $.each(errorList, function(index, value) {
              var _popover;
              _popover = $(value.element).popover({
                trigger: "manual",
                placement: "top",
                content: value.message,
                template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\" id=\"validacion\"><p></p></div></div></div>"
              });
              // Bootstrap 3.x :      
              _popover.data("bs.popover").options.content = value.message;
              // Bootstrap 2.x :
              //_popover.data("popover").options.content = value.message;
              return $(value.element).popover("show");
            });
        },
        //messages: {},
        //errorElement : 'div',
        //errorLabelContainer: '.errorTxt'
    });
} );




