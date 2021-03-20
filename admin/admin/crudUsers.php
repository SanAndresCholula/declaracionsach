<?php
require 'head.php';
?>
<title>CRUD Usuarios | <?php echo $_SESSION['username'] ?></title>
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("admin");
        if (check.checked) {
            element.style.display = 'none';
        } else {
            element.style.display = 'block';
        }
    }
</script>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.0/css/bootstrap4-toggle.min.css" rel="stylesheet">

<body class="hold-transition sidebar-mini sidebar-collapse hidden">
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
        <!-- Navbar -->
        <?php
        require 'nav.php';
        require 'aside.php';
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="text-black">CRUD Usuarios</h1>
                        </div>
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">CRUD Usuarios</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <section class="col-lg-12 connectedSortable">
                            <!-- Map card -->
                            <div class="card collapsed-card">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-table mr-1"></i>
                                        Tabla Usuarios en existencia
                                    </h3>
                                    <!-- card tools -->
                                    <div class="card-tools">
                                        <?php if ($fila[13]  == 0 and $fila[14] == 0) echo 'No tienes privilegio para ver esta tabla <i class="fas fa-ban"></i>';
                                        else echo ' <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>'; ?>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" style="background-color: #EAE8E8;">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="card-title">Usuarios agregados</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $query = "Call VerUsuarios";
                                                        $resultado = mysqli_query($conexion, $query);
                                                        desconectar();
                                                        ?>
                                                        <div class="card-body">

                                                            <table id="<?php if ($fila[27]  == 1) echo 'example';
                                                                        else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Id</td>
                                                                        <td><b>Nombre completo</b></td>
                                                                        <td><b>Email</b></td>
                                                                        <td>Password</td>
                                                                        <td>Teléfono</td>
                                                                        <td>Fecha Alta</td>
                                                                        <td>Admin</td>
                                                                        <td><b>Capturado por</b></td>
                                                                        <td>Fecha Modificación</td>
                                                                        <td>Modificado por</td>
                                                                        <td>Acciones</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    while ($row = $resultado->fetch_assoc()) { ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $row['id_user']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['username']; ?>
                                                                            </td>

                                                                            <td>
                                                                                <?php echo $row['email']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['password'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['phone'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['date'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['admin'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['creadoX'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['fecha_modificado'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['modificadoX'] ?>
                                                                            </td>
                                                                            <td>

                                                                                <a style="display: inline;" href="mod_user.php?id=<?php echo $row['id_user']; ?>" title="Editar usuario" onclick="deshabilitar(this)" id="<?php if ($fila[13]  == 0) echo 'accion';
                                                                                else echo ''; ?>"><i class="fas fa-edit fa-2x"></i></a>

                                                                                <a style="display: inline;" href="deleteUser.php?id=<?php echo $row['id_user']; ?>" title="Eliminar usuario" onclick="return ConfirmDelete()" id="<?php if ($fila[14]  == 0) echo 'accion';
                                                                                else echo ''; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="card collapsed-card">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-user-plus mr-1"></i>
                                        Agregar usuarios
                                    </h3>
                                    <div class="card-tools">
                                        <?php if ($fila[12]  == 0) echo 'No tienes privilegio para ver esta tabla <i class="fas fa-ban"></i>';
                                        else echo ' <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>'; ?>
                                    </div>
                                </div>
                                <div class="card-body" style="background-color: #EAE8E8;">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <!-- left column -->
                                                <div class="col-lg-12 ">
                                                    <!-- general form elements -->
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title"><?php echo $_SESSION['username'] ?></h3>
                                                        </div>
                                                        <!-- form start -->
                                                        <form id="test_upload" name="test_upload" action="addUsers.php" method="post">
                                                            <div class="card-body">
                                                                <input type="hidden" name="creadoX" value="<?= $_SESSION['username'] ?>">
                                                                <div class="row justify-content-md-center">
                                                                    <div class="col-12">
                                                                        <h4 class="text-center">Datos del usuario </h4>
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Usuario nombre completo</label>
                                                                            <?php foreach ($rol as $fila) : ?>

                                                                                <input type="text" name="username" id="username" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" required placeholder="Ingresa el nombre completo del usuario" <?php if ($fila[12]  == 0) echo 'disabled readonly';
                                                                                                                                                                                                                                                                                        else echo ''; ?>>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Email</label>
                                                                            <input type="email" name="email" id="email" class="form-control input-sm" required placeholder="Ingresa un correo valido" <?php if ($fila[12]  == 0) echo 'disabled readonly';
                                                                            else echo ''; ?>>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Password</label>
                                                                            <input type="text" name="password" id="pasword" class="form-control input-sm" required placeholder="Ingresa una contraseña segura" <?php if ($fila[12]  == 0) echo 'disabled readonly';
                                                                            else echo ''; ?>>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="form-group text-black">
                                                                            <label for="exampleInputEmail1">Phone</label>
                                                                            <input type="text" name="phone" id="phone" class="form-control input-sm" required placeholder="Ingresa el teléfono del usuario" <?php if ($fila[12]  == 0) echo 'disabled readonly';
                                                                            else echo ''; ?>>
                                                                        </div>
                                                                    </div>
                                                                    <br>

                                                                    <div class="col-12 ">
                                                                        <hr>
                                                                        <h4 class="text-center">Asignar rol a usuario</h4>
                                                                        <table class="table table-striped table-responsive table-hover">
                                                                            <thead style="background: #007bff; color:white">
                                                                                <tr>
                                                                                    <th scope="col"></th>
                                                                                    <th scope="col">Asigar rol</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><label for="stackedCheck1" class="form-check-label"> Seleccionar el rol para el nuevo usuario</label></td>
                                                                                    <td><input type="checkbox" data-toggle="toggle" data-on="Administrador" data-off="Usuario" data-width="200" data-onstyle="success" data-offstyle="danger" name="admin" id="admin" value="1" checked <?php if ($fila[12]  == 0) echo 'disabled readonly';
                                                                                                                                                                                                                                                                                        else echo ''; ?>onchange="javascript:showContent()" /></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-12" id="content" style="display: none;">
                                                                        <h4 class="text-center">Asignar permisos a usuario</h4>
                                                                        <table class="table table-striped table-responsive">
                                                                            <thead style="background: #007bff; color:white">
                                                                                <tr>
                                                                                    <th scope="col">Modulos</th>
                                                                                    <th scope="col">Agregar</th>
                                                                                    <th scope="col">Editar</th>
                                                                                    <th scope="col">Borrar</th>
                                                                                    <th scope="col">Descargar</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="modulo_usuarios" id="modulo_usuarios" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="modulo_usuarios" class="form-check-label"><strong>CRUD Usuarios</strong></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_usuarios_a" id="p_usuarios_a" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_usuarios_a" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_usuarios_e" id="p_usuarios_e" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_usuarios_e" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_usuarios_d" id="p_usuarios_d" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_usuarios_d" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_users" id="p_des_db_users" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_des_db_users" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_db_benef" id="modulo_db_benef" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="modulo_db_benef" class="form-check-label">Ver base de datos <strong> beneficiarios</strong></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_benef_a" id="p_bd_benef_a" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_bd_benef_a" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_benef_e" id="p_bd_benef_e" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_bd_benef_e" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_benef_d" id="p_bd_benef_d" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_bd_benef_d" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_benef" id="p_des_db_benef" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_des_db_benef" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_db_apoyos" id="modulo_db_apoyos">
                                                                                            <label for="modulo_db_apoyos" class="form-check-label">Ver base de datos <strong> Apoyos</strong></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_apoyos_a" id="p_bd_apoyos_a" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_bd_apoyos_a" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_apoyos_e" id="p_bd_apoyos_e" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_bd_apoyos_e" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_apoyos_d" id="p_bd_apoyos_d" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_bd_apoyos_d" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_apoyos" id="p_des_db_apoyos" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_des_db_apoyos" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_programasymas" id="modulo_programasymas">
                                                                                            <label for="modulo_programasymas" class="form-check-label">Programas y mas</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_programas_a" id="p_programas_a" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_programas_a" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_programas_e" id="p_programas_e" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_programas_e" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_programas_d" id="p_programas_d" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_programas_d" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_programas" id="p_des_db_programas" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_des_db_programas" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_catalogo_seccional" id="modulo_catalogo_seccional">
                                                                                            <label for="modulo_catalogo_seccional" class="form-check-label">Catalogo seccional</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_cat_seccional_a" id="p_cat_seccional_a" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_cat_seccional_a" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_cat_seccional_e" id="p_cat_seccional_e" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_cat_seccional_e" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_cat_seccional_d" id="p_cat_seccional_d" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_cat_seccional_d" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_cat_sec" id="p_des_db_cat_sec" data-onstyle="success" data-offstyle="danger">
                                                                                            <label for="p_des_db_cat_sec" class="form-check-label"> Permiso</label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check pl-0">
                                                                                            <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_capt_benef" id="modulo_capt_benef">
                                                                                            <label for="modulo_capt_benef" class="form-check-label"><strong>Formulario de captura</strong></label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">

                                                                    <?php if ($fila[12]  == 1) echo '<button type="submit" name="submit" class="btn btn-primary"  data-toggle="tooltip" title="Acceso habilitado" ><i class="fas fa-plus"></i> Crear usuario</button>';
                                                                                else echo ''; ?>
                                                                    <a href="crudUsers.php" class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
                                                                <?php endforeach ?>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <?php
        include 'footer.php';
        ?>
    </div>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/popper/popper.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/datatables.min.js"></script>

    <!-- para usar botones en datatables JS -->
    <script src="../plugins/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../plugins/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../plugins/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/main.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>
    <!-- js toogle swicth -->
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.0/js/bootstrap4-toggle.min.js"></script>

</body>

</html>