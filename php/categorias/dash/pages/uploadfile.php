<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../../index.html');
}
conectar();

if (isset($_POST['submit']) != "") {
  $name = $_FILES['photo']['name'];
  $size = $_FILES['photo']['size'];
  $type = $_FILES['photo']['type'];
  $temp = $_FILES['photo']['tmp_name'];
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $comentario = $_POST['comentario'];
  $usuario = $_POST['usuario'];
  $dependencia = $_POST['dependencia'];
  /* $caption1=$_POST['caption'];
  $link=$_POST['link'];*/
  $directorio = "upload/$usuario";
  //permisos para crear carpeta
  if(!file_exists($directorio)){
    mkdir($directorio, 0777, true);
  }
  move_uploaded_file($temp, $directorio."/".$name);

  $directorio=$directorio."/".$name;

  $query = ("INSERT INTO reporte (usuario, comentario,name,date,dependencia) VALUES ('$usuario','$comentario','$name','$date','$dependencia')");

  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM reporte WHERE name = '$name'");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de tu archivo ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
    exit;
  }

  //ejecutar consulta
  $result = mysqli_query($conexion, $query);
  if (!$result) {
    echo '<script>
                alert("Lo siento!, Error al registrar tu archivo");
                window.history.go(-1);
             </script>';
  } else {
    echo '<script>
                alert("Felicidades, el archivo se registro exitosamente.");
                window.history.go(-1);
             </script>';
  }
}
