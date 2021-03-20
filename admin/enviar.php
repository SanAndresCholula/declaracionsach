<?php
  require '../function/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $usuarios = getUsuarios();
// desconectar();

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Enviar archivos</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!-- Custom styles for this template -->
        <link href="../css/mainAdmin.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/tablas.css">
        <!--favicon-->
        <link rel="icon" href="../img/icon.ico" type="image/x-icon">
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">



    </head>

    <body class="text-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <?php
        include 'menu-superior.php';
        ?>
                <main role="main" class="inner cover">

                    <p class="lead" id="text">Panel: Enviar archivos </p>
                    <hr class="style-one">

                    <center>
                        <div id="accordion">
                            <div class="card" style="background: rgba(0,0,0,0.3)">
                                <div class="card-header" id="heading1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Enviar archivo
                                </button>
                                    </h5>
                                </div>

                                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                                    <div class="card-body">

                                        <form id="test_upload" name="test_upload" action="enviarFile.php" enctype="multipart/form-data" method="post" style="background: rgba(0,0,0,0.3)">

                                            <table class="table table-striped" border="0" cellpadding="20" cellspacing="10">
                                                <tr>

                                                    <td>Destinatario: </td>
                                                    <td>

                                                        <?php
     $sql="SELECT usuario FROM usuarios WHERE usuario <> 'superadministrador' ORDER BY usuario ASC";
                $result=mysqli_query($conexion,$sql)or die(mysqli_error($conexion));;
                                                ?>

                                                            <select name="destinatario" class="form-control input-sm" required>
                                                    <option value="0">Selecciona destinatario</option>
                                                    <?php while($ver=mysqli_fetch_row($result)): ?>
                                                    <option value="<?php echo $ver[0] ?>">
                                                        <?php echo $ver[0] ?>
                                                    </option>

                                                    <?php endwhile; ?>

                                                </select>

                                                            <small id="helpUsuario" class="form-text text-muted">Ingresa un nombre de usuario</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Comentario breve</td>
                                                    <td colspan="2"><textarea name="comentario" rows="5" cols="100" id="comentario" placeholder="Escribe algun comentario breve" required></textarea></td>
                                                </tr>
                                                <input type="hidden" name="remitente" value="<?= $_SESSION['usuario'] ?>">
                                                <tr>
                                                    <td colspan="2">
                                                        Archivo <input type="file" id="photo" name="photo" required="required" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="5">
                                                        <input class="btn btn-primary btn-md" type="submit" name="submit" value="Enviar" style="margin-top:10px" />
                                                        <input class="btn btn-danger btn-md" type="reset" value="Reset formulario" style="margin-top:10px">
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- acordeon 2 -->

                        <br>

                        <div id="accordion-fluid">
                            <div class="card" style="background: rgba(0,0,0,0.3)">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ver todos los enviados
                                </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div id="tablaEnviados"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </center>
                </main>



                <footer class="mastfoot mt-auto">
                    <div class="inner">
                        <p class="lead">Realizado: Innovación Tecnológica 2018 - 2021 <a href="https://getbootstrap.com/">SACH</a>, by <a href="https://twitter.com/mdo">#4411</a>.</p>
                    </div>
                </footer>
        </div>

        <?php
    include '../function/script.php';
    ?>
            <script src="../js/bootstrap.js"></script>
            <script src="../js/jquery.min.js"></script>

            <!-- funcion llamar tabla-->
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#tablaEnviados').load('tablas/tablaEnviados.php');
                });

            </script>
    </body>

    </html>
