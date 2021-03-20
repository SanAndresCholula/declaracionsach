<?php
   include '../../../../function/funciones.php';
     conectar();

/*recibiendo datos de los name en una variable */
$id = $_POST['id'];
$azul = $_POST["azul"];
$turquesa = $_POST["turquesa"];
$verde = $_POST["verde"];
$amarillo = $_POST["amarillo"];
$naranja = $_POST["naranja"];
$rojo = $_POST["rojo"];
$negro = $_POST["negro"];


$insertar ="UPDATE status_cal SET  azul = '".$azul."', turquesa = '".$turquesa."', verde = '".$verde."', amarillo = '".$amarillo."', naranja = '".$naranja."', rojo = '".$rojo."', negro = '".$negro."' WHERE id = '".$id."' ";


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
    window.location.href = "calendar.php";
</script>';
}

