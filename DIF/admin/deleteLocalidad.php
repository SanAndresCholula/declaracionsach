<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}
conectar();

$id = $_GET['id'];

$query = "DELETE FROM localidad WHERE id_loc=$id";
$resultado = mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("La localidad se eliminado exitosamente!!");
    window.history.go(-1);
</script>