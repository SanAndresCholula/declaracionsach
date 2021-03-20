<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id_cp = $_POST['id_cp'];
    $cp = $_POST['cp'];
  
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
  
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

    $query = "UPDATE c_postal SET cp ='$cp' WHERE id_cp = $id_cp";
  
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM c_postal WHERE cp = '$cp'");
    if (mysqli_num_rows($verificar_nombre) > 0) {
      echo '<script>
                  alert("El C.P. ya esta agregado, intente con otro por favor");
                  window.history.go(-2);
               </script>';
      exit;
    }
  
    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar el C.P.");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades,C.P. se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  