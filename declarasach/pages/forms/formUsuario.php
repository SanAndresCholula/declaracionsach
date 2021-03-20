<!-- Input addon -->
<div class="card collapsed-card card-purple">
   <div class="card-header">
      <h3 class="card-title">Datos de alta de usuario</h3>
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
      <p>Apartado de visualización de datos proporcionados cuando te diste de alta en la plataforma, se te recomienda ya no modificar ningún registro</p>
      <form action="../assets/mod_usuario_reg.php" method="POST">
         <div class="row">
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__nombre">
                  <label for="nombre">*Nombre (s)</label>
                  <div class="form-group-input">
                     <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                     <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej. JOSÉ JUAN" title="Ingresa tu nombre completo" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="50" pattern="^[A-Z\s]{3-50}" required value="<?php echo $nombres ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__paterno">
                  <label for="paterno">*Apellido paterno</label>
                  <div class="form-group-input">
                     <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Ej. HERNÁNDEZ" title="Ingresa tu apellido paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="50" required value="<?php echo $paterno ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__materno">
                  <label for="materno">*Apellido materno</label>
                  <div class="form-group-input">
                     <input type="text" name="materno" id="materno" class="form-control" placeholder="Ej. GARCÍA " title="Ingresa tu apellid materno" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="50" required value="<?php echo $materno ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__curp">
                  <label for="curp">*CURP</label>
                  <div class="form-group-input">
                     <div class="input-group mb-3">
                        <input type="text" name="curp" id="curp" class="form-control" placeholder="Ej. 18 dig. CABB900101HPLRRR06" title="Ingresa tus 18 digitos de tu CURP para continuar" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="18" maxlength="18" required value="<?php echo $curp ?>" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group " id="grupo__rfc">
                  <label for="rfc">*RFC</label>
                  <div class="form-group-input">
                     <div class="input-group mb-3">
                        <input type="text" name="rfc" id="rfc" class="form-control" placeholder="Ej. 10 dig. CABB900101" title="Ingresa tus 10 digitos de tu RFC para continuar" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="10" maxlength="10" required value="<?php echo $rfc ?>" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-10">
               <div class="form-group" id="grupo__homoclave">
                  <label for="homoclave">Homoclave</label>
                  <div class="form-group-input">
                     <input type="text" name="homoclave" id="homoclave" class="form-control" placeholder="Ej. AB1" title="Ej. AB3" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="3" required value="<?php echo $homoclave ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__correo">
                  <label for="correo">Email institucional</label>
                  <div class="form-group-input">
                     <input type="email" name="correo" id="correo" class="form-control" placeholder="Ej. correo1@correo.com" title="En caso de tener introdúzcalo" value="<?php echo $email_inst ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__correo2">
                  <label for="correo">*Email alterno</label>
                  <div class="form-group-input">
                     <input type="email" name="correo2" id="correo2" class="form-control" placeholder="Ej. correo2@correo.com" title="Introduzca su correo personal" value="<?php echo $email_pers ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="form-group">
                  <label for="f_recepcion">Fecha de nueva declaración</label>
                  <div class="form-group-input">
                     <input type="text" name="f_recepcion" id="f_recepcion" class="form-control" value="<?php echo $date ?>" onfocus="this.blur" readonly />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__password">
                  <label for="password">*Contraseña</label>
                  <div class="form-group-input">
                     <input type="text" name="password" id="password" class="form-control" placeholder="Ingresa contraseña" title="Introduzca una contraseña" minlength="6" maxlength="12" pattern="^[A-Z\s]{3-50}" required value="<?php echo $pass ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="form-group" id="grupo__nom_usuario">
                  <label for="usuario">*Nombre de alias (corto)</label>
                  <div class="form-group-input">
                     <input type="text" name="nom_usuario" id="nom_usuario" class="form-control" placeholder="Ej. USUARIO123" title="Nombre para rapida identificación" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="6" maxlength="20" required value="<?php echo $usuario ?>" />
                  </div>
               </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 col-sm-12">
               <div class="form-group">
                  <label for="">No puedes editar</label>
                  <button type="submit" name="submit" id="submit" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de modificar tus datos?, ¿quieres continuar? ');"><i class="fas fa-pen"></i> Editar</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>