<?php
    
    session_start();

    $id=$_POST['id'];

    include "../config/funciones.php";
conectar();
    if (isset($_FILES["file"]))
    {
        $file = $_FILES["file"];
        $nombre = $file["name"];
        $tipo = $file["type"];
        $ruta_provisional = $file["tmp_name"];
        $size = $file["size"];
        $carpeta = "../imgBenef/";
        
        if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
        {
          echo "Error, el archivo no es una imagen"; 
        }
        else if ($size > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src = $carpeta.$nombre;
           @move_uploaded_file($ruta_provisional, $src);

          $query = "UPDATE beneficiario set imgbenef = '$nombre' where id_benef = $id";

           $verificar_nombre = mysqli_query($conexion, "SELECT * FROM beneficiario WHERE imgbenef = '$nombre'");
           if (mysqli_num_rows($verificar_nombre) > 0) {
             echo '<script>
                         alert("El nombre de la imagen ya esta agregado, intente con otro por favor");
                         window.history.go(-1);
                      </script>';
             exit;
           }
           $result = mysqli_query($conexion, $query);
           if (!$result) {
             echo '<script>
                         alert("Lo siento!, Error al actualizar la imagen del beneficiario");
                         window.history.go(-1);
                      </script>';
           } else {
             echo '<script>
                         alert("Felicidades, la imagen se actualizo exitosamente.");
                         window.history.go(-1);
                      </script>';
           }
        }
    }
