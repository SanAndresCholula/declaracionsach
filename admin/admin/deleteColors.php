<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];

$query="DELETE FROM colors WHERE id_colors=$id";
    $resultado=mysqli_query($conexion, $query);

    // $query="DELETE FROM beneficiario WHERE id_benef=$id";
    // $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("El color de estatus se eliminado exitosamente!!");
    window.history.go(-1);

</script>
