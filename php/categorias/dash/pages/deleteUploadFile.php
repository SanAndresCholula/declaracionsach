<?php
require '../../../../function/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../../../../index.php');
}
conectar();

$id=$_GET['id'];

$re="SELECT name FROM reporte Where id_reporte ='$id'";
 $result=mysqli_query($conexion, $re);

    while ($imagen=mysqli_fetch_array($result)) {
        $espera = unlink("upload/".$imagen['name']);
    }
    $query="DELETE FROM reporte WHERE id_reporte='$id'";
    $resultado=mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("Reporte eliminado exitosamente!!");
    window.history.go(-1);

</script>
