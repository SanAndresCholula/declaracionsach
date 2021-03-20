<?php
  require '../function/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $usuarios = getUsuarios();

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar archivo enviado</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link href="../css/mainAdmin.css" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="../img/icon.ico" type="image/x-icon">

    <!-- Custom styles for this template -->
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>

<!-- =========================
    //////////////Esta pagina fue desarrollada por el Departamento//////////////////////
    ////////////////////de Innovacion Tecnologica SACH 2018 - 2021///////////////////
    /////////////////////////by ISC Jose Uriel Guerra Trinidad======================-->

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'menu-superior.php';
        ?>

        <main role="main" class="inner cover">

            <!-- body -->
            <center>
                <main role="main" class="inner cover">

                    <!-- body -->
                    <center>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 main">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title" style="color:#fff;margin-top:20px;">Edición de reportes subidos por el usuario:
                                                <?= $_SESSION['usuario'] ?>.</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-body">
                                                    <!-- body -->

                                                    <?php
                                    $id=$_GET['id'];

                                   $query="SELECT * FROM reporte WHERE id_reporte = '$id'";
                                   $resultado = mysqli_query($conexion, $query);
                                   $row = $resultado ->fetch_assoc();

                                     ?>
                                                    <!--select-->
                                                    <?php
                                    $id=$_GET['id'];

                                   $query="SELECT * FROM destinatario WHERE id_destinatario = '$id'";
                                   $resultado = mysqli_query($conexion, $query);
                                   $row = $resultado ->fetch_assoc();

                                     ?>

                                                    <form id="test_upload" name="test_upload" action="enviarFile.php" enctype="multipart/form-data" method="post" style="background: rgba(0,0,0,0.3)">

                                                        <table class="table table-striped" border="0" cellpadding="20" cellspacing="50">
                                                            <tr>
                                                                <td>Modifica destinatario: </td>
                                                                <td>
                                                                    <!--<input type="text" class="form-control" id="destinatario" name="destinatario" aria-describedby="emailHelp" placeholder="Ingresa un Usuario">-->
                                                                    <?php
     $sql="SELECT usuario FROM usuarios WHERE usuario <> '".$_SESSION['usuario']."' ORDER BY usuario DESC";
                $result=mysqli_query($conexion,$sql)or die(mysqli_error($conexion));;
                ?>

                                                                    <select name="destinatario" class="form-control input-sm" required>
                                                                        <option value="0">Selecciona destinatario para modificarlo</option>
                                                                        <?php
                                                        while($ver=mysqli_fetch_row($result)):
                                                        ?>
                                                                        <option value="<?php echo $ver[0] ?>">
                                                                            <?php echo $ver[0] ?>
                                                                        </option>

                                                                        <?php endwhile; ?>

                                                                    </select>


                                                                    <small id="helpUsuario" class="form-text text-muted">Se mostrara 1° destinatario de la lista de la base de datos</small>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Comentario breve</td>
                                                                <td colspan="2"><textarea name="comentario" rows="5" cols="100" id="comentario" placeholder="Escribe algun comentario breve" required><?php echo $row['comentario'];?></textarea></td>
                                                            </tr>
                                                            <input type="hidden" name="remitente" value="<?= $_SESSION['usuario'] ?>">
                                                            <tr>
                                                                <td colspan="2">
                                                                    Archivo <input type="file" id="photo" name="photo" required="required" />
                                                                    <p>Nombre del archivo a modificar:
                                                                        <b><u><a href="sendFile/<?php echo $row['name']?>" download="archivo_a_modificar_/<?php echo $row['name']?>" title="Descargar archivo">
                                                                                    <?php echo $row['name']?></a>
                                                                            </u></b>
                                                                    </p>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="5">
                                                                    <input class="btn btn-primary btn-md" type="submit" name="submit" value="Enviar" />
                                                                    <a class="btn btn-danger btn-md" href="enviar.php">Regresar</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </main>

            </center>
        </main>



        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p style="color:#fff">Realizado: Innovación Tecnológica 2018 - 2021 <a href="">SACH</a>, by <a href="">#4411</a>.</p>
            </div>
        </footer>
    </div>

    <?php
    include '../function/script.php';
    ?>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
</body>

</html>
