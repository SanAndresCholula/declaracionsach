<?php
require 'head.php';
?>
<title>Modificar Estatus colores | <?php echo $_SESSION['username'] ?></title>

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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="text-white">Modificar Estatus Colores</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="colors.php">CRUD Estatus colores</a></li>
                                <li class="breadcrumb-item active">Modificar Estatus colores</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
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
                                <!-- /.card-header -->
                                <?php

                                $id = $_GET['id'];
                                $query = "SELECT name, colors FROM colors WHERE id_colors = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>
                                <!-- form start -->
                                <form id="test_upload" name="test_upload" action="actionModColors.php" method="post" onsubmit="return validarTP()">
                                    <div class="card-body">
                                        <input type="hidden" name="id_colors" value="<?php echo $id ?>">
                                        <div class="form-group text-black">
                                            <label for="exampleInputEmail1">Nombre estatus</label>
                                            <input type="text" name="name" id="name" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo  $row['name'] ?>">
                                            <small class="form-text text-muted">Max 50 caracteres</small>
                                        </div>

                                        <div class="form-group text-black">
                                            <label for="exampleInputEmail1">Seleccione un color</label>
                                            <input type="color" id="colors" name="colors" value="<?php echo $row['colors']; ?>"><br>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Modificar estatus</button>
                                        <a href="colors.php" class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <!-- footer -->
        <?php
        require 'footer.php';
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>
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