<?php
require '../config/funciones.php';

conectar();
if (isset($_POST['enviar']) != "") {
   ini_set('date.timezone', 'America/Mexico_City');
   $date = date('Y-m-d H:i:s');

   $nombre = $_POST['nombre'];
   $paterno = $_POST['paterno'];
   $materno = $_POST['materno'];
   $curp = $_POST['curp'];
   $rfc = $_POST['rfc'];
   $homoclave = $_POST['homoclave'];
   $pass = $_POST['password'];
   $pass_verif = $_POST ['password2'];
   $email_inst = (!empty($_POST['correo'])) ? $_POST['correo'] : 'Sin correo institucional';
   $email_alt = $_POST['correo2'];
   $estatus = 1;
   $f_recepcion = $_POST['f_recepcion'];
   $nom_usuario = $_POST['nom_usuario'];
   $admin = 0;
   $tipo_d = 0;
   $host = gethostname();
   $ip = gethostbyname("www.w3schools.com");
   $info = php_uname();

   //Generar firma
   $alphabeth = "ABCDEFGHIJKLMNOPQRSTUVWYZabcdefghijklmnsopqrstvwxz1234567890";
   $code = "";
   for ($i = 0; $i < 40; $i++) {
      $code .= $alphabeth[rand(0, strlen($alphabeth) - 1)];
      $code = $code;
      $firma = $code;
   }

   if ($_POST['password'] <> $_POST['password2']) {
      echo '<script>
      alert("¡las contraseñas no coinciden, verifique nuevamente por favor!");    
      window.history.go(-1);
      </script>';
   } else {
      $verificar_nombre = mysqli_query($conexion, "SELECT nombres, p_apellido, s_apellido FROM usuarios WHERE nombres = '$nombre' AND p_apellido = '$paterno' AND s_apellido = '$materno' ");
      if (mysqli_num_rows($verificar_nombre) > 0) {
         echo '<script>
            alert("¡El nombre y los apellidos ya se encuentran registrado en la base de datos, si tienes problemas para generar tu usuario comunícate a IT Ext. 105!");
            window.history.go(-1);
         </script>';
         exit;
      }
      $query = "INSERT INTO usuarios(nombres, p_apellido, s_apellido, curp, rfc, homoclave, pass, email_inst, email_pers, estatus, fecha_creacion, fecha_ultimo_acceso, ip_ultimo_acceso, admin, tipo_declaracion, usuario, firma) VALUES ('$nombre', '$paterno', '$materno', '$curp','$rfc','$homoclave','$pass','$email_inst','$email_alt','$estatus','$f_recepcion','$date','$ip','$admin', '$tipo_d', '$nom_usuario', '$firma')";
      $resultado = mysqli_query($conexion, $query);

      // echo $id_usuario = mysqli_insert_id($conexion);

      // echo  $query2 = "UPDATE usuarios SET usuario = concat($id_usuario,'_', '" . $nom_usuario . "') WHERE id_usuario = $id_usuario";
      // echo $resultado = mysqli_query($conexion, $query2);

      echo '<script>
      alert("¡Felicidades, tu usuario se ha generado exitosamente!");
      window.history.go(-1);
      </script>';
      exit;
   }
} else {
}
// header('Location: ../');
desconectar();
