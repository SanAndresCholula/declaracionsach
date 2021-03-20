<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.html');
}
conectar();


$id=$_GET['id'];

    $query="DELETE FROM menu WHERE id ='$id'";

    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("Restricción de menu eliminada exitosamente!!");
    window.location.href = 'permisos.php';

</script>
