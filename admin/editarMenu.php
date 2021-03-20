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
    <title>Edición de Menús</title>

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

            <p class="lead" id="text">Panel: Edición restricción de menús de usuarios </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card">
                                <p class="lead">Selecciona los menús Habilitados / Deshabilitados</p>
                                <?php
                                $id = $_GET['id'];

                                $query = "SELECT * FROM menu WHERE id = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>

                                <form action="menuActualizado.php" method="post" class="formRegister" onsubmit="return validar();">
                                    <div class="contenedorRegistro">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="categoria">Menú Categorias</label>
                                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                    <select class="form-control" id="categorias" name="categorias" value="">
                                                        <option>
                                                            <?= $row['categorias'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>Habilitado</option>
                                                        <option>Deshabilitado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="formatos">Menú Formatos</label>
                                                    <select class="form-control" id="formatos" name="formatos">
                                                        <option>
                                                            <?= $row['formatos'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>Habilitado</option>
                                                        <option>Deshabilitado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="formatos">Menú Coin</label>
                                                    <select class="form-control" id="coin" name="coin">
                                                        <option>
                                                            <?= $row['coin'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>Habilitado</option>
                                                        <option>Deshabilitado</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="style-one">

                                        <div class="row">
                                            <!-- <div class="col">
                                                <div class="form-group">
                                                    <label for="reportes">Menú Reportes</label>
                                                    <select class="form-control" id="reportes" name="reportes">
                                                        <option>
                                                            <?= $row['reportes'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>Habilitado</option>
                                                        <option>Deshabilitado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="enviar">Menú Enviar</label>
                                                    <select class="form-control" id="enviar" name="enviar">
                                                        <option>
                                                            <?= $row['enviar'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>Habilitado</option>
                                                        <option>Deshabilitado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="recibidos">Menú Recibidos</label>
                                                    <select class="form-control" id="recibidos" name="recibidos">
                                                        <option>
                                                            <?= $row['recibidos'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>Habilitado</option>
                                                        <option>Deshabilitado</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="botones">Botones</label>
                                                    <select class="form-control" name="botones" id="botones">
                                                        <option>
                                                            <?= $row['botones'] ?>
                                                        </option>
                                                        <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                        <option>enabled</option>
                                                        <option>disabled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="style-one">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <button type="button" class="btn btn-danger"><a href="permisos.php" style="color:#fff">Regresar</a></button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </main>


        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="lead">Realizado: Innovación Tecnológica 2018 - 2021 <a href="">SACH</a>, by <a href="">#4411</a>.</p>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>