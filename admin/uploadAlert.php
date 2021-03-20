<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../index.html');
}
conectar();

if(isset($_POST['submit'])!=""){
  ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $noticia =$_POST['noticia'];


$query = ("INSERT INTO news(contenido, fecha) VALUES ('$noticia','$date')");
$result = mysqli_query($conexion, $query);

if(!$result){
 echo '<script>
                alert("Lo siento!, Error al registrar Noticia");
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, la alarta se compartira exitosamente.");
                window.history.go(-1);
             </script>';
    }

}
?>
