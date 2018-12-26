<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="start"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar clientes</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">
        
       <table  class="display <?php if($_SESSION["perfil"] == "Administrador")
                  {
                    echo 'clients_adm';
                  }
                  if($_SESSION["perfil"] != "Administrador")
                  {
                    echo 'clients';
                  }
            ?>   " width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombres Completos</th>
           <th>Dni</th>
           <th>Celular</th>
           <th>Email</th>
           <th>Direccion</th>        

         </tr> 

        </thead>

        <tbody>

        <?php
        if($_SESSION["perfil"] == "Administrador")
          {
          $item = null;
          $value = null;
          $order = "id_cliente";
          }
        else
          {
          $item = "asesor";
          $value = $_SESSION["usuario"];
          $order = "id_cliente";
          }        
        $clients = ClientController::ctrSearchClients($item, $value, $order); 

       foreach ($clients as $key => $value){
         
          echo ' <tr>
                  <td>'.$value["id_cliente"].'</td>
                  <td>'.$value["nombre"].' '.$value["apellido"].'</td>
                  <td>'.$value["dni"].'</td>
                  <td>'.$value["celular"].'</td>
                  <td><a href="mailto:'.$value["email"].'" target="_top"> '.$value["email"].'</td>
                  <td>'.$value["direccion"].'</td>';      

                   

          echo '</tr>';
        }


        ?> 

        </tbody>

       </table>
       <?php
        if($_SESSION["perfil"] == "Administrador")
                  {
                    echo '

                    <div class="btn-group pull-left">

                      <button class="btn btn-danger btnEliminarCliente" idUsuario="'.$value["id_cliente"].'">Borrar</button>

                    </div>  

                ';
                  }     
       ?>
      </div>

    </div>

  </section>

</div>