<?php
require 'head.php';
?>
<title>Modificar secciones | <?php echo $_SESSION['username'] ?></title>

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
        ?>
        <!-- /.navbar -->

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
                                <li class="breadcrumb-item"><a href="sections.php">CRUD Secciones</a></li>
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
                        <div class="col-lg-6 ">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $_SESSION['username'] ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <?php

                                $id = $_GET['id'];
                                $query = "SELECT seccion FROM n_seccion WHERE id_nsec = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>
                                <!-- form start -->
                                <form id="test_upload" name="test_upload" action="actionModSeccion.php" method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Seccion</label>
                                                    <input type="text" name="seccion" id="seccion" class="form-control input-sm" required value="<?php echo $row['seccion'] ?>">
                                                </div>
                                            </div>                                                                             
                                            <input type="hidden" name="modificadoX" value="<?= $_SESSION['username'] ?>">
                                            <input type="hidden" name="id_sec" value="<?php echo $id ?>">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-cogs"></i> Modificar seccion</button>
                                        <a href="sections.php" class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
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
        require 'footer.php';
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
        <!--  -->
        <script src="../js/preloader.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>