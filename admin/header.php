<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<nav class="navbar navbar-expand-lg ">
    <img class="imgLogo" src="../img/logo.png" alt="Logo san andres cholula" style="  margin-right: 100px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#fff">
        <span class="navbar-toggler-icon"><i class="fas fa-align-justify"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link active" href="../php/panelUsuario.php">Home |</a>
            </li>
            <li class="nav-item">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach($categorias as $fila ): ?>
                    <a class="nav-link" href="../php/categorias/<?=$fila[2] ?>">
                        <?= $fila[0] ?>
                    </a>

                    <!--                    <?= $fila[1] ?>-->
                    <?php endforeach ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="formato excel, da clic para ir">
                    Formatos excel
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" title="Desplegar categorias">
                    <?php foreach($formatos as $fila ): ?>
                    <a class="nav-link" href="<?= $fila[0]?>" target="_blank" title="ir al formato">
                        <?= $fila[1] ?>
                    </a>

                    <!--                    <?= $fila[1] ?>-->
                    <?php endforeach ?>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../php/categorias/reportes.php">Mis reportes |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="enviarArchivos.php">Enviar |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/categorias/recibidos.php">Recibidos |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../function/cerrar-sesion.php">Cerrar sesión |</a>
            </li>
            <img src="env" alt="">

            <!--  <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>-->
        </ul>

    </div>
</nav>
