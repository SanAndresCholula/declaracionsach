<!-- Input addon -->
<div class="card collapsed-card card-purple">
   <div class="card-header">
      <h3 class="card-title">Generales</h3>
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
      <p>Datos generales del declarante</p>
      <form action="../assets/add_generales.php" method="POST">
         <div class="row">
            <div class="col-md-3 col-sm-12">
               <div class="form-group">
                  <label>*Estado civil</label>
                  <select name="estadoC" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <option value="1">CASADO (A)</option>
                     <option value="2">UNIÓN LIBRE</option>
                     <option value="3">SOLTERO (A)</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-sm-12">
               <div class="form-group">

                  <label>*Regimen matrimonial</label>
                  <select name="regimenM" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <option value="1">SOCIEDAD CONYUGAL</option>
                     <option value="2">SEPARACIÓN DE BIENES</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-sm-12">
               <?php
               $sql = "SELECT * FROM pais  ORDER BY id_pais ASC";
               $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
               ?>
               <div class="form-group">
                  <label>*País donde nació</label>
                  <select name="paisN" id="paisN" class="form-control select2 select2-primary" title="Selecciona una sección de la lista" data-dropdown-css-class="select2-primary" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <?php while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_pais'] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
                           <?php echo $row['pais'] ?>
                        </option>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-sm-12">
               <?php
               $sql = "SELECT * FROM nacionalidad  ORDER BY id_nacionalidad ASC";
               $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
               ?>
               <div class="form-group">
                  <label>*Nacionalidad</label>
                  <select name="nacionalidad" id="nacionalidad" class="form-control select2 select2-primary" title="Selecciona una sección de la lista" data-dropdown-css-class="select2-primary" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <?php while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_nacionalidad'] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
                           <?php echo $row['nacionalidad'] ?>
                        </option>
                     <?php } ?>
                  </select>
               </div>
            </div>

            <div class="col-md-3 col-sm-12">
               <div class="form-group">
                  <label>*Entidad donde nació</label>
                  <div class="input-group"></div>
                  <select name="entidadN" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
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

            <div class="col-md-2 col-sm-12">
               <div class="form-group">
                  <label>*Celular</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                     </div>
                     <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask required>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-12">
               <div class="form-group">
                  <label>Teléfono fijo</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                     </div>
                     <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-12">
               <div class="form-group">
                  <label>*Genero</label>
                  <div class="input-group"></div>
                  <select name="genero" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <option value="1">MUJER</option>
                     <option value="2">HOMBRE</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-sm-12">
               <div class="form-group">
                  <label>*Lugar donde se ubica</label>
                  <div class="input-group"></div>
                  <select name="lugarUbica" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <option value="1">MEXICO</option>
                     <option value="2">EXTRANJERO</option>
                  </select>
               </div>
            </div>
            <hr>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__nom_usuario">
                  <label for="usuario">*Domicilio particular</label>
                  <div class="form-group-input">
                     <input type="text" name="domicilio" id="domicilio" class="form-control" placeholder="Ej. CALLE 16 DE SEPTIEMBRE 102" title="CALLE, NÚMERO EXT. E INT." onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__nom_usuario">
                  <label for="usuario">*Localidad o colonia</label>
                  <div class="form-group-input">
                     <input type="text" name="locCol" id="locCol" class="form-control" placeholder="Ej. COLONIA CENTRO" title="INGRESA TU LOCALIDAD O COLONIA ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__nom_usuario">
                  <label for="usuario">*Municipio</label>
                  <div class="form-group-input">
                     <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Ej. SAN ANDRÉS CHOLULA" title="INGRESA TU MUNICIPIO ACTUAL" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required />
                  </div>
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
            <div class="col-md-2 col-sm-12">
               <div class="form-group">
                  <label>*Código postal</label>
                  <div class="input-group-input">
                     <input type="number" class="form-control" placeholder="Ej. 72810 " pattern="(^([0-9]{5,5})|^)$" title="SOLO 5 DIGITOS Ej. 72810" minlength="3" maxlength="3" required>
                  </div>
               </div>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-2 col-sm-12">
               <div class="form-group">
                  <label for="">No puedes editar</label>
                  <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>