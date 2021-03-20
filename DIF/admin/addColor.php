<?php
require '../config/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../../index.html');
}
conectar();

if(isset($_POST['submit'])!=""){

  $name =$_POST['name'];
  $colors =$_POST['colors'];

$query = ("INSERT INTO colors(name, colors) VALUES ('$name','$colors')");

// verificar que no se repita el nombre del tipo de programa
$verificar_nombre = mysqli_query($conexion, "SELECT * FROM colors  WHERE name = '$name'");

  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("Ya esta registrado, intente con otro por favor");
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
                alert("Felicidades, se registro exitosamente.");
                window.history.go(-1);
             </script>';
    }

}
