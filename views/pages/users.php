<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar usuarios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="start"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar usuarios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser">
          
          Agregar usuario

        </button>

      </div>

      <div class="box-body">
        <form id="delUserForm">
       <table id="specialTableuser" class="display" width="100%">
         
        <thead>
         
         <tr>
           
           <th></th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Telefono</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th></th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $value = null;

        $users = UserController::ctrSearchUsers($item, $value);

       foreach ($users as $key => $value){
         
          echo ' <tr>
                  <td></td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  
                  echo '<td>'.$value["telefono"].'</td>';
                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

                  }             

                  echo '<td>'.$value["ultimo_login"].'</td>
                   <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditUser"><i class="fa fa-pencil"></i></button>

                      </div>  

                    </td>

                </tr>';
        }


        ?> 

        </tbody>

       </table>
       <?php
       echo ' <button class="btn btn-danger btnDeleteUser pull-left" idUsuario="'.$value["id"].'" usuario="'.$value["usuario"].'">Borrar</button>'
       ?>
       </form>
      </div>
      
    </div>

  </section>

</div>
<div id="modalAddUser" class="modal fade" role="dialog">
   <div class="modal-dialog" style="width:1250px;">

    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data" id="user-form">
           <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar usuario</h4>

          </div>
            <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newName" placeholder="Nombre" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSurname" placeholder="Apellido" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" class="form-control input-lg" name="newId" placeholder="DNI" required>

                  </div>
                </div>
              </div>
            </div>



            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newAddress" placeholder="Direecion" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newDistrict" placeholder="Distrito" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newBirthday" placeholder="Fecha Nacimiento" required>

                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-3">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newCivil" placeholder="Estado Civil" required>

                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newBlood" placeholder="Tipo Sangre" required>

                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newEmail" placeholder="Correo" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" class="form-control input-lg" name="newCel" placeholder="Celular Personal" required>
                  <div class="input-group">
                    
                    
                    <select class="form-control" name="opeCelP">
                      <option value="Movistar">Movistar</option>
                      <option value="Claro">Claro</option>
                      <option value="Bitel">Bitel</option>
                      <option value="Entel">Entel</option>
                      <option value="Nextel">Nextel</option>
                      <option value="Otros">Otros</option>
                    </select>
                    <span class="input-group-addon">Operador</span>

                  </div>
                </div>
              </div>
            </div>



            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSchedule" placeholder="Horario de Trabajo" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control input-lg" name="newContact" placeholder="Contacto para Emergencia" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" class="form-control input-lg" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" name="newCEPhone" placeholder="Celular de Emergencia" required>
                  <div class="input-group">
                    
                    <select class="form-control" name="opeCelE">
                      <option value="Movistar">Movistar</option>
                      <option value="Claro">Claro</option>
                      <option value="Bitel">Bitel</option>
                      <option value="Entel">Entel</option>
                      <option value="Nextel">Nextel</option>
                      <option value="Otros">Otros</option>
                    </select>
                    <span class="input-group-addon">Operador</span>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSchedule" placeholder="Dias de la Semana" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" class="form-control input-lg" name="newTelE" placeholder="Telefono para Emergencia" required>
                  <div class="input-group">
                    
                    
                    <select class="form-control" name="opeTelE">
                      <option value="Movistar">Movistar</option>
                      <option value="Claro">Claro</option>
                      <option value="Bitel">Bitel</option>
                      <option value="Entel">Entel</option>
                      <option value="Nextel">Nextel</option>
                      <option value="Otros">Otros</option>
                    </select>
                    <span class="input-group-addon">Operador</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newHours" placeholder="Horas por Dia" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newRelation" placeholder="Parentesco" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" class="form-control input-lg" name="newWPhone" placeholder="Celular de Trabajo" required>
                    

                  <div class="input-group">
                    
                    <select class="form-control" name="opeCelT">
                      <option value="Movistar">Movistar</option>
                      <option value="Claro">Claro</option>
                      <option value="Bitel">Bitel</option>
                      <option value="Entel">Entel</option>
                      <option value="Nextel">Nextel</option>
                      <option value="Otros">Otros</option>
                    </select>
                    
                    <span class="input-group-addon">Operador</span>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newArea" placeholder="Area" required>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newPosition" placeholder="Cargo" required>

                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newApli1" placeholder="Aplica. o Utili. 1" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newApli2" placeholder="Aplica. o Utili. 2" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newApli3" placeholder="Aplica. o Utili. 3" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newApli4" placeholder="Aplica. o Utili. 4" required>

                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="number" class="form-control input-lg" name="newTaxi" placeholder="Taxi Caller" required>

                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newAcce1" placeholder="Acceso 1" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newAcce2" placeholder="Acceso 2" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newAcce3" placeholder="Acceso 3" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newAcce4" placeholder="Acceso 4" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="number" class="form-control input-lg" name="newZoiper" placeholder="Zoiper" required>

                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSoli" placeholder="Persona Solicitante" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newStarD" placeholder="Fecha Inicio" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newFinalD" placeholder="Fecha Termino" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newCuenta" placeholder="A Llenar por TIC: Cuenta" required>

                  </div>
                </div>
              </div>
            </div>



          </div>

        </div>
         <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>
        <?php

          $crearUsuario = new UserController();
          $crearUsuario -> ctrCreateUser();

        ?>
      </form>

    </div>
  </div>

</div>

<?php

  $borrarUsuario = new UserController();
  $borrarUsuario -> ctrDeleteUsers();

?> 