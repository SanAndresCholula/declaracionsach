<?php
require 'head.php';
?>
<title>Tipos de programas <?php echo $_SESSION['usuario'] ?></title>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="../../../panelUsuario.php" class="nav-link text-white">Salir del Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="../index.php" class="nav-link text-white">Anterior</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="../../../../function/cerrar-sesion.php" class="nav-link text-white">Cerrar sesión</a>
        </li>

      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <?php
    require 'aside.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-white">CRUD Tipo de programas </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                <li class="breadcrumb-item active">CRUD Tipos</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">

            <section class="col-lg-12 connectedSortable">

              <!-- Map card -->
              <div class="card collapsed-card">
                <div class="card-header border-0" style="background: #007bff; color:white">
                  <h3 class="card-title">
                    <i class="fas fa-database mr-1"></i>
                    Tabla Tipo de programas
                  </h3>
                  <!-- card tools -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <div class="card-body">
                  <section class="content">
                    <div class="container">
                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-12">
                                  <h3 class="card-title">Diferentes tipos de programas existentes</h3>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <?php
                            $query = "SELECT  id_tp, nom_tp, date, date_mod FROM tipo_programa ORDER BY id_tp desc";
                            $resultado = mysqli_query($conexion, $query);
                            ?>
                            <div class="card-body">

                              <table id="example" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                                <thead>
                                  <tr>
                                    <td>Id</td>
                                    <td><b>Tipo de programa</b></td>
                                    <td><b>Fecha creación</b></td>
                                    <td><b>Fecha modificación</b></td>
                                    <td>Acciones</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php

                                  while ($row = $resultado->fetch_assoc()) { ?>
                                    <tr>
                                      <td>
                                        <?php echo $row['id_tp']; ?>
                                      </td>
                                      <td>
                                        <?php echo $row['nom_tp']; ?>
                                      </td>

                                      <td>
                                        <?php echo $row['date']; ?>
                                      </td>
                                      <td>
                                        <?php echo $row['date_mod']; ?>
                                      </td>
                                      <td>

                                        <a style="display: inline;" href="mod_tp.php?id=<?php echo $row['id_tp']; ?>" title="Editar tipo de programa" onclick="deshabilitar(this)"><i class="fas fa-edit fa-2x"></i></a>

                                        <a style="display: inline;" href="deleteTp.php?id=<?php echo $row['id_tp']; ?>" title="Eliminar tipo de programa" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
                                      </td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                  </section>
                </div>
                <!-- /.card-body-->
              </div>
              <!-- /.card -->

              <!-- solid sales graph -->
              <div class="card collapsed-card">
                <div class="card-header border-0" style="background: #007bff; color:white">
                  <h3 class="card-title">
                    <i class="fas fa-th mr-1"></i>
                    Agregar Tipo de programas
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row justify-content-center">
                        <!-- left column -->
                        <div class="col-lg-8 ">
                          <!-- general form elements -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title"><?php echo $_SESSION['usuario'] ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="test_upload" name="test_upload" action="addTp.php" method="post">
                              <div class="card-body">

                                <div class="form-group text-black">
                                  <label for="exampleInputEmail1">Tipo de programa</label>
                                  <input type="text" name="nom_tp" id="nom_tp" class="form-control input-sm" required placeholder="Ingresa el tipo de programa">
                                </div>
                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Crear</button>
                              </div>
                            </form>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </section>
                </div>
              </div>

              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    require '../pages/footer.php';
    ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="../plugins/popper/popper.min.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../plugins/datatables/datatables.min.js"></script>

  <!-- para usar botones en datatables JS -->
  <script src="../plugins/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="../plugins/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="../plugins/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="../plugins/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
  <script src="../plugins/datatables/main.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
</body>

</html>