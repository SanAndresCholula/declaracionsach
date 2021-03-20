<?php
$active1 = "active";
include "head.php";
include "header.php";
include "aside.php";

$count_archive = mysqli_query($con, "SELECT * FROM file WHERE usuario = '$fullname' and is_folder=1");
$count_files = mysqli_query($con, "SELECT * FROM file WHERE usuario = '$fullname' and is_folder=0");
$count_files_received = mysqli_query($con, "SELECT * FROM permision WHERE usuario = '$fullname'");
$count_mydownload = mysqli_query($con, "SELECT user_down, count(user_down) FROM  user_down WHERE user_down = '$fullname'");
$count_download = mysqli_query($con, "SELECT  user_upfile, count(user_upfile) from user_down WHERE user_upfile = '$fullname'");
// $comments = mysqli_query($con, "SELECT user_remitente, count(user_remitente), usuario, COUNT(usuario) FROM comment WHERE user_remitente = '$fullname' OR usuario = '$fullname' order by created_at DESC");

?>
<div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
    <section class="content-header">
        <!-- Content Header (Page header) -->
        <h1 class="m-0 " style="font-size: xx-large;">Dashboard: <?php echo $dependencia ?></h1>
        <ol class="breadcrumb">
            <li><a href="home.php" style="color:#fff; font-size:medium"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active text-white" style="color:#fff; font-size:medium">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <!-- Main content -->
        <div class="row">
            <!-- Small boxes (Stat box) -->

            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-olive">
                    <div class="inner">
                        <div class="icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h3><?php echo mysqli_num_rows($count_archive); ?></h3>
                        <p title="Total de mis carpetas creadas">Mis carpetas creadas</p>
                    </div>
                    <a href="#" class="small-box-footer toastsDefaultDefault" data-toggle="modal" data-target="#modal-carpetas">Más info <i class="fa fa-arrow-circle-right"></i></a>

                </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <div class="icon">
                            <i class="fas fa-file"></i>
                        </div>
                        <h3><?php echo mysqli_num_rows($count_files); ?></h3>
                        <p title="Total de mis archivos creados">Mis archivos creados</p>
                    </div>
                    <a href="#" class="small-box-footer toastsDefaultDefault" data-toggle="modal" data-target="#modal-enviados">Más info <i class="fa fa-arrow-circle-right"></i></a>

                </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
                <div class="small-box bg-teal">
                    <!-- small box -->
                    <div class="inner">
                        <div class="icon">
                            <i class="fa fa-file-download"></i>
                        </div>
                        <h3><?php echo mysqli_num_rows($count_files_received); ?></h3>
                        <p title="Total de archivos que he recibido">Archivos recibidos</p>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-recibidos">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--  -->
            <div class="col-lg-2 col-xs-6">
                <div class="small-box bg-fuchsia">
                    <!-- small box -->
                    <div class="inner">
                        <div class="icon">
                            <i class="fa fa-download"></i>
                        </div>
                        <?php
                        //compruebo si hay archivos, sino hay muestro un cero
                        if (mysqli_num_rows($count_files) != null) {
                            foreach ($count_download as $count) {
                        ?>
                                <h3>
                                    <?php echo $count['count(user_upfile)']; ?>
                                </h3>
                            <?php
                            } //end foreach
                        } else {

                            ?>
                            <h3>0</h3>
                        <?php
                        }

                        ?>
                        <p>Descargas</p>
                    </div>

                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-descargados">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- start mis descargas -->
            <div class="col-lg-2 col-xs-6">
                <div class="small-box bg-blue">
                    <!-- small box -->
                    <div class="inner">
                        <div class="icon">
                            <i class="fa fa-download"></i>
                        </div>
                        <?php
                        //compruebo si hay archivos, sino hay muestro un cero
                        if (mysqli_num_rows($count_files) != null) {
                            foreach ($count_mydownload as $count) {
                        ?>
                                <h3>
                                    <?php echo $count['count(user_down)']; ?>
                                </h3>
                            <?php
                            } //end foreach
                        } else {

                            ?>
                            <h3>0</h3>
                        <?php
                        }

                        ?>
                        <p> Mis descargas</p>
                    </div>

                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-misdescargados">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- comentarios -->
            <div class="col-lg-2 col-xs-6">
                <div class="small-box bg-yellow">
                    <!-- small box -->
                    <div class="inner">
                        <div class="icon">
                            <i class="fa fa-comments"></i>
                        </div>
                        <?php
                        $query = "SELECT file_id FROM permision WHERE usuario = '$fullname' OR remitente = '$fullname' ORDER BY id desc";
                        $resultado = mysqli_query($con, $query);

                        while ($row = $resultado->fetch_assoc()) {
                            $file_id = $row['file_id'];
                            $sql = mysqli_query($con, "SELECT id FROM file WHERE folder_id =  $file_id ");
                            while ($dato = mysqli_fetch_array($sql)) {
                                $id_f = $dato['id'];
                            }
                            $sql1 = mysqli_query($con, "SELECT file_id, count(file_id) AS count FROM comment WHERE file_id =$id_f GROUP BY file_id UNION ALL SELECT 'SUM' file_id, count(file_id) FROM comment ");
                            while ($dato = mysqli_fetch_array($sql1)) {
                                $id_f1 = $dato['count(file_id)'];
                            }
                        ?>
                            <h3>
                                <?php echo $id_f1; ?>
                            </h3>
                        <?php }
                        ?>

                        <p>Comentarios</p>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-comentarios">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
    </section>
