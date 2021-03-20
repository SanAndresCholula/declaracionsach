<!-- Input addon -->
<div class="card collapsed-card card-purple">
   <div class="card-header">
      <h3 class="card-title">Experiencia laboral</h3>
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
   <p>En este apartado deberás proporcionar la información correspondiente a tus tres últimos empleos, sin
contar el actual. Se sugiere tener a la mano el currículum vítae.
</p>
<p>**Solo en caso de nunca antes haber trabajado elije la opción: <strong>NINGUNO</strong> y continua con el formulario.</p>
      <form action="" method="POST">
         <div class="row">
            <div class="col-md-3 col-sm-12">
               <div class="form-group">
                  <label>Sector de empleo
                  </label>
                  <select name="sectorE" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="1" selected="selected"><strong>NINGUNO</strong></option>
                     <option value="2">SECTOR PRIVADO</option>
                     <option value="3">SECTOR PÚBLICO</option>
                     <option value="4">SECTOR SOCIAL</option>
                  </select>
               </div>
            </div>
            <div class="col-md-9"></div>
            <div class="col-md-3 col-sm-12">
               <div class="form-group">
                  <label>*Poder</label>
                  <select name="poder" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <option value="1">EJECUTIVO</option>
                     <option value="2">JUDICIAL</option>
                     <option value="3">LEGISLATIVO</option>
                     <option value="4">ÓRGANO CONSTITUCIONAL AUTÓNOMO</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-sm-12">
               <div class="form-group">
                  <label>*Ámbito</label>
                  <select name="ambito" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                     <option value="">Seleccione una opción</option>
                     <option value="1">FEDERAL</option>
                     <option value="2">ESTATAL</option>
                     <option value="3">LEGISLATIVO</option>
                  </select>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="form-group">
                  <label>*Nombre</label>
                  <div class="input-group">            
                     <input type="text" class="form-control" placeholder="Ej. INSTITUCIÓN/EMPRESA/NOMBRE, DENOMINACIÓN O RAZÓN SOCIAL" title="NOMBRE DE DONDE TRABAJABAS ANTERIORMENTE" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required >
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="form-group">
                  <label>Unidad administrativa/Área</label>
                  <div class="input-group">            
                     <input type="text" class="form-control" placeholder="Ej. INSTITUCIÓN/EMPRESA/NOMBRE, DENOMINACIÓN O RAZÓN SOCIAL" title="NOMBRE DE DONDE TRABAJABAS ANTERIORMENTE" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="40" required >
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__nom_usuario">
                  <label for="usuario">*Puesto o cargo desempeñado</label>
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