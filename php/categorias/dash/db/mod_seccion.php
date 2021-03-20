<?php
require 'head.php';
?>
<title>Modificar secciones <?php echo $_SESSION['usuario'] ?></title>

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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="text-black">Modificar seccion</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Modificar seccion</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
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
                                <!-- /.card-header -->
                                <?php

                                $id = $_GET['id'];
                                $query = "SELECT * FROM seccion WHERE id_sec = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>
                                <!-- form start -->
                                <form id="test_upload" name="test_upload" action="actionModSeccion.php" method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group text-black">
                                                    <?php $id_nsec1 = $row['id_nsec1'];
                                                    $sql = mysqli_query($conexion, "SELECT * FROM n_seccion WHERE id_nsec = $id_nsec1");
                                                    while ($dato = mysqli_fetch_array($sql)) {
                                                        $s = $dato['seccion'];
                                                    }                                               
                                                    $sql = "SELECT id_nsec, seccion FROM n_seccion  ORDER BY seccion ASC";
                                                    $result2 = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <label for="exampleInputEmail1">Seccion a modificar: <strong><?php echo $s?></strong></label>
                                                    <select name="seccion" id="seccion" class="form-control input-sm" required>
                                                        <option value="">Seleciona una sección</option>
                                                        <?php while ($row1 = mysqli_fetch_row($result2)) : ?>
                                                            <option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
                                                        <?php endwhile ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group text-black">
                                                    <?php $id_col1 = $row['id_col1'];
                                                    $sql = mysqli_query($conexion, "SELECT * FROM colonia WHERE id_col = $id_col1");
                                                    while ($dato = mysqli_fetch_array($sql)) {
                                                        $s = $dato['colonia'];
                                                    }                                               
                                                    $sql = "SELECT id_col, colonia FROM colonia  ORDER BY colonia ASC";
                                                    $result2 = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <label for="exampleInputEmail1">Colonia a modificar: <strong><?php echo $s?></strong></label>
                                                    <select name="colonia" id="colonia" class="form-control input-sm" required>
                                                        <option value="">Seleciona una colonia</option>
                                                        <?php while ($row1 = mysqli_fetch_row($result2)) : ?>
                                                            <option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
                                                        <?php endwhile ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- consulta cp -->
                                            <?php
                                            $id_cp1 = $row['id_cp1'];
                                            $sql = mysqli_query($conexion, "SELECT * FROM c_postal WHERE id_cp = $id_cp1");
                                            while ($dato = mysqli_fetch_array($sql)) {
                                                $s = $dato['cp'];
                                            } 
                                            $sql = "SELECT id_cp, cp FROM c_postal  ORDER BY id_cp ASC";
                                            $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                            ?>
                                            <input type="hidden" name="modificadoX" value="<?= $_SESSION['usuario'] ?>">
                                            <input type="hidden" name="id_sec" value="<?php echo $id ?>">

                                            <div class="col-6">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Codigo Postal a modificar: <strong><?php echo $s?></strong></label>
                                                    <select name="cp" id="cp" class="form-control input-sm" required>
                                                        <option value="">Seleccione algun codigo postal</option>
                                                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                            <option value="<?php echo $ver[0] ?>">
                                                                <?php echo $ver[1] ?>
                                                            </option>
                                                        <?php endwhile ?>
                                                    </select>
                                                    <small class="form-text text-muted">* Selecciona nuevamente el codigo postal</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Modificar</button>
                                        <a href="sections.php" class="btn btn-success">Regresar</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
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
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>