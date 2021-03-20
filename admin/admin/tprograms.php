<?php
require 'head.php';
?>
<title>CRUD tipo de programas | <?php echo $_SESSION['username'] ?></title>

<body class="hold-transition sidebar-mini sidebar-collapse hidden">
  <div class="centrado" id="onload">
    <div class="lds-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="wrapper">
    <!-- Navbar -->
    <?php
    require 'nav.php';
    require 'aside.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">CRUD Tipo de programas existentes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                <li class="breadcrumb-item active">Tipo de programas</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <section class="content">
        <div class="container-fluid">
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
                <div class="card-body" style="background-color: #EAE8E8;">
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

                              <table id="<?php if ($fila[30]  == 1) echo 'example';
                                                                        else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

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
                                      <?php foreach($rol as $fila ): ?>
                                        <a style="display: inline;" href="mod_tp.php?id=<?php echo $row['id_tp']; ?>" title="Editar tipo de programa" onclick="deshabilitar(this)" id="<?php if( $fila[22]  == 0) echo 'accion'; else echo ''; ?>" ><i class="fas fa-edit fa-2x"></i></a>

                                        <a style="display: inline;" href="deleteTp.php?id=<?php echo $row['id_tp']; ?>" title="Eliminar tipo de programa" onclick="return ConfirmDelete()" id="<?php if( $fila[23]  == 0) echo 'accion'; else echo ''; ?>" ><i class="fas fa-trash-alt fa-2x"></i></a>
                                      </td>
                                    </tr>
                                    <?php endforeach ?>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
 
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
                <div class="card-body" style="background-color: #EAE8E8;">
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row justify-content-center">
                        <!-- left column -->
                        <div class="col-lg-8 ">
                          <!-- general form elements -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title"><?php echo $_SESSION['username'] ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="test_upload" name="test_upload" action="addTp.php" method="post" onsubmit="return validarTP()">
                              <div class="card-body">

                                <div class="form-group text-black">
                                  <label for="exampleInputEmail1">Tipo de programa</label>
                                  <input type="text" name="nom_tp" id="nom_tp" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa el tipo de programa" required <?php if ($fila[21]  == 0) echo 'disabled readonly';
                                                                                                                                                                                                                                                                                        else echo ''; ?>>
                                  <small class="form-text text-muted">Max 10 caracteres</small>
                                </div>
                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                              <?php if ($fila[21]  == 1) echo '<button type="submit" name="submit" class="btn btn-primary"  data-toggle="tooltip" title="Crear tipo programa" ><i class="fas fa-plus"></i> Crear tipo programa</button>';
                                                                                else echo ''; ?>
                                <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
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
    require 'footer.php';
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
  <!--  -->
  <script src="../js/preloader.js"></script>
</body>

</html>