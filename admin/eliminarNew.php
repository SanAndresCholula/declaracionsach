<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.html');
}
conectar();


$id=$_GET['id'];

    $query="DELETE FROM news WHERE id ='$id'";

    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("Alerta eliminada exitosamente!!");
    window.location.href = 'alert.php';

</script>
