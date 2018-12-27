



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
          else{
            echo "ERROR";
          }
      ?>
      
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="start"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">
        <?php
          if($val==1){
            echo "Imprimir Contrato";
          }
          else{
            echo "ERROR";
          }
        ?>
      </li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">
        <form id="form_ruc" action="tools/tcpdf/pdf/letter.php" role="form" method="post" enctype="multipart/form-data">
          <div class="form-group col-sm-5">
            <input type="text" class="form-control" id="ruc" name="ruc" placeholder="RUC" required>
          </div>
          <div class="form-group col-sm-7">
            <button type="button" id="search_ruc" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
            <img src="tools/sunat/ajax.gif" class="ajaxgif hide">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" id="razon" name="razon" placeholder="Razon Social" readonly required>
          </div>

          <div class="form-group col-sm-6">
            <button style="display: none;" class="btn btn-primary btnDownloadR"> Imprimir</button>
          </div>
        </form>
      </div>

    </div>

  </section>
</div>