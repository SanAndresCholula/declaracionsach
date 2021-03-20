<?php
  require '../function/funciones.php';
  // Validación de la sesión como administrador:
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.php');
  }
  // Verificación del parámetro GET:
  if( isset($_GET['id']) )
    $id = $_GET['id'];
  else header('Location: ../panelAdmin.php');
  // Captura de las categorías:
  conectar();


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edición de formatos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link href="../css/mainAdmin.css" rel="stylesheet">

    <link rel="icon" href="../img/icon.ico" type="image/x-icon">

    <!-- Custom styles for this template -->
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'menu-superior.php';
        ?>

        <main role="main" class="inner cover">

            <p class="lead" id="text">Panel: edición de formatos excel </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="card">
                                <form action="coinActualizado.php" method="post" class="formRegister" onsubmit="return validar();">
                                    <div class="contenedorRegistro">
                                        <div class="containerInput">
                                            <?php
                                    $id=$_GET['id'];

                                   $query="SELECT * FROM coin WHERE id_coin = '$id'";
                                   $resultado = mysqli_query($conexion, $query);
                                   $row = $resultado ->fetch_assoc();

                                     ?>

                                            <div class="form-group">

                                                <input type="hidden" name="id" value="<?= $row['id_coin']?>">
                                                <label for="usuario">Vinculo</label>
                                                <input type="text" class="form-control" id="vinculo" name="vinculo" value="<?= $row['ruta'] ?>">

                                                <small id="helpUsuario" class="form-text text-muted">Ingresa vinculo creado desde OneDrive | copia todo lo que esta dentro de las comillas ""</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Nombre Formato</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $row['titulo']?>">
                                            </div>

                                            <div class="form-group">
                                                <hr class="style-one">

                                                <label for="clave">Clave</label>
                                                <input type="text" class="form-control" id="clave" name="clave" value="<?= $row['clave']?>">
                                            </div>


                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <button type="button" class="btn btn-danger"><a href="categorias.php">Regresar</a></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </main>

    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>
