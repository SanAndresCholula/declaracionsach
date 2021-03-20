<?php
$active2 = "active";
include "head.php";
include "header.php";
include "aside.php";
?>
<?php
$file = null;
if (isset($_GET["code"]) && $_GET["code"] != "") {
    $id_code = $_GET["code"];
    $file = mysqli_query($con, "select * from file where code='$id_code'");

    while ($row = mysqli_fetch_array($file)) {
        $file_id = $row['id'];
        $is_public = $row['is_public'];
       $user_id = $row['usuario'];
        $code = $row['code'];
        $filename = $row['filename'];
        $description = $row['description'];
        $created_at = $row['created_at'];
        $file_count = $row['download'];
        $folder_id = $row['folder_id'];
    }
}

$is_public = true;
$is_logged = false;
$is_owner = false;
$go = false;


if ($is_public) {
    $is_public = true;
}
if (isset($_SESSION["usuario"])) {
    $is_logged = true;
}

if (@$is_logged && $_SESSION["usuario"] == $user_id) {
    $is_owner = true;
}

if ($is_public) {
    $go = true;
}
if (!$is_logged) {

    print "<script>alert(\"Acceso Denegado uno!\")</script>";
    print "<script>window.location='./';</script>";
} else if ($go == false && !$is_owner) {

    $ps = mysqli_query($con, "select * from permision where file_id=" . $file_id);
    $found = false;
    foreach ($ps as $p) {
        if ($p['usuario'] == c) {
            $found = true;
        }
    }

    if ($found == true) {
        $go = true;
    } else {
        print "<script>alert(\"Acceso Denegado!\")</script>";
        echo "<script>window.location='shared.php';</script>";
    }
}
?>

