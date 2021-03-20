<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}
conectar();
$rol = rol_permisos();
$usuario = $_SESSION['id_user'];

$query = mysqli_query($conexion, "SELECT * FROM users WHERE id_user = '$usuario' ");
while ($row = mysqli_fetch_array($query)) {
    $fullname = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $phone = $row['phone'];
    $date = $row['date'];
    $admin = $row['admin'];
    $image = $row['image'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../plugins/datatables/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="../plugins/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.css">
    <!-- FixHeader CSS -->
    <link rel="stylesheet" href="../css/fixedHeader.dataTables.min.css">
    <!-- daterange picker selector rango de fechas -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../images//logo.ico" type="image/x-icon">
    <!-- preloader CSS -->
    <link rel="stylesheet" href="../css/preloader.css">

    <!-- multiselect -->


    <!--  -->
    <style>
        #containerText {
            width: 100%;
            text-align: justify;
        }

        #left {
            float: left;
            width: 33%;
        }

        #left2 {
            float: left;
            width: 50%;
        }

        #center {
            display: inline-block;
            margin: 0 auto;
            width: 33%;
        }

        #right {
            float: right;
            width: 33%;
        }

        #right2 {
            float: right;
            width: 50%;
        }

        #accion {
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.5;
        }

        .wrapper .content-wrapper {
            min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px));
            height: 10%;
            background-image: url('../images/2.jpg');
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* pointer solo lectura */
        input[readonly] {
            cursor: no-drop;
        }
    </style>

    <!-- confirmar delete -->
    <script type="text/javascript">
        function ConfirmDelete() {
            var respuesta = confirm("Esta accion eliminara permanentemente tu registro, ¿quieres continuar? ");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <!-- Generar PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <!-- validar formularios -->
    <script src="../js/validar.js"></script>



</head>

<title>CRUD Beneficiarios | <?php echo $_SESSION['username'] ?></title>

<body class="hold-transition sidebar-mini sidebar-collapse hidden">
    <!-- <div class="centrado" id="onload">
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
    </div> -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        require 'nav.php';
        ?>
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
                            <h1 class="text-white">CRUD Beneficiarios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">CRUD Beneciciarios</li>
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
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <!-- Map card -->
                            <div class=" <?php if ($fila[15] == 0 and $fila[16] == 0 and $fila[17] == 0) echo 'card collapsed-card';
                                            else echo 'card' ?> ">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-table mr-1"></i>
                                        Tabla Beneficiarios en existencia
                                    </h3>
                                    <!-- card tools -->
                                    <div class="card-tools">
                                        <?php if ($fila[15] == 0 and $fila[16]  == 0 and $fila[17] == 0) echo 'No tienes privilegio para ver esta tabla <i class="fas fa-ban"></i>';
                                        else echo ' <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>'; ?>
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

                                                                    <h3 class="card-title text-white"><img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"> Base de datos de Beneficiarios agregados</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table id="<?php if ($fila[28]  == 1) echo 'example';
                                                                        else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Paterno</th>
                                                                        <th>Materno</th>
                                                                        <th>Nombre(S)</th>
                                                                        <th>Localidad</th>
                                                                        <th>Sección</th>
                                                                        <th>Colonia</th>
                                                                        <th>C.P.</th>
                                                                        <th>Domicilio</th>
                                                                        <th>INE</th>
                                                                        <th>CURP</th>
                                                                        <th>Otro_documento</th>
                                                                        <th>Teléfono</th>
                                                                        <th>Género</th>
                                                                        <th>Nacimiento</th>
                                                                        <th>Edad</th>
                                                                        <th>Comentarios</th>
                                                                        <th>Alta_captura</th>
                                                                        <th>Capturista</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php if ($fila[15] == 1) {
                                                                        $query = "CALL verBeneficiarios";
                                                                        $resultado = mysqli_query($conexion, $query);

                                                                        while ($row = $resultado->fetch_assoc()) { ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo $row['id_benef']; ?>

                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['a_paterno']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['a_materno']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['nombres']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['localidad']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['seccion']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['colonia']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['cp']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['domicilio']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['ine']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['curp']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['otrodoc'] ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['telefono']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['genero']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['nacimiento']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['edad'] ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['observaciones']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['f_alta']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $row['username']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php foreach ($rol as $fila) : ?>

                                                                                        <a style="display: inline;" href="mod_benef.php?id=<?php echo $row['id_benef'] ?>" title="Editar beneficiario" onclick="deshabilitar(this)" id="<?php if ($fila[16]  == 0) echo 'accion';
                                                                                                                                                                                                                                        else echo ''; ?>"><i class="fas fa-edit fa-2x"></i></a>
                                                                                        <a style="display: inline;" href="deleteBenef.php?id=<?php echo $row['id_benef'] ?>" title="Eliminar beneficiarios" onclick="return ConfirmDelete()" id="<?php if ($fila[17]  == 0) echo 'accion';
                                                                                                                                                                                                                                                    else echo ''; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                                                    <?php endforeach ?>
                                                                                </td>
                                                                            </tr>
                                                                    <?php  }
                                                                    } else {
                                                                        echo '';
                                                                    }
                                                                    desconectar()
                                                                    ?>

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