<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];

    $query="DELETE FROM secretaria WHERE id_secre=$id";
    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("La secretaria se eliminado exitosamente!!");
    window.history.go(-1);

</script>
