<?php
require_once('pages/bdd.php');
require '../../../function/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
$usuario = $_SESSION['usuario'];


$sql = "SELECT id, title, description, responsable, start, end, color FROM events WHERE usuario = '$usuario' ";

$req = $bdd->prepare($sql);
$req->execute();
$events = $req->fetchAll();


    $query=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");
    while ($row=mysqli_fetch_array($query)) {
        $fullname = $row['usuario'];
        $email = $row['email'];
        $profile_pic = $row['image'];
        $created_at = $row['date'];
        $phono = $row['telefono'];
        $dependencia = $row['dependencia'];

    }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstarp -->
  <link rel="stylesheet" href="plugins/datatables/bootstrap.min.css">
  <link rel="stylesheet" href="../css/dash.css">

  <link rel="shortcut icon" href="../../../img/icon.png" type="image/x-icon">
  <style>
      /* pointer solo lectura */
      input[readonly]{
            cursor: no-drop;
        }
  </style>
  <style>
  .wrapper .content-wrapper {
    min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px));
    height: 100%;
    background-image: url('dist/1.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
}
  </style>


</head>