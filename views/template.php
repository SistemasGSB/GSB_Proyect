<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GSB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
  <!-- DateTimePicker -->
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

   <!-- DataTables -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

  


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="views/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="views/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

  <link rel="stylesheet" type="text/css" href="tools/Clockpicker/bootstrap-clockpicker.min.css">



  <!-- jQuery 3 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>
  <!-- DataTimePicker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <!-- DataTables -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


  <script src="views/bower_components/moment/moment.js"></script>
  <script src="views/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript" src="tools/Clockpicker/bootstrap-clockpicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <?php
      if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

       echo '<div class="wrapper">';

        /*=============================================
        CABEZOTE
        =============================================*/

        include "pages/header.php";

        /*=============================================
        MENU
        =============================================*/

        include "pages/menu.php";

        /*=============================================
        CONTENIDO
        =============================================*/
        if(isset($_GET["ruta"])){
          

          if($_GET["ruta"] == "start" ||
             $_GET["ruta"] == "users" ||
             $_GET["ruta"] == "meeting" ||
             $_GET["ruta"] == "clients"||
             $_GET["ruta"] == "ruc"||
             $_GET["ruta"] == "dni"||
             $_GET["ruta"] == "sealEmp"||
            $_GET["ruta"] == "attendance"){

            include "pages/".$_GET["ruta"].".php";

          }else{

            include "pages/404.php";

          }

        }else{

          include "pages/start.php";

        }

        /*=============================================
        FOOTER
        =============================================*/

        include "pages/footer.php";

        echo '</div>';

      }else{

        include "pages/login.php";

      }
  ?>
<script src="views/js/users.js"></script>
<script src="views/js/clients.js"></script>
<script src="views/js/calendar.js"></script>
<script src="views/js/download.js"></script>
<script src="views/js/attendance.js"></script>
<script src="views/js/ruc.js"></script>
<script src="views/js/dni.js"></script>
<script src="views/js/seal_e.js"></script>

</body>
</html>
