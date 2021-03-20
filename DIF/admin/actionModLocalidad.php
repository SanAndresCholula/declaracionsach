<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
  $id = $_POST['id_loc'];
  $localidad = $_POST['localidad'];

  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');

  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

  $query = "UPDATE localidad SET localidad ='$localidad' WHERE id_loc = $id";

  //ejecutar consulta
  $result = mysqli_query($conexion, $query);
  if (!$result) {
    echo '<script>
                  alert("Lo siento!, Error al actualizar la localidad");
                  window.history.go(-2);
               </script>';
  } else {
    echo '<script>
                  alert("Felicidades, la localidad se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
  }
}
