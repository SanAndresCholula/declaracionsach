<?php
ini_set('date.timezone', 'America/Mexico_City');
$date = date('Y-m-d H:i:s');
require 'config/funciones.php';
// if (!haIniciadoSesion()) {
//    header('Location: ../../index.php');
// }
conectar();
?>
<!DOCTYPE html>
<html lang="es">

<head>

   <title>DeclaraSACH | Registro</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- Toastr css-->
   <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
   <!-- CSS form_registrar.css -->
   <link rel="stylesheet" href="dist/css/form_registrar.css">
   <!-- Icon -->
   <link rel="icon" href="../img/icon.png" type="image/x-icon">
   <style>
      html,
      body {
         background-image: url('../img/1.jpg');
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-repeat: no-repeat;
         height: 100%;
         font-family: 'Numans', sans-serif;
      }

      /* pointer solo lectura */
      input[readonly] {
         cursor: no-drop;
      }
   </style>
</head>

<body class="hold-transition register-page">
   <div class="register-box" style="width: 80%;">
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <div class="row">
               <div class="col-md-2">
                  <small style="color: #aaaaaa;">* campos obligatorios</small>
               </div>
               <div class="col-md-8 col-md-6">
                  <a href="../index.php" class="h1">Declara<b>SACH</b></a>
               </div>
               <div class="col-md-2 col-sm-2">
                  <a href="#">Ayuda&nbsp;<i class="fas fa-video" title="Ver video tutorial"></i></a>
                  <a style="color: red;" href="../index.php">Salir&nbsp;<i class="fas fa-window-close"></i></a>
               </div>
            </div>

         </div>
         <div class="card-body" style="width: 100%; height: 490px; overflow-y: scroll;">
            <p class="login-box-msg"><b>¡Registrate aqui!</b></p>
            <form action="assets/addUser.php" method="post" class="formulario" id="formulario">
               <div class="row">

                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">*Nombre (s)</label>
                        <div class="formulario__grupo-input">
                           <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej. JOSÉ JUAN" title="Ingresa tu nombre completo" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="50" pattern="^[A-Z\s]{3-50]" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El nombre solo puede contener letras con un mínimo de 3 a un máximo de 50 letras con espacios en blanco.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__paterno">
                        <label for="paterno" class="formulario__label">*Apellido paterno</label>
                        <div class="formulario__grupo-input">
                           <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Ej. HERNÁNDEZ" title="Ingresa tu apellido paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="50" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El apellido paterno solo puede contener letras y un mínimo de 3 a un máximo de 50 letras <b>sin espacios en blanco</b>.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__materno">
                        <label for="materno" class="formulario__label">*Apellido materno</label>
                        <div class="formulario__grupo-input">
                           <input type="text" name="materno" id="materno" class="form-control" placeholder="Ej. GARCÍA " title="Ingresa tu apellid materno" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="50" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El apellido materno solo puede contener letras y un mínimo de 3 a un máximo de 50 letras con espacios en blanco.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__curp">
                        <label for="curp" class="formulario__label">*CURP</label>
                        <div class="formulario__grupo-input">
                           <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"><a href="" data-toggle="modal" data-target="#modal" target="_blank" title="Da clic aquí para ver como se conforma el RFC"><i class="fas fa-info"></i></a></span>
                              <input type="text" name="curp" id="curp" class="form-control" placeholder="Ej. 18 dig. CABB900101HPLRRR06" title="Ingresa tus 18 digitos de tu CURP para continuar" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="18" maxlength="18" required />
                              <i class="formulario__validacion-estado fas fa-times-circle"></i>
                           </div>
                           <p class="formulario__input-error">El CURP solo puede contener letras Y números de 18 caracteres.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo " id="grupo__rfc">
                        <label for="rfc" class="formulario__label">*RFC</label>
                        <div class="formulario__grupo-input">
                           <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"><a href="" data-toggle="modal" data-target="#modal-lg" target="_blank" title="Da clic aquí para ver como se conforma el RFC"><i class="fas fa-info"></i></a></span>
                              <input type="text" name="rfc" id="rfc" class="form-control" placeholder="Ej. 10 dig. CABB900101" title="Ingresa tus 10 digitos de tu RFC para continuar" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="10" maxlength="10" required />
                              <i class="formulario__validacion-estado fas fa-times-circle"></i>
                           </div>
                        </div>
                        <p class="formulario__input-error">El RFC solo puede contener letras y números de 10 caracteres.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-10">
                     <div class="formulario__grupo" id="grupo__homoclave">
                        <label for="homoclave" class="formulario__label">Homoclave</label>
                        <div class="formulario__grupo-input">
                           <input type="text" name="homoclave" id="homoclave" class="form-control" placeholder="Ej. AB1" title="Ej. AB3" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="3" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La Homoclave solo puede contener letras y numeros de 3 caracteres.</p>
                     </div>
                  </div>

                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Email institucional</label>
                        <div class="formulario__grupo-input">
                           <input type="email" name="correo" id="correo" class="form-control" placeholder="Ej. correo1@correo.com" title="En caso de tener introdúzcalo" />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones, @ y guion bajo.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__correo2">
                        <label for="correo" class="formulario__label">*Email alterno</label>
                        <div class="formulario__grupo-input">
                           <input type="email" name="correo2" id="correo2" class="form-control" placeholder="Ej. correo2@correo.com" title="Introduzca su correo personal" />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones, @ y guion bajo.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="formulario__grupo">
                        <label for="f_recepcion" class="formulario__label">Fecha de recepción</label>
                        <div class="formulario__grupo-input">
                           <input type="text" name="f_recepcion" id="f_recepcion" class="form-control" value="<?php echo $date ?>" onfocus="this.blur" readonly />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label">*Contraseña</label>
                        <div class="formulario__grupo-input">
                           <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa contraseña" title="Introduzca una contraseña" minlength="6" maxlength="12" pattern="^[A-Z\s]{3-50]" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La contraseña tiene que ser de 6 a 12 dígitos.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__password2">
                        <label for="password2" class="formulario__label">*Repetir Contraseña</label>
                        <div class="formulario__grupo-input">
                           <input type="password" name="password2" id="password2" class="form-control" placeholder="Repita contraseña" title="Repita contraseña" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="formulario__grupo" id="grupo__nom_usuario">
                        <label for="usuario" class="formulario__label">*Nombre de alias (corto)</label>
                        <div class="formulario__grupo-input">
                           <input type="text" name="nom_usuario" id="nom_usuario" class="form-control" placeholder="Ej. USUARIO123" title="Nombre para rapida identificación" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="6" maxlength="20" pattern="^[A-Z\s]{6-20]" required />
                           <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El nombre de usuario debe tener letras y numeros ('_', '@') <b>sin espacios en blanco</b>, minimo de 6 a 20 caracteres.</p>
                     </div>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="icheck-primary" id="grupo__terminos">
                        <input type="checkbox" id="agreeTerms" name="terminos" id="terminos" value="agree" required>
                        <label for="agreeTerms">
                           Acepto <a href="#" title="¡Descarga el documento dando clic aquí!">terminos y condiciones</a>
                        </label>
                     </div>

                  </div>
                  <div class="col-md-2 col-sm-12"></div>
                  <div class="col-md-2 col-sm-12">
                     <button type="reset" class="btn btn-warning btn-block"><a href="" style="color: #fff;"><i class="fas fa-broom"></i> Limpiar</a></button>
                  </div>
                  <div class="col-md-2 col-sm-12">
                     <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" onclick="return confirm('¿Estás seguro de que tus datos están correctos?, ¿quieres continuar? ');"><i class="fas fa-save"></i> Registrar</button>
                     <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                  </div>
               </div>
            </form>
         </div>
      </div><!-- /.card -->
   </div>
   <footer></footer>
   <div class="float-right d-none d-sm-inline-block" style="color:#fff">
      <strong>DeclaraSACH &copy; 2021, Realizado por: <a href="mailto: soporteit@sach.gob.mx">Innovación Tecnológica</a>,</strong>
      by <a href="">ISC-JUGT</a>. Ext. 105 <b> Version</b> 1.1.Alpha
   </div>
   </footer>
   <!-- Modals -->
   <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">¿Como se conforma un RFC?</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <img src="img/rfc.png" alt="Ejemplo RFC" style="width: 100%; height:50%">
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="modal">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">¿Como se conforma un CURP?</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <img src="img/curp.png" alt="Ejemplo RFC" style="width: 100%; height:50%">
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="../plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="dist/js/adminlte.min.js"></script>
   <!-- Toastr -->
   <script src="../plugins/toastr/toastr.min.js"></script>
   <!-- registro.js -->
   <script src="dist/js/registro.js"></script>
</body>

</html>
<!-- https://www.youtube.com/watch?v=s3pC93LgP18&t=62s -->