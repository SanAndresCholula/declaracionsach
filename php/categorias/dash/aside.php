<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="../../../img/icon.ico" alt="Admin SACH" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DASHBOARD</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="images/profiles/<?php echo $profile_pic; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="pull-left info">
        <p style="color: #fff; font-size:14px"><?php echo $fullname; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <p style="color:#fff">NEVAGACION</p>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Calendario
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/calendar.php" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Agenda de actividades
                  <!-- <span class="badge badge-info right">2</span> -->
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-server"></i>
            <p>
              Servidor SACH
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/upload.php" class="nav-link ">
                <i class="nav-icon fa fa-upload"></i>
                <p>Resguardar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tablaUploadFile.php" class="nav-link">
                <i class="fa fa-archive nav-icon"></i>
                <p>Ver mis resguardos</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-inbox"></i>
            <p>
              Gestor de archivos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="gestorArchivos/home.php" class="nav-link">
                <i class="fa fa-home nav-icon"></i>
                <p>Home</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Mi base de datos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="db/dash.php" class="nav-link ">
                <i class="nav-icon fa fa-home"></i>
                <p>Home</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>