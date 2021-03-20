<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];

    $query="DELETE FROM nom_programa WHERE id_np=$id";
    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("Nombre de programa eliminado exitosamente!!");
    window.history.go(-1);

</script>
