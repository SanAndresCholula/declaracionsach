<?php
require 'head.php';
?>
<title>Agregar a la base de datos <?php echo $_SESSION['usuario'] ?></title>

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
                            <h1 class="text-white">Agregar registros a la base de datos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Agregar a BD</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
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
                            <!-- solid sales graph -->
                            <div class="card ">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-keyboard mr-1"></i> Agregar registros a la BD
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-info" style="background-color: #EAE8E8;">
                                        <div class="card-header">
                                            <h3 class="card-title"><b><?php echo $_SESSION['usuario'] ?></b></h3>
                                        </div>
                                        <form id="test_upload" name="test_upload" action="addbenef.php" method="post" enctype="multipart/form-data">
                                            <div class="card-body">
                                                <div class="div">
                                                    <h4 class="justify-content-center">Nombre completo del beneficiario</h4><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                            </div>
                                                            <input type="text" name="a_paterno" class="form-control" placeholder="* Apellido paterno">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                            </div>
                                                            <input type="text" name="a_materno" class="form-control" placeholder="*Apellido materno">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" name="nombres" class="form-control" placeholder="*Nombre completo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="div">
                                                    <h4 class="justify-content-center">Datos generales</h4><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                            </div>
                                                            <input type="tel" name="telefono" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                            </div>
                                                            <input type="text" name="ine" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Clave de elector">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                                            </div>
                                                            <input type="text" name="curp" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Clave CURP">
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <?php
                                                    $sql = "SELECT id_sexo, genero FROM sexo  ORDER BY id_sexo ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>


                                                    <div class="col-3">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                                            </div>
                                                            <select name="sexo" id="sexo" class="form-control">
                                                                <option value="">Genero</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <input type="text" name="nacimiento" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="* Nacimiento">
                                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="div">
                                                    <h4 class="justify-content-center">Sección | Domicilio</h4><br>
                                                </div>
                                                <div class="row">
                                                    <?php
                                                    $sql = "SELECT id_nsec, seccion FROM n_seccion  ORDER BY seccion ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <div class="col-3">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                                            </div>
                                                            <select name="seccion" id="seccion" class="form-control">
                                                                <option value="">Seccion</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $sql = "SELECT id_col, colonia FROM colonia  ORDER BY colonia ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <div class="col-9">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                            </div>
                                                            <select name="colonia" id="colonia" class="form-control">
                                                                <option value="">Colonia</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $sql = "SELECT id_cp, cp FROM c_postal  ORDER BY cp ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <div class="col-3">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                                            </div>
                                                            <select name="cp" id="cp" class="form-control">
                                                                <option value="">C.P.</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                                            </div>
                                                            <input type="text" name="calle" class="form-control" placeholder="* Calle">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                                                            </div>
                                                            <input type="text" name="num_ext" class="form-control" placeholder="# Ext.">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-sort-numeric-down-alt"></i></span>
                                                            </div>
                                                            <input type="text" name="num_int" class="form-control" placeholder="# Int.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="div">
                                                    <h4 class="justify-content-center">Programa</h4><br>
                                                </div>
                                                <div class="row">
                                                    <?php
                                                    $sql = "SELECT id_np, nom_p FROM nom_programa  ORDER BY nom_p ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-people-carry"></i></span>
                                                            </div>
                                                            <select name="np" id="np" class="form-control" ^$\n>
                                                                <option value="">Nombre del programa</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $sql = "SELECT id_tp, nom_tp FROM tipo_programa  ORDER BY nom_tp ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-hands-helping"></i></span>
                                                            </div>
                                                            <select name="tp" id="tp" class="form-control">
                                                                <option value="">Tipo de programa</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                                <div class="div">
                                                    <h4 class="justify-content-center">Comentarios</h4><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-comments"></i></span>
                                                            </div>
                                                            <textarea type="text" name="comentario" rows="1" class="form-control" style="max-width:100%; " placeholder="Ingresa algun comentarios"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" name="photo" class="custom-file-input" id="exampleInputFile" title="Selecciona algun archivo">
                                                                    <label class="custom-file-label" for="exampleInputFile">Sube un archivo</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fas fa-file-upload "></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <div class="card-footer">
                                                        <input type="hidden" name="capturo" value="<?php echo $_SESSION['usuario'] ?>">
                                                        <button type="submit" name="submit" class="btn btn-primary">Crear registros</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->
                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
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

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- popper -->
    <script src="../plugins/popper/popper.min.js"></script>
    <!-- bs-custom-file-input -->
    <!-- <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->
    <!-- DataTables -->
    <script src="../plugins/datatables/datatables.min.js"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <!--Bootstrap4 Duallistbox -->
    <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
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