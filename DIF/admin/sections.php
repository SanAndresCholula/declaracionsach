<?php
require 'head.php';
$secciones = getSecciones();
?>
<title>Secciones distritales | <?php echo $_SESSION['username'] ?></title>

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
                            <h1 class="m-0 text-white">CRUD secciones distritales</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Secciones distritales</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <section class="col-lg-12 connectedSortable">
                            <div class="card collapsed-card">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-database mr-1"></i>
                                        CRUD Secciones distritales
                                    </h3>
                                    <!-- card tools -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="background-color: #EAE8E8;">
                                    <section class="content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 offset-3">
                                                    <div class="card card-info">
                                                        <div class="card-header border-0">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="card-title"><img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"> Tabla Secciones</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">

                                                            <table id="<?php if ($fila[31]  == 1) echo 'example';
                                                                        else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Id</td>
                                                                        <td><b>Seccion</b></td>
                                                                        <td>Acciones</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($secciones as $seccion) : ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?= $seccion[0]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $seccion[1] ?>
                                                                            </td>
                                                                            <td>
                                                                                <a style="display: inline;" href="mod_seccion.php?id=<?= $seccion[0]; ?>" title="Editar seccion" onclick="deshabilitar(this)" id="<?php if ($fila[25]  == 0) echo 'accion';
                                                                                                                                                                                                                    else echo ''; ?>"><i class="fas fa-edit fa-2x"></i></a>

                                                                                <a style="display: inline;" href="deleteSeccion.php?id=<?= $seccion[0] ?>" title="Eliminar seccion" onclick="return ConfirmDelete()" id="<?php if ($fila[26]  == 0) echo 'accion';
                                                                                                                                                                                                                            else echo ''; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /.card-body-->
                                <div class="card-body" style="background-color: #EAE8E8;">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <!-- left column -->
                                                <div class="col-lg-6 ">
                                                    <!-- general form elements -->
                                                    <div class="card card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title"> <img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"><b> <?php echo $fullname ?></b></h3>
                                                        </div>
                                                        <!-- form start -->
                                                        <form id="test_upload" name="test_upload" action="addSeccion.php" method="post" onsubmit="return validarSeccion()">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-10">
                                                                        <div class="form-group text-black">
                                                                            <label for="seccion">Ingresa Numero de sección</label>
                                                                            <input type="text" name="seccion" id="seccion" class="form-control input-sm" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa el numero de sección" <?php if ($fila[24]  == 0) echo 'disabled readonly';
                                                                                                                                                                                                                                                                        else echo ''; ?>>
                                                                            <small class="form-text text-muted">Max 4 digitos</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <?php if ($fila[24]  == 1) echo '<button type="submit" name="submit" class="btn btn-primary"  data-toggle="tooltip" title="Crear sección" ><i class="fas fa-plus"></i> Crear sección</button>';
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
            </section><br><br>
        </div>
        <?php
        require 'footer.php';
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
    <!-- script mapa colonias -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mapa_colonias').load('mapa_colonias.php');
        });
    </script>
    <!--  -->
    <script src="../js/preloader.js"></script>
</body>

</html>