  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="pages/desktop.html">
            <i class="fa fa-th"></i> <span>Escritorio</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Personal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="users"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="clients"><i class="fa fa-circle-o"></i> Clientes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Documentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?ruta=dni&val=1" ><i class="fa fa-circle-o"></i> Certificado de Trabajo</a></li>
            <li><a href="index.php?ruta=dni&val=2" idDownload="contract.php"><i class="fa fa-circle-o"></i> Contrato</a></li>
            <li><a href="index.php?ruta=ruc&val=1" idDownload="letter.php"><i class="fa fa-circle-o"></i> Carta de Presentacion</a></li>
            <li><a href="index.php?ruta=dni&val=4" idDownload="contract_l.php"><i class="fa fa-circle-o"></i> Contrato L.S.</a></li>
            <li><a href="index.php?ruta=dni&val=5" idDownload="contract_p.php"><i class="fa fa-circle-o"></i> Contrato P.E.</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Contabilidad</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="attendance"><i class="fa fa-circle-o"></i> Asistencias</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>SEAL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sealEmp"><i class="fa fa-circle-o"></i> Personal</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>