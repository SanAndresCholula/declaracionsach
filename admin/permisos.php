<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edición de permisos</title>

    <?php
    include 'head.php';
    ?>
    <style>
        label {
            color: #fff
        }
    </style>
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'menu-superior.php';
        ?>
        <main role="main" class="inner cover">
            <p class="lead" id="text">Panel: asignación de categorias a usuarios registrados</p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-10 offset-md-1 main">
                            <div id="accordion-fluid">
                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Asignar categorias
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div id="tablaAsignarCat"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="lead" id="text">Panel: asignación de formatos excel a usuarios registrados</p>
                            <hr class="style-one">
                            <div id="accordion-fluid">
                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                    <div class="card-header" id="heading2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                Asignar formatos excel
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                        <div class="card-body">
                                            <div id="tablaAgregarFormatosUser"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="lead" id="text">Panel: Habilitar pestañas del menu usuarios</p>
                            <hr class="style-one">
                            <div id="accordion-fluid">
                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                    <div class="card-header" id="heading3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                Habilitar | Deshabilitar
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                        <div class="card-body">
                                            <div id="accordion-fluid">
                                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                                    <div class="card-header" id="heading4">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                                Crear arreglo
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <p class="lead">Selecciona los menús Habilitados</p>
                                                            <table class="table table-striped table-dark">
                                                                <form action="registrarMenu.php" method="post" class="formRegister" onsubmit="return validar();">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="categoria">Menú Categorias</label>
                                                                                <select class="form-control" id="categorias" name="categorias">
                                                                                    <option>Habilitado</option>
                                                                                    <option>Deshabilitado</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="formatos">Menú Formatos</label>
                                                                                <select class="form-control" id="formatos" name="formatos">
                                                                                    <option>Habilitado</option>
                                                                                    <option>Deshabilitado</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="categoria">Menú COIN</label>
                                                                                <select class="form-control" id="categorias" name="coin">
                                                                                    <option>Habilitado</option>
                                                                                    <option>Deshabilitado</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <hr class="style-one">

                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="form-group">
                                                                                <label for="botones">Botones</label>
                                                                                <select class="form-control" name="botones" id="botones">
                                                                                    <option>enabled</option>
                                                                                    <option>disabled</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary" title="Boton Deshabilitado">Registrar</button>&nbsp;
                                                                </form>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="style-one">
                                            <div id="accordion-fluid">
                                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                                    <div class="card-header" id="heading5">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                                Restricción de Menús de usuarios
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div id="tablaMenuEditar"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="lead" id="text">Panel: Asignar COIN a usuarios registrados</p>
                            <hr class="style-one">
                            <div id="accordion-fluid">
                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                    <div class="card-header" id="heading6">
                                        <h5 class="mb-0">
                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                Asignar COIN
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse6" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                        <div class="card-body">
                                            <div id="tablaAgregarCoin"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="lead" id="text">Panel: Asignar calendario a usuarios</p>
                            <hr class="style-one">
                            <div id="accordion-fluid">
                                <div class="card" style="background: rgba(0,0,0,0.3)">
                                    <div class="card-header" id="heading7">
                                        <h5 class="mb-0">
                                            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                Asignar Status de calendario
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                                        <div class="card-body">
                                            <div id="tablaAgregarCalendarStatus"></div>
                                        </div>
                                    </div>
                                </div>
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
    <img src="tablas/tablaAgregarFormatoUser.php" alt="">
    <?php
    include '../function/script.php';
    ?>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaAsignarCat').load('tablas/tablaAsignarCat.php');
            $('#tablaAgregarFormatosUser').load('tablas/tablaAgregarFormatoUser.php');
            $('#tablaHabilitarMenu').load('tablas/tablaHabilitarMenu.php');
            $('#tablaMenuEditar').load('tablas/tablaMenuEditar.php');
            $('#tablaAgregarCoin').load('tablas/tablaAgregarCoin.php');
            $('#tablaAgregarCalendarStatus').load('tablas/tablaAgregarCalendarStatus.php');
            $('#tablaAgregarCalendarUser').load('tablas/tablaAgregarCalendarUser.php');
        });
    </script>
</body>

</html>