<?php if ($go || $is_owner) : ?>
    <div class="content-wrapper">
        <!-- Content Wrapper. Contains page content -->
        <section class="content-header">
            <!-- Content Header (Page header) -->
            <h1>Detalles: <strong style="color:#fff"><?php echo $filename; ?></strong> </h1>
            <?php if (isset($_SESSION["usuario"])) : ?>
                <ol class="breadcrumb">
            <li><a href="#" style="color:#fff; font-size:medium"><i class="fa fa-dashboard"></i> Home </a></li>
                    <li><a href="myfiles.php" style="color:#fff; font-size:medium"><i class="fa fa-archive"></i> Mis Archivos</a></li>

                    <?php
                    if ($folder_id != 0) {
                        $f = mysqli_query($con, "select * from file where id=$folder_id");
                        while ($g = mysqli_fetch_array($f)) {
                            $f_code = $g['code'];
                            $f_filename = $g['filename'];
                        }
                        echo '<li class="active"><a href="myfiles.php?folder=' . $f_code . '" style="color:#fff; font-size:medium"><i class="fa fa-folder-open"></i> ' . $f_filename . '</a></li>';
                    }
                    ?>
                </ol>
            <?php endif; ?>
        </section>
        <section class="content">
            <!-- Main content -->
            <div class="row">
                <!-- Small boxes (Stat box) -->
                <div class="col-lg-6 col-xs-6 col-md-offset-3">
                    <div class="btn-group  pull-right">
                    <?php $userdown = $_SESSION["usuario"]?>
                    <a href="action/dwnfl.php?code=<?php echo $code; ?>&id=<?php echo $file_id; ?>&count=<?php echo $file_count; ?>&user=<?php echo $userdown; ?>" class="btn btn-facebook"><i class="fa fa-download"></i> Descargar</a>
                    </div>
                    <!-- <?php
                    $url = $_SERVER["HTTP_HOST"] . "/crd/gestorArchivos/file.php?code=" . $_GET['code'];
                    ?> -->
                    <div class="btn-group  pull-right" style="margin-right: 5px;">
                    <a href="" onclick="javascript:window.print()" class="btn btn-facebook"><i class="fa fa-print"></i> Imprimir</a>
                    </div>
                    <div class="btn-group  pull-right" style="margin-right: 5px;">
                    <a href="myfiles.php"class="btn btn-facebook"><i class="fa fa-step-backward"></i> Regresar</a>
                    </div>
                    <!-- <div style="padding-right:6px;" class="btn-group  pull-right">
                        <p style="display: none;" id="copy"><?php echo $url ?></p>
                        <a onclick="copylink('copy')" class="btn btn-default"><i class="fa fa-link"></i> Copiar enlace</a>
                    </div> -->
                    <br>
                    <?php if (mysqli_num_rows($file) == 0) : ?>
                        <h1>404</h1>
                    <?php else : ?>
                        <br>
                        <?php
                        //$filename1=$filename;
                        $url = "storage/data/" . $user_id . "/" . $filename;
                        if (file_exists($url)) {
                            $ftype = explode(".", $url);
                            if ($filename != "") {
                                if ($ftype[1] == "png" || $ftype[1] == "jpg" || $ftype[1] == "gif" || $ftype[1] == "jpeg") {
                                    echo " <img src=\"$url\" class=\"offline\" width=\"540\">";
                                } else {
                                    echo "<h3>Nombre del archivo: <i><strong>$filename</strong></i></h3>";
                                }
                            }
                        } else {
                            echo  "<h1 class='text-muted'>Error 404 El archivo no existe</h1>";
                        }
                        ?>
                    <?php endif; ?>
                    <h3>Descripción del archivo: <i><strong><?php echo  $description; ?></strong></i></h3>
                    <h3 title="Quien envia el archivo">Remitente: <i><strong><?php echo $user_id; ?></strong></i></h3><br>
                    <p class="text-muted text-right"><i class="fa fa-clock-o"></i> <?php echo $created_at; ?></p>
          
                    <?php
                    $comments = mysqli_query($con, "SELECT * FROM comment WHERE file_id=" . $file_id);
                    $count = mysqli_num_rows($comments);
                    ?>
                    <?php
                    // get messages
                    if (isset($_GET['success'])) {
                        echo "<p class='alert alert-success'> <i class=' fa fa-exclamation-circle'></i> <strong>¡Comentario agregado! </strong> .</p>";
                    } elseif (isset($_GET['error'])) {
                        echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> <strong>¡Error! </strong>No se puede comentar este archivo.</p>";
                    }
                    ?>

                    <div class="box box-success">
                        <!-- small box -->
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title text-black">Comentarios (<?php echo $count ?>)</h3>
                        </div>
                        <?php if ($count > 0) : ?>
                            <div class="box-body chat" id="chat-box">
                                <div class="item">
                                    <!-- chat item -->
                                    <?php foreach ($comments as $com) : ?>
                                        <?php

                                        $com_user_id = $com['usuario'];
                                        $commm = mysqli_query($con, "select * from comment where usuario='$com_user_id' ");
                                        while ($usi = mysqli_fetch_array($commm)) {
                                            $userd = $usi['usuario'];
                                        }
                                        $userss = mysqli_query($con, "select * from usuarios where usuario='$userd'");
                                        while ($com2 = mysqli_fetch_array($userss)) {
                                            $profile_pic = $com2['image'];
                                            $fullname = $com2['usuario'];
                                        }
                                        ?>
                                        <img src="../images/profiles/<?php echo $profile_pic; ?>" alt="user image" class="offline">
                                        <p class="message">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <!-- 5:15 --><?php echo $com['created_at']; ?></small>
                                            <a href="#" class="name">
                                                <?php echo $fullname;  ?>
                                            </a>
                                            <?php echo $com['comment']; ?>
                                        </p>
                                    <?php endforeach; ?>
                                </div><!-- /.item -->
                            </div><!-- /.chat -->

                        <?php endif; ?>
                        <div class="box-footer">
                            <form method="post" action="action/addfilecomment.php">
                                <div class="input-group">
                                    <input type="hidden" value="<?php echo $file_id ?>" name="id">
                                    <input type="hidden" value="<?php echo $user_id ?>" name="user_remitente">
                                    <input type="hidden" value="<?php echo $id_code ?>" name ='id_code'>
                                    <input name="comment" required class="form-control" placeholder="Escribe un comentario...">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-comments"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php if (mysqli_num_rows($file) != 0) : ?>
                    <?php else : ?>
                        <div class="jumbotron">
                            <h2>No hay archivos</h2>
                            <p>No se encontraron archivos en la carpeta actual.</p>
                        </div>
                    <?php endif; ?>
                </div><!-- ./col -->
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->
<?php endif; ?>


<script>
    function copylink(id) {
        var aux = document.createElement("input");
        aux.setAttribute("value", document.getElementById(id).innerHTML);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
    }
</script>

<?php include "footer.php"; ?>