<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
   header('Location: ../../index.php');
}
conectar();
$id = $_SESSION['id_usuario'];
ini_set('date.timezone', 'America/Mexico_City');
   $date = date('Y-m-d H:i:s');

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
   $nombres = $row['nombres'];
   $paterno = $row['p_apellido'];
   $materno = $row['s_apellido'];
   $curp = $row['curp'];
   $rfc = $row['rfc'];
   $homoclave = $row['homoclave'];
   $pass = $row['pass'];
   $email_inst = $row['email_inst'];
   $email_pers = $row['email_pers'];
   $fecha_nuevo_formato = $row['fecha_nuevo_formato'];
   $usuario = $row['usuario'];
   $firma = $row['firma'];

   $afuncionario = $row['p_apellido'] . " " . $row['s_apellido'];
   $nfuncionario = $row['nombres'];
   $tipo_declaracion = $row['tipo_declaracion'];
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Reportes de actividades ayuntamiento San Andres Cholula 2018 - 2021">
<meta name="keywords" content="Formatos SACH Ayuntaminento San Andres Cholula">
<meta name="author" content="ISC Jose Uriel Guerra Trinidad">
<meta name="copyright" content="H. Ayuntamiento de San Andres Cholula 2018 - 2021">
<meta name="robots" content="index">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../dist/css/adminlte.min.css">
   <!-- toastr CSS -->
   <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="../../plugins/select2/css/select2-bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
   <!-- Icon -->
   <link rel="icon" href="../img/icon.png" type="image/x-icon">
</head>

<style>
   .wrapper .content-wrapper {
      min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px));
      height: 10%;
      background-image: url('../img/1.jpg');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
   }
   /* hr{
      border:1px outset;
      background-color:#FFFFFF;
      color:#FFFFFF;
      height:5px;
      width:100%"
   } */
</style>