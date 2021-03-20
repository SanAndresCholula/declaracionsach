<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id_col = $_POST['id_col'];
    $colonia = $_POST['colonia'];
  
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
  
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

    $query = "UPDATE colonia SET colonia ='$colonia' WHERE id_col = $id_col";
  
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM colonia WHERE colonia = '$colonia'");
    if (mysqli_num_rows($verificar_nombre) > 0) {
      echo '<script>
                  alert("La colonia ya esta agregado, intente con otro por favor");
                  window.history.go(-2);
               </script>';
      exit;
    }
  
    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar la colonia");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades, la colonia se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  