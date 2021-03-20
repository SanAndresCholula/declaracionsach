<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];

    $query="DELETE FROM n_seccion WHERE id_nsec=$id";
    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("La seccion se eliminado exitosamente!!");
    window.history.go(-1);

</script>
