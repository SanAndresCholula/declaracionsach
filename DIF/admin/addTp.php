<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.html');
}
conectar();

if (isset($_POST['submit']) != "") {
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $nom_tp = $_POST['nom_tp'];

  $query = ("INSERT INTO tipo_programa(nom_tp, date) VALUES ('$nom_tp','$date')");

  // verificar que no se repita el nombre del tipo de programa
  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM tipo_programa  WHERE nom_tp = '$nom_tp'");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de tu archivo ya esta registrado, intente con otro por favor");
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
                alert("Felicidades, el tipo de programa se registro exitosamente.");
                window.history.go(-1);
             </script>';
  }
}