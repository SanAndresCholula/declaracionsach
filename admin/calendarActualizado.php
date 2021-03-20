<?php
   include '../function/funciones.php';
     conectar();

/*recibiendo datos de los name en una variable */
$id = $_POST['id'];
$dependencia = $_POST['dependencia'];
$azul = $_POST["azul"];
$turquesa = $_POST["turquesa"];
$verde = $_POST["verde"];
$amarillo = $_POST["amarillo"];
$naranja = $_POST["naranja"];
$rojo = $_POST["rojo"];
$negro = $_POST["negro"];
$id_secretaria = $_POST["id_secretaria"];
$is_secretaria = (isset($_POST['is_secretaria']))?1:0;

$insertar ="UPDATE status_cal SET dependencia = '".$dependencia."', azul = '".$azul."', turquesa = '".$turquesa."', verde = '".$verde."', amarillo = '".$amarillo."', naranja = '".$naranja."', rojo = '".$rojo."', negro = '".$negro."', id_secretaria = $id_secretaria, is_secretaria = '".$is_secretaria."' WHERE id = '".$id."' ";


//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
echo '<script>
    alert("Lo siento!, Error al actualizar el formato");
    window.history.go(-1);
</script>';
} else {
echo '<script>
    alert("Felicidades, formato Calendario se actualizo exitosamente.");
    window.location.href = "categorias.php";
</script>';
}


?>
