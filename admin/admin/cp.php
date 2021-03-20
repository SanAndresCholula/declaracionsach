<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../index.php');
}
conectar();

$id_col =$_POST['id_col'];
$query = "SELECT id_cpcombo, cp FROM cp_combo WHERE id_col2 = $id_col ORDER BY cp";

$result = mysqli_query($conexion, $query);
// $resultadoM = $conexion->query($queryM);

$html= "<option value='0'>C.P.</option>";

while($row = $result->fetch_assoc())
{
    $html.= "<option value='".$row['id_cpcombo']."'>".$row['cp']."</option>";
}
echo $html;
?>		