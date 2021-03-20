<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edición categorias</title>
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

            <p class="lead" id="text">Panel: Administración de categorias </p>

            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Agregar nueva categoria
                            </button>
                        </h5>
                    </div>

                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
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
                                                                <input type="text" class="form-control" id="categoria" name="categoria" aria-describedby="emailHelp" placeholder="Ingresa nombre de Categoria" required>

                                                                <small id="helpUsuario" class="form-text text-muted">Este texto aparecera en el menú</small>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="descripcion">Descripción</label>
                                                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa una breve descrición" required>
                                                                <small id="helpUsuario" class="form-text text-muteform-text text-mutedd">Este texto aparecera en el boton</small>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="ruta">Ruta</label>
                                                                <input type="text" class="form-control" id="ruta" name="ruta" placeholder="Ingresa la ruta dentro de la carpeta categorias" required>
                                                                <small id="helpUsuario" class="">Ingresa con numero de orden jerárquico y terminanción .php</small>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="ruta">Tipo de Categoría</label>
                                                                <select class="form-control" id="admin" name="admin">
                                                                    <option>Normal.php</option>
                                                                    <option>Admin.php</option>
                                                                </select>
                                                            </div>

                                                            <!--boton guardar -->
                                                            <button type="submit" class="btn btn-success">Guardar</button>
                                                            <button type="button" class="btn btn-danger"><a href="categorias.php">Regresar</a></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                Ver categorias creadas
                            </button>
                        </h5>
                    </div>

                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">
                                                <div id="tablaCatCreadas"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="style-one">
            <p class="lead" id="text">Panel: Administración de formatos excel </p>

            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                Nube OneDrive
                            </button>
                        </h5>
                    </div>

                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">
                                                <blockquote class="embedly-card" data-card-controls="0">
                                                    <h4><a href="https://onedrive.live.com/about/en-us/signin/">Nube OneDrive</a></h4>
                                                    <p>soporteit@sach.gob.mx | S4n4ndr3s*</p>
                                                </blockquote>
                                                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading4">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                Agregar URL formatos excel
                            </button>
                        </h5>
                    </div>

                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="card">

                                                <form action="registrarURL.php" method="post" class="formRegister" onsubmit="return validar();">
                                                    <div class="contenedorRegistro">
                                                        <div class="containerInput">

                                                            <div class="form-group">
                                                                <label for="usuario">Vinculo</label>
                                                                <input type="text" class="form-control" id="vinculo" name="vinculo" aria-describedby="emailHelp" placeholder="Ej. https://sanandrescholula-my.sharepoint.com/" required>

                                                                <small id="helpUsuario" class="form-text text-muted">Ingresa vinculo creado desde OneDrive | copia todo lo que esta dentro de las comillas</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Nombre Formato</label>
                                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del archivo" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <hr class="style-one">

                                                                <label for="clave">Clave</label>
                                                                <input type="text" class="form-control" id="clave" name="clave" placeholder="Debe ser identica a la generada en OneDrive" required>
                                                            </div>

                                                            <script>
                                                                $('input').val(""); //todos los inputs quedarán vacíos ;)
                                                            </script>

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
                        </div>
                    </div>
                </div>

            </div>

            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading5">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                Ver formatos excel creados
                            </button>
                        </h5>
                    </div>

                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">

                                                <div id="tablaFormatosCreados"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="style-one">
            <p class="lead" id="text">Panel: Adminstracion del COIN</p>
            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading6">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                Agregar URL formatos COIN
                            </button>
                        </h5>
                    </div>

                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">
                                                <form action="registrarCoin.php" method="post" class="formRegister" onsubmit="return validar();">
                                                    <div class="contenedorRegistro">
                                                        <div class="containerInput">

                                                            <div class="form-group">
                                                                <label for="usuario">Vinculo</label>
                                                                <input type="text" class="form-control" id="vinculo" name="vinculo" aria-describedby="emailHelp" placeholder="Ej. https://sanandrescholula-my.sharepoint.com/" required>

                                                                <small id="helpUsuario" class="form-text text-muted">Ingresa vinculo creado desde OneDrive | copia todo lo que esta dentro de las comillas</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Nombre Formato</label>
                                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del archivo" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <hr class="style-one">

                                                                <label for="clave">Clave</label>
                                                                <input type="text" class="form-control" id="clave" name="clave" placeholder="Debe ser identica a la generada en OneDrive">
                                                            </div>

                                                            <script>
                                                                $('input').val(""); //todos los inputs quedarán vacíos ;)
                                                            </script>

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
                        </div>
                    </div>
                </div>

            </div>
            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading7">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                Ver formatos COIN creados
                            </button>
                        </h5>
                    </div>

                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">

                                                <div id="tablaCoinCreados"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="style-one">
            <p class="lead" id="text">Panel: Adminstracion Status de calendario de actividades</p>
            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading8">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                Crear Status de calendario
                            </button>
                        </h5>
                    </div>
                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">
                                                <form action="registrarStatusCal.php" method="post" class="formRegister" onsubmit="return validar();">
                                                    <div class="contenedorRegistro">
                                                        <div class="containerInput">

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <?php
                                                                        conectar();
                                                                        $sql = "SELECT dependencia FROM usuarios WHERE dependencia <> 'categoria' ORDER BY dependencia ASC";
                                                                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                                        ?>

                                                                        <select name="dependencia" class="form-control input-sm" required>
                                                                            <option value="0">Selecciona dependencia</option>
                                                                            <?php
                                                                            while ($ver = mysqli_fetch_row($result)) :
                                                                            ?>
                                                                                <option value="<?php echo $ver[0] ?>">
                                                                                    <?php echo $ver[0] ?>
                                                                                </option>

                                                                            <?php endwhile; ?>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="usuario">Status Azul</label>
                                                                        <input type="text" class="form-control" id="azul" name="azul" aria-describedby="emailHelp" placeholder="Ingresa algun Status " required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Azul</small>
                                                                    </div>

                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Status Turquesa</label>
                                                                        <input type="text" class="form-control" id="turquesa" name="turquesa" placeholder="Ingresa algun Status" required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Turquesa</small>
                                                                    </div>
                                                                </div>
                                                                <hr class="style-one">

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="usuario">Status Verde</label>
                                                                        <input type="text" class="form-control" id="verde" name="verde" aria-describedby="emailHelp" placeholder="Ingresa algun Status " required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Verde</small>
                                                                    </div>

                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Status Amarillo</label>
                                                                        <input type="text" class="form-control" id="amarillo" name="amarillo" placeholder="Ingresa algun Status" required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Amarillo</small>
                                                                    </div>
                                                                </div>
                                                                <hr class="style-one">

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Status Naranja</label>
                                                                        <input type="text" class="form-control" id="naranja" name="naranja" placeholder="Ingresa algun Status" required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Naranja</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="usuario">Status Rojo</label>
                                                                        <input type="text" class="form-control" id="rojo" name="rojo" aria-describedby="emailHelp" placeholder="Ingresa algun Status " required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Rojo</small>
                                                                    </div>
                                                                </div>
                                                                <hr class="style-one">

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Status Negro</label>
                                                                        <input type="text" class="form-control" id="negro" name="negro" placeholder="Ingresa el nombre del archivo" required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa algun Status para este color Negro</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="usuario">ID de la Secretaría</label>
                                                                        <input type="number" class="form-control" id="id_secretaria" name="id_secretaria" aria-describedby="emailHelp" placeholder="Ingresa Id de la Secretaría" required>
                                                                        <small id="helpUsuario" class="form-text text-muted">Ingresa ID a la secretaría la cual pertenece</small>
                                                                    </div>
                                                                </div>
                                                                <hr class="style-one">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="ruta">Ruta de acceso</label>
                                                                        <select class="form-control" id="ruta" name="ruta">
                                                                            <option style="font-size: 1pt; background-color: #A4A2A2;" disabled>&nbsp;</option>
                                                                            <option>index.php</option>
                                                                            <option>Deshabilitado</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <div class="col-sm-offset-2 col-sm-10">
                                                                            <div class="checkbox">
                                                                                <label class="text-danger"><input type="checkbox" name="is_secretaria" value="1" </label>
                                                                                <small id="helpUsuario" class="form-text text-muted">Asigna el permiso para que pueda ver las direcciones a su cargo</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <script>
                                                                $('input').val(""); //todos los inputs quedarán vacíos ;)
                                                            </script>

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
                        </div>
                    </div>
                </div>
            </div>
            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading9">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                Ver status Calendarios creados
                            </button>
                        </h5>
                    </div>

                    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                        <div class="card-body">
                            <center>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="card">

                                                <div id="tablaCalendarCreados"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div


        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p style="color:#fff">Realizado: Innovación Tecnológica 2018 - 2021 <a href="">SACH</a>, by <a href="">#4411</a>.</p>
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

    <!-- funcion llamar tablas -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaCatCreadas').load('tablas/tablaCatCreadas.php');
            $('#tablaFormatosCreados').load('tablas/tablaFormatosCreados.php');
            $('#tablaCoinCreados').load('tablas/tablaCoinCreados.php');
            $('#tablaCalendarCreados').load('tablas/tablaCalendarCreados.php');
        });
    </script>

</body>

</html>