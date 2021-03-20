<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];


 $query="DELETE FROM status_cal WHERE id=$id ";
$resultado=mysqli_query($conexion, $query);


?>

<script type="text/javascript">
    alert("formato Calendar eliminado exitosamente!!");
    window.location.href = 'categorias.php';

</script> 
