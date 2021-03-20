<?php
require 'head.php';
$rol = rol_permisos();
?>
<link rel="stylesheet" href="../css/dash.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
  #bloquear{
  pointer-events: none;
  background-color: gray;
  cursor: not-allowed;
  opacity: 0.5;
  }
</style>
<title>Agregar beneficiarios a la BD |
    <?php echo $_SESSION['username'] ?>
</title>

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
                            <h1 class="text-black">Agregar beneficiario a la base de datos</h1>
                        </div>
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Agregar a BD</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                 
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <!-- solid sales graph -->
                            <div class="card ">
                                <div class="card-header border-0" style="background: #007bff; color:white">
                                    <h3 class="card-title">
                                        <i class="fas fa-keyboard mr-1"></i> Formulario de captura de beneficiario
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php foreach($rol as $fila ): ?>
                                <div class="card-body">
                                    <div class="card card-info" style="background-color: #EAE8E8;">
                                        <div class="card-header">
                                            <img src="../profiles/<?php echo $image; ?>" alt="Capturista" class="img-circle img-fluid" style="width:35px; height:auto; border:1px solid #D2D3D4"><b> <?php echo $fullname ?></b>
                                        </div>
                                        <form id="form" name="test_upload" action="addDatos.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-12">
                                                        <h4 class="justify-content-center">Nombre completo del beneficiario</h4><br>
                                                    </div>
                                                    <div class="col-1"></div>
                                                    <div class="col-lg-4 col-sm-12">
                                                        <p>** Campos obligatorios</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Apellido paterno</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                            </div>
                                                            <input type="text" id="a_paterno" name="a_paterno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="** Apellido paterno" required title="Max. 30 caracteres" <?php if( $fila[15]  == 0) echo 'disabled readonly'; else echo ''; ?>>
                                                        </div>
                                                    </div>
                                                    <?php endforeach ?>
                                                    <div class="col-lg-4 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Apellido materno</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                            </div>
                                                            <input type="text" id="a_materno" name="a_materno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="** Apellido materno" required disabled title="Max. 30 caracteres">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Nombre(s)</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" id="nombres" name="nombres" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="** Nombre (s)" required title="Max. 50 caracteres" disabled>
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
                                                                <div class="input-group-text">
                                                                    <input type="checkbox" id="c_elector" value="yes">
                                                                </div>
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#uploadine" title="Agregar registro a lista desplegable"><i class="fas fa-camera"></i></a></span>
                                                            </div>
                                                            <input type="text" id="ine" name="ine" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Clave de elector" maxlength="18" pattern="[A-Za-z0-9]{18}" title="Clave de elector contiene 18 caracteres o dejar vacio" disabled>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal" title="Ayuda"><i class="fa fa-info-circle"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="uploadine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Agrega imagen de clave de elector</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <!-- COMPONENT START -->
                                                                    <div class="col-sm-6 col-lg-12">
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" name="photoine" id="photoine" class="custom-file-input" id="exampleInputFile" title="Selecciona algun archivo" disabled>
                                                                                    <label class="custom-file-label" for="exampleInputFile">Sube una imagen</label>
                                                                                </div>
                                                                            </div>
                                                                            <small id="emailHelp" class="form-text text-muted text-center">Si el campo esta bloqueado, debes habilitar el check junto al icono de la camara</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Precargar</button>
                                                                    <button type="reset" class="btn btn-warning">Borrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                          
                                                    <?php
                                                    $sql = "SELECT id_nsec, seccion FROM n_seccion  ORDER BY id_nsec ASC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                                    ?>
                                                    <div class="col-lg-4 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Sección</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                                            </div>
                                                            <select name="seccion" id="seccion" class="form-control" title="Selecciona una sección de la lista" disabled>
                                                                <option value="">SECCION</option>
                                                                <?php while ($row = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['id_nsec'] ?>">
                                                                        <?php echo $row['seccion'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal2" title="Agregar imagen para continuar"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Clave CURP</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="checkbox" id="c_curp" value="yes">
                                                                </div>
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#uploadcurp" title="Agregar imagen para continuar"><i class="fas fa-camera"></i></a></span>
                                                            </div>
                                                            <input type="text" id="curp" name="curp" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Clave CURP" maxlength="18" pattern="[A-Za-z0-9]{18}" title="CURP contiene 18 caracteres o dejar vacio" disabled>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal1" title="Ayuda"><i class="fa fa-info-circle"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="uploadcurp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Agrega imagen de la CURP</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- COMPONENT START -->
                                                                    <div class="col-sm-6 col-lg-12">
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" name="photocurp" id="photocurp" class="custom-file-input" id="exampleInputFile" title="Selecciona algun archivo" disabled>
                                                                                    <label class="custom-file-label" for="exampleInputFile">Sube una imagen</label>
                                                                                </div>
                                                                            </div>
                                                                            <small id="emailHelp" class="form-text text-muted text-center">Si el campo esta bloqueado, debes habilitar el check junto al icono de la camara</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Precargar</button>
                                                                    <button type="reset" class="btn btn-warning">Borrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">En caso de no presentar algún dato antes mencionado selecciona aquí</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="checkbox" name="otro" id="otro" value="yes">
                                                                </div>
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#uploadotrodoc" title="Agregar imagen para continuar"><i class="fas fa-camera"></i></a></span>
                                                            </div>
                                                            <input type="text" id="otrodoc" name="otrodoc" class="form-control" disabled style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Otro documento de identificación oficial">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#otrodoctext" title="Ayuda"><i class="fa fa-info-circle"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="uploadotrodoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Agrega imagen de otro documento de identidad oficial</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-sm-6 col-lg-12">
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" name="photootro" id="photootro" class="custom-file-input" id="exampleInputFile" title="Selecciona algun archivo" disabled>
                                                                                    <label class="custom-file-label" for="exampleInputFile">Sube una imagen</label>
                                                                                </div>
                                                                            </div>
                                                                            <small id="emailHelp" class="form-text text-muted text-center">Si el campo esta bloqueado, debes habilitar el check junto al icono de la camara</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Precargar</button>
                                                                    <button type="reset" class="btn btn-warning">Borrar</button>
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
                                                            <input type="tel" id="telefono" name="telefono" class="form-control" data-inputmask="'mask': ['999-999-9999 [x9999]', '+099 99 99 9999[9]-9999']" data-mask placeholder="** Teléfono" pattern="[0-9\-]+ " title="Ingrese 10 dígitos" disabled>
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
                                                            <select name="sexo" id="sexo" class="form-control" required title="Selecciona algún genero de la lista" disabled>
                                                                <option value="">** Genero</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
                                                                        <?php echo $ver[1] ?>
                                                                    </option>
                                                                <?php endwhile ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Fecha de nacimiento</small>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                            <input type="date" id="nacimiento" name="nacimiento" class="form-control datetimepicker-input" required title="Formato dd/mm/aaaa" disabled>
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
                                                        <small id="emailHelp" class="form-text text-muted text-center">Localidad</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                            </div>
                                                            <select name="localidad" id="localidad" class="form-control" required title="Selecciona una localidad de la lista" disabled>
                                                                <option value="">** Localidad</option>
                                                                <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                                                    <option value="<?php echo $ver[0] ?>">
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
                                                        <small id="emailHelp" class="form-text text-muted text-center">Colonia</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                            </div>
                                                            <select name="colonia" id="colonia" class="form-control" required title=" Selecciona una colonia de la lista" disabled>COLONIA</select>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal4" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Código postal</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                                            </div>
                                                            <select name="cp" id="cp" class="form-control" required title="Selecciona un C.P. de la lista" disabled>C.P.</select>
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
                                                            <input type="text" id="calle" name="calle" class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="** Calle" required title="Ingresa la calle" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Numero exterior</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                                                            </div>
                                                            <input type="text" id="num_ext" name="num_ext" class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# Ext." title="Ingresa el número exterior o dejarlo vacio" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Numero interior</small>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-sort-numeric-down-alt"></i></span>
                                                            </div>
                                                            <input type="text" id="num_int" name="num_int" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="# Int." title="Ingresa el número interior o dejarlo vacio" disabled>
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
                                                            <textarea type="text" id="comentario" name="comentario" rows="1" class="form-control" style="max-width:100%; " onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa alguna observación" title="Ingresa una observacion breve" disabled></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-sm-12">
                                                        <small id="emailHelp" class="form-text text-muted text-center">Documentos comprobatorios</small>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="photo" name="photo" class="custom-file-input" id="exampleInputFile" title="Selecciona algun archivo" disabled>
                                                                    <label class="custom-file-label" for="exampleInputFile">Sube un archivo</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fas fa-file-upload "></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-12">
                                                            <button type="submit" name="submit" id="registrar" class="btn btn-primary" disabled title="Carga los datos"><i class="fas fa-plus"></i> Crear registros</button>
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
                                                            <a href="generarcode.php?id=<?php echo $id['id_benef']; ?>" class="btn btn-md btn-primary " id="<?php if( $fila[15]  == 0) echo 'bloquear'; else echo ''; ?>"><i class='fas fa-barcode'></i> Generar código</a>


                                                            <a href="card.php?id=<?php echo $id['id_benef']; ?>" class="btn btn-md btn-warning" id="<?php if( $fila[15]  == 0) echo 'bloquear'; else echo ''; ?>"><i class='fas fa-id-card '></i> Ir a card</a>
                                                            <?php echo ("<a href='javascript:history.back(1)' class='btn btn-success'><i class='fa fa-arrow-left'></i> Regresar</a>"); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <?php
        include 'footer.php';
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ayuda: formato CURP, 18 caracteres</h5>
                </div>
                <div class="modal-body">
                    <img src="../images/curp.gif" alt="CURP formato">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ayuda: formato Clave de elector, 18 caracteres</h5>
                </div>
                <div class="modal-body">
                    <img src="../images/clave elector.jpg" alt="CURP formato">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="otrodoctext" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ayuda: ejemplos de documentos de identidad oficiales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center"><strong>Lista de documentos que se pueden presentar como identificación para trámites de identidad oficial</strong></p>
                    <ul>
                        <li>Pasaporte vigente.</li>
                        <li>Cédula profesional vigente.</li>
                        <li>Título profesional.</li>
                        <li>Certificados de estudio expedidos por la SEP.</li>
                        <li>Licencia de conducir vigente.</li>
                        <li>Credencial vigente del Instituto Nacional de las Personas Adultas Mayores (INAPAM)</li>
                        <li>Cartilla del Servicio Militar Nacional.</li>
                        <li>Credencial del IMSS, ISSSTE, etc. con fotografía.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar una sección</h5>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form id="test_upload" name="test_upload" action="addSeccion.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group text-black">
                                        <label for="seccion">Ingresa Numero de sección</label>
                                        <input type="text" name="seccion" id="seccion" required pattern="[0-9]{4}" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa el numero de sección" title="Solo dígitos y 4 como maximo">
                                        <small class="form-text text-muted">Max 4 digitos</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Crear sección</button>
                            <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar una localidad</h5>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form id="test_upload" name="test_upload" action="addLoc.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group text-black">
                                        <label for="exampleInputEmail1">Nombre de la localidad</label>
                                        <input type="text" name="localidad" id="localidad" class="form-control input-sm" required maxlength="60" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa el nombre de la localidad" title="Max 60 caracteres">
                                        <small class="form-text text-muted">Max 60 caracteres</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Crear</button>
                            <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar una colonia</h5>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form id="test_upload" name="test_upload" action="addColonia.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group text-black">
                                        <label for="exampleInputEmail1">Ingresa Colonia</label>
                                        <input type="text" name="colonia" id="colonia" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa una colonia" required maxlength="70" title="Max 70 caracteres">
                                        <small class="form-text text-muted">Max 70 caracteres</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Crear</button>
                            <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Código postal</h5>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form id="test_upload" name="test_upload" action="addCP.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group text-black">
                                        <label for="exampleInputEmail1">Ingresa Código Postal</label>
                                        <input type="text" name="cp" id="cp" class="form-control input-sm" required maxlength="5" pattern="[0-9]{5}" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa un Código Postal" title="Solo dígitos y 5 como maximo">
                                        <small class="form-text text-muted">Max 5 digitos</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Crear</button>
                            <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- popper -->
    <script src="../plugins/popper/popper.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/datatables.min.js"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <!--Bootstrap4 Duallistbox -->
    <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/moment/locale/es-do.js"></script>
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
    <!-- js multiselect -->
    <script src="../js/bootstrap-multiselect.js"></script>
    <!--  -->
    <script src="../js/preloader.js"></script>
    <!-- calcular edad -->
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
            $('#datemask2').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'es'
            });
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'DD/MM/YYYY hh:mm A'
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
                    $('#reportrange span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
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