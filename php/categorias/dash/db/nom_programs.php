<?php
require 'head.php';
?>
<title>Nombres de programas <?php echo $_SESSION['usuario'] ?></title>

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
              <h1 class="m-0 text-white">CRUD Nombre de programas existentes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                <li class="breadcrumb-item active">CRUD programas</li>
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
            <!-- Left col -->

            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">

              <!-- Map card -->
              <div class="card collapsed-card">
                <div class="card-header border-0" style="background: #007bff; color:white">
                  <h3 class="card-title">
                    <i class="fas fa-database mr-1"></i>
                    Tabla Nombres de programas
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
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-12">
                                  <h3 class="card-title">Nombres de programas existentes</h3>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <?php
                            $query = "SELECT  id_np, id_tp2, nom_p, date, date_mod FROM nom_programa ORDER BY id_np desc";
                            $resultado = mysqli_query($conexion, $query);
                            ?>
                            <div class="card-body">

                              <table id="example" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                                <thead>
                                  <tr>
                                    <td>Id</td>
                                    <td><b>Tipo de programa</b></td>
                                    <td><b>Nombre del programa</b></td>
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
                                        <?php echo $row['id_np']; ?>
                                      </td>
                                      <td>
                                        <!-- consultar id id_tp2 y convertirlo al nombre nom_tp -->
                                        <?php
                                        $nom_tpid = $row['id_tp2'];
                                        $nom_tp = mysqli_query($conexion, "SELECT * FROM nom_programa WHERE id_tp2 = $nom_tpid");
                                        while ($dato = mysqli_fetch_array($nom_tp)) {
                                          $tipo_p = $dato['id_tp2'];
                                        }
                                        $n_tp = mysqli_query($conexion, "SELECT * FROM tipo_programa WHERE id_tp = $tipo_p");
                                        while ($dato2 = mysqli_fetch_array($n_tp)) {
                                          $nom_tp = $dato2['nom_tp'];
                                        }
                                        // nombre del tipo de programa extraido
                                        echo $nom_tp;
                                        ?>
                                      </td>

                                      <td>
                                        <?php echo $row['nom_p']; ?>
                                      </td>
                                      <td>
                                        <?php echo $row['date']; ?>
                                      </td>
                                      <td>
                                        <?php echo $row['date_mod']; ?>
                                      </td>
                                      <td>
                                        <a style="display: inline;" href="mod_np.php?id=<?php echo $row['id_np']; ?>" title="Editar tipo de programa" onclick="deshabilitar(this)"><i class="fas fa-edit fa-2x"></i></a>

                                        <a style="display: inline;" href="deleteNp.php?id=<?php echo $row['id_np']; ?>" title="Eliminar tipo de programa" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
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
                    Agregar Nombres de programas
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
                        <div class="col-lg-10 ">
                          <!-- general form elements -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title"><?php echo $_SESSION['usuario'] ?></h3>
                            </div>
                            <!-- form start -->
                            <form id="test_upload" name="test_upload" action="addNp.php" method="post">
                              <div class="card-body">
                                <div class="row">
                                  <!-- consulta tipo de programa -->
                                  <?php
                                  $sql = "SELECT id_tp, nom_tp FROM tipo_programa  ORDER BY nom_tp ASC";
                                  $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                  ?>
                                  <div class="col-6">
                                    <div class="form-group text-black">
                                      <label for="exampleInputEmail1">Tipo de programa</label>
                                      <select name="id_tp2" id="id_tp2" class="form-control input-sm" required>
                                        <option value="">Seleciona un Tipo de Programa</option>
                                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                          <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                          </option>
                                        <?php endwhile ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group text-black">
                                      <label for="exampleInputEmail1">Nombre del programa</label>
                                      <input type="text" name="nom_p" id="nom_p" class="form-control input-sm" required placeholder="Ingresa el nombre del programa">
                                    </div>
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
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- date-range-picker -->
  <script src=".../plugins/daterangepicker/daterangepicker.js"></script>
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
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- Page script -->
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>
</body>

</html>