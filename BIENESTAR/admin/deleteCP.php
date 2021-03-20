<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}
conectar();

$id = $_GET['id'];

$query = "DELETE FROM c_postal WHERE id_cp=$id";
$resultado = mysqli_query($conexion, $query);

?>

<script type="text/javascript">
    alert("Código Postal eliminado exitosamente!!");
    window.history.go(-1);
</script>