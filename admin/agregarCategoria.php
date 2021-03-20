<?php
  require '../function/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $categorias = getTodasCategorias();
  desconectar();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear categorias</title>

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

            <p class="lead" id="text">Panel: Creación de categorias </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="card">
                                <form action="crearCategoria.php" method="post" class="formRegister" onsubmit="">
                                    <div class="contenedorRegistro">
                                        <div class="containerInput">

                                            <div class="form-group">
                                                <label for="categoria">Categoría</label>
                                                <input type="text" class="form-control" id="categoria" name="categoria" aria-describedby="emailHelp" placeholder="Ingresa nombre de Categoria">

                                                <small id="helpUsuario" class="form-text text-muted">Nombre de la Nueva Categoría</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="descripcion">Descripción</label>
                                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa una breve descrición" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="ruta">Ruta</label>
                                                <input type="text" class="form-control" id="ruta" name="ruta" placeholder="Ingresa la ruta dentro de la carpeta categorias" required>
                                            </div>
                                            <!--boton guardar -->
                                            <button type="submit" class="btn btn-success">Guardar</button>
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
