<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="../../../../img/icon.ico" alt="Admin SACH" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DATABASE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../images/profiles/<?php echo $image; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $_SESSION['usuario']; ?>
        </a>
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
          <a href="dash.php" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
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
              <a href="db_benef.php" class="nav-link">
                <i class="fa fa-archive nav-icon"></i>
                <p>Base de datos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="add_data.php" class="nav-link ">
                <i class="nav-icon fa fa-server"></i>
                <p>Captura de datos</p>
              </a>
            </li>
          </ul>
        </li> 
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-hands-helping"></i>
            <p>
              Programas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="tprograms.php" class="nav-link ">
                <i class="nav-icon fa fa-people-carry"></i>
                <p>Tipo de Programas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="nom_programs.php" class="nav-link ">
                <i class="nav-icon fa fa-ad"></i>
                <p>Nombre de Programas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-book"></i>
            <p>
              Catalogo Colonias
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="sections.php" class="nav-link ">
                <i class="nav-icon fa fa-route"></i>
                <p>Secciones</p>
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