</div><!-- /.content -->

<?php include "footer.php"; ?>
<script>
    $(function() {
        $("input[name='file']").on("change", function() {
            var formData = new FormData($("#formulario")[0]);
            var ruta = "action/uploadprofile.php";
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


<!-- modales de los box -->
<div class="modal fade" id="modal-carpetas">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3d9970;">
                <h4 class="modal-title" style="font-size:x-large; color:#fff">Mis carpetas creadas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $query = "SELECT  id, filename, description, created_at FROM file WHERE usuario = '$fullname' AND is_folder = 1";
                $resultado = mysqli_query($con, $query);
                ?>
                <div class="card-body">

                    <table id="example1" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                        <thead>
                            <tr>

                                <td><b>Nombre de la carpeta</b></td>
                                <td><b>Descripción</b></td>
                                <td><b>Fecha creación</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><b><?php echo $row['filename']; ?></b></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between" style="background-color: #3d9970;">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-enviados">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d81b60;">
                <h4 class="modal-title" style="font-size:x-large; color: #fff">Mis archivos creados</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $query = "SELECT * FROM file WHERE usuario = '$fullname' AND is_folder = 0";
                $resultado = mysqli_query($con, $query);
                ?>
                <div class="card-body">

                    <table id="example2" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                        <thead>
                            <tr>

                                <td><b>Nombre del archivo</b></td>
                                <td><b>Descripción</b></td>
                                <td><b>Dentro de la carpeta</b></td>
                                <td><b>Fecha creación</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><b><?php echo $row['filename']; ?></b></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td>
                                        <?php $f_id = $row['folder_id'];
                                        $sql = mysqli_query($con, "SELECT * FROM file WHERE id = $f_id");
                                        while ($dato = mysqli_fetch_array($sql)) {
                                            $f = $dato['filename'];
                                        }
                                        echo $f;
                                        ?>
                                    </td>
                                    <td><?php echo $row['created_at']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between" style="background-color: #d81b60;">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-recibidos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #39cccc;">
                <h4 class="modal-title" style="font-size:x-large; color:#fff">Mis archivos recibidos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $query = "SELECT  file_id FROM permision WHERE usuario = '$fullname'";
                $resultado = mysqli_query($con, $query);
                ?>
                <div class="card-body">

                    <table id="example3" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                        <thead>
                            <tr>

                                <td><b>Nombre del archivo</b></td>
                                <td><b>Tipo</b></td>
                                <td><b>Descripción</b></td>
                                <td><b>Remitente</b></td>
                                <td><b>Enviado a mi bandeja</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <?php
                                    $f = $row['file_id'];
                                    $f1 = mysqli_query($con, "SELECT * FROM file WHERE id = $f");
                                    while ($dato = mysqli_fetch_array($f1)) {
                                        $id = $dato['filename'];
                                        $des = $dato['description'];
                                        $use = $dato['usuario'];
                                        $cre = $dato['created_at'];
                                        $is = $dato['is_folder'];
                                    ?>
                                        <td>
                                            <?php echo $id ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($is <> 0) {
                                                echo 'Carpeta';
                                            } else {
                                                echo 'Archivo';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $des ?>
                                        </td>
                                        <td><b>
                                                <?php echo $use ?>
                                            </b>
                                        </td>
                                        <td>
                                            <?php echo $cre ?>
                                        </td>

                                    <?php }
                                    ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer justify-content-between" style="background-color: #39cccc;">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-descargados">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #f012be;">
                <h4 class="modal-title" style="font-size:x-large; color:#fff">¿Quién ha descargado mis archivos?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php


                $query = "SELECT * FROM user_down WHERE user_upfile = '$fullname'  order by date DESC ";
                $resultado = mysqli_query($con, $query);
                ?>
                <div class="card-body">

                    <table id="example4" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                        <thead>
                            <tr>

                                <td><b>Nombre del archivo</b></td>
                                <td><b>Descripción</b></td>
                                <td><b>Fecha creado</b></td>
                                <td><b>Lo descargo:</b></td>
                                <td><b>Fecha de descarga</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = $resultado->fetch_assoc()) {
                                $user_d = $row['user_down'];
                                $user_u = $row['user_upfile'];
                                $date = $row['date'];
                                $id_fdown = $row['id_fdown'];
                            ?>

                                <tr>
                                    <td><?php
                                        $id_fdown;
                                        $sql = mysqli_query($con, "SELECT * FROM file WHERE id = $id_fdown");
                                        while ($dato = mysqli_fetch_array($sql)) {
                                            $f = $dato['filename'];
                                            $d = $dato['description'];
                                            $c = $dato['created_at'];

                                            echo $f;
                                        ?>
                                    </td>
                                    <td><?php echo $d ?></td>
                                    <td><?php echo $c ?></td>

                                <?php } ?>

                                <td><b><?php echo $user_d ?></b></td>
                                <td><?php echo $date ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between" style="background-color: #f012be;">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-misdescargados">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff;">
                <h4 class="modal-title" style="font-size:x-large; color:#fff">Mis archivos descargados</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $query = "SELECT * FROM user_down WHERE user_down = '$fullname' order by date DESC ";
                $resultado = mysqli_query($con, $query);
                ?>
                <div class="card-body">

                    <table id="example5" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <td><b>Nombre del archivo</b></td>
                                <td><b>Descripción</b></td>
                                <td><b>Fecha creado</b></td>
                                <td><b>Remitente</b></td>
                                <td><b>Fecha de descarga</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = $resultado->fetch_assoc()) {
                                $user_d = $row['user_down'];
                                $user_u = $row['user_upfile'];
                                $date = $row['date'];
                                $id_fdown = $row['id_fdown'];
                            ?>

                                <tr>
                                    <td><?php
                                        $id_fdown;
                                        $sql = mysqli_query($con, "SELECT * FROM file WHERE id = $id_fdown");
                                        while ($dato = mysqli_fetch_array($sql)) {
                                            $f = $dato['filename'];
                                            $d = $dato['description'];
                                            $c = $dato['created_at'];

                                            echo $f;
                                        ?>
                                    </td>
                                    <td><?php echo $d ?></td>
                                    <td><?php echo $c ?></td>
                                <?php } ?>
                                <td><b><?php echo $user_u ?></b></td>
                                <td><?php echo $date ?></td>

                                </tr>


                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between" style="background-color: #007bff">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-comentarios">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #f39c12;">
                <h4 class="modal-title" style="font-size:x-large; color:#fff">Mis comentarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <table id="example6" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>

                        <tr>
                            <td><b>Nombre del archivo</b></td>
                            <td><b>Quién me envia comentario</b></td>
                            <td><b>Fecha de enviado</b></td>
                            <td><b>Ir al comentario</b></td>
                        </tr>

                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-between" style="background-color: #f39c12;">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>