<?php
require 'head.php';
?>
<title>CRUD nombres de programas | <?php echo $_SESSION['username'] ?></title>

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
              <h1 class="m-0 text-white">CRUD Nombre de programas </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                <li class="breadcrumb-item active">Nombre de programas</li>
              </ol>
            </div>
          </div>
        </div>
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
                <div class="card-body" style="background-color: #EAE8E8;">
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          <div class="card card-info">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-12">
                                  <h3 class="card-title"><img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"> Base de datos Nombres de programas</h3>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <?php
                            $query = "SELECT  id_np, nom_p, date, date_mod FROM nom_programa ORDER BY id_np desc";
                            $resultado = mysqli_query($conexion, $query);
                            ?>
                            <div class="card-body">
                              <table id="<?php if ($fila[30]  == 1) echo 'example';
                                          else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <td>Id</td>
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
                                        <?php echo $row['nom_p']; ?>
                                      </td>
                                      <td>
                                        <?php echo $row['date']; ?>
                                      </td>
                                      <td>
                                        <?php echo $row['date_mod']; ?>
                                      </td>
                                      <td>
                                        <a style="display: inline;" href="mod_np.php?id=<?php echo $row['id_np']; ?>" title="Editar nombre de programa" onclick="deshabilitar(this)" id="<?php if ($fila[22]  == 0) echo 'accion';
                                                                                                                                                                                          else echo ''; ?>"><i class="fas fa-edit fa-2x"></i></a>

                                        <a style="display: inline;" href="deleteNp.php?id=<?php echo $row['id_np']; ?>" title="Eliminar nombre de programa" onclick="return ConfirmDelete()" id="<?php if ($fila[23]  == 0) echo 'accion';
                                                                                                                                                                                                  else echo ''; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                      </td>
                                    </tr>
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
                <div class="card-body" style="background-color: #EAE8E8;">
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row justify-content-center">
                        <!-- left column -->
                        <div class="col-lg-6 ">
                          <!-- general form elements -->
                          <div class="card card-info">
                            <div class="card-header">
                              <h3 class="card-title"><img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"><b> <?php echo $fullname ?></b></h3>
                            </div>
                            <!-- form start -->
                            <form id="test_upload" name="test_upload" action="addNp.php" method="post" onsubmit="return validarNP()">
                              <div class="card-body">
                                <div class="row">
                                  <!-- consulta tipo de programa -->
                                  <div class="col-12">
                                    <div class="form-group text-black">
                                      <label for="exampleInputEmail1">Nombre del programa</label>
                                      <input type="text" name="nom_p" id="nom_p" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa el nombre del programa" <?php if ($fila[21]  == 0) echo 'disabled readonly';
                                                                                                                                                                                                                      else echo ''; ?>>
                                      <small class="form-text text-muted">Max 50 caracteres</small>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                  <?php if ($fila[21]  == 1) echo '<button type="submit" name="submit" class="btn btn-primary"  data-toggle="tooltip" title="Crear tipo programa" ><i class="fas fa-plus"></i> Crear Nombre programa</button>';
                                  else echo ''; ?>
                                  <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
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
  <!--  -->
  <script src="../js/preloader.js"></script>
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