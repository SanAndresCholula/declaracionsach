<?php
require '../../../../function/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../../../../index.php');
}
conectar();

$id=$_GET['id'];

    $query="DELETE FROM seccion WHERE id_sec=$id";
    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("La seccion se eliminado exitosamente!!");
    window.history.go(-1);

</script>