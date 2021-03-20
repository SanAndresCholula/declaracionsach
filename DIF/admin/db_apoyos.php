<?php
require 'head.php';
// $benef = getBeneficiarios();
?>
<title>CRUD Apoyos a Beneficiarios | <?php echo $_SESSION['username'] ?></title>

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
                        <div class="col-sm-8">
                            <h1 class="text-white">CRUD Apoyos a todos los Beneficiarios</h1>
                        </div>
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">CRUD Apoyos a Beneciciarios</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- ./col -->
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php $count_benef = mysqli_query($conexion, "SELECT id_benef FROM beneficiario"); ?>
                                    <div class="inner">
                                        <h3><?php echo mysqli_num_rows($count_benef); ?></h3>
                                        <p><strong>Beneficiarios</strong> totales</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-contacts"></i>
                                </div>
                                <a href="db_benef.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php $count_apoyos = mysqli_query($conexion, "SELECT title FROM events"); ?>
                                    <div class="inner">
                                        <h3><?php echo mysqli_num_rows($count_apoyos); ?></h3>
                                        <p><strong>Apoyos</strong> totales</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="db_apoyos.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php $count_users = mysqli_query($conexion, "SELECT username FROM users WHERE username <> 'superadministrador' "); ?>
                                    <div class="inner">
                                        <h3><?php echo mysqli_num_rows($count_users); ?></h3>
                                        <p> <strong>Usuarios</strong> registrados</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="crudUsers.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <!-- Main row -->
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <!-- Map card -->
                            <div class="card ">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-table mr-1"></i>
                                        Tabla Total de Apoyos a Beneficiarios
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
                                <div class="card-body" style="background-color: #EAE8E8;">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card card-info">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="card-title text-white"><img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"> Base de datos de Apoyos a beneficiarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table id="<?php if ($fila[29]  == 1) echo 'example';
                                                                        else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nombre_completo</th>
                                                                        <th>Titulo</th>
                                                                        <th>Fecha_Entrega</th>
                                                                        <th>Horario_inicio_fin</th>
                                                                        <th>Tipo_Programa</th>
                                                                        <th>Programa</th>
                                                                        <th>Secretaría</th>
                                                                        <th>Enlace_Externo</th>
                                                                        <th>Descripción</th>
                                                                        <th>Capturista</th>
                                                                        <th>Fecha_captura</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $query = "Call verApoyos";
                                                                    // limit 100
                                                                    //return $respuesta->fetch_all();
                                                                    $resultado = mysqli_query($conexion, $query);


                                                                    while ($row = $resultado->fetch_assoc()) {
                                                                        $nomCompleto = $row['a_paterno'] . " " . $row['a_materno'] . " " . $row['nombres'];
                                                                        $horas = $row['horastart'];
                                                                        $hs = date('H:i A', strtotime($horas));
                                                                        $horae = $row['horaend'];
                                                                        $he = date('H:i A', strtotime($horae));

                                                                        $hora = $hs . "--" . $he;
                                                                        $fechastart = $row['start'];
                                                                        $fs = date('d/m/Y', strtotime($fechastart));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $row['id']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $nomCompleto; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['title']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <strong><?php echo $fs ?></strong>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $hora ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['nom_tp']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['nom_p']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['secretaria']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['enlace']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['entrega']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['username']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['date']; ?>
                                                                            </td>

                                                                            <!-- <td>
                                                                    <a style="display: inline;" href="mod_benef.php?id=<?php echo $row['id_benef'] ?>" title="Editar beneficiario" onclick="deshabilitar(this)"><i class="fas fa-edit fa-2x"></i></a>
                                                                    <a style="display: inline;" href="deleteBenef.php?id=<?php echo $row['id_benef'] ?>" title="Eliminar beneficiarios" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                                </td> -->
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
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
                </div>
            </section>
        </div>
        <?php
        include 'footer.php';
        ?>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- <script src="../plugins/popper/popper.min.js"></script> -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/datatables.min.js"></script>
    <!-- para usar botones en datatables JS -->
    <script src="../plugins/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../plugins/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <!-- <script src="../plugins/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script> -->
    <script src="../plugins/datatables/main.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- FixHeader.js -->
    <script src="../js/dataTables.fixedHeader.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>

    <!-- fixHeader inicializar -->
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                orderCellsTop: true,
                fixedHeader: true,
            });

            //Creamos una fila en el head de la tabla y lo clonamos para cada columna
            $('#example thead tr').clone(true).appendTo('#example thead');

            $('#example thead tr:eq(1) th').each(function(i) {
                var title = $(this).text(); //es el nombre de la columna
                $(this).html('<input type="text" placeholder="Filtrar..." />');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>
</body>

</html>