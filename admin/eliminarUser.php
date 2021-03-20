<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.php');
}
conectar();


$id=$_GET['usuario'];

/*$re="SELECT ruta_imagen FROM usuarios Where usuario='$id'";
$result=mysqli_query($conexion, $re);

while ($imagen=mysqli_fetch_array($result)) {
$espera = unlink("imgPerfil/".$imagen['ruta_imagen']);
}*/

$query="DELETE FROM permisos WHERE usuario='$id'";
$resultado1=mysqli_query($conexion, $query);

$query ="DELETE FROM permisos_formatos WHERE usuario = '$id";
$resultado2 = mysqli_query($conexion, $query);

$query="DELETE FROM usuarios WHERE usuario='$id'";
$resultado3=mysqli_query($conexion, $query);

?>


<script type="text/javascript">
    alert("Usuario eliminado exitosamente!!");
    window.location.href = 'editarUsuario.php';

</script>
