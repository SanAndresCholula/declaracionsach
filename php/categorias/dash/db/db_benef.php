<?php
require 'head.php';
?>
<title>Catalogo de colonias <?php echo $_SESSION['usuario'] ?></title>

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
                            <h1 class="text-white">CRUD Usarios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">CRUD Usuarios</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
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
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <!-- Map card -->
                            <div class="card ">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-table mr-1"></i>
                                        Tabla Usuarios en existencia
                                    </h3>
                                    <!-- card tools -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-12">

                                                                    <h3 class="card-title">Usuarios agregados</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $query = "SELECT  id_benef, a_paterno, a_materno, nombres, telefono,ine, curp, nacimiento, direccion, observaciones, f_alta, f_modificacion, id_tp1, id_np1, id_sex, file FROM beneficiario ORDER BY id_benef desc";
                                                        $resultado = mysqli_query($conexion, $query);
                                                        ?>
                                                        <div class="card-body">
                                                            <table id="example" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Id</td>
                                                                        <td><b>Nombre completo</b></td>
                                                                        <td>Telefono</td>
                                                                        <td>INE</td>
                                                                        <td>CURP</td>
                                                                        <td>Genero</td>
                                                                        <td>Nacimiento</td>
                                                                        <td>Domicilio</td>
                                                                        <td>Alta</td>
                                                                        <td>Tipo de programa</td>
                                                                        <td>Nombre del programa</td>
                                                                        <td>Observaciones</td>
                                                                        <td>Archivos</td>
                                                                        <td>Modificado por:</td>
                                                                        <td>Acciones</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    while ($row = $resultado->fetch_assoc()) { ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $row['id_benef']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['a_paterno'] . " " . $row['a_materno'] . " " . $row['nombres']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['telefono']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['ine']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['curp'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $id_sex = $row['id_sex'];
                                                                                $sql = mysqli_query($conexion, "SELECT id_sex FROM Beneficiario WHERE id_sex = $id_sex");
                                                                                while ($dato = mysqli_fetch_array($sql)) {
                                                                                    $xxx = $dato['id_sex'];
                                                                                }
                                                                                $sql1 = mysqli_query($conexion, "SELECT * FROM sexo WHERE id_sexo = $xxx");
                                                                                while ($dato1 = mysqli_fetch_array($sql1)) {
                                                                                    $genero = $dato1['genero'];
                                                                                }
                                                                                // nombre del tipo de programa extraido
                                                                                echo $genero;
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['nacimiento'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['direccion'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['f_alta'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                $id_tp1 = $row['id_tp1'];
                                                                                $sql = mysqli_query($conexion, "SELECT id_tp1 FROM Beneficiario WHERE id_tp1 = $id_tp1 ");
                                                                                while ($dato2 = mysqli_fetch_array($sql)) {
                                                                                    $id = $dato2['id_tp1'];
                                                                                }
                                                                                $sql1 = mysqli_query($conexion, "SELECT * FROM nom_programa WHERE id_tp2 = $id");
                                                                                while ($dato1 = mysqli_fetch_array($sql1)) {
                                                                                    $id_tp2 = $dato1['id_tp2'];
                                                                                    $nom_p = $dato1['nom_p'];
                                                                                }
                                                                                $sql2 = mysqli_query($conexion, "SELECT id_tp, nom_tp FROM tipo_programa WHERE id_tp = $id_tp2");
                                                                                while ($dato3 = mysqli_fetch_array($sql2)) {
                                                                                    $nom_tp = $dato3['nom_tp'];
                                                                                }
                                                                                echo $nom_tp;
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $nom_p ?>
                                                                            </td>

                                                                            <td>
                                                                                <?php echo $row['observaciones'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['file'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $_SESSION['username'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <a style="display: inline;" href="mod_user.php?id=<?php echo $row['id_user']; ?>" title="Editar usuario" onclick="deshabilitar(this)"><i class="fas fa-edit fa-2x"></i></a>
                                                                                <a style="display: inline;" href="deleteUser.php?id=<?php echo $row['id_user']; ?>" title="Eliminar usuario" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
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