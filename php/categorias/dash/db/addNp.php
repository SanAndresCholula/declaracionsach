<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../../index.php');
}
conectar();

if(isset($_POST['submit'])!=""){
  ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $id_tp2 = $_POST['id_tp2'];
  $nom_p = $_POST['nom_p'];


$query = ("INSERT INTO nom_programa(nom_p, id_tp2, date) VALUES ('$nom_p', '$id_tp2', '$date')");

// verificar que no se repita el nombre del tipo de programa
$verificar_nombre = mysqli_query($conexion, "SELECT * FROM nom_programa  WHERE nom_p = '$nom_p'");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de tu programa ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
    exit;
  }

$result = mysqli_query($conexion, $query);

if(!$result){
 echo '<script type="text/javascript>
                alert("Lo siento!, Error al registrar" );
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el nombre de programa se registro exitosamente.");
                window.history.go(-1);
             </script>';
    }

}
?>
