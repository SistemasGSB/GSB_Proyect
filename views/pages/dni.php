



<?php
  $val = $_GET['val'];
?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      <?php
        if($val==1){
            echo "Imprimir Certificado de Trabajo";
          }
          elseif ($val==2) {
            echo "Imprimir Contrato";
          }elseif ($val==3) {
            echo "Imprimir Constancia";
          }elseif ($val==4) {
            echo "Imprimir Contrato L.S.";
          }elseif ($val==5) {
            echo "Imprimir Contrato P.E.";
          }else{
            echo "ERROR";
          }
      ?>
      
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="start"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">
        <?php
          if($val==1){
            echo "Imprimir Certificado de Trabajo";
          }
          elseif ($val==2) {
            echo "Imprimir Contrato";
          }elseif ($val==3) {
            echo "Imprimir Constancia";
          }elseif ($val==4) {
            echo "Imprimir Contrato L.S.";
          }elseif ($val==5) {
            echo "Imprimir Contrato P.E.";
          }else{
            echo "ERROR";
          }
        ?>
      </li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">
        <form target="_blank" 
          <?php
          if($val==1){
            echo "action='tools/tcpdf/pdf/certificate.php'";
          }
          elseif ($val==2) {
            echo "action='tools/tcpdf/pdf/contract.php'";
          }elseif ($val==3) {
            echo "action='tools/tcpdf/pdf/constancy.php'";
          }elseif ($val==4) {
            echo "action='tools/tcpdf/pdf/contract_l.php'";
          }elseif ($val==5) {
            echo "action='tools/tcpdf/pdf/contract_p.php'";
          }else{
            echo "action='#'";
          }
          ?>
         id="form_ruc" role="form" method="post" enctype="multipart/form-data">
          <div class="form-group col-sm-5">
            <input type="text" class="form-control" placeholder="DNI" id="dni_s" name="dni" required>
          </div>
          <div class="form-group col-sm-7">
            <button type="button" id="search_dni" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
            <img src="tools/sunat/ajax.gif" class="ajaxgif hide">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" readonly="true" required>
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" id="fecha_i" name="fecha_i" placeholder="Fecha Ingreso" readonly required>  
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" id="fecha_f" name="fecha_f" placeholder="Fecha Salida" readonly required>  
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Puesto de Trabajo" readonly required>  
          </div>
          <?php
            if($val!=1){
              echo '<div class="form-group col-sm-6">
                      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" readonly required>  
                    </div>';
              
              echo '<div class="form-group col-sm-6">
                      <input type="text" class="form-control" id="sueldo" name="sueldo" placeholder="Sueldo" readonly required>  
                    </div>';
            }

          ?>
          
          
          <button style="display: none;" class="btn btn-primary btnDownloadD"
          > Imprimir</button>          
        </form>
      </div>

    </div>

  </section>
</div>