<?php
   include '../function/funciones.php';
     conectar();

/*recibiendo datos de los name en una variable */
    $Usuario = $_POST['usuario'];
    $Email = $_POST['email'];
    $Clave = $_POST['clave'];
    $id_secretaria = $_POST['id_secretaria'];
    $Check = $_POST['check'];
    $Telefono = $_POST['telefono'];
    $Dependencia = $_POST['dependencia'];
    $is_secretaria = $_POST['is_secretaria'];
    $id = $_POST['usuario'];

    ini_set('date.timezone','America/Mexico_City');
    $date = date('Y-m-d H:i:s');
/* crear la consulta para insertar sql con una variable $insertar */


/*$insertar ="UPDATE usuarios SET  email = '".$Email."', clave = '".$Clave."', admin = '".$Check."', lider = '".$lider."' WHERE usuario = '".$Usuario."' ";*/

$insertar ="UPDATE usuarios SET  usuario = '$Usuario', email = '$Email', clave = '$Clave', id_secretaria = $id_secretaria, admin = $Check, telefono = '$Telefono', dependencia = '$Dependencia', is_secretaria = $is_secretaria, modificado = '$date' WHERE usuario = '$id' ";


//ejecutar consulta
$resultado =  mysqli_query($conexion, $insertar);

    if(!$resultado){
        echo '<script>
                alert("Lo siento!, Error al registrar al usuario");
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el usuario se actualizo exitosamente.");
                window.location.href = "editarUsuario.php";
             </script>';
    }

//cerrar la conexion
    //mysqli_close($conexion);
    desconectar();
?>
