<?php
require 'head.php';
?>
<link rel="stylesheet" href="../css/dash.css">
<title>Dasboard: <?php echo $_SESSION['username'] ?></title>
<!-- rotar icono -->
<style>
    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes rotate {
        from {
            -webkit-transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
        }
    }

    .imgr {
        -webkit-animation: 3s rotate linear infinite;
        animation: 3s rotate linear infinite;
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    #imgr2 {
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed hidden">
    <div class="centrado" id="onload">
        <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="wrapper">
        <?php
        require 'nav.php';
        require 'aside.php';
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <h1 class="m-0 text-white">Bienvenido: <b><?php echo $_SESSION['username'] ?></b></h1>
                        </div>
                        <div class="col-sm-2">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- ./col -->
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php $count_benef = mysqli_query($conexion, "SELECT id_benef FROM beneficiario"); ?>
                                    <div class="inner">
                                        <h3><?php echo mysqli_num_rows($count_benef); ?></h3>
                                        <p><strong>Beneficiarios</strong> totales</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-contacts"></i>
                                </div>
                                <a href="db_benef.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php $count_apoyos = mysqli_query($conexion, "SELECT title FROM events"); ?>
                                    <div class="inner">
                                        <h3><?php echo mysqli_num_rows($count_apoyos); ?></h3>
                                        <p><strong>Apoyos</strong> totales</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="db_apoyos.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php $count_users = mysqli_query($conexion, "SELECT username FROM users WHERE username <> 'superadministrador' "); ?>
                                    <div class="inner">
                                        <h3><?php echo mysqli_num_rows($count_users); ?></h3>
                                        <p> <strong>Usuarios</strong> registrados</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="crudUsers.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <div class="card collapsed-card">
                        <div class="card-header border-0" style="background: #007bff; color:white">
                            <h3 class="card-title">
                                <img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"><strong> Perfil del usuario (despliega)</strong>
                            </h3>
                            <!-- card tools -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Despliega">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="background-color: #EAE8E8;">
                            <section class="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-info">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h3 class="card-title">Editar perfil</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="image view view-first">
                                                                <img class="thumb-image" style="width: 100%; display: block;" src="../profiles/<?php echo $image ?>" alt=" image">
                                                            </div>
                                                            <span class="btn btn-my-button btn-file" style="width: 345px; margin-top: 5px;">
                                                                <form method="post" id="formulario" enctype="multipart/form-data" class="m-0 text-black">
                                                                    Cambiar Imagen de perfil: <small>recomendada 250x250</small> <input type="file" name="file" class="btn btn-default">
                                                                </form>
                                                            </span>
                                                            <div id="respuesta"></div>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-6">
                                                            <!-- <div id="result"></div> -->
                                                            <div class="box box-primary">
                                                                <!-- general form elements -->
                                                                <div class="box-header with-border">
                                                                    <h3 class="box-title text-black">Datos Personales: </h3>
                                                                </div>
                                                                <!-- /.box-header -->
                                                                <form role="form" method="post" action="updateUser.php">
                                                                    <div class="box-body text-black">
                                                                        <div class="form-group ">
                                                                            <label for="fullname">Nombre Completo</label>
                                                                            <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $fullname ?>" onfocus="this.blur" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Correo Electrónico</label>
                                                                            <input name="email" type="email" class="form-control" id="email" value="<?php echo $email ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="telefono">Teléfono</label>
                                                                            <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $phone ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password">Contraseña Actual</label>
                                                                            <input name="password" type="password" class="form-control" id="password" placeholder="*******">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="new_password">Nueva Contraseña</label>
                                                                            <input name="new_password" type="password" class="form-control" placeholder="*******" id="new_password">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="confirm_new_password">Confirmar Nueva Contraseña</label>
                                                                            <input name="confirm_new_password" type="password" class="form-control" placeholder="*******" id="confirm_new_password">
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.box-body -->
                                                                    <div class="box-footer">
                                                                        <button name="token" type="submit" class="btn btn-success">Actualizar Datos</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="<?php if ($fila[7] == 0) echo 'card collapsed-card';
                                else echo 'card' ?> "">
                        <div class=" card-header border-0" style="background: #007bff; color:white">
                        <h3 class="card-title">
                            <i class="fas fa-search mr-1"></i>
                            Lector de código de beneficiarios
                        </h3>
                        <div class="card-tools">
                            <?php if ($fila[7]  == 0) echo 'No tienes privilegio para ver esta tabla <i class="fas fa-ban"></i>';
                            else echo ' <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>'; ?>
                        </div>
                    </div>
                    <div class="card-body" style="background-color: #EAE8E8;">
                        <section class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3 class="card-title">Ver datos del beneficiario escaneado </h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body" style="background-color: #EAE8E8;">
                                                <section class="content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card card-info">
                                                                    <div class="card-header">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h3 class="card-title"><i class="fa fa-barcode" aria-hidden="true"></i> Scanner de códigos de barras para busqueda de los beneficiarios</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-12">
                                                                                <center>
                                                                                    <marquee behavior="alternate" width=80% direction="right">
                                                                                        <font face=arial color=black size=5>&#9660;¡Ingresa el codigo de barras aqui!&#9660;</font>
                                                                                    </marquee>
                                                                                </center>
                                                                                <ul class="list-group">
                                                                                    <li class="list-group-item">
                                                                                        <form method="post">
                                                                                            <div class="form-row align-items-center">
                                                                                                <div class="input-group mb-3">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                                                                                    </div>
                                                                                                    <input autofocus name="PalabraClave" type="text" class="form-control" style="text-transform:uppercase;" width="80%" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search-plus" aria-hidden="true"></i> Buscar Ahora</button>
                                                                                                    <a href="dash.php" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </li>
                                                                                </ul>
                                                                                <?php
                                                                                if (!empty($_POST)) {
                                                                                    $aKeyword = explode(" ", $_POST['PalabraClave']);
                                                                                    $query = "SELECT * FROM beneficiario WHERE id_benef like '%" . $aKeyword[0] . "%'  OR a_materno like '%" . $aKeyword[0] . "%' OR a_paterno like '%" . $aKeyword[0] . "%' OR nombres like '%" . $aKeyword[0] . "%'  OR barcode1 like '%" . $aKeyword[0] . "%'  OR imgbenef like '%" . $aKeyword[0] . "%'";

                                                                                    for ($i = 1; $i < count($aKeyword); $i++) {
                                                                                        if (!empty($aKeyword[$i])) {
                                                                                            $query .= " OR a_materno like '%" . $aKeyword[$i] . "%'";
                                                                                        }
                                                                                    }

                                                                                    $result = $conexion->query($query);
                                                                                    echo "<br>Has buscado la palabra clave:<b> " . $_POST['PalabraClave'] . "</b>";

                                                                                    if (mysqli_num_rows($result) > 0) {
                                                                                        $row_count = 0;
                                                                                        echo "<br><br>Resultados encontrados: ";
                                                                                        echo "<div class='table-responsive'>";
                                                                                        echo "<br><table class='table table-striped'>";
                                                                                        echo "<tr>
                                                                                                <th>#</th>
                                                                                                <th>Id</th>
                                                                                                <th>Paterno</th>
                                                                                                <th>Materno</th>
                                                                                                <th>Nombre(S)</th>
                                                                                                <th>Foto</th>
                                                                                                <th>Código generado</th>
                                                                                                <th>Tarjeta</th>
                                                                                                <th>Generar</th>";
                                                                                        while ($row = $result->fetch_assoc()) {
                                                                                            $row_count++;
                                                                                            desconectar();
                                                                                ?>
                                                                                            <tr>
                                                                                                <td class="text-center"><?php echo $row_count ?> </td>
                                                                                                <td class="text-center"><?php echo $id_bc =  $row['id_benef'] ?></td>
                                                                                                <td class="text-center"><?php echo $row['a_paterno'] ?></td>
                                                                                                <td class="text-center"><?php echo $row['a_materno'] ?></td>
                                                                                                <td class="text-center"><?php echo $row['nombres'] ?></td>
                                                                                                <td class="text-center"><?php $imagen = $row['imgbenef'] ?><img alt="Perfil de beneficiario" class="img-thumbnail" style="width: 3em; height:auto" src="../imgBenef/<?php echo $imagen ?>"></td>
                                                                                                <td class="text-center"><?php echo $row['barcode1'] ?></td>
                                                                                                <td class="text-center"><a href="card.php?id=<?php echo $row['id_benef']; ?>"><i class='fas fa-id-card fa-2x imgr'></i></a></td>
                                                                                                <td class="text-center">
                                                                                                    <a href="generarcode.php?id=<?php echo $row['id_benef'] ?>"><i class='fas fa-barcode fa-2x'></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                <?php
                                                                                        }
                                                                                        echo "</table>";
                                                                                        echo "</div)";
                                                                                    } else {
                                                                                        echo "<br>Resultados encontrados: Ninguno";
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <?php
    include 'footer.php';
    ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>

</body>

</html>