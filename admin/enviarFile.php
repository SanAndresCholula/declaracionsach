<?php
require '../function/funciones.php';
if(!haIniciadoSesion() )
{
header('Location: ../../index.php');
}
conectar();

if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
    ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $comentario=$_POST['comentario'];
  $destinatario = $_POST['destinatario'];
  $remitente = $_POST['remitente'];
 /* $caption1=$_POST['caption'];
  $link=$_POST['link'];*/

  move_uploaded_file($temp,"sendFile/".$name);

$query = ("INSERT INTO destinatario (destinatario, comentario, remitente, name,date) VALUES ('$destinatario','$comentario','$remitente','$name','$date')");
$result = mysqli_query($conexion, $query);

if(!$result){
echo '<script>
    alert("Lo siento!, Error al enviar el archivo");
    window.history.go(-1);
</script>';
} else {
echo '<script>
    alert("Felicidades, el archivo se envio exitosamente.");
    window.history.go(-1);
</script>';
}

}
?>
