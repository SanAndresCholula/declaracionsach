<?php
   include '../function/funciones.php';
     conectar();

/*recibiendo datos de los name en una variable */
$id = $_POST['id'];
$categorias = $_POST['categorias'];
$formatos = $_POST['formatos'];
$coin = $_POST['coin'];
// $reportes = $_POST['reportes'];
// $enviar = $_POST['enviar'];
// $recibidos = $_POST['recibidos'];
$botones = $_POST['botones'];


$insertar ="UPDATE menu SET categorias = '".$categorias."', formatos = '".$formatos."', coin = '".$coin."', botones = '".$botones."' WHERE id = '".$id."' ";


//ejecutar consulta
$resultado =  mysqli_query($conexion, $insertar);

if(!$resultado){
echo '<script>
    alert("Lo siento!, Error al actualizar la restricción de los menús");
    window.history.go(-1);
</script>';
} else {
echo '<script>
    alert("Felicidades, la restriccion de menús se actualizo exitosamente.");
    window.location.href = "permisos.php";
</script>';
}

//cerrar la conexion
    //mysqli_close($conexion);
    desconectar();
?>
,
