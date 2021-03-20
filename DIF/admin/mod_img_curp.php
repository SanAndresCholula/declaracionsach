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
    $namecurp = (!empty($_FILES['photocurp']['name'])) ? $_FILES['photocurp']['name'] : 'SIN IMAGEN';
    $size = (!empty($_FILES['photocurp']['size'])) ? $_FILES['photocurp']['size'] : 0;
    $type = (!empty($_FILES['photocurp']['type'])) ? $_FILES['photocurp']['type'] : '';
    $temp = (!empty($_FILES['photocurp']['tmp_name'])) ? $_FILES['photocurp']['tmp_name'] : '';
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
    $directorio = "archivos/$b/curp";
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    move_uploaded_file($temp, $directorio . "/" . $namecurp);

    $directorio = $directorio . "/" . $namecurp;

    $query = "UPDATE comentarios SET img_curp ='$namecurp' WHERE id_com = $id";
   
    // ejecutar consulta
    $result = mysqli_query($conexion, $query);
    if (!$result) {
      echo '<script>
                  alert("Lo siento!, Error al actualizar la imagen  CURP.");
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