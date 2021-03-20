<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}
conectar();

$id_nsec =$_POST['id_nsec'];
$query = "SELECT id_col, colonia FROM colonia WHERE id_nsec2 = $id_nsec ORDER BY colonia";

$result = mysqli_query($conexion, $query);
// $resultadoM = $conexion->query($queryM);

$html= "<option value='0'>COLONIA</option>";

while($row = $result->fetch_assoc())
{
    $html.= "<option value='".$row['id_col']."'>".$row['colonia']."</option>";
}
echo $html;
