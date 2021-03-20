<?php
   include '../function/funciones.php';
     conectar();

/*recibiendo datos de los name en una variable */
$id = $_POST['id'];
$Vinculo = $_POST['vinculo'];
$Nombre = $_POST['nombre'];
$Clave = $_POST['clave'];

/* $lider = $_POST['lider'];*/

/* crear la consulta para insertar sql con una variable $insertar */


/*$insertar ="UPDATE usuarios SET  email = '".$Email."', clave = '".$Clave."', admin = '".$Check."', lider = '".$lider."' WHERE usuario = '".$Usuario."' ";*/

$insertar ="UPDATE formatos SET ruta = '".$Vinculo."', titulo = '".$Nombre."', clave = '".$Clave."' WHERE id_formato = '".$id."' ";


//ejecutar consulta
$resultado =  mysqli_query($conexion, $insertar);

if(!$resultado){
echo '<script>
    alert("Lo siento!, Error al actualizar el formato");
    window.history.go(-1);
</script>';
} else {
echo '<script>
    alert("Felicidades, formato se actualizo exitosamente.");
    window.location.href = "categorias.php";
</script>';
}

//cerrar la conexion
    //mysqli_close($conexion);
    desconectar();
?>
,
