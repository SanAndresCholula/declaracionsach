<?php
require '../function/funciones.php';
// Validación de la sesión como administrador:
if (!haIniciadoSesion() || !esAdmin()) {
    header('Location: index.php');
}
// Verificación del parámetro GET:
if (isset($_GET['id']))
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
    <title>Edición de Calendar</title>

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

            <p class="lead" id="text">Panel: edición de status del calendario </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card">
                                <form action="calendarActualizado.php" method="post" class="formRegister" onsubmit="return validar();">
                                    <div class="contenedorRegistro">
                                        <div class="containerInput">
                                            <?php
                                            $id = $_GET['id'];

                                            $query = "SELECT * FROM status_cal WHERE id = '$id'";
                                            $resultado = mysqli_query($conexion, $query);
                                            $row = $resultado->fetch_assoc();

                                            ?>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <?php
                                                        conectar();
                                                        $sql = "SELECT dependencia FROM usuarios WHERE dependencia <> 'todas' ORDER BY dependencia ASC";
                                                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                        ?>
                                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                        <select name="dependencia" class="form-control input-sm" required>
                                                            <option value="0"><?php echo $row['dependencia'] ?></option>
                                                            <?php
                                                            while ($ver = mysqli_fetch_row($result)) :
                                                            ?>
                                                                <option value="<?php echo $ver[0] ?>">
                                                                    <?php echo $ver[0] ?>
                                                                </option>

                                                            <?php endwhile; ?>

                                                        </select>
                                                        <small class="form-text text-muted">Selecciona una nueva dependencia o la misma, o se quedra "NULL"</small>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="usuario">Status Azul</label>
                                                        <input type="text" class="form-control" id="azul" name="azul" aria-describedby="emailHelp" value="<?= $row['azul'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Azul</small>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Status Turquesa</label>
                                                        <input type="text" class="form-control" id="turquesa" name="turquesa" value="<?= $row['turquesa'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Turquesa</small>
                                                    </div>
                                                </div>
                                                <hr class="style-one">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="usuario">Status Verde</label>
                                                        <input type="text" class="form-control" id="verde" name="verde" aria-describedby="emailHelp" value="<?= $row['verde'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Verde</small>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Status Amarillo</label>
                                                        <input type="text" class="form-control" id="amarillo" name="amarillo" value="<?= $row['amarillo'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Amarillo</small>
                                                    </div>
                                                </div>
                                                <hr class="style-one">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Status Naranja</label>
                                                        <input type="text" class="form-control" id="naranja" name="naranja" value="<?= $row['naranja'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Naranja</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="usuario">Status Rojo</label>
                                                        <input type="text" class="form-control" id="rojo" name="rojo" aria-describedby="emailHelp" value="<?= $row['rojo'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Rojo</small>
                                                    </div>
                                                </div>
                                                <hr class="style-one">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Status Negro</label>
                                                        <input type="text" class="form-control" id="negro" name="negro" value="<?= $row['negro'] ?>" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Negro</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="usuario">ID de la Secretaría</label>
                                                        <input type="number" class="form-control" id="id_secretaria" name="id_secretaria" aria-describedby="emailHelp" value="1" required>
                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun el ID de la secretaría</small>
                                                    </div>
                                                </div>
                                                <hr class="style-one">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <div class="checkbox">
                                                                <label class="text-danger"><input type="checkbox" name="is_secretaria" value="<?php echo $row['is_secretaria']?>"></label> 
                                                                <small id="helpUsuario" class="form-text text-muted">Asigna el permiso para que pueda ver las direcciones a su cargo</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <button type="submit" class="btn btn-primary">Actualizar</button>
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