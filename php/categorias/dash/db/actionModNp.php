<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id = $_POST['id_np'];
    $id_tp2 = $_POST['id_tp2'];
    $nom_p = $_POST['nom_p'];
  
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
  
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

    $query = "UPDATE nom_programa SET nom_p ='$nom_p', id_tp2 = $id_tp2,  date_mod='$date' WHERE id_np = $id";
  
    // $verificar_nombre = mysqli_query($conexion, "SELECT * FROM nom_programa WHERE nom_p = '$nom_p'");
    // if (mysqli_num_rows($verificar_nombre) > 0) {
    //   echo '<script>
    //               alert("El nombre del programa ya esta agregado, intente con otro por favor");
    //               window.history.go(-2);
    //            </script>';
    //   exit;
    // }

    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar el nombre del programa");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades, el nombre del programa se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  
