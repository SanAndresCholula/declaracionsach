<?php
require '../../function/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}

conectar();
$categorias = getCategoriasPorUser();
$formatos = getFormatosPorUser();
$coin = getCoinPorUser();
$calendar = getCalendarPorUser();
?>

<!doctype html>
<html lang="es">

<head>
    <?php
    include '../meta.php';
    ?>
    <title>Captura de reportes |
        <?= $_SESSION['usuario'] ?>
    </title>

    <link rel="icon" href="../../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/tablas.css">
    <link rel="stylesheet" href="../../css/imgExcel.css">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!--help-->
    <script type="text/jscript" src="../../js/help.js"></script>



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        td {
            color: #fff;
        }

        .modal-lg {
            max-width: 90% !important;
        }

        .modal-body {
            background-image: url('../../img/1.jpg');
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../../css/cover.css" rel="stylesheet">

</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'headerCat.php';
        ?>

        <main role="main" class="inner cover">

            <!-- body -->
            <div class="container_fluid">
                <div class="row  justify-content-md-center">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <h3 class="panel-title">Ingresa a tu tablero de control</h3>
                        <hr class="style-one">
                    </div>
                </div>
            </div>

            <center>
                <?php foreach ($categorias as $fila) : ?>
                    <div id="accordion-fluid">
                        <div class="card" style="background: rgba(0,0,0,0.3)">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-danger" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                        <?= $fila[1] ?>
                                    </button>
                                </h5>
                            </div>
                        <?php
                    endforeach
                        ?>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                                    Todos los Archivos respaldados en el servidor
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:#000">Archivos respaldados en el servidor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="tablaEnviadosTodo"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong2">
                                    Todos los archivos enviados
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:#000">Archivos enviados entre usuarios</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="TablaRecibidosTodo"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong3">
                                    Formatos semanales de actividades
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:#000">Archivos en excel de actividades semanales</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="tablaFormatosExcelTodo"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>

            </center>
            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading4">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4"><a href="dash/index.php"><i class="nav-icon fas fa-tachometer-alt"></i>&nbsp;Dashboard</a>
                            </button>
                        </h5>
                    </div>
                </div>
            </div>

        </main>
        <?php
        include '../categorias/new.php';
        include '../../function/footer.php';
        ?>

    </div>

    <?php
    include '../../function/script.php';
    ?>
    <img src="tablas/tablaFormatosExcelTodo.php" alt="">
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/jquery.min.js"></script>

    <!-- funcion llamar tablas -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaEnviados').load('tablas/tablaEnviados.php');
            $('#tablaEnviadosTodo').load('tablas/tablaEnviadosTodo.php');
            $('#TablaRecibidosTodo').load('tablas/tablaRecibidosTodo.php');
            $('#tablaFormatosExcelTodo').load('tablas/tablaFormatosExcelTodo.php');

        });
    </script>
</body>

</html>