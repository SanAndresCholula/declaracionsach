<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $cp = $_POST['cp'];

  $query = ("INSERT INTO c_postal(cp) VALUES ('$cp')");

  // verificar que no se repita el nombre del tipo de programa
  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM c_postal  WHERE cp = '$cp'");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El código postal ya esta registrado, intente con otro por favor");
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
                alert("Felicidades, el código postal se registro exitosamente.");
                window.history.go(-1);
             </script>';
  }
}
