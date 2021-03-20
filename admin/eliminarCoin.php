<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];


 $query="DELETE FROM coin WHERE id_coin='$id'";
$resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("formato COIN eliminado exitosamente!!");
    window.location.href = 'categorias.php';

</script>
