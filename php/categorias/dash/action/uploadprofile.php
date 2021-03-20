<?php
    
    session_start();

    $id=$_SESSION['usuario'];

    include "../config/config.php";

    if (isset($_FILES["file"]))
    {
        $file = $_FILES["file"];
        $nombre = $file["name"];
        $tipo = $file["type"];
        $ruta_provisional = $file["tmp_name"];
        $size = $file["size"];
        $carpeta = "../images/profiles/";
        
        if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
        {
          echo "Error, el archivo no es una imagen, vuelve a intentar"; 
        }
        else if ($size > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src = $carpeta.$nombre;
           @move_uploaded_file($ruta_provisional, $src);

           $query=mysqli_query($con, "UPDATE usuarios set image='$nombre' where usuario='$id'");
           if($query){
            echo "<br><div class='alert alert-success' role='alert'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>¡Bien hecho!</strong> Perfil Actualizado Correctamente actualiza la pagína por favor
            </div>";
           }else{
            // echo "errror";
           }
        }
    }

?>
