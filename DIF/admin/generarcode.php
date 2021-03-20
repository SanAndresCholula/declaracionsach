<?php
require 'head.php';

?>
<title>Generador de código de barras: <?php echo $_SESSION['username'] ?></title>

<body class="hold-transition sidebar-mini layout-fixed hidden">
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
        <?php
        require 'nav.php';
        require 'aside.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">

                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="m-0 text-white">Bienvenido: <b><?php echo $_SESSION['username'] ?></b></h1>
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Código de barras</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card-body" style="background-color: #EAE8E8;">
                        <section class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <h3 class="card-title"> <img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"> Generador de código de barras</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <!-- Contenido -->
                                                        <?php
                                                        $id = $_GET['id'];
                                                        $query = "SELECT barcode1 FROM beneficiario WHERE id_benef = '$id'";
                                                        $resultado = mysqli_query($conexion, $query);
                                                        $row = $resultado->fetch_assoc();
                                                        $n = $row['barcode1'];
                                                        ?>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="text" class="form-control" id="data" value="<?php echo $n ?>" onfocus="this.blur" readonly>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-primary" id="generar_barcode" require><i class='fas fa-barcode'></i> Generar</button>
                                                            </div>
                                                        </div>

                                                        <div id="imagen" style="padding-top: 15px;"></div>
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                                                        <script>
                                                            $("#generar_barcode").click(function() {
                                                                var data = $("#data").val();
                                                                $("#imagen").html('<img src="barcode.php?text=' + data + '&size=70&codetype=Code39&print=true"/>');
                                                                $("#data").val('');
                                                                $.post("guardarImagen.php", {
                                                                    filepath: "codigosGenerados/" + data + ".png",
                                                                    text: data
                                                                });
                                                            });
                                                        </script>
                                                        <!-- Fin Contenido -->
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-12"><a href="codigosGenerados/<?php echo  $n . '.png' ?>" class="btn btn-success" download="codigosGenerados/<?php echo $n . '.png' ?>" title="Primero genera el codigo y despues descarga"><i class="fas fa-file-download"></i> Descargar</a></div>
                                                            <div class="col-lg-4 col-sm-12"></div>
                                                            <div class="col-lg-4 col-sm-12">
                                                                <?php
                                                                $id = $_GET['id'];
                                                                $query = "SELECT id_benef FROM beneficiario WHERE id_benef = '$id'";
                                                                $resultado = mysqli_query($conexion, $query);
                                                                $row = $resultado->fetch_assoc();
                                                                $i = $row['id_benef'];
                                                                ?>

                                                                <button type="button" class="btn btn-success" require><a href="card.php?id=<?php echo $i; ?>" style="color: #ffffff;" title="Ir a la Card del beneficiario"><i class='fas fa-id-card'></i> Ir a Card...</a></button>
                                                                <button type="button" class="btn btn-success"><a href="add_data.php" style="color: #ffffff;" title="Ir a la Card del beneficiario"><i class='fas fa-id-card'></i> Formulario</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <?php
        include 'footer.php';
        ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="../plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="../plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>

    <!-- image user -->
    <script>
        $(function() {
            $("input[name='file']").on("change", function() {
                var formData = new FormData($("#formulario")[0]);
                var ruta = "updateImage.php";
                $.ajax({
                    url: ruta,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(datos) {
                        $("#respuesta").html(datos);
                    }
                });
            });
        });
    </script>
</body>

</html>