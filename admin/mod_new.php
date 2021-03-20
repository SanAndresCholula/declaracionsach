<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
    header('Location: ../index.php');
}
conectar();

$id = $_POST['id'];
$contenido = $_POST['noticia'];

$query = "UPDATE news SET contenido='$contenido' WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $query);

?>



<script type="text/javascript">
    alert("Alerts modificada exitosamente");
    window.location.href = 'alert.php';

</script>
