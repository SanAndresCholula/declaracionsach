<?php
require 'head.php';
$secciones = getSecciones();
?>
<title>Colonias en San Andrés Cholula | <?php echo $_SESSION['username'] ?></title>

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

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="m-0 text-dark">Consulta de colonias en San Andrés Cholula</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Consulta de colonias</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <!-- solid sales graph -->
                            <hr>
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