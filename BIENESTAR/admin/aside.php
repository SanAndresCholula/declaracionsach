<!-- Main Sidebar Container -->
<style>
  #bloquear {
    pointer-events: none;
    background-color: gray;
    cursor: not-allowed;
    opacity: 0.5;
  }
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dash.php" class="brand-link">
    <img src="../images/logo_bienestar.ico" alt="Admin SACH" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DASHBOARD</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../profiles/<?php echo $image; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $_SESSION['username']; ?>
        </a>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <p style="color:#fff">MÓDULOS</p>
        <li class="nav-item has-treeview">
          <a href="dash.php" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <?php foreach ($rol as $fila) : ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="crudUsers.php" class="nav-link" id="<?php if ($fila[6]  == 0) echo 'bloquear';
                                                              else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    CRUD Usuarios
                    <!-- <span class="badge badge-info right"</span>  -->
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- <li class="nav-item has-treeview">
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
                
                </p>
              </a>
            </li>
          </ul>
        </li> -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active" ">
          <i class=" nav-icon fas fa-database"></i>
              <p>
                Mis bases de datos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="db_benef.php" class="nav-link" onclick="return confirm('Esta accion podria dilatar mas de 2 minutos por la gran cantidad de datos, ¿quieres continuar? ');" id="<?php if ($fila[7] == 0) echo 'bloquear';
                                                                                                                                                                                          else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="fa fa-archive nav-icon"></i>
                  <p>BD Beneficiarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_data.php" class="nav-link " id="<?php if ($fila[8] == 0) echo 'bloquear';
                                                              else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-server"></i>
                  <p>Captura Beneficiarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="db_apoyos.php" class="nav-link " id="<?php if ($fila[9] == 0) echo 'bloquear';
                                                              else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="fas fa-people-carry"></i>
                  <p>&nbsp;BD Apoyos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Programas y mas...
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tprograms.php" class="nav-link " id="<?php if ($fila[10] == 0) echo 'bloquear';
                                                              else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-people-carry"></i>
                  <p>Tipo de Programas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nom_programs.php" class="nav-link " id="<?php if ($fila[10] == 0) echo 'bloquear';
                                                                  else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-ad"></i>
                  <p>Nombre de Programas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="secretaria.php" class="nav-link " id="<?php if ($fila[10] == 0) echo 'bloquear';
                                                                else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="fas fa-tasks"></i>
                  <p>&nbsp;&nbsp;&nbsp;Secretarías</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="colors.php" class="nav-link " id="<?php if ($fila[10] == 0) echo 'bloquear';
                                                            else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="fas fa-tint"></i>
                  <p>&nbsp;&nbsp;&nbsp;Estatus colores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Catalogo seccional
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sectionscons.php" class="nav-link ">
                  <i class="nav-icon fa fa-route"></i>
                  <p>Consulta de colonias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sections.php" class="nav-link " id="<?php if ($fila[11] == 0) echo 'bloquear';
                                                              else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-route"></i>
                  <p>Secciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sectionscp.php" class="nav-link " id="<?php if ($fila[11] == 0) echo 'bloquear';
                                                                else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-route"></i>
                  <p>Código Postal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sectionsloc.php" class="nav-link " id="<?php if ($fila[11] == 0) echo 'bloquear';
                                                                else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-route"></i>
                  <p>Localidades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sectionscol.php" class="nav-link " id="<?php if ($fila[11] == 0) echo 'bloquear';
                                                                else echo ''; ?>" data-toggle="tooltip" title="Acceso habilitado">
                  <i class="nav-icon fa fa-route"></i>
                  <p>Colonias</p>
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </nav>
  </div>
<?php endforeach ?>
</aside>