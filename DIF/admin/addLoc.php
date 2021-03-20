<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $localidad = $_POST['localidad'];

  $query = ("INSERT INTO localidad(localidad) VALUES ('$localidad')");

  // verificar que no se repita el nombre del tipo de programa
  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM localidad  WHERE localidad = '$localidad'");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de tu localidad ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
    exit;
  }

  $result = mysqli_query($conexion, $query);

  if (!$result) {
    echo '<script type="text/javascript>
                alert("Lo siento!, Error al registrar" );
                window.history.go(-1);
             </script>';
  } else {
    echo '<script>
                alert("Felicidades, el nombre de la localidad se registro exitosamente.");
                window.history.go(-1);
             </script>';
  }
}
