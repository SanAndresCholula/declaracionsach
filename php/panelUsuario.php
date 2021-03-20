<?php

require '../function/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../index.php');
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
    include 'meta.php';
    ?>
    <title>Reportes H. Ayuntamiento SACH |
        <?= $_SESSION['usuario'] ?>
    </title>
    <link rel="icon" href="../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--    profile-->
    <link rel="stylesheet" href="../css/profile.css">
    <!--help-->
    <script type="text/jscript" src="../js/help.js"></script>
    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">1

</head>
<!-- =========================
    //////////////Esta pagina fue desarrollada por el Departamento//////////////////////
    ////////////////////de Innovacion Tecnologica SACH 2018 - 2021///////////////////
    /////////////////////////by ISC Jose Uriel Guerra Trinidad======================-->

<body class="text-center" oncontextmenu="return false">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'header.php';
        ?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Bienvenido
                <?= $_SESSION['usuario'] ?>. </h1>
            <!--Imagen de perfil-->
            <?php
            $insert = "SELECT * FROM usuarios WHERE usuario='" . $_SESSION['usuario'] . "'";
            $result = mysqli_query($conexion, $insert);

            while ($ver = mysqli_fetch_row($result)) {


            ?>
                <div class="containerProfile">
                    <div class="cardProfile">
                        <img class="center" id="perfil" src="categorias/dash/images/profiles/<?php echo $ver[7] ?>" alt="Card image cap">
                    <?php
                }
                    ?>
                    <!--  <div class="card-body" style="background:#000;opacity: 0.7;">
      <div class="card-title">
          <?= $_SESSION['usuario'] ?>
      </div>

  </div>-->
                    </div>
                </div>
                <br><br>
                <p class="lead">Plataforma <b>Control de Reporte Digital SACH</b>, le permite gestionar su contenido, compartirlo y acceder a él de manera segura desde cualquier lugar.</p>
        </main>

        <div class="row justify-content-center">
            <?php foreach ($categorias as $fila) : ?>

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btngroup text-center mr-2" role="group" aria-label=first group>
                        <button type="button" class="btn btn-outline-warning"><a href="categorias/<?= $fila[2] ?>">
                                <?= $fila[1] ?> </a></button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="container">

        </div>
        <?php
        include 'categorias/new.php';
        require '../function/footer.php';
        ?>
    </div>

    <?php
    include '../function/script.php';
    ?>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
</body>

</html>