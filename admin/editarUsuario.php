<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar usuarios</title>

    <?php
    include 'head.php';
    ?>
</head>


<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'menu-superior.php';
        ?>

        <main role="main" class="inner cover">
            <p class="lead" id="text">Panel: Administración CRUD usuarios registrados. (1 afirmativo, 0 Negativo)</p>
            <hr class="style-one">

            <!-- start table responsive-->

            <div class="panel panel-primary">

                <div id="accordion1-fluid">
                    <div class="card" style="background: rgba(0,0,0,0.3)">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Crear usuarios
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
                                <center>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-8">
                                                <div class="card">
                                                    <div class="">
                                                        <table class="table table-striped table-dark">
                                                            <form action="registrarUser.php" method="post" class="formRegister" onsubmit="return validar();">
                                                                <div class="contenedorRegistro">
                                                                    <div class="containerInput">

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="usuario">Usuario</label>
                                                                                    <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Ingresa un Usuario" required>

                                                                                    <small id="helpUsuario" class="form-text text-muted">Ingresa nombre completo del usuario</small>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="email">Correo</label>
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa un correo" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="style-one">

                                                                        <div class="row align-items-center">
                                                                            <div class="col">

                                                                                <div class="form-group">
                                                                                    <label for="clave">Clave</label>
                                                                                    <input type="text" class="form-control" id="clave" name="clave" required placeholder="Genera una contraseña">

                                                                                </div>
                                                                            </div>

                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="email">Id Secretaria</label>
                                                                                    <input type="number" class="form-control" id="id_secretaria" name="id_secretaria" placeholder="Ingresa el id de la secretaria" required>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <hr class="style-one">

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label class="form-check-label" for="check">Admin</label>
                                                                                    <input type="text" class="form-control" name="admin" id="privilegios" pattern="[0-1]" maxlength="1" placeholder="0 ó 1" required>
                                                                                    <!-- value="0" clic a checkbox asignas valor 0-->
                                                                                    <small id="helpCheckAdmin" class="form-text text-muted">Agrega '0' para usuario normal.</small>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label class="form-check-label" for="check">Teléfono ó ext.</label>
                                                                                    <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="style-one">


                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label class="form-check-label">Dependencia | Departamento</label>
                                                                                    <input type="text" class="form-control" name="dependencia" id="dependencia" placeholder="Ingresa dependencia, departamento o area de trabajo" required>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="style-one">
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-check-label" for="check">Es secretaria?</label>
                                                                                    <input type="text" class="form-control" name="is_secretaria" id="is_secretaria" pattern="[0-1]" maxlength="1" required>
                                                                                    <small id="helpCheckAdmin" class="form-text text-muted">Agrega '1' para afirmativo.</small>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <hr class="style-one">
                                                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                                                        <button type="button" class="btn btn-danger"><a href="editarUsuario.php">Regresar</a></button>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div id="accordion-fluid">
                    <div class="card" style="background: rgba(0,0,0,0.3)">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Ver usuarios creados
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body ">
                                <div id="tablaAgregar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


    <!-- funcion llamar tablas-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaAgregar').load('tablas/tablaAgregar.php');

        });
    </script>

</body>

</html>