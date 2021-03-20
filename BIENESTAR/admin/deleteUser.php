<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}
conectar();

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id_user=$id";
$resultado = mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("Usuario eliminado exitosamente!!");
    window.history.go(-1);
</script>