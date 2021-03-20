<?php
  require '../function/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $categorias = getCategoriasPorUser();
  $formatos = getFormatosPorUser();
// desconectar();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver formatos Excel |
        <?= $_SESSION['usuario'] ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link href="../css/mainAdmin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" href="../css/imgExcel.css">
    <!--favicon-->
    <link rel="icon" href="../img/icon.ico" type="image/x-icon">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">



</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'menu-superior.php';
        ?>
        <main role="main" class="inner cover">

            <p class="lead" id="text">Panel: formatos Excel </p>
            <hr class="style-one">

            <center>

                <div id="accordion-fluid">
                    <div class="card" style="background: rgba(0,0,0,0.3)">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ver todos los formatos de actividades Excel
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">

                                <div id="tablaVerExcelTodo"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </center>
        </main>



        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="lead">Realizado: Innovación Tecnológica 2018 - 2021 <a href="https://getbootstrap.com/">SACH</a>, by <a href="https://twitter.com/mdo">#4411</a>.</p>
            </div>
        </footer>
    </div>

    <?php
    include '../function/script.php';
    ?>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>

    <!-- funcion llamar tabla-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaVerExcelTodo').load('tablas/tablaVerExcelTodo.php');
        });

    </script>
</body>

</html>
