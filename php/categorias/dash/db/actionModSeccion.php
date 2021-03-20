<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id = $_POST['id_sec'];
    $seccion = $_POST['seccion'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
  
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
  
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

    $query = "UPDATE seccion SET id_nsec1 ='$seccion', id_col1='$colonia', id_cp1 = $cp WHERE id_sec = $id";
  
    // $verificar_nombre = mysqli_query($conexion, "SELECT * FROM seccion WHERE colonia = '$colonia'");
    // if (mysqli_num_rows($verificar_nombre) > 0) {
    //   echo '<script>
    //               alert("El nombre de la seccion ya esta agregado, intente con otro por favor");
    //               window.history.go(-2);
    //            </script>';
    //   exit;
    // }

    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar seccion");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades, la seccion se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  
