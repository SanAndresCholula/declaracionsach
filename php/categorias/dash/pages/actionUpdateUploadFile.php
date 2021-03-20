<?php
require '../../../../function/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../../../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $id = $_POST['id_reporte'];
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $type = $_FILES['photo']['type'];
    $temp = $_FILES['photo']['tmp_name'];
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
    $comentario = $_POST['comentario'];
    $usuario = $_POST['usuario'];
    /* $caption1=$_POST['caption'];
    $link=$_POST['link'];*/
  
    move_uploaded_file($temp, "upload/" . $name);
  
    $query = "UPDATE reporte SET usuario ='$usuario', comentario = '$comentario', name = '$name', date = '$date' WHERE id_reporte = '$id' ";
  
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM reporte WHERE name = '$name'");
    if (mysqli_num_rows($verificar_nombre) > 0) {
      echo '<script>
                  alert("El nombre de tu archivo ya esta registrado, intente con otro por favor");
                  window.history.go(-2);
               </script>';
      exit;
    }
  
    //ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar tu archivo");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades, el archivo se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
    }
  }
  
