<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>
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
            <h1 class="cover-heading">Bienvenido
                <?= $_SESSION['usuario'] ?>. </h1>
            <p class="lead">Plataforma para subir reportes laborales o informes de resultados.</p>

        </main>


        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="lead">Realizado: Innovación Tecnológica 2018 - 2021 <a href="">SACH</a>, by <a href="">#4411</a>.</p>
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
