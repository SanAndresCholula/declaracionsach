<?php
require 'headPages.php';
?>
<title>Resguardar | <?php echo $_SESSION['usuario'] ?></title>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        require 'navPages.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        require 'asidePages.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="text-white">Resguardar en servidor</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Resguardo</li>
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
                                $query = "SELECT * FROM reporte WHERE id_reporte = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>
                                <!-- form start -->
                                <form id="test_upload" name="test_upload" action="actionUpdateUploadFile.php" enctype="multipart/form-data" method="post">
                                    <div class="card-body">
                                        <?php foreach ($categorias as $fila) : ?>
                                            <h3><?php echo $fila[1] ?></h3>
                                        <?php endforeach ?>

                                        <input type="hidden" name="usuario" value="<?= $_SESSION['usuario'] ?>">
                                        <input type="hidden" name="id_reporte" value="<?php echo $id; ?>">
                                        <div class="form-group text-black">
                                            <label for="exampleInputEmail1">Editar Comentario</label>
                                            <textarea name="comentario" rows="2" style="max-width: 100%; min-width:100%" id="comentario" ><?php echo $row['comentario'];?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Archivo a modificar</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="photo" name="photo" required="required" style="color:#000000">
                                                    <label class="custom-file-label" for="exampleInputFile"><?php echo $row['name'];?></label> 
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Descarga el archivo <a href="upload/<?php echo $row['name'];?>" download="Archivo_modificado_<?php echo $row['name'];?>" title="descargar archivo"><?php echo $row['name'];?>&nbsp;<i class="fas fa-file-download"></i></a></small>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <input type="hidden" name="dependencia" value="<?php echo $fila[1] ?>">
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Modificar archivo</button>
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
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>