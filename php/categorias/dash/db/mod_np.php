<?php
require 'head.php';
?>
<title>Modificar nombres de programas <?php echo $_SESSION['usuario'] ?></title>

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
                            <h1 class="text-white">Modificar nombre de programa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Modificar nombre programa</li>
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
                        <div class="col-lg-8 ">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $_SESSION['usuario'] ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <?php

                                $id = $_GET['id'];
                                $query = "SELECT * FROM nom_programa WHERE id_np = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>
                                <!-- form start -->
                                <form id="test_upload" name="test_upload" action="actionModNp.php" method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- consulta tipo de programa -->
                                            <?php
                                            
                                            $sql = "SELECT id_tp, nom_tp FROM tipo_programa  ORDER BY nom_tp ASC";
                                            $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                            ?>
                                            <input type="hidden" name="modificadoX" value="<?= $_SESSION['usuario'] ?>">
                                            <input type="hidden" name="id_np" value="<?php echo $id ?>">

                                            <div class="col-6">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Tipo de programa</label>
                                                    <select name="id_tp2" id="id_tp2" class="form-control input-sm" required>
                                                        <option value="">Seleccione algun tipo de dato</option>
                                                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                            <option value="<?php echo $ver[0] ?>">
                                                                <?php echo $ver[1] ?>
                                                            </option>
                                                        <?php endwhile ?>
                                                    </select>
                                                    <small class="form-text text-muted">* Selecciona nuevamente algun tipo de programa</small>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Nombre de programa a modificar</label>
                                                    <input type="text" name="nom_p" id="nom_p" class="form-control input-sm" value="<?php echo $row['nom_p'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Modificar</button>
                                        <a href="nom_programs.php" class="btn btn-success">Regresar</a>
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