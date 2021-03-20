<?php
require '../../../../function/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../../../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id = $_POST['id_tp'];
    $nom_tp = $_POST['nom_tp'];
  
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
  
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

    $query = "UPDATE tipo_programa SET nom_tp ='$nom_tp', date_mod='$date' WHERE id_tp = $id";
  
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM tipo_programa WHERE nom_tp = '$nom_tp'");
    if (mysqli_num_rows($verificar_nombre) > 0) {
      echo '<script>
                  alert("El nombre del tipo de programa ya esta agregado, intente con otro por favor");
                  window.history.go(-2);
               </script>';
      exit;
    }
  
    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar tu tipo de programa");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades, el tipo de programa se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  
