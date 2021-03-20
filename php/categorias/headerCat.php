<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="../../css/disabledMenu.css">
<style>
    .navbar-nav li:hover>ul.dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
    }

    .dropdown-menu {
        background-color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    }

    /* rotate caret on hover */
    .dropdown-menu>li>a:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
    }

    #bloquear {
        pointer-events: none;
        background-color: white;
        color: black;
        cursor: not-allowed;
        opacity: 0.5;
    }
</style>
<nav class="navbar navbar-expand-lg ">
    <img class="imgLogo" src="../../img/logo.png" alt="Logo san andres cholula" style="  margin-right: 100px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#fff">
        <span class="navbar-toggler-icon"><i class="fas fa-align-justify"></i></span>
    </button>

    <?php
    $consulta = "SELECT * FROM menu";
    $query = mysqli_query($conexion, $consulta);

    while ($row = $query->fetch_assoc()) {

    ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="../panelUsuario.php">Home |</a>
                </li>
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $row['categorias']; ?>" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categorias </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Categorias</a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($categorias as $fila) :
                                    if ($row['categorias'] === 'Habilitado') {
                                ?>
                                        <li><a class="dropdown-item" href="../categorias/<?= $fila[2] ?>"><?= $fila[0] ?></a></li>
                                    <?php } else { ?>
                                        <li><a class="dropdown-item disabled" id="bloquear" href="../categorias/<?= $fila[2] ?>"><?= '-> Deshabilitado <-' ?></a></li>
                                <?php }
                                endforeach ?>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $row['formatos']; ?>" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Formatos </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Formatos Excel</a>
                            <ul class="dropdown-menu">

                                <?php foreach ($formatos as $fila) :
                                    if ($row['formatos'] === 'Habilitado') {
                                ?>
                                        <li><a class="dropdown-item" href="<?= $fila[0] ?>" target="_blank" title="ir al formato">
                                                Formato excel: <?= $fila[1] ?></a></li>
                                    <?php } else { ?>
                                        <li><a class="dropdown-item disabled" id="bloquear" href="<?= $fila[0] ?>" target="_blank">
                                                Formato excel: <?= ' -> Deshabilitado <-' ?></a></li>
                                <?php }
                                endforeach ?>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $row['coin']; ?>" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> COIN </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Formatos Coin</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($coin as $fila) :
                                    if ($row['coin'] === 'Habilitado') {
                                ?>
                                        <li><a class="dropdown-item" href="<?= $fila[0] ?>" target="_blank" title="ir al formato">
                                                <?= $fila[1] ?></a></li>
                                    <?php } else { ?>
                                        <li><a class="dropdown-item disabled" id="bloquear" href="<?= $fila[0] ?>" target="_blank">
                                                <?= ' -> Deshabilitado <-' ?></a></li>
                                <?php }
                                endforeach ?>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="../../function/cerrar-sesion.php">Cerrar sesión |</a>
                </li>

                <!--<li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
</li>-->
            <?php
        }
            ?>
            </ul>

        </div>
</nav>