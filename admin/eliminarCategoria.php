<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.php');
}
conectar();

$id=$_GET['id'];


 $resp="SELECT ruta FROM categorias WHERE ID_Categoria='$id'";
$resultado=mysqli_query($conexion, $resp);

while($categoria = mysqli_fetch_array($resultado)){
    $deleteCat = unlink("../php/categorias/".$categoria['ruta']);
}
 $query="DELETE FROM categorias WHERE ID_Categoria='$id'";
$resultado=mysqli_query($conexion, $query);



?>

<script type="text/javascript">
    alert("Categoria eliminada exitosamente!!");
    window.location.href = 'categorias.php';
</script>
