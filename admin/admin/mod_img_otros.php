<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../index.php');
}
conectar();
//  datos del uploadfile
if (isset($_POST['submit']) != "") {

    $id = $_POST['id'];
    $b = $_POST['nombre'];
    $nameotro = (!empty($_FILES['otrodoc']['name'])) ? $_FILES['otrodoc']['name'] : 'SIN IMAGEN';
    $size = (!empty($_FILES['otrodoc']['size'])) ? $_FILES['otrodoc']['size'] : 0;
    $type = (!empty($_FILES['otrodoc']['type'])) ? $_FILES['otrodoc']['type'] : '';
    $temp = (!empty($_FILES['otrodoc']['tmp_name'])) ? $_FILES['otrodoc']['tmp_name'] : '';
    if ($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif' && $type != 'application/pdf')
    {
      echo "Error, el archivo no es una imagen"; 
    }
    else if ($size > 1024*1024)
    {
      echo "Error, el tamaño máximo permitido es un 1MB";
    }
    else
    {
    //  crear carpeta ine
    $directorio = "archivos/$b/otrosDocumentos";
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    move_uploaded_file($temp, $directorio . "/" . $nameotro);

    $directorio = $directorio . "/" . $nameotro;

    $query = "UPDATE comentarios SET img_otro ='$nameotro' WHERE id_com = $id";
   
    // ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar la imagen .");
                  window.history.go(-2);
               </script>';
    } else {
      echo '<script>
                  alert("Felicidades,la imagen se actualizo exitosamente.");
                  window.history.go(-1);
               </script>';
    }
  }
}