<?php
require '../../function/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}

conectar();
$categorias = getCategoriasPorUser();
$formatos = getFormatosPorUser();
$coin = getCoinPorUser();
$calendar = getCalendarPorUser();
?>

<!doctype html>
<html lang="es">

<head>
    <?php
    include '../meta.php';
    ?>
    <title>Captura de reportes |
        <?= $_SESSION['usuario'] ?>
    </title>

    <link rel="icon" href="../../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/tablas.css">
    <link rel="stylesheet" href="../../css/imgExcel.css">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!--help-->
    <script type="text/jscript" src="../../js/help.js"></script>

    <!-- Custom styles for this template -->
    <link href="../../css/cover.css" rel="stylesheet">

</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'headerCat.php';
        ?>

        <main role="main" class="inner cover">

            <!-- body -->
            <div class="container_fluid">
                <div class="row  justify-content-md-center">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <h3 class="panel-title">Ingresa a tu tablero de control</h3>
                        <hr class="style-one">
                    </div>
                </div>
            </div>

            <?php
                    $consulta = "SELECT * FROM menu ";
                    $query = mysqli_query($conexion, $consulta);

                    while($row=$query->fetch_assoc()){
                    ?>
            <div id="accordion-fluid">
                <div class="card" style="background: rgba(0,0,0,0.3)">
                    <div class="card-header" id="heading4">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" <?php echo $row[ 'botones'] ?>><a href="dash/index.php" <?php echo $row[ 'botones'] ?> ><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a>
                            </button>
                            <?php
                            }
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

        </main>
        <?php
        include '../categorias/new.php';
        include '../../function/footer.php';
        ?>

    </div>
    <?php
    include '../../function/script.php';
    ?>
    <img src="tablas/tablaFormatosExcelTodo.php" alt="">
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/jquery.min.js"></script>

    <!-- funcion llamar tablas -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaEnviadosTodo').load('tablas/tablaEnviadosTodo.php');
            $('#TablaRecibidosTodo').load('tablas/tablaRecibidosTodo.php');
            $('#tablaFormatosExcelTodo').load('tablas/tablaFormatosExcelTodo.php');

        });
       </script>
<script type="text/javascript">
(function($){
$('a').click(function()
    {
         return ($(this).attr('disabled')) ? false : true;
    });
})(jQuery);

</script>
</body>

</html>