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
          
          Agregar Personal

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

          $crearUsuario = new SealController();
          $crearUsuario -> ctrCreateSealE();

        ?>
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




<div id="modalAddSealE" class="modal fade" role="dialog">
   <div class="modal-dialog" style="width:1250px;">

    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data" id="seal-form">
           <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Personal SEAL</h4>

          </div>

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              <div class="row">
                <div class="col-sm-3">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newName" placeholder="Nombre" required>

                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSurname" placeholder="Apellido Paterno" required>

                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSurnamem" placeholder="Apellido Materno" required>

                  </div>
                </div>
                <div class="col-sm-3">
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

                    <input type="text" class="form-control input-lg" name="newAddress" placeholder="Direccion" required>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newDistrict" placeholder="Distrito" required>

                  </div>
                </div>
                
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" id="fecha_n" name="newBirthday" placeholder="Fecha Nacimiento" autocomplete="off" required>

                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newOccupation" placeholder="Cargo" required>

                  </div>
                </div>
                
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" id="fecha_i" name="newStartD" placeholder="Fecha Ingreso" autocomplete="off" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" id="fecha_f" name="newFinalD" placeholder="Adenda de Contrato" autocomplete="off" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="6" class="form-control input-lg" name="newPay" placeholder="Sueldo" required>
                </div>
              </div>
            </div>



            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <input type="number" class="form-control input-lg" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" name="newPhone" placeholder="Telefono" required>
                </div>
                <div class="col-sm-4">
                  <input type="number" class="form-control input-lg" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" name="newCPhone" placeholder="Celular" required>
                </div>
                <div class="col-sm-4">
                  <input type="email" class="form-control input-lg" name="newMail" placeholder="Email" required>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                
                <div class="col-sm-4">
                  <input type="text" maxlength="15" class="form-control input-lg" name="newPayA" placeholder="N° Cuenta Sueldo" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" maxlength="15" class="form-control input-lg" name="newPayC" placeholder="N° Cuenta CTS" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  
                    <input type="text" class="form-control input-lg" name="newDegree" placeholder="Carrera" required>

                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control input-lg" name="newInst" placeholder="Institucion" required>
                </div>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkDo" name="checkDo">
                    <label class="form-check-label" for="checkDo">Documentos Terminos de Referencia</label>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" class="form-control input-lg" name="newYold" placeholder="Edad" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" maxlength="12" class="form-control input-lg" name="newCussp" placeholder="CUSSP" required>

                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newSnp" placeholder="SNP" required>

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newFl" placeholder="Flujo">

                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-lg" name="newMix" placeholder="Mixta">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkCon" name="checkCon">
                    <label class="form-check-label" for="checkCon">Conyugue</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkAsig" name="checkAsig">
                    <label class="form-check-label" for="checkAsig">Asignacion Familiar</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                   <textarea class="form-control" rows="3" name="newObs" placeholder="Observacion"></textarea>
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
        
      </form>

    </div>
  </div>

</div>
