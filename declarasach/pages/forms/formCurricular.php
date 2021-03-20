<!-- Input addon -->

<div class="card collapsed-card card-purple">
    <div class="card-header">
        <h3 class="card-title">Datos curriculares</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
            </button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button> -->
        </div>
    </div>
    <div class="card-body">
        <p>Seleccionar el Nivel de estudios del menú que se despliega al dar clic en la flecha del lado derecho de
este espacio (primaria, secundaria, bachillerato, carrera técnica o comercial, licenciatura, diplomado, maestría
o doctorado, etc.),</p>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <select name="status" id="status" onChange="mostrar(this.value);" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                        <label>*Grado maximo de estudios, selecccione una opcion</label>
                            <option value="">Seleccion algun dato de la lista</option>
                            <option value="1">PRIMARIA</option>
                            <option value="2">SECUNDARIA</option>
                            <option value="3">BACHILLERATO</option>
                            <option value="4">CARRERA TECNICA O COMERCIAL</option>
                            <option value="5">LICENCIATURA</option>
                            <option value="6">DIPLOMADO</option>
                            <option value="7">MAESTRÍA</option>
                            <option value="8">DOCTORADO</option>
                            <option value="9">POSGRADO</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body" id="1" style="display: none;">
            <h5>ESCOLARIDAD <strong>PRIMARIA</strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="1" value="1">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="2" style="display: none;">
            <h5>ESCOLARIDAD <strong>SECUNDARIA</strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="3" style="display: none;">
            <h5>ESCOLARIDAD <strong>BACHILLERATO

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="3" value="3">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="4" style="display: none;">
            <h5>ESCOLARIDAD <strong>CARRERA TÉCNICA O COMERCIAL

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="4" value="4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <label>*Ubicación de la institución</label>
                            <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MÉXICO</option>
                                <option value="2">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Entidad federativa</label>
                            <div class="input-group"></div>
                            <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                <option value="CAMPECHE">CAMPECHE</option>
                                <option value="CHIAPAS">CHIAPAS</option>
                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                <option value="CDMX">CIUDAD DE MÉXICO</option>
                                <option value="COAHUILA">COAHUILA</option>
                                <option value="COLIMA">COLIMA</option>
                                <option value="DURANGO">DURANGO</option>
                                <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                <option value="GUANAJUATO">GUANAJUATO</option>
                                <option value="GUERRERO">GUERRERO</option>
                                <option value="HIDALGO">HIDALGO</option>
                                <option value="JALISCO">JALISCO</option>
                                <option value="MICHOACÁN">MICHOACÁN</option>
                                <option value="MORELOS">MORELOS</option>
                                <option value="NAYARIT">NAYARIT</option>
                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                <option value="OAXACA">OAXACA</option>
                                <option value="PUEBLA">PUEBLA</option>
                                <option value="QUERÉTARO">QUERÉTARO</option>
                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                <option value="SINALOA">SINALOA</option>
                                <option value="SONORA">SONORA</option>
                                <option value="TABASCO">TABASCO</option>
                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                <option value="TLAXCALA">TLAXCALA</option>
                                <option value="VERACRUZ">VERACRUZ</option>
                                <option value="YUCATÁN">YUCATÁN</option>
                                <option value="ZACATECAS">ZACATECAS</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group" id="grupo__nom_usuario">
                            <label for="usuario">*Municipio o alcaldía</label>
                            <div class="form-group-input">
                                <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Carrera o área de conocimiento</label>
                            <div class="form-group-input">
                                <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">TITULO</option>
                                <option value="5">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Número de cédula profesional </label>
                            <div class="form-group-input">
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="5" style="display: none;">
            <h5>ESCOLARIDAD <strong>LICENCIATURA

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="4" value="4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <label>*Ubicación de la institución</label>
                            <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MÉXICO</option>
                                <option value="2">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Entidad federativa</label>
                            <div class="input-group"></div>
                            <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                <option value="CAMPECHE">CAMPECHE</option>
                                <option value="CHIAPAS">CHIAPAS</option>
                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                <option value="CDMX">CIUDAD DE MÉXICO</option>
                                <option value="COAHUILA">COAHUILA</option>
                                <option value="COLIMA">COLIMA</option>
                                <option value="DURANGO">DURANGO</option>
                                <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                <option value="GUANAJUATO">GUANAJUATO</option>
                                <option value="GUERRERO">GUERRERO</option>
                                <option value="HIDALGO">HIDALGO</option>
                                <option value="JALISCO">JALISCO</option>
                                <option value="MICHOACÁN">MICHOACÁN</option>
                                <option value="MORELOS">MORELOS</option>
                                <option value="NAYARIT">NAYARIT</option>
                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                <option value="OAXACA">OAXACA</option>
                                <option value="PUEBLA">PUEBLA</option>
                                <option value="QUERÉTARO">QUERÉTARO</option>
                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                <option value="SINALOA">SINALOA</option>
                                <option value="SONORA">SONORA</option>
                                <option value="TABASCO">TABASCO</option>
                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                <option value="TLAXCALA">TLAXCALA</option>
                                <option value="VERACRUZ">VERACRUZ</option>
                                <option value="YUCATÁN">YUCATÁN</option>
                                <option value="ZACATECAS">ZACATECAS</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group" id="grupo__nom_usuario">
                            <label for="usuario">*Municipio o alcaldía</label>
                            <div class="form-group-input">
                                <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Carrera o área de conocimiento</label>
                            <div class="form-group-input">
                                <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">TITULO</option>
                                <option value="5">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Número de cédula profesional </label>
                            <div class="form-group-input">
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="6" style="display: none;">
            <h5>ESCOLARIDAD <strong>DIPLOMADO

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="4" value="4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <label>*Ubicación de la institución</label>
                            <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MÉXICO</option>
                                <option value="2">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Entidad federativa</label>
                            <div class="input-group"></div>
                            <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                <option value="CAMPECHE">CAMPECHE</option>
                                <option value="CHIAPAS">CHIAPAS</option>
                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                <option value="CDMX">CIUDAD DE MÉXICO</option>
                                <option value="COAHUILA">COAHUILA</option>
                                <option value="COLIMA">COLIMA</option>
                                <option value="DURANGO">DURANGO</option>
                                <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                <option value="GUANAJUATO">GUANAJUATO</option>
                                <option value="GUERRERO">GUERRERO</option>
                                <option value="HIDALGO">HIDALGO</option>
                                <option value="JALISCO">JALISCO</option>
                                <option value="MICHOACÁN">MICHOACÁN</option>
                                <option value="MORELOS">MORELOS</option>
                                <option value="NAYARIT">NAYARIT</option>
                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                <option value="OAXACA">OAXACA</option>
                                <option value="PUEBLA">PUEBLA</option>
                                <option value="QUERÉTARO">QUERÉTARO</option>
                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                <option value="SINALOA">SINALOA</option>
                                <option value="SONORA">SONORA</option>
                                <option value="TABASCO">TABASCO</option>
                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                <option value="TLAXCALA">TLAXCALA</option>
                                <option value="VERACRUZ">VERACRUZ</option>
                                <option value="YUCATÁN">YUCATÁN</option>
                                <option value="ZACATECAS">ZACATECAS</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group" id="grupo__nom_usuario">
                            <label for="usuario">*Municipio o alcaldía</label>
                            <div class="form-group-input">
                                <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Carrera o área de conocimiento</label>
                            <div class="form-group-input">
                                <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">TITULO</option>
                                <option value="5">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Número de cédula profesional </label>
                            <div class="form-group-input">
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="7" style="display: none;">
            <h5>ESCOLARIDAD <strong>MAESTRÍA

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="4" value="4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <label>*Ubicación de la institución</label>
                            <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MÉXICO</option>
                                <option value="2">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Entidad federativa</label>
                            <div class="input-group"></div>
                            <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                <option value="CAMPECHE">CAMPECHE</option>
                                <option value="CHIAPAS">CHIAPAS</option>
                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                <option value="CDMX">CIUDAD DE MÉXICO</option>
                                <option value="COAHUILA">COAHUILA</option>
                                <option value="COLIMA">COLIMA</option>
                                <option value="DURANGO">DURANGO</option>
                                <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                <option value="GUANAJUATO">GUANAJUATO</option>
                                <option value="GUERRERO">GUERRERO</option>
                                <option value="HIDALGO">HIDALGO</option>
                                <option value="JALISCO">JALISCO</option>
                                <option value="MICHOACÁN">MICHOACÁN</option>
                                <option value="MORELOS">MORELOS</option>
                                <option value="NAYARIT">NAYARIT</option>
                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                <option value="OAXACA">OAXACA</option>
                                <option value="PUEBLA">PUEBLA</option>
                                <option value="QUERÉTARO">QUERÉTARO</option>
                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                <option value="SINALOA">SINALOA</option>
                                <option value="SONORA">SONORA</option>
                                <option value="TABASCO">TABASCO</option>
                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                <option value="TLAXCALA">TLAXCALA</option>
                                <option value="VERACRUZ">VERACRUZ</option>
                                <option value="YUCATÁN">YUCATÁN</option>
                                <option value="ZACATECAS">ZACATECAS</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group" id="grupo__nom_usuario">
                            <label for="usuario">*Municipio o alcaldía</label>
                            <div class="form-group-input">
                                <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Carrera o área de conocimiento</label>
                            <div class="form-group-input">
                                <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">TITULO</option>
                                <option value="5">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Número de cédula profesional </label>
                            <div class="form-group-input">
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="8" style="display: none;">
            <h5>ESCOLARIDAD <strong>DOCTORADO

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="4" value="4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <label>*Ubicación de la institución</label>
                            <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MÉXICO</option>
                                <option value="2">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Entidad federativa</label>
                            <div class="input-group"></div>
                            <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                <option value="CAMPECHE">CAMPECHE</option>
                                <option value="CHIAPAS">CHIAPAS</option>
                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                <option value="CDMX">CIUDAD DE MÉXICO</option>
                                <option value="COAHUILA">COAHUILA</option>
                                <option value="COLIMA">COLIMA</option>
                                <option value="DURANGO">DURANGO</option>
                                <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                <option value="GUANAJUATO">GUANAJUATO</option>
                                <option value="GUERRERO">GUERRERO</option>
                                <option value="HIDALGO">HIDALGO</option>
                                <option value="JALISCO">JALISCO</option>
                                <option value="MICHOACÁN">MICHOACÁN</option>
                                <option value="MORELOS">MORELOS</option>
                                <option value="NAYARIT">NAYARIT</option>
                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                <option value="OAXACA">OAXACA</option>
                                <option value="PUEBLA">PUEBLA</option>
                                <option value="QUERÉTARO">QUERÉTARO</option>
                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                <option value="SINALOA">SINALOA</option>
                                <option value="SONORA">SONORA</option>
                                <option value="TABASCO">TABASCO</option>
                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                <option value="TLAXCALA">TLAXCALA</option>
                                <option value="VERACRUZ">VERACRUZ</option>
                                <option value="YUCATÁN">YUCATÁN</option>
                                <option value="ZACATECAS">ZACATECAS</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group" id="grupo__nom_usuario">
                            <label for="usuario">*Municipio o alcaldía</label>
                            <div class="form-group-input">
                                <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Carrera o área de conocimiento</label>
                            <div class="form-group-input">
                                <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">TITULO</option>
                                <option value="5">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Número de cédula profesional </label>
                            <div class="form-group-input">
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" id="9" style="display: none;">
            <h5>ESCOLARIDAD <strong>POSGRADO

                </strong> </h5>
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="4" value="4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <label>*Ubicación de la institución</label>
                            <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MÉXICO</option>
                                <option value="2">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Entidad federativa</label>
                            <div class="input-group"></div>
                            <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                <option value="CAMPECHE">CAMPECHE</option>
                                <option value="CHIAPAS">CHIAPAS</option>
                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                <option value="CDMX">CIUDAD DE MÉXICO</option>
                                <option value="COAHUILA">COAHUILA</option>
                                <option value="COLIMA">COLIMA</option>
                                <option value="DURANGO">DURANGO</option>
                                <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                <option value="GUANAJUATO">GUANAJUATO</option>
                                <option value="GUERRERO">GUERRERO</option>
                                <option value="HIDALGO">HIDALGO</option>
                                <option value="JALISCO">JALISCO</option>
                                <option value="MICHOACÁN">MICHOACÁN</option>
                                <option value="MORELOS">MORELOS</option>
                                <option value="NAYARIT">NAYARIT</option>
                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                <option value="OAXACA">OAXACA</option>
                                <option value="PUEBLA">PUEBLA</option>
                                <option value="QUERÉTARO">QUERÉTARO</option>
                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                <option value="SINALOA">SINALOA</option>
                                <option value="SONORA">SONORA</option>
                                <option value="TABASCO">TABASCO</option>
                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                <option value="TLAXCALA">TLAXCALA</option>
                                <option value="VERACRUZ">VERACRUZ</option>
                                <option value="YUCATÁN">YUCATÁN</option>
                                <option value="ZACATECAS">ZACATECAS</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group" id="grupo__nom_usuario">
                            <label for="usuario">*Municipio o alcaldía</label>
                            <div class="form-group-input">
                                <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Nombre de la Institución educativa</label>
                            <div class="form-group-input">
                                <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Carrera o área de conocimiento</label>
                            <div class="form-group-input">
                                <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Estatus</label>
                            <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">CURSANDO</option>
                                <option value="2">FINALIZADO</option>
                                <option value="3">TRUNCO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Periodos cursados</label>
                            <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">MES</option>
                                <option value="2">BIMESTRE</option>
                                <option value="3">TRIMESTRE</option>
                                <option value="4">CUATRIMESTRE</option>
                                <option value="5">SEMESTRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>*Documentos obtenidos</label>
                            <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                <option value="">Seleccione una opción</option>
                                <option value="1">BOLETA</option>
                                <option value="2">CERTIFICADO</option>
                                <option value="3">CONSTANCIA</option>
                                <option value="4">TITULO</option>
                                <option value="5">SIN DOCUMENTOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="hidden" name="2" value="2">
                        <div class="form-group" id="grupo__nombre">
                            <label for="nombre">*Número de cédula profesional </label>
                            <div class="form-group-input">
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="">Siguiente</label>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body" id="10" style="display: none;">
        <hr>
        <div class="row">
            <p>Habilita esta opción solo en caso que hayas tenido algun otro nivel de estudio, en caso contrario asui dejar este campo</p>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check.input" type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()">
                        <label class="form-check-label">SI ESTUDIÓ MAS DE UNA SELECCIONE Y ESPECIFIQUE:</label>
                    </div>
                </div>
            </div>
        </div>


        <div id="content" style="display: none;">
            <div class="col-md-6 col-sm-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>*Segundo grado maximo de estudios, selecccione una opcion</label>
                        <select name="status" id="status" onChange="mostrar(this.value);" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                            <option value="">Seleccion algun dato de la lista</option>
                            <option value="11">PRIMARIA</option>
                            <option value="12">SECUNDARIA</option>
                            <option value="13">BACHILLERATO</option>
                            <option value="14">CARRERA TECNICA O COMERCIAL</option>
                            <option value="15">LICENCIATURA</option>
                            <option value="16">DIPLOMADO</option>
                            <option value="17">MAESTRÍA</option>
                            <option value="18">DOCTORADO</option>
                            <option value="19">POSGRADO</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="card-body" id="11" style="display: none;">
                <h5>ESCOLARIDAD <strong>PRIMARIA</strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="1" value="1">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="12" style="display: none;">
                <h5>ESCOLARIDAD <strong>SECUNDARIA</strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="13" style="display: none;">
                <h5>ESCOLARIDAD <strong>BACHILLERATO

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="3" value="3">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="14" style="display: none;">
                <h5>ESCOLARIDAD <strong>CARRERA TÉCNICA O COMERCIAL

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="4" value="4">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <label>*Ubicación de la institución</label>
                                <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MÉXICO</option>
                                    <option value="2">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Entidad federativa</label>
                                <div class="input-group"></div>
                                <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                    <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                    <option value="CAMPECHE">CAMPECHE</option>
                                    <option value="CHIAPAS">CHIAPAS</option>
                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                    <option value="CDMX">CIUDAD DE MÉXICO</option>
                                    <option value="COAHUILA">COAHUILA</option>
                                    <option value="COLIMA">COLIMA</option>
                                    <option value="DURANGO">DURANGO</option>
                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                    <option value="GUERRERO">GUERRERO</option>
                                    <option value="HIDALGO">HIDALGO</option>
                                    <option value="JALISCO">JALISCO</option>
                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                    <option value="MORELOS">MORELOS</option>
                                    <option value="NAYARIT">NAYARIT</option>
                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                    <option value="OAXACA">OAXACA</option>
                                    <option value="PUEBLA">PUEBLA</option>
                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                    <option value="SINALOA">SINALOA</option>
                                    <option value="SONORA">SONORA</option>
                                    <option value="TABASCO">TABASCO</option>
                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                    <option value="TLAXCALA">TLAXCALA</option>
                                    <option value="VERACRUZ">VERACRUZ</option>
                                    <option value="YUCATÁN">YUCATÁN</option>
                                    <option value="ZACATECAS">ZACATECAS</option>
                                    <option value="EXTRANJERO">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="grupo__nom_usuario">
                                <label for="usuario">*Municipio o alcaldía</label>
                                <div class="form-group-input">
                                    <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Carrera o área de conocimiento</label>
                                <div class="form-group-input">
                                    <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">TITULO</option>
                                    <option value="5">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Número de cédula profesional </label>
                                <div class="form-group-input">
                                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="15" style="display: none;">
                <h5>ESCOLARIDAD <strong>LICENCIATURA

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="4" value="4">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <label>*Ubicación de la institución</label>
                                <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MÉXICO</option>
                                    <option value="2">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Entidad federativa</label>
                                <div class="input-group"></div>
                                <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                    <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                    <option value="CAMPECHE">CAMPECHE</option>
                                    <option value="CHIAPAS">CHIAPAS</option>
                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                    <option value="CDMX">CIUDAD DE MÉXICO</option>
                                    <option value="COAHUILA">COAHUILA</option>
                                    <option value="COLIMA">COLIMA</option>
                                    <option value="DURANGO">DURANGO</option>
                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                    <option value="GUERRERO">GUERRERO</option>
                                    <option value="HIDALGO">HIDALGO</option>
                                    <option value="JALISCO">JALISCO</option>
                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                    <option value="MORELOS">MORELOS</option>
                                    <option value="NAYARIT">NAYARIT</option>
                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                    <option value="OAXACA">OAXACA</option>
                                    <option value="PUEBLA">PUEBLA</option>
                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                    <option value="SINALOA">SINALOA</option>
                                    <option value="SONORA">SONORA</option>
                                    <option value="TABASCO">TABASCO</option>
                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                    <option value="TLAXCALA">TLAXCALA</option>
                                    <option value="VERACRUZ">VERACRUZ</option>
                                    <option value="YUCATÁN">YUCATÁN</option>
                                    <option value="ZACATECAS">ZACATECAS</option>
                                    <option value="EXTRANJERO">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="grupo__nom_usuario">
                                <label for="usuario">*Municipio o alcaldía</label>
                                <div class="form-group-input">
                                    <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Carrera o área de conocimiento</label>
                                <div class="form-group-input">
                                    <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">TITULO</option>
                                    <option value="5">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Número de cédula profesional </label>
                                <div class="form-group-input">
                                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="16" style="display: none;">
                <h5>ESCOLARIDAD <strong>DIPLOMADO

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="4" value="4">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <label>*Ubicación de la institución</label>
                                <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MÉXICO</option>
                                    <option value="2">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Entidad federativa</label>
                                <div class="input-group"></div>
                                <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                    <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                    <option value="CAMPECHE">CAMPECHE</option>
                                    <option value="CHIAPAS">CHIAPAS</option>
                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                    <option value="CDMX">CIUDAD DE MÉXICO</option>
                                    <option value="COAHUILA">COAHUILA</option>
                                    <option value="COLIMA">COLIMA</option>
                                    <option value="DURANGO">DURANGO</option>
                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                    <option value="GUERRERO">GUERRERO</option>
                                    <option value="HIDALGO">HIDALGO</option>
                                    <option value="JALISCO">JALISCO</option>
                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                    <option value="MORELOS">MORELOS</option>
                                    <option value="NAYARIT">NAYARIT</option>
                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                    <option value="OAXACA">OAXACA</option>
                                    <option value="PUEBLA">PUEBLA</option>
                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                    <option value="SINALOA">SINALOA</option>
                                    <option value="SONORA">SONORA</option>
                                    <option value="TABASCO">TABASCO</option>
                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                    <option value="TLAXCALA">TLAXCALA</option>
                                    <option value="VERACRUZ">VERACRUZ</option>
                                    <option value="YUCATÁN">YUCATÁN</option>
                                    <option value="ZACATECAS">ZACATECAS</option>
                                    <option value="EXTRANJERO">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="grupo__nom_usuario">
                                <label for="usuario">*Municipio o alcaldía</label>
                                <div class="form-group-input">
                                    <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Carrera o área de conocimiento</label>
                                <div class="form-group-input">
                                    <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">TITULO</option>
                                    <option value="5">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Número de cédula profesional </label>
                                <div class="form-group-input">
                                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="17" style="display: none;">
                <h5>ESCOLARIDAD <strong>MAESTRÍA

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="4" value="4">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <label>*Ubicación de la institución</label>
                                <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MÉXICO</option>
                                    <option value="2">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Entidad federativa</label>
                                <div class="input-group"></div>
                                <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                    <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                    <option value="CAMPECHE">CAMPECHE</option>
                                    <option value="CHIAPAS">CHIAPAS</option>
                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                    <option value="CDMX">CIUDAD DE MÉXICO</option>
                                    <option value="COAHUILA">COAHUILA</option>
                                    <option value="COLIMA">COLIMA</option>
                                    <option value="DURANGO">DURANGO</option>
                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                    <option value="GUERRERO">GUERRERO</option>
                                    <option value="HIDALGO">HIDALGO</option>
                                    <option value="JALISCO">JALISCO</option>
                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                    <option value="MORELOS">MORELOS</option>
                                    <option value="NAYARIT">NAYARIT</option>
                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                    <option value="OAXACA">OAXACA</option>
                                    <option value="PUEBLA">PUEBLA</option>
                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                    <option value="SINALOA">SINALOA</option>
                                    <option value="SONORA">SONORA</option>
                                    <option value="TABASCO">TABASCO</option>
                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                    <option value="TLAXCALA">TLAXCALA</option>
                                    <option value="VERACRUZ">VERACRUZ</option>
                                    <option value="YUCATÁN">YUCATÁN</option>
                                    <option value="ZACATECAS">ZACATECAS</option>
                                    <option value="EXTRANJERO">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="grupo__nom_usuario">
                                <label for="usuario">*Municipio o alcaldía</label>
                                <div class="form-group-input">
                                    <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Carrera o área de conocimiento</label>
                                <div class="form-group-input">
                                    <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">TITULO</option>
                                    <option value="5">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Número de cédula profesional </label>
                                <div class="form-group-input">
                                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="18" style="display: none;">
                <h5>ESCOLARIDAD <strong>DOCTORADO

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="4" value="4">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <label>*Ubicación de la institución</label>
                                <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MÉXICO</option>
                                    <option value="2">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Entidad federativa</label>
                                <div class="input-group"></div>
                                <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                    <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                    <option value="CAMPECHE">CAMPECHE</option>
                                    <option value="CHIAPAS">CHIAPAS</option>
                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                    <option value="CDMX">CIUDAD DE MÉXICO</option>
                                    <option value="COAHUILA">COAHUILA</option>
                                    <option value="COLIMA">COLIMA</option>
                                    <option value="DURANGO">DURANGO</option>
                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                    <option value="GUERRERO">GUERRERO</option>
                                    <option value="HIDALGO">HIDALGO</option>
                                    <option value="JALISCO">JALISCO</option>
                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                    <option value="MORELOS">MORELOS</option>
                                    <option value="NAYARIT">NAYARIT</option>
                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                    <option value="OAXACA">OAXACA</option>
                                    <option value="PUEBLA">PUEBLA</option>
                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                    <option value="SINALOA">SINALOA</option>
                                    <option value="SONORA">SONORA</option>
                                    <option value="TABASCO">TABASCO</option>
                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                    <option value="TLAXCALA">TLAXCALA</option>
                                    <option value="VERACRUZ">VERACRUZ</option>
                                    <option value="YUCATÁN">YUCATÁN</option>
                                    <option value="ZACATECAS">ZACATECAS</option>
                                    <option value="EXTRANJERO">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="grupo__nom_usuario">
                                <label for="usuario">*Municipio o alcaldía</label>
                                <div class="form-group-input">
                                    <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Carrera o área de conocimiento</label>
                                <div class="form-group-input">
                                    <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">TITULO</option>
                                    <option value="5">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Número de cédula profesional </label>
                                <div class="form-group-input">
                                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body" id="19" style="display: none;">
                <h5>ESCOLARIDAD <strong>POSGRADO

                    </strong> </h5>
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="4" value="4">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                <label>*Ubicación de la institución</label>
                                <select name="ubicaInnti" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MÉXICO</option>
                                    <option value="2">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Entidad federativa</label>
                                <div class="input-group"></div>
                                <select name="entFederativa" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                    <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                    <option value="CAMPECHE">CAMPECHE</option>
                                    <option value="CHIAPAS">CHIAPAS</option>
                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                    <option value="CDMX">CIUDAD DE MÉXICO</option>
                                    <option value="COAHUILA">COAHUILA</option>
                                    <option value="COLIMA">COLIMA</option>
                                    <option value="DURANGO">DURANGO</option>
                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                    <option value="GUERRERO">GUERRERO</option>
                                    <option value="HIDALGO">HIDALGO</option>
                                    <option value="JALISCO">JALISCO</option>
                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                    <option value="MORELOS">MORELOS</option>
                                    <option value="NAYARIT">NAYARIT</option>
                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                    <option value="OAXACA">OAXACA</option>
                                    <option value="PUEBLA">PUEBLA</option>
                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                    <option value="SINALOA">SINALOA</option>
                                    <option value="SONORA">SONORA</option>
                                    <option value="TABASCO">TABASCO</option>
                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                    <option value="TLAXCALA">TLAXCALA</option>
                                    <option value="VERACRUZ">VERACRUZ</option>
                                    <option value="YUCATÁN">YUCATÁN</option>
                                    <option value="ZACATECAS">ZACATECAS</option>
                                    <option value="EXTRANJERO">EXTRANJERO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="grupo__nom_usuario">
                                <label for="usuario">*Municipio o alcaldía</label>
                                <div class="form-group-input">
                                    <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Nombre de la Institución educativa</label>
                                <div class="form-group-input">
                                    <input type="text" name="nombreInst" id="nombreInst" class="form-control" placeholder="NOMBRE DE LA INSTITUCIÓN" title="Ingresa el nombre completo de la Institución a la que asististe" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Carrera o área de conocimiento</label>
                                <div class="form-group-input">
                                    <input type="text" name="carrera" id="carrera" class="form-control" placeholder="Ej. CONTABILIDAD" title="Ingresa la carrera que cursaste" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Estatus</label>
                                <select name="estatus" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">CURSANDO</option>
                                    <option value="2">FINALIZADO</option>
                                    <option value="3">TRUNCO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Periodos cursados</label>
                                <select name="periodoCurs" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">MES</option>
                                    <option value="2">BIMESTRE</option>
                                    <option value="3">TRIMESTRE</option>
                                    <option value="4">CUATRIMESTRE</option>
                                    <option value="5">SEMESTRE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>*Documentos obtenidos</label>
                                <select name="docuObteni" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">BOLETA</option>
                                    <option value="2">CERTIFICADO</option>
                                    <option value="3">CONSTANCIA</option>
                                    <option value="4">TITULO</option>
                                    <option value="5">SIN DOCUMENTOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <input type="hidden" name="2" value="2">
                            <div class="form-group" id="grupo__nombre">
                                <label for="nombre">*Número de cédula profesional </label>
                                <div class="form-group-input">
                                    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="DE 7 A 8 CARACTERES" title="Ingresa tu número de cédula de 7 a 8 caracteres" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="7" maxlength="8" pattern="{7,8}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="">Siguiente</label>
                                <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>