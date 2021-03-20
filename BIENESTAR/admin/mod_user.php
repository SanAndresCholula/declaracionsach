<?php
require 'head.php';
?>
<title>Modificar Usuarios | <?php echo $_SESSION['username'] ?></title>
<!-- css toogle swicth -->
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="text-black">Modificar usuario</h1>
                        </div>
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="crudUsers.php">CRUD usuarios</a></li>
                                <li class="breadcrumb-item active">Modificar usuario</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 ">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $_SESSION['username'] ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <?php

                                $id = $_GET['id'];
                                $query = "SELECT 
                                 U.id_user, U.username, U.email, U.password, U.phone, U.admin,
 M.crud_usuarios, M.db_benef, M.capt_benef, M.db_apoyos, M.programas, M.catalogo_seccional,
 P_a.p_usuarios_a, P_a.p_usuarios_e, P_a.p_usuarios_d, P_a.p_bd_benef_a, P_a.p_bd_benef_e, P_a.p_bd_benef_d, P_a.p_bd_apoyos_a, P_a.p_bd_apoyos_e, P_a.p_bd_apoyos_d, P_a.p_programas_a, P_a.p_programas_e, P_a.p_programas_d, P_a.p_cat_seccional_a, P_a.p_cat_seccional_e, P_a.p_cat_seccional_d, p_des_db_users, p_des_db_benef, p_des_db_apoyos, p_des_db_programas, p_des_db_cat_sec
                                
                                FROM users U 
                                INNER JOIN permiso_user_modulo P_u ON U.id_permiso_user_modulo1 = P_u.id_permiso_user_modulo 
                                INNER JOIN modulos M ON P_u.id_modulo1 = M.id_modulo
                                INNER JOIN permisos_acciones P_a ON P_u.id_per_acc1 = P_a.id_per_acc 
                                WHERE id_user = $id";
                                $resultado = mysqli_query($conexion, $query);
                                $row = $resultado->fetch_assoc();
                                ?>
                                <form id="test_upload" name="test_upload" action="actionModUsers.php" method="post">
                                    <div class="card-body">
                                        <input type="hidden" name="modificadoX" value="<?= $_SESSION['username'] ?>">
                                        <input type="hidden" name="id_user" value="<?php echo $id ?>">
                                        <div class="row justify-content-md-center">
                                            <div class="col-12">
                                                <h4 class="text-center">Datos del usuario </h4>
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Usuario nombre completo</label>
                                                    <input type="text" name="username" id="username" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" required value="<?php echo $row['username'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control input-sm" required value="<?php echo $row['email'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="text" name="password" id="pasword" class="form-control input-sm" required value="<?php echo $row['password'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group text-black">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                    <input type="text" name="phone" id="phone" class="form-control input-sm" value="<?php echo $row['phone'] ?>">
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
                                                            <td><input type="checkbox" data-toggle="toggle" data-on="Administrador" data-off="Usuario" data-width="200" data-onstyle="success" data-offstyle="danger" name="admin" id="admin" value="1" <?php if ($row['admin'] == 1) echo 'checked';
                                                                                                                                                                                                                                                        else echo ''; ?>></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <h4 class="text-center">Asignar permisos a usuario</h4>
                                                <table class="table table-striped table-responsive">
                                                    <thead style="background: #007bff; color:white">
                                                        <tr>
                                                            <th scope="col"> Modulos</th>
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
                                                                    <input value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="modulo_usuarios" id="modulo_usuarios" data-onstyle="success" data-offstyle="danger" <?php if ($row['crud_usuarios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="modulo_usuarios" class="form-check-label"><strong>CRUD Usuarios</strong></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_usuarios_a" id="p_usuarios_a" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_usuarios_a'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_usuarios_a" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_usuarios_e" id="p_usuarios_e" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_usuarios_e'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_usuarios_e" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_usuarios_d" id="p_usuarios_d" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_usuarios_d'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_usuarios_d" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_users" id="p_des_db_users" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_des_db_users'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                else echo ''; ?>>
                                                                    <label for="p_des_db_users" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_db_benef" id="modulo_db_benef" data-onstyle="success" data-offstyle="danger" <?php if ($row['db_benef'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>>
                                                                    <label for="modulo_db_benef" class="form-check-label">Ver base de datos <strong> beneficiarios</strong></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_benef_a" id="p_bd_benef_a" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_bd_benef_a'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_bd_benef_a" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_benef_e" id="p_bd_benef_e" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_bd_benef_e'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_bd_benef_e" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_benef_d" id="p_bd_benef_d" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_bd_benef_d'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_bd_benef_d" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_benef" id="p_des_db_benef" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_des_db_benef'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                else echo ''; ?>>
                                                                    <label for="p_des_db_benef" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_db_apoyos" id="modulo_db_apoyos" <?php if ($row['db_apoyos'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="modulo_db_apoyos" class="form-check-label">Ver base de datos <strong> Apoyos</strong></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_apoyos_a" id="p_bd_apoyos_a" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_bd_apoyos_a'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_bd_apoyos_a" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_apoyos_e" id="p_bd_apoyos_e" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_bd_apoyos_e'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_bd_apoyos_e" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_bd_apoyos_d" id="p_bd_apoyos_d" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_bd_apoyos_d'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_bd_apoyos_d" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_apoyos" id="p_des_db_apoyos" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_des_db_apoyos'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                else echo ''; ?>>
                                                                    <label for="p_des_db_apoyos" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_programasymas" id="modulo_programasymas" <?php if ($row['programas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="modulo_programasymas" class="form-check-label">Programas y mas</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_programas_a" id="p_programas_a" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_programas_a'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_programas_a" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_programas_e" id="p_programas_e" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_programas_e'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_programas_e" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_programas_d" id="p_programas_d" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_programas_d'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                            else echo ''; ?>>
                                                                    <label for="p_programas_d" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_programas" id="p_des_db_programas" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_des_db_programas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                        else echo ''; ?>>
                                                                    <label for="p_des_db_programas" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_catalogo_seccional" id="modulo_catalogo_seccional" <?php if ($row['catalogo_seccional'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="modulo_catalogo_seccional" class="form-check-label">Catalogo seccional</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_cat_seccional_a" id="p_cat_seccional_a" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_cat_seccional_a'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="p_cat_seccional_a" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_cat_seccional_e" id="p_cat_seccional_e" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_cat_seccional_e'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="p_cat_seccional_e" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_cat_seccional_d" id="p_cat_seccional_d" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_cat_seccional_d'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="p_cat_seccional_d" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" name="p_des_db_cat_sec" id="p_des_db_cat_sec" data-onstyle="success" data-offstyle="danger" <?php if ($row['p_des_db_cat_sec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="p_des_db_cat_sec" class="form-check-label"> Permiso</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check pl-0">
                                                                    <input id="stackedCheck1" value="1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="50" data-size="sm" data-onstyle="success" data-offstyle="danger" name="modulo_capt_benef" id="modulo_capt_benef" <?php if ($row['capt_benef'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>>
                                                                    <label for="modulo_capt_benef" class="form-check-label"><strong>Formulario de captura</strong></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-cogs"></i> Modificar usuario</button>
                                            <a href="crudUsers.php" class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- footer -->
        <?php
        require 'footer.php';
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>
    <!-- js toogle swicth -->
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.0/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>