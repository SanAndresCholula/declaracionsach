<?php
  require '../function/funciones.php';
  // Validación de la sesión como administrador:
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }
  // Verificación del parámetro GET:
  if( isset($_GET['usuario']) )
    $usuario = $_GET['usuario'];
  else header('Location: index.php');
  // Captura de las categorías:
  conectar();
  $categorias = getTodasCategorias();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edición permisos</title>

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

            <p class="lead" id="text">Panel: para edición de categorias por usuario</p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="card">
                                <p class="lead" id="text">Asignar la(s) categoria(s) a la(s) que <strong><big><u>
                                                <?= $usuario?></u></big></strong>
                                    tiene acceso</p>

                                <form action="actualizar-permisos.php" method="POST" class="formulario">


                                    <div class="form-group">
                                        <label for="txtUsuario">Usuario</label>
                                        <input type="text" class="form-control" name="txtUsuario" id="txtUsuario" value="<?= $usuario ?>" readonly>
                                    </div>
                                    <label for="text">Categorias en existencia, selecciona para agregar</label>
                                    <?php foreach( $categorias as $categoria ): ?>
                                    <div class="checkbox">
                                        <label style="font-size: 1.5rem">
                                            <input type="checkbox" name="categoria<?= $categoria[0] ?>" <?php if(tienePermiso($usuario, $categoria[0])) echo "checked" ?>>
                                            <?= $categoria[1] ?>
                                        </label>
                                    </div>
                                    <?php
            endforeach;
            desconectar();
        ?>
                                    <hr class="style-one">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-danger"><a href="permisos.php">Regresar</a></button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </main>


        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="lead">Realizado: Innovación Tecnológica 2018 - 2021 <a href="#">SACH</a>, by <a href="#">#4411</a>.</p>
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
