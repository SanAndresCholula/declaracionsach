<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id = $_POST['id_secre'];
    $secretaria = $_POST['secretaria'];

  
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
  
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

    $query = "UPDATE secretaria SET secretaria ='$secretaria' WHERE id_secre = $id";
  
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM secretaria WHERE secretaria = '$secretaria'");
    if (mysqli_num_rows($verificar_nombre) > 0) {
      echo '<script>
                  alert("El nombre de esta secretaria ya esta agregada, intente con otro por favor");
                  window.history.go(-2);
               </script>';
      exit;
    }

    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar seccion");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades, la secretaria se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  
