<!-- Modal Imagen -->
<div class="modal fade" id="imgbenef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar imagen a perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="image view view-first">
                        <img class="thumb-image" style="width: 100%; display: block;" src="../imgbenef/<?php echo $imagen ?>" alt=" image">
                    </div>

                    <form method="post" id="formulario" action="updateImgBenf.php" enctype="multipart/form-data" class="m-0 text-black">
                        <input type="hidden" name="id" value="<?php echo $row['id_benef'] ?>">
                        Cambiar Imagen de perfil: <small>recomendada 250x250</small>
                        <input type="file" name="file" class="btn btn-default" required>
                        <br><br>

                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary text-left"><i class="fa fa-retweet" aria-hidden="true"></i> Actualizar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- calendar agregar evento -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <form class="form-horizontal" method="POST" action="addEvent.php">
                <!-- header titulo -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ingresa la información para registrar el apoyo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-6 col-sm-12">
                            <h4 class="justify-content-center">Numero de apoyos: <strong><?php echo $num_events ?></strong></h4><br>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Beneficiario</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-smile-wink"></i></span>
                                </div>
                                <input type="text" id="nomCompleto" name="nomCompleto" class="form-control" title="Nombre del beneficiario" readonly onfocus="this.blur" value="<?php echo $nomCompleto ?>">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-smile-beam"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Nombre para identificar en el calendario</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                </div>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo para identificar en el calendario" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id_tp, nom_tp FROM tipo_programa  ORDER BY nom_tp ASC";
                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));;
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Tipo de programa</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-hands-helping"></i></span>
                                </div>
                                <select name="tp" id="tp" class="form-control" title="Selecciona un tipo de programa de la lista" required>
                                    <option value="">** Tipo de programa</option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal6" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id_np, nom_p FROM nom_programa  ORDER BY nom_p ASC";
                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Nombre del programa</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-people-carry"></i></span>
                                </div>
                                <select name="np" id="np" class="form-control" title="Selecciona un nombre de programa de la lista" required>
                                    <option value="">** Nombre del programa</option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal7" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id_secre, secretaria FROM secretaria  ORDER BY id_secre ASC";
                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Secretaría que dio brindo el apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tasks"></i></span>
                                </div>
                                <select name="secre" id="secre" class="form-control" title="Selecciona un nombre de secretaría de la lista" required>
                                    <option value="">** Secretaría que dio el apoyo</option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#secre" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Enlace que brindo el apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-handshake"></i></span>
                                </div>
                                <input type="text" id="enlace" name="enlace" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Enlace que dio el apoyo" title="Ingresa el nombre del enlace" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-handshake"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Ingresa un color de status para identificar en el calendario</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                </div>
                                <select name="color" id="color" class="form-control" required>
                                    <?php
                                    $sql = "SELECT id_colors, name, colors FROM colors  ORDER BY id_colors ASC";
                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                    ?>
                                    <option value="">Seleccionar un status</option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option style="color:<?php echo $ver[2]; ?>;" value="<?php echo $ver[2] ?>">&block;
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#crearstatus" title="Selecciona un color"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4">
                            <small id="emailHelp" class="form-text text-muted text-center">Fecha entrega del apoyo </small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                </div>
                                <input type="text" name="start" id="start" class="form-control" readonly>
                                <input type="hidden" name="end" id="end" class="form-control" readonly>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3">
                            <small id="emailHelp" class="form-text text-muted text-center">Hora (aprox.) entrega del apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                                <input type="time" name="horastart" class="form-control" id="hora" placeholder="hora del suceso" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3">
                            <small id="emailHelp" class="form-text text-muted text-center">Hora (aprox.) fin entrega del apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                                <input type="time" name="horaend" class="form-control" id="hora" placeholder="hora del suceso" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Capturista</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                </div>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly onfocus="this.blur">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Describe el lugar de entrega del apoyo y/o algun comentario breve</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                </div>
                                <textarea class="form-control" name="entrega" id="entrega" style="max-width:100%," onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Describe el lugar de entrega del apoyo y/o algun comentario breve" required></textarea>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id_benef1" id="id_benef1" value="<?php echo $id_benef; ?>">
                    <input type="hidden" name='id_user1' id="id_user1" value="<?php echo $_SESSION['id_user'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
                    <button type="submit" class="btn btn-success" id="<?php if ($fila[18]  == 0) echo 'accion';
                                                                                                                                                                                                                                        else echo ''; ?>"><i class="far fa-save"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <form class="form-horizontal" method="POST" action="editEventTitle.php">
                <!-- header titulo -->
                <div class="modal-header" style="background: #449D44 ;">
                    <h4 class="modal-title" id="myModalLabel"><?php if ($fila[19]  == 0) echo 'No tiene permiso para modificar <i class="fas fa-ban"></i>';
                                                                                                                                                                                                                                        else echo 'Modifica la información del evento'; ?> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <h4 class="justify-content-center">Numero de apoyos: <strong><?php echo $num_events ?></strong></h4><br>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Beneficiario</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-smile-wink"></i></span>
                                </div>
                                <input type="text" id="nomCompleto" name="nomCompleto" class="form-control" title="Nombre del beneficiario" readonly onfocus="this.blur" value="<?php echo $nomCompleto ?>">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-smile-beam"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Nombre de vista en calendario</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                </div>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo para identificar en el calendario" required onkeyup="javascript:this.value=this.value.toUpperCase();" <?php if ($fila[19]  == 0) echo 'readonly';
                                                                                                                                                                                                                                        else echo ''; ?> >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                </div>
                            </div>
                        </div>


                        <?php
                        $sql = "SELECT id_tp, nom_tp FROM tipo_programa  ORDER BY nom_tp ASC";
                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

                        $query = mysqli_query($conexion, "SELECT nom_tp FROM tipo_programa WHERE id_tp = $c_tp");
                        while ($dato = mysqli_fetch_array($query)) {
                            $nom_tp = $dato['nom_tp'];
                        }
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Tipo de programa</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-hands-helping"></i></span>
                                </div>
                                <select name="tp" id="tp" class="form-control" title="Selecciona un tipo de programa de la lista" >
                                    <option value="" ><?php echo $nom_tp; ?></option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal6" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id_np, nom_p FROM nom_programa  ORDER BY nom_p ASC";
                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

                        $query = mysqli_query($conexion, "SELECT nom_p FROM nom_programa WHERE id_np = $c_np");
                        while ($dato = mysqli_fetch_array($query)) {
                            $nom_p = $dato['nom_p'];
                        }
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Nombre del programa</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-people-carry"></i></span>
                                </div>
                                <select name="np" id="np" class="form-control" title="Selecciona un nombre de programa de la lista">
                                    <option value=""><?php echo $nom_p; ?></option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#exampleModal7" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id_secre, secretaria FROM secretaria  ORDER BY id_secre ASC";
                        $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

                        $query = mysqli_query($conexion, "SELECT secretaria FROM secretaria WHERE id_secre = $c_s");
                        while ($dato = mysqli_fetch_array($query)) {
                            $secretaria = $dato['secretaria'];
                        }
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Secretaría que dio brindo el apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tasks"></i></span>
                                </div>
                                <select name="secre" id="secre" class="form-control" title="Selecciona un nombre de secretaría de la lista">
                                    <option value=""><?php echo $secretaria; ?></option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#secre" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Enlace que brindo el apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-handshake"></i></span>
                                </div>
                                <input type="text" id="enlace" name="enlace" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Enlace que dio el apoyo" title="Ingresa el nombre del enlace" <?php if ($fila[19]  == 0) echo 'readonly';
                                                                                                                                                                                                                                        else echo ''; ?> >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-handshake"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Ingresa un color de status para identificar el apoyo</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                </div>
                                <select name="color" id="color" class="form-control" required>
                                    <?php
                                    $sql = "SELECT id_colors, name, colors FROM colors  ORDER BY id_colors ASC";
                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                    ?>
                                    <option value="">Seleccionar un status</option>
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <option style="color:<?php echo $ver[2]; ?>;" value="<?php echo $ver[2] ?>">&block;
                                            <?php echo $ver[1] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><a href="#" data-toggle="modal" data-target="#secre" title="Agregar registro a lista desplegable"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-sm-3">
                            <small id="emailHelp" class="form-text text-muted text-center">Entrega del apoyo:  <strong><?php echo $hs;?></strong></small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                               
                                <input type="time" name="horastart" id="horastart" class="form-control" id="hora" required <?php if ($fila[19]  == 0) echo 'readonly';
                                                                                                                                                                                                                                        else echo ''; ?> >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3">
                            <small id="emailHelp" class="form-text text-muted text-center">Fin entrega del apoyo: <strong><?php echo $he;?></strong></small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                                <input type="time" name="horaend" id="horaend" class="form-control" id="hora" required <?php if ($fila[19]  == 0) echo 'readonly';
                                                                                                                                                                                                                                        else echo ''; ?> >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Capturista</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                </div>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly onfocus="this.blur" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Describe el lugar de entrega del apoyo y/o algun comentario breve</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                </div>
                                <textarea class="form-control" name="entrega" id="entrega" style="max-width:100%," onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Describe el lugar de entrega del apoyo y/o algun comentario breve" <?php if ($fila[19]  == 0) echo 'readonly';
                                                                                                                                                                                                                                        else echo ''; ?> ></textarea>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label class="text-danger"><?php if ($fila[20]  == 0) echo 'No tiene permiso para borrar <i class="fas fa-ban"></i>';
                                                                                                                                                                                                                                        else echo '<input type="checkbox" name="delete" > <strong>Eliminar Evento</strong>'; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <input type="hidden" name="id" class="form-control" id="id">
                    </div>

                    <input type="hidden" name="id_benef1" id="id_benef1" value="<?php echo $id_benef; ?>">
                    <input type="hidden" name='id_user1' id="id_user1" value="<?php echo $_SESSION['id_user'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
                    <button type="submit" class="btn btn-success" id="<?php if ($fila[19]  == 0) echo 'accion';
                                                                                                                                                                                                                                        else echo ''; ?>" onclick="return confirm('Esta accion modificar este evento, ¿quieres continuar? ');"><i class="far fa-edit"></i>Modificar</button>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal estatus-->
<div class="modal fade" id="status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Colores Estatus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colores para identificar en el calendario</h4>
                            </div>
                            <?php
                            $query = "SELECT id_colors, name, colors FROM colors ORDER BY id_colors desc";
                            $resultado = mysqli_query($conexion, $query);
                            ?>
                            <div class="card-body">
                                <table id="<?php if ($fila[30]  == 1) echo 'example';
                                                                        else echo 'sinpermiso'; ?>" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td><b>Nombre_estatus</b></td>
                                            <td>Color</td>
                                            <td>Acciones</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        while ($row = $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id_colors']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['name']; ?>
                                                </td>
                                                <td>
                                                    <div id="external-events">
                                                        <div class="external-event" style="background:<?php echo $row['colors'] ?>; color:#ffffff">Color</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a style="display: inline;" href="mod_colors.php?id=<?php echo $row['id_colors']; ?>" title="Editar seccion" onclick="deshabilitar(this)" id="<?php if( $fila[22]  == 0) echo 'accion'; else echo ''; ?>"><i class="fas fa-edit fa-2x" ></i></a>

                                                    <a style="display: inline;" href="deleteColors.php?id=<?php echo $row['id_colors']; ?>" title="Eliminar seccion" onclick="return ConfirmDelete()" id="<?php if( $fila[23]  == 0) echo 'accion'; else echo ''; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="far fa-times-circle"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal crear estatus-->
<div class="modal fade" id="crearstatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear colores estatus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form id="test_upload" name="test_upload" action="addColor.php" method="post">
                    <div class="card-body">

                        <div class="form-group text-black">
                            <label for="exampleInputEmail1">Nombre estatus</label>
                            <input type="text" name="name" id="name" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa un nombre de estatus" required <?php if ($fila[21]  == 0) echo 'disabled readonly';
                                                                                                                                                                                                                                                                                        else echo ''; ?>>
                            <small class="form-text text-muted">Max 50 caracteres</small>
                        </div>
                        <div class="form-group text-black">
                            <label for="exampleInputEmail1">Seleccione un color</label>
                            <input type="color" id="colors" name="colors" required><br>
                        </div>
                    </div>
                    <div class="card-footer">
                        
                        <?php if ($fila[21]  == 1) echo '<button type="submit" name="submit" class="btn btn-primary"  data-toggle="tooltip" title="Crear Estatus color" ><i class="fas fa-plus"></i> Crear Estatus color</button>';
                                                                                else echo ''; ?>
                        <button type="reset" class="btn btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit modal estatus -->
<!-- Modal -->
<div class="modal fade" id="editColors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Estatus colores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                $id = $_GET['id'];
                $query = "SELECT name, colors FROM colors WHERE id_colors = '$id'";
                $resultado = mysqli_query($conexion, $query);
                $row = $resultado->fetch_assoc();

                ?>
                <form id="test_upload" name="test_upload" action="actionModColors.php" method="post" onsubmit="return validarTP()">
                    <div class="card-body">
                        <input type="hidden" name="id_colors" value="<?php echo $id ?>">
                        <div class="form-group text-black">
                            <label for="exampleInputEmail1">Nombre estatus</label>
                            <input type="text" name="name" id="name" class="form-control input-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo  $row['name'] ?>">
                            <small class="form-text text-muted">Max 50 caracteres</small>
                        </div>

                        <div class="form-group text-black">
                            <label for="exampleInputEmail1">Seleccione un color</label>
                            <input type="color" id="colors" name="colors" value="<?php echo $row['colors']; ?>"><br>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Modificar estatus</button>
                        <a href="colors.php" class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
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
                    <a href="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" download="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>"> <img src="archivos/<?php echo $nomCompleto ?>/ine/<?php echo $ine ?>" style="width: 400px; height: 264px;" alt="INE" title="Descargar con clic"></a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>