<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $colonia = $_POST['colonia'];

  $query = ("INSERT INTO colonia (colonia) VALUES ('$colonia')");

  // verificar que no se repita el numero de seccion no se repita
  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM colonia  WHERE colonia = '$colonia' ");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de la colonia ya esta registrado, intente con otro por favor");
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
                alert("Felicidades, el nombre de la colonia se agrego exitosamente.");
                window.history.go(-1);
             </script>';
  }
}
