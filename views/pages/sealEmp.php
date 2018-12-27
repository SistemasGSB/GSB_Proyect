<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Empleados SEAL
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="start"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Empleados SEAL</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddSealE">
          
          Agregar usuario

        </button>

      </div>

      <div class="box-body">
        <form id="delSealF">
       <table id="TableSeal" class="display" width="100%">
         
        <thead>
         
         <tr>
           
           <th></th>
           <th>Nombre</th>
           <th>DNI</th>
           <th>Cargo</th>
           <th></th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $value = null;

        $users = SealController::ctrSearchEmpl($item, $value);

       foreach ($users as $key => $value){
         
          echo ' <tr>
                  <td></td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["dni"].'</td>';

                  
                  echo '<td>'.$value["cargo"].'</td>';
                  
                  echo '
                   <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditSealE"><i class="fa fa-pencil"></i></button>

                      </div>  

                    </td>

                </tr>';
        }


        ?> 

        </tbody>

       </table>
       <?php
       echo ' <button class="btn btn-danger btnDeleteSealE pull-left" idUsuario="'.$value["id"].'" dni="'.$value["dni"].'">Borrar</button>'
       ?>
       </form>
      </div>
      
    </div>

  </section>

</div>