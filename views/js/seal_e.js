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


jQuery.validator.addMethod("direc", function(value, element, param) {
  return value.match(new RegExp(param + "$"));
}, "Inicial Mayuscula, Numeros , Letras o ','");

jQuery.validator.addMethod("pay", function(value, element, param) {
  return value.match(new RegExp(param + "$"));
}, "Formato 123-1234567890");
  $('#seal-form').validate({ // initialize the plugin
        rules: {

            newName: {
                required: true,
                accept: "^[A-Z][a-zA-Z ]+",
            },
            newSurname: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },

            newSurnamem: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },
            newAddress: {
                direc: "^[A-Z][a-zA-Z0-9, ]+",
                required: true,
            },
            newDistrict: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },
            newOccupation: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },
            newDegree: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },
            newInst: {
                accept: "^[A-Z][a-z ]+",
                required: true,
            },
            newPayA:{
                pay: "[0-9-]+",
                required: true,
            },
            newPayC:{
                pay: "[0-9-]+",
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
  });
