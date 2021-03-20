<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.php');
}
  conectar();
  $usuarios = getUsuarios();
  desconectar();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Valuacion de Activos Intangibles">
    <meta name="author" content="isc jose uriel guerra trinidad">
    <link rel="icon" href="../img/src/favicon.ico">

    <title>Editar Usuarios</title>
    <link rel="ico" href="../../img/favicon.ico">

    <!-- style css -->
    <link rel="stylesheet" href="../css/style2.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!--favicon-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/funcion.js"></script>



</head>

<body>
    <?php include 'menu-superior.php'; ?>
    <!--=======menu superior =======-->

    <div class="container-fluid">
        <div class="row">


            <div class="col-md-8 col-md-offset-2 main">
                <h1 class="page-header">Panel Imagen de Perfil</h1>

                <h4 class="sub-header">
                    Modifica, inserta la imagen de perfil de usuario
                </h4>
                <?php
                    $id=$_GET['id'];

                                   $query="SELECT * FROM usuarios WHERE usuario = '$id'";
                                   $resultado = mysqli_query($conexion, $query);
                                   $row = $resultado ->fetch_assoc();

                                     ?>

                <!-- start table responsive-->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Tabla Usuarios
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="../php/categorias/imagenPerfil.php" enctype="multipart/form-data" method="post" style="margin:0 auto">
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tr>

                                            <input type="text" name="usuario" class="form-control" readonly value="<?php echo $id; ?>">
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Archivo <input type="file" id="imagen" name="imagen" />

                                            </td>
                                        </tr>
                                        <tr>
                                            <label for=""> se modifcara su imagen de perfil, estas seguro?</label>
                                        </tr>
                                        <tr>

                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <input class="btn btn-primary btn-md" type="submit" name="submit" value="Agregar imagen" style="margin-top:10px" />

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
        <!-- end table responsive-->

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!--modal-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaAgregar').load('../admin/tablaAgregar.php');
        });

    </script>

</body>

</html>
