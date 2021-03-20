<?php
require '../function/funciones.php';
// Validación de la sesión como administrador:
if (!haIniciadoSesion() || !esAdmin()) {
    header('Location: ../index.php');
}

conectar();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar usuarios</title>

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

            <p class="lead" id="text">Panel: Actualiza datos del usuario </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card">

                                <?php
                                $id = $_GET['usuario'];

                                $query = "SELECT * FROM usuarios WHERE usuario = '$id'";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();

                                ?>

                                <form action="actualizaDatos.php" method="post" class="formulario" onsubmit="return validar();">
                                    <div class="contenedorRegistro">
                                        <div class="containerInput">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="txtUsuario">Usuario</label>
                                                        
                                                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $row['usuario']; ?>" readonly>

                                                        <small id="helpUsuario" class="form-text text-muted">Modifica el nombre del usuario</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Correo</label>
                                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="style-one">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="clave">Clave</label>
                                                        <input type="text" class="form-control" id="claveEdit" name="clave" value="<?php echo $row['clave']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="email">Id Secretaria</label>
                                                        <input type="number" class="form-control" name="id_secretaria" id="id_secretaria" value="<?php echo $row['id_secretaria']; ?>" required>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr class="style-one">

                                            <div class="row">
                                                 <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-check-label" for="check">Admin</label>
                                                        <input type="text" class="form-control" name="check" id="checkAdminEdit" pattern="[0-1]" maxlength="1" value="<?php echo $row['admin']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-check-label" for="check">Telefono o movil</label>
                                                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>" required>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr class="style-one">
                                            <div class="row">
                                            <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-check-label">Dependencia | Departamento</label>
                                                        <input type="text" class="form-control" name="dependencia" id="dependencia" value="<?php echo $row['dependencia']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-check-label" for="check">Es secretaria</label>
                                                        <input type="number" class="form-control" name="is_secretaria" id="is_secretaria" value="<?php echo $row['is_secretaria']; ?>" required>
                                                        <small id="helpCheckAdmin" class="form-text text-muted">Agrega '1' para afirmativo.</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                            <a href="editarUsuario.php" class="btn btn-danger">Regresar</a>
                                        </div>
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