<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];


 $query="DELETE FROM formatos WHERE id_formato='$id'";
$resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("formato excel eliminado exitosamente!!");
    window.location.href = 'categorias.php';

</script>
