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
  $categoria = getCategoriaPorId($id);
  desconectar();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edición de categorias</title>

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

            <p class="lead" id="text">Panel: Creación de usuarios </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="card">
                                <form action="categoriaEditada.php" method="POST">
                                    <div class="contenedorRegistro">
                                        <div class="form-group">
                                            <label for="txtId">ID Categoría</label>
                                            <input type="number" class="form-control" id="txtId" name="txtId" value="<?= $categoria[0] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtNombre">Nombre categoria</label>
                                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?= $categoria[1] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="txtDescripcion">Descripción</label>
                                            <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" value="<?= $categoria[2] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="txtRuta">Ruta</label>
                                            <input type="text" class="form-control" id="txtRuta" name="txtRuta" value="<?= $categoria[3] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="txttipo">Tipo de Categoria</label>
                                            <select class="form-control" id="enviar" name="enviar">
                                                <option>
                                                    <?= $categoria[4]?>
                                                </option>
                                                <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                <option>Admin</option>
                                                <option>Normal</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="button" class="btn btn-danger"><a href="categorias.php" style="color:#fff">Regresar</a></button>
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
