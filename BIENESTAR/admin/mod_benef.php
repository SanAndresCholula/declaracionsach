<?php
require 'head.php';
?>
<title>Modificar Usuarios | <?php echo $_SESSION['username'] ?></title>

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
        <?php
        require 'nav.php';
        require 'aside.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-7">
                            <h1 class="text-black">Modificar beneficiario</h1>
                        </div>
                        <div class="col-sm-5">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="db_benef.php">CRUD beneficiarios</a></li>
                                <li class="breadcrumb-item active">Modificar beneficiario</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <!-- left column -->
                        <div class="col-lg-12 ">
                            <!-- general form elements -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"><b> <?php echo $fullname ?></b>
                                </div>

                                <?php
                                require '../config/query_benef.php';
                                ?>
                                <form id="form" name="test_upload" action="actionModBenef.php" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7 col-sm-12">
                                                <h4 class="justify-content-center">Nombre completo del beneficiario a modificar</h4><br>
                                            </div>
                                            <div class="col-1">
                                                <input type="hidden" name="id_benef" value="<?php echo $id ?>">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Apellido paterno</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                    </div>
                                                    <input type="text" id="a_paterno" name="a_paterno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['a_paterno'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Apellido materno</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                    </div>
                                                    <input type="text" id="a_materno" name="a_materno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['a_materno'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Nombre(s)</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" id="nombres" name="nombres" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['nombres'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="div">
                                            <h4 class="justify-content-center">Datos generales</h4><br>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Clave de elector</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                    </div>
                                                    <input type="text" id="ine" name="ine" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['ine'] ?>">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#mod_imgine" title="Ver imagen"><i class="fa fa-eye"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="mod_imgine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Imagen Clave de Elector</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-sm-6 col-lg-12">
                                                                <a href="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" download="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>"> <img src="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" style="width: 400px; height: 264px;" alt="Sin agregar INE" title="Descargar con clic"></a>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            $sql = "SELECT id_nsec, seccion FROM n_seccion ORDER BY id_nsec ASC";
                                            $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

                                            ?>
                                            <div class="col-lg-4 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Sección: <strong><?php echo $row['seccion'] ?> **vuelve a seleccionar para cargar las listas</strong></small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                                    </div>
                                                    <select name="seccion" id="seccion" class="form-control" required title="Selecciona una sección de la lista">
                                                        <option value="">Selecciona el mismo o uno nuevo</option>
                                                        <?php while ($row = $result->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['id_nsec'] ?>">
                                                                <?php echo $row['seccion'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php
                                            require '../config/query_benef.php';
                                            ?>
                                            <div class="col-lg-4 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Clave CURP</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                    </div>
                                                    <input type="text" id="curp" name="curp" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['curp'] ?>">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#mod_imgcurp" title="Ver imagen"><i class="fa fa-eye"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="mod_imgcurp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Imagen CURP</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-sm-6 col-lg-12">
                                                                <a href="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>" download="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>"> <img src="archivos/<?php echo $nomCompleto ?>/curp/<?php echo $curp ?>" style="width: 400px; height: 264px;" alt="Sin agregar CURP" title="Descargar con clic"></a>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">En caso de no presentar algún dato antes mencionado selecciona aquí</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                    </div>
                                                    <input type="text" id="otrodoc" name="otrodoc" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['otrodoc'] ?>">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#img_otrodoc" title="Ver imagen"><i class="fa fa-eye"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="img_otrodoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Imagen Otro documento</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-sm-6 col-lg-12">
                                                                <a href="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>" download="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>"> <img src="archivos/<?php echo $nomCompleto ?>/otrosDocumentos/<?php echo $otro ?>" style="width: 400px; height: 264px;" alt="Sin agregar otros documentos" title="Descargar con clic"></a>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="col-lg-3 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Teléfono</small>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="tel" id="telefono" name="telefono" class="form-control" data-inputmask="'mask': ['999-999-9999 [x9999]', '+099 99 99 9999[9]-9999']" data-mask value="<?php echo $row['telefono'] ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Genero</small>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                                    </div>
                                                    <?php
                                                    $sql = "SELECT id_sexo, genero FROM sexo  ORDER BY id_sexo ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                                    ?>
                                                    <select name="sexo" id="sexo" class="form-control" title="Selecciona algún genero de la lista">
                                                        <option value=""><?php echo $row['genero'] ?></option>
                                                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                            <option selected value="<?php echo $ver[0] ?>">
                                                                <?php echo $ver[1] ?>
                                                            </option>
                                                        <?php endwhile ?>
                                                    </select>
                                                </div>
                                            </div>
                                         
                                            <div class="col-lg-4 col-sm-12">

                                                <?php
                                                $date_nac = $row['nacimiento'];
                                                $date = date_create($date_nac);
                                                $fecha_nac =  date_format($date, "d/m/Y");
                                                ?>
                                                <small id="emailHelp" class="form-text text-muted text-center">Fecha de nacimiento: <strong><?php echo $fecha_nac ?> </strong></small>
                                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>

                                                    <input type="date" id="nacimiento" name="nacimiento" class="form-control" value="<?php echo $row['nacimiento'] ?>" title="Ingresa la fecha de nacimiento" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Edad</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-birthday-cake"></i></span>
                                                    </div>
                                                    <input type="text" id='edad' name="edad" class="form-control" onfocus="this.blur" readonly onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="** Edad" required title="Calcula la edad">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="div">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="justify-content-center">Domicilio <small>(Como aparece en el comprobante)</small></h4><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <?php
                                            $sql = "SELECT id_loc, localidad FROM localidad  ORDER BY localidad ASC";
                                            $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                                            ?>
                                            <div class="col-lg-6 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Localidad: <strong><?php echo  $row['localidad'] ?> </strong></small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                    </div>
                                                    <select name="localidad" id="localidad" class="form-control" title="Selecciona una localidad de la lista">
                                                        <option value=""><?php echo $row['localidad'] ?></option>
                                                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                            <option selected value="<?php echo $ver[0] ?>">
                                                                <?php echo $ver[1] ?>
                                                            </option>
                                                        <?php endwhile ?>
                                                    </select>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal3" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Colonia: <strong><?php echo $row['colonia'] ?> **vuelve a sección para cargar lista</strong></small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                    </div>
                                                    <select name="colonia" id="colonia" class="form-control" required title=" Selecciona una colonia de la lista"><?php $row['colonia']; ?></select>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal4" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Código postal: <strong><?php echo $row['cp'] ?></strong></small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                                    </div>
                                                    <select name="cp" id="cp" class="form-control" required title="Selecciona un C.P. de la lista">C.P.</select>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal5" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Calle como aparece en el comprobante</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="calle" name="calle" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['calle'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Numero exterior</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="num_ext" name="num_ext" class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['exte'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Numero interior</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-sort-numeric-down-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="num_int" name="num_int" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row['inte'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="div">
                                            <h4 class="justify-content-center">Observaciones</h4><br>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <small id="emailHelp" class="form-text text-muted text-center">Observaciones generales</small>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-comments"></i></span>
                                                    </div>
                                                    <textarea type="text" id="comentario" name="comentario" rows="1" class="form-control" style="max-width:100%; " onkeyup="javascript:this.value=this.value.toUpperCase();"><?php echo $row['observaciones'] ?></textarea></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <button type="submit" name="submit" id="registrar" class="btn btn-primary" title="Modificar" onclick="return confirm('Se modificaran los datos, ¿quieres continuar? ');"><i class="fas fa-edit"></i> Modificar registros</button>
                                                    <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar formulario</button>
                                                </div>
                                                <div class="col-lg-1 col-sm-12">
                                                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
                                                    <input type="hidden" name="usuario" value="<?php echo $_SESSION['username'] ?>">
                                                </div>
                                                <div class="col-lg-5 col-sm-12">
                                                    <?php
                                                    $query = "SELECT id_benef FROM beneficiario ORDER BY id_benef DESC limit 0, 1";
                                                    $resultado = mysqli_query($conexion, $query);
                                                    $id = $resultado->fetch_assoc();
                                                    ?>
                                                    <a href="generarcode.php?id=<?php echo $id['id_benef']; ?>" class="btn btn-md btn-primary "><i class='fas fa-barcode'></i> Generar código</a>
                                                    <a href="card.php?id=<?php echo $id['id_benef']; ?>" class="btn btn-md btn-warning"><i class='fas fa-id-card '></i> Ir a card</a>
                                                    <?php echo ("<a href='javascript:history.back(1)' class='btn btn-success'><i class='fa fa-arrow-left'></i> Regresar</a>"); ?>

                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ventanas modales -->
        <?php
        require 'footer.php';
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- popper -->
    <script src="../plugins/popper/popper.min.js"></script>
    <!-- bs-custom-file-input -->
    <!-- <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->
    <!-- DataTables -->
    <script src="../plugins/datatables/datatables.min.js"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <!--Bootstrap4 Duallistbox -->
    <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- Page script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

        })
    </script>
    <!-- Habilitar campos formulario -->
    <script src="../js/habilitarForm.js"></script>
    <!-- Muti select-->
    <script src="../js/multiselect.js"></script>
    <!-- calcular edad -->
    <script src="../js/calcEdad.js"></script>

</body>

</html>