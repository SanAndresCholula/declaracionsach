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
    $nameine = (!empty($_FILES['photoine']['name'])) ? $_FILES['photoine']['name'] : 'SIN IMAGEN';
    $size = (!empty($_FILES['photoine']['size'])) ? $_FILES['photoine']['size'] : 0;
    $type = (!empty($_FILES['photoine']['type'])) ? $_FILES['photoine']['type'] : '';
    $temp = (!empty($_FILES['photoine']['tmp_name'])) ? $_FILES['photoine']['tmp_name'] : '';
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
    $directorio = "archivos/$b/ine";
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    move_uploaded_file($temp, $directorio . "/" . $nameine);

    $directorio = $directorio . "/" . $nameine;

    $query = "UPDATE comentarios SET img_ine ='$nameine' WHERE id_com = $id";
   
    // ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar la imagen Clave de  Elector.");
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