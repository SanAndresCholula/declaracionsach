<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../../index.php');
}
conectar();

if(isset($_POST['submit'])!=""){
  ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $id_nsec =$_POST['id_nsec'];
  $id_col = $_POST['id_col'];
  $id_cp = $_POST['id_cp'];

$query = ("INSERT INTO seccion(id_nsec1, id_col1, id_cp1) VALUES ('$id_nsec','$id_col','$id_cp')");


// verificar que no se repita el nombre del tipo de programa
//$verificar_nombre = mysqli_query($conexion, "SELECT * FROM seccion  WHERE id_col = $id_col ");

  // if (mysqli_num_rows($verificar_nombre) > 0) {
  //   echo '<script>
  //               alert("El nombre de la seccion ya esta registrado, intente con otro por favor");
  //               window.history.go(-1);
  //            </script>';
  //   exit;
  // }

$result = mysqli_query($conexion, $query);

if(!$result){
 echo '<script type="text/javascript>
                alert("Lo siento!, Error al registrar" );
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el registro se agrego exitosamente.");
                window.history.go(-1);
             </script>';
    }

}
?>
