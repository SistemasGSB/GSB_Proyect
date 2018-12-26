<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar asistencia
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="start"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar asistencia</li>
    
    </ol>

  </section>
  <?php

              $importExcel = new AttendanceController();
              $importExcel -> SetExcelFile();

            ?>
  <section class="content">

    <div class="box">

      <div class="box-header with-border">
        <div class="col-sm-2">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddExcel">
          Importar Excel
        </button>
        </div>
        <div class="col-sm-2">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          <input class="form-control" id="datei" name="datei" placeholder="fecha_inicio" type="text"/>  

        </div>
        <div class="col-sm-2">
          <span class="input-group-addon">
          <span class="glyphicon glyphicon-time"></span>
          </span>
          <input type="text" id="timei" class="form-control" placeholder="hora_inicio">
        </div>
        <div class="col-sm-2">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          <input class="form-control" id="datef" name="datef" placeholder="fecha_fin" type="text"/>  
        </div>
        <div class="col-sm-2">
          <span class="input-group-addon">
          <span class="glyphicon glyphicon-time"></span>
          </span>
          <input type="text" id="timef" class="form-control" placeholder="hora_fin">
        </div>
        <div class="col-sm-2">
          <span class="input-group-addon">Hora de Entrada<span class="glyphicon glyphicon-time"></span></span>
          <input class="form-control" id="constrain" name="constrain" placeholder="hora de entrada" type="text" value="8:10" /> 
        </div>
      </div>

      <div class="box-body">
        
       <table id="specialTable" class="display" width="100%">
         
        <thead>
         
         <tr>
           
           <th></th>
           <th>AC-No</th>
           <th>Nombre</th>
           <th>Fecha</th>
           <th>Hora</th>
           <th>Estado</th>
         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $value = null;

        $users = AttendanceController::ctrSearchAttendance($item, $value);

       foreach ($users as $key => $value){
         
          echo ' <tr>
                  <td width="10"></td>
                  <td>'.$value["ac_no"].'</td>
                  <td>'.$value["nombre"].'</td>';

          $sl = explode(" ",$value["fecha_hora"]); 
          $date = date_create($sl[0]);

          echo '<td>'.date_format($date, 'd/m/Y').'</td>
                <td>'.$sl[1].'</td>';
          if($sl[1]<"08:10:00"){
            echo '<td > Temprano </td>';
          }
          else{
            echo '<td> Tarde </td>';
          }
          echo '</tr>';
        }


        ?> 

        </tbody>
        <tfoot>
            <tr>
                <th></th>
                 <th class="foot">AC-No</th>
                 <th class="foot">Nombre</th>
                 <th class="foot">Fecha</th>
                 <th class="foot">Hora</th>
                 <th class="foot">Estado</th>
            </tr>
        </tfoot>
       </table>
      </div>
      
    </div>

  </section>

</div>
<div id="modalAddExcel" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" enctype="multipart/form-data">
            Seleccione un archivo Excel:
            <input type="file" name="path" id="path">
            <input type="submit" value="Subir" name="submit">
        </form>
      </div>
  </div>

</div>
