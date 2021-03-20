<?php
require 'head.php';
?>
<title>Catalogo de colonias <?php echo $_SESSION['usuario']?></title>
<body class="hold-transition sidebar-mini layout-fixed" >
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
                            <h1 class="m-0 text-white">CRUD secciones distritales</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Secciones distritales</li>
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
                                        Tabla Secciones distritales
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
                                                                    <h3 class="card-title">Secciones</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <?php
                                                        $query = "SELECT  id_sec, id_nsec1, id_col1, id_cp1 FROM seccion ORDER BY id_sec desc";
                                                        $resultado = mysqli_query($conexion, $query);
                                                        ?>
                                                        <div class="card-body">

                                                            <table id="example" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                                                                <thead>
                                                                    <tr>
                                                                        <td>Id</td>
                                                                        <td><b>Seccion</b></td>
                                                                        <td><b>Colonia</b></td>
                                                                        <td><b>Codigo Postal</b></td>
                                                                        <td>Acciones</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php

                                                                    while ($row = $resultado->fetch_assoc()) { ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $row['id_sec']; ?>

                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $id_nsec1 = $row['id_nsec1'];
                                                                                $nsec = mysqli_query($conexion, "SELECT * FROM seccion WHERE id_nsec1 = $id_nsec1");
                                                                                while ($dato = mysqli_fetch_array($nsec)) {
                                                                                    $nsec1 = $dato['id_nsec1'];
                                                                                }
                                                                                $nsec_1 = mysqli_query($conexion, "SELECT * FROM n_seccion WHERE id_nsec = $nsec1");
                                                                                while ($dato3 = mysqli_fetch_array($nsec_1)) {
                                                                                    $seccion = $dato3['seccion'];
                                                                                }
                                                                                // nombre del tipo de programa extraido
                                                                                echo $seccion;
                                                                                ?>
                                                                            </td>

                                                                            <td>
                                                                                <?php
                                                                                $id_col1 = $row['id_col1'];
                                                                                $col = mysqli_query($conexion, "SELECT * FROM seccion WHERE id_col1 = $id_col1");
                                                                                while ($dato4 = mysqli_fetch_array($col)) {
                                                                                    $col1 = $dato4['id_col1'];
                                                                                }
                                                                                $id_col = mysqli_query($conexion, "SELECT * FROM colonia WHERE id_col = $col1");
                                                                                while ($dato5 = mysqli_fetch_array($id_col)) {
                                                                                    $colonia = $dato5['colonia'];
                                                                                }
                                                                                // nombre del tipo de programa extraido
                                                                                echo $colonia;

                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <!-- consultar id id_tp2 y convertirlo al nombre nom_tp -->
                                                                                <?php
                                                                                $id_cp1 = $row['id_cp1'];
                                                                                $cp = mysqli_query($conexion, "SELECT * FROM seccion WHERE id_cp1 = $id_cp1");
                                                                                while ($dato = mysqli_fetch_array($cp)) {
                                                                                    $cpid = $dato['id_cp1'];
                                                                                }
                                                                                $n_tp = mysqli_query($conexion, "SELECT * FROM c_postal WHERE id_cp = $cpid");
                                                                                while ($dato2 = mysqli_fetch_array($n_tp)) {
                                                                                    $vercp = $dato2['cp'];
                                                                                }
                                                                                // nombre del tipo de programa extraido
                                                                                echo $vercp;
                                                                                ?>
                                                                            </td>
                                                                            <td>

                                                                                <a style="display: inline;" href="mod_seccion.php?id=<?php echo $row['id_sec']; ?>" title="Editar tipo de programa" onclick="deshabilitar(this)"><i class="fas fa-edit fa-2x"></i></a>

                                                                                <a style="display: inline;" href="deleteSeccion.php?id=<?php echo $row['id_sec']; ?>" title="Eliminar tipo de programa" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
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
                                        Agregar Secciones
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
                                                        <form id="test_upload" name="test_upload" action="addSeccion.php" method="post">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <?php
                                                                    $sql = "SELECT id_nsec, seccion FROM n_seccion  ORDER BY seccion ASC";
                                                                    $result2 = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                                    ?>
                                                                    <div class="col-6">
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Seccion</label>
                                                                            <select name="id_nsec" id="id_nsec" class="form-control input-sm" required>
                                                                                <option value="">Seleciona una sección</option>
                                                                                <?php while ($row1 = mysqli_fetch_row($result2)) : ?>
                                                                                    <option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
                                                                                <?php endwhile ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                                                                    $sql = "SELECT id_col, colonia FROM colonia  ORDER BY colonia ASC";
                                                                    $result1 = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                                    ?>
                                                                    <div class="col-6">
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Colonia</label>
                                                                            <select name="id_col" id="id_col" class="form-control input-sm" required>
                                                                                <option value="">Seleciona una colonia</option>
                                                                                <?php while ($row = mysqli_fetch_row($result1)) : ?>
                                                                                    <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                                                                <?php endwhile ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- consulta cp -->
                                                                    <?php
                                                                    $sql = "SELECT id_cp, cp FROM c_postal  ORDER BY cp ASC";
                                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                                    ?>
                                                                    <div class="col-6">
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Codigo Postal</label>
                                                                            <select name="id_cp" id="id_cp" class="form-control input-sm" required>
                                                                                <option value="">Selecciona un codigo postal </option>
                                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                                    <option value="<?php echo $ver[0] ?>">
                                                                                        <?php echo $ver[1] ?>
                                                                                    </option>
                                                                                <?php endwhile ?>
                                                                            </select>
                                                                        </div>
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

                            <!-- solid sales graph -->
                            <div class="card collapsed-card">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-map-marked-alt mr-1"></i>
                                        Ver colonias
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
                                            <!-- embed -->
                                            <div id="mapa_colonias"></div>

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
    <!-- script mapa colonias -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mapa_colonias').load('mapa_colonias.php');
        });
    </script>
</body>

</html>