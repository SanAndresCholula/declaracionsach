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
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Precargar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
            </div>
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
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Precargar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
            </div>
        </div>
    </div>
</div>