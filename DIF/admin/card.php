<?php
require 'head.php';
// fullcalendar
require_once('bdd.php');

# Para obtener la fecha correcta hay que poner la zona horaria
date_default_timezone_set("America/Mexico_City");
$fechaYHora = date("Y-m-d H:i:s");
# Si no hay REMOTE_ADDR entonces ponemos "Desconocida"
$ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
# Formatear mensaje
$mensaje = sprintf("IP de quien imprimio %s accedió  %s%s", $ip, $fechaYHora, PHP_EOL);
# Y adjuntarlo o escribirlo en ips.txt
file_put_contents("ips.txt", $mensaje, FILE_APPEND);
# Ya registramos la ip, ahora seguimos con el flujo normal ;)
?>
<!-- FullCalendar -->
<link href='../css/fullcalendar.css' rel='stylesheet' />
<link rel="stylesheet" href="../css/card_benef.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="../plugins/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.css">
<script>
    function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#imprimir')[0];
        specialElementHandlers = {
            '#bypassme': function(element, renderer) {
                return true
            }
        };
        margins = {
            top: 30,
            bottom: 30,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source,
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width,
                'elementHandlers': specialElementHandlers
            },

            function(dispose) {
                pdf.save('Beneficiario.pdf');
            }, margins
        );
    }
</script>
<style>
    .modal-header {
        padding: 9px 15px;
        border-bottom: 1px solid #eee;
        background-color: #007BFE;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        color: #ffffff;
    }

    .card-img-top {
        width: 100%;
        height: 10rem;
    }
    #accion {
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.5;
        }
</style>
<title>Tarjeta beneficiario: <?php echo $_SESSION['username'] ?></title>

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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fa fa-address-card" aria-hidden="true"></i> Card de Beneficiario</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Tarjeta Beneficiario</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header border-0" style="background: #007bff; color:white">
                        <h3 class="card-title">
                            <i class="fa fa-address-card mr-1"></i>
                            Card
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="background-color: #EAE8E8;">
                        <?php
                        require '../config/query_benef.php';
                        ?>
                        <div class="container" id="imprimir">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="card hovercard">
                                        <div class="cardheader">
                                        </div>
                                        <div class="avatar">
                                            <a href="#" data-toggle="modal" data-target="#imgbenef" title="Cambiar imagen"> <img alt="Perfil de beneficiario" class="imagen" src="../imgBenef/<?php echo $imagen ?>"><i class="fas fa-camera zoom" style="color:#C4BFBE"></i></a>
                                        </div>
                                        <div class="info">
                                            <div class="title">
                                                <h1 style="font-size: 2rem; font-weight:300;"><i class="fa fa-user-circle"></i> <b><?php echo $nomCompleto ?></b></h1>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h4>Sección: <strong><?php echo $row['seccion'] ?></strong></h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <h4>Id: <strong><?php echo $row['id_benef'] ?></strong></h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <?php $count_events = "SELECT count('id_benef1') FROM events WHERE id_benef1 = $id";
                                                        $res = mysqli_query($conexion, $count_events);
                                                        $rowcount = mysqli_fetch_array($res);
                                                        $num_events = $rowcount[0]; ?>
                                                        <h4>Total apoyos: <strong><?php echo $num_events ?></strong></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fa fa-address-card"></i> Clave elector: <b><?php echo $row['ine'] ?></b></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-id-card-alt"></i> CURP: <b><?php echo $row['curp'] ?></b></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-id-card-alt"></i> Otros: <b><?php echo $row['otrodoc'] ?></b></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <p class="text-justify"><i class="fa fa-calendar"></i> Nacimiento: <b><?php echo $row['nacimiento'] ?></b></p>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <p class="text-justify"><i class="fa fa-birthday-cake"></i> Edad: <b><?php echo $row['edad'] ?></b></p>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <p class="text-justify"><i class="fas fa-venus-mars"></i> Genero: <b><?php echo $row['genero'] ?></b>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <p class="text-justify"><i class="fa fa-phone"></i> Teléfono: <b><?php echo $row['telefono'] ?></b>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-mail-bulk"></i> Seccion: <b><?php echo $row['seccion'] ?></b></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-map-marker"></i> Localidad: <b><?php echo $row['localidad'] ?></b></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-map-marker"></i> colonia: <b><?php echo $row['colonia'] ?></b></p>
                                                </div>
                                                <br>
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-map-marked-alt"></i> Domicilio: <b><?php echo $row['domicilio'] ?></b></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <p class="text-justify"><i class="fas fa-map-signs"></i> Código Postal: <b><?php echo $row['cp'] ?></b></p>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <p class="text-left"><i class="fas fa-comments"></i> Comentarios: <b><?php echo $row['observaciones'] ?></b>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h5>Evidencias digitales</h5>
                                            </div>
                                        </div>
                                        <div class="card-deck">
                                            <div class="card">
                                                <img class="card-img-top" src="codigosGenerados/<?php echo $row['barcode1'] . '.png' ?>" alt="Generar el codigo">
                                                <div class="card-body">
                                                    <h5 class="card-title">Código de barras</h5>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <a href="generarcode.php?id=<?php echo $row['id_benef']; ?>" class="btn btn-sm btn-outline-success"><i class='fas fa-barcode'></i> Generar código</a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="codigosGenerados/<?php echo $row['barcode1'] . '.png' ?>" class="btn btn-sm btn-outline-dark" download="codigosGenerados/<?php echo $row['barcode1'] . '.png' ?>" title="Clic para descargar"><i class='fa fa-download'></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <img class="card-img-top" src="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" alt="Sin imagen guardada">
                                                <div class="card-body">
                                                    <h5 class="card-title">Clave de Elector</h5>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <a href="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" class="btn btn-sm btn-outline-dark" download="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>"><i class='fa fa-download'></i> Descargar</a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" target="_blank" title="Ver imagen" class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="#" data-toggle="modal" data-target="#mod_imgine" title="Ver imagen" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="mod_imgine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modificar imagen: <strong><?php echo $ine ?></strong></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <form method="post" id="formulario" action="mod_img_ine.php" enctype="multipart/form-data" class="m-0 text-black">
                                                                    <input type="hidden" name="nombre" value="<?php echo $nomCompleto ?>">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id_benef'] ?>">
                                                                    Formatos de archivos validos: <strong>.jpg .jpeg .png .gif</strong>
                                                                    <input type="file" name="photoine" class="btn btn-default" required>
                                                                    <br><br>

                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit" class="btn btn-primary text-left"><i class="fa fa-retweet" aria-hidden="true"></i> Actualizar</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <img class="card-img-top" src="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>" alt="Sin imagen guardada">
                                                <div class="card-body">
                                                    <h5 class="card-title">CURP</h5>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <a href="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>" class="btn btn-sm btn-outline-dark" download="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>"><i class='fa fa-download'></i> Descargar</a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>" target="_blank" title="Ver imagen" class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="#" data-toggle="modal" data-target="#mod_imgcurp" title="Ver imagen" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="mod_imgcurp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modificar imagen: <strong><?php echo $curp ?></strong></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-md-12">

                                                                <form method="post" id="formulario" action="mod_img_curp.php" enctype="multipart/form-data" class="m-0 text-black">
                                                                    <input type="hidden" name="nombre" value="<?php echo $nomCompleto ?>">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id_benef'] ?>">
                                                                    Formatos de archivos validos: <strong>.jpg .jpeg .png .gif</strong>
                                                                    <input type="file" name="photocurp" class="btn btn-default" required>
                                                                    <br><br>

                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit" class="btn btn-primary text-left"><i class="fa fa-retweet" aria-hidden="true"></i> Actualizar</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <img class="card-img-top" src="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>" alt="Sin imagen guardada">
                                                <div class="card-body">
                                                    <h5 class="card-title">Otros...</h5>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <a href="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>" class="btn btn-sm btn-outline-dark" download="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>"><i class='fa fa-download'></i> Descargar</a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>" target="_blank" title="Ver imagen" class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <a href="#" data-toggle="modal" data-target="#mod_imgotros" title="Ver imagen" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="mod_imgotros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modificar imagen: <strong><?php echo $otro ?></strong></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-md-12">

                                                                <form method="post" id="formulario" action="mod_img_otros.php" enctype="multipart/form-data" class="m-0 text-black">
                                                                    <input type="hidden" name="nombre" value="<?php echo $nomCompleto ?>">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id_benef'] ?>">
                                                                    Formatos de archivos validos: <strong>.jpg .jpeg .png .gif</strong>
                                                                    <input type="file" name="otrodoc" class="btn btn-default" required>
                                                                    <br><br>

                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit" class="btn btn-primary text-left"><i class="fa fa-retweet" aria-hidden="true"></i> Actualizar</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <p><img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:15%; height:auto; border:1px solid #D2D3D4"><b><?php echo $row['username'] ?></b></p>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-7 col-sm-12">
                                                <a href="mod_benef.php?id=<?php echo $row['id_benef'] ?>" class="btn btn-sm btn-primary" id="<?php if ($fila[16]  == 0) echo 'accion';
                                                                                                                                                                                                                                        else echo ''; ?>">
                                                    <i class="fas fa-user"></i> Editar
                                                </a>
                                                <a href="javascript:pruebaDivAPdf()" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-file-pdf"></i> Crear PDF
                                                </a>
                                                <a href="" onclick="javascript:window.print()" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Imprimir</a>
                                                <a href="add_data.php" class="btn btn-sm btn-success" title="Ir a la Card del beneficiario"><i class='fas fa-id-card'></i> Formulario</a>
                                                <a href="dash.php" class='btn btn-sm btn-success'><i class='fa fa-arrow-left'></i> Inicio</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="visibility:hidden"><?php echo 'Fecha de impresion: ' . $date . ' / ' . 'Nombre del equipo: ' . $host . ' / ' . $mensaje ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="col-lg-12 connectedSortable">
                <div class="<?php if ($fila[18] == 0 ) echo 'card collapsed-card';
                                            else echo 'card' ?> " >
                    <div class="card-header border-0" style="background: #007bff; color:white">
                        <h3 class="card-title">
                            <i class="fas fa-calendar"></i>
                             Calendario agregar eventos
                        </h3>
                        <div class="card-tools">
                        <?php if ($fila[18]  == 0) echo 'No tienes privilegio para ver esta tabla <i class="fas fa-ban"></i>';
                                        else echo ' <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>'; ?>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="background-color: #EAE8E8;">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header" style="background-color: #007bff;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h3 class="card-title text-white">Beneficiario: <strong><?php echo $nomCompleto ?></strong>&nbsp;&nbsp;<img src="../imgBenef/<?php echo $imagen ?>" alt="Beneficiario" class="img-circle img-fluid" style="width:10%; height:auto; border:1px solid #D2D3D4"></h3>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="text-white text-right">Total apoyos: <strong><?php echo $num_events ?></strong></h5>
                                                        <a href="#" data-toggle="modal" data-target="#status" class='btn btn-sm btn-warning'> <i class="fa fa-flag"></i> Colores Status</a>
                                                        <a href="#" data-toggle="modal" data-target="#crearstatus" class='btn btn-sm btn-success'> <i class="fa fa-plus-square"></i> Generar colores</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-center">
                                                            <h1>Calendario de entrega de apoyos</h1>
                                                            <p class="lead"></p>
                                                            <div id="calendar" class="col-centered">
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

            <section class="col-lg-12 connectedSortable">
                <div class="<?php if ($fila[18] == 0 ) echo 'card collapsed-card';
                                            else echo 'card' ?> " >
                    <div class="card-header border-0" style="background: #007bff; color:white">
                        <h3 class="card-title">
                            <i class="fas fa-table mr-1"></i>
                            Tabla historial de eventos por usuario
                        </h3>
                        <div class="card-tools">
                        <?php if ($fila[18]  == 0) echo 'No tienes privilegio para ver esta tabla <i class="fas fa-ban"></i>';
                                        else echo ' <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>'; ?>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="background-color: #EAE8E8;">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header" style="background-color: #007bff;">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h3 class="card-title text-white">Beneficiario: <strong><?php echo $nomCompleto ?></strong>&nbsp;&nbsp;<img src="../imgBenef/<?php echo $imagen ?>" alt="Beneficiario" class="img-circle img-fluid" style="width:10%; height:auto; border:1px solid #D2D3D4"></h3>
                                                    </div>
                                                    <div class="col-2">

                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="text-white">Total apoyos: <strong><?php echo $num_events ?></strong></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <table id="<?php if ($fila[29]  == 1) echo 'example1';
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
                                                        $id_benef = $_GET['id'];
                                                        $query = "SELECT
                                                        b.a_paterno, b.a_materno, b.nombres, 
                                                        e.title, e.horastart, e.horaend, e.start, e.end, e.entrega, e.date,
                                                        u.username,
                                                        p.enlace,
                                                        tp.nom_tp,
                                                        np.nom_p,
                                                        s.secretaria
                                                        from beneficiario b
                                                        INNER JOIN events e on b.id_benef = e.id_benef1
                                                        INNER JOIN users u on e.id_user1 = u.id_user
                                                        INNER JOIN programas p on e.id_prog1 = p.id_prog
                                                        INNER JOIN tipo_programa tp on p.id_tp1 = tp.id_tp
                                                        INNER JOIN nom_programa np on p.id_np1 = np.id_np
                                                        INNER JOIN secretaria s on p.id_secre1 = s.id_secre
                                                        WHERE id_benef = $id_benef";
                                                        // limit 100
                                                        //return $respuesta->fetch_all();
                                                        $resultado = mysqli_query($conexion, $query);
                                                        $nomCompleto = $row['a_paterno'] . " " . $row['a_materno'] . " " . $row['nombres'];

                                                        while ($row = $resultado->fetch_assoc()) {
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
                                                                    <?php echo $id_benef; ?>
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
        <?php
        require '../config/query_card.php';
        require '../config/modal_card.php';
        include 'footer.php';
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <!-- jQuery -->
    <!-- <script src="../plugins/jquery/jquery.min.js"></script> -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Preloader js -->
    <script src="../js/preloader.js"></script>
    <!-- FullCalendar -->
    <script src='../js/moment.min.js'></script>
    <script src='../js/fullcalendar/fullcalendar.min.js'></script>
    <script src='../js/fullcalendar/fullcalendar.js'></script>
    <script src='../js/fullcalendar/locale/es.js'></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/datatables.min.js"></script>
    <!-- para usar botones en datatables JS -->
    <script src="../plugins/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../plugins/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../plugins/datatables/main.js"></script>
    <!-- FixHeader.js -->
    <!-- <script src="../js/dataTables.fixedHeader.min.js"></script>                                                        -->
    <!-- fixHeader inicializar -->
    <!-- <script>
        $(document).ready(function() {
            var table = $('#example1').DataTable({
                orderCellsTop: true,
                fixedHeader: true,
            });
            //Creamos una fila en el head de la tabla y lo clonamos para cada columna
            $('#example1 thead tr').clone(true).appendTo('#example1 thead');
            $('#example1 thead tr:eq(1) th').each(function(i) {
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
    </script> -->

    <script>
        $(document).ready(function() {

            var date = new Date();
            var yyyy = date.getFullYear().toString();
            var mm = (date.getMonth() + 1).toString().length == 1 ? "0" + (date.getMonth() + 1).toString() : (date.getMonth() + 1).toString();
            var dd = (date.getDate()).toString().length == 1 ? "0" + (date.getDate()).toString() : (date.getDate()).toString();

            $('#calendar').fullCalendar({
                header: {
                    language: 'es',
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay',

                },
                defaultDate: yyyy + "-" + mm + "-" + dd,
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {

                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD '));
                    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD '));
                    $('#ModalAdd').modal('show');
                },
                eventRender: function(event, element) {
                    element.bind('dblclick', function() {
                        $('#ModalEdit #id').val(event.id);
                        $('#ModalEdit #start').val(event.start);
                        $('#ModalEdit #end').val(event.end);
                        $('#ModalEdit #title').val(event.title);
                        $('#ModalEdit #color').val(event.color);
                        $('#ModalEdit #entrega').val(event.entrega);


                        $('#ModalEdit').modal('show');
                    });
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    edit(event);
                },
                eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur

                    edit(event);

                },
                events: [
                    <?php foreach ($events as $event) :

                        $start = explode(" ", $event['start']);
                        $end = explode(" ", $event['end']);
                        if ($start[1] == '00:00:00') {
                            $start = $start[0];
                        } else {
                            $start = $event['start'];
                        }
                        if ($end[1] == '00:00:00') {
                            $end = $end[0];
                        } else {
                            $end = $event['end'];
                        }
                    ?> {
                            id: '<?php echo $event['id']; ?>',
                            title: '<?php echo $event['title']; ?>',
                            start: '<?php echo $start; ?>',
                            end: '<?php echo $end; ?>',
                            color: '<?php echo $event['color']; ?>',
                            entrega: '<?php echo $event['entrega']; ?>',

                        },
                    <?php endforeach; ?>
                ]
            });

            function edit(event) {
                start = event.start.format('YY-MM-DD');
                if (event.end) {
                    end = event.end.format('YY-MM-DD');
                } else {
                    end = start;
                }
                id = event.id;
                Event = [];
                Event[0] = id;
                Event[1] = start;
                Event[2] = end;

                $.ajax({
                    url: 'editEventDate.php',
                    type: "POST",
                    data: {
                        Event: Event
                    },
                    success: function(rep) {
                        if (rep == 'OK') {
                            alert('Evento se ha modifico de fecha correctamente');
                        } else {
                            alert('No se pudo guardar. Inténtalo de nuevo.');
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>