<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../../index.php');
}
conectar();
$usuario = $_SESSION['usuario'];

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
while ($row = mysqli_fetch_array($query)) {
  $fullname = $row['usuario'];
  $email = $row['email'];
  $password = $row['clave'];
  $phone = $row['telefono'];
  $date = $row['date'];
  $admin = $row['admin'];
  $image = $row['image'];


  $profile_pic = $row['image'];
  $created_at = $row['date'];
  $phono = $row['telefono'];
  $dependencia = $row['dependencia'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../plugins/datatables/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/datatables.min.css">
  <link rel="stylesheet" href="../plugins/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.css">
  <!-- daterange picker selector rango de fechas -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="../../../../img/icon.png" type="image/x-icon">


  <!-- confirmar delete -->
  <script type="text/javascript">
    function ConfirmDelete() {
      var respuesta = confirm("Esta accion eliminara permanentemente tu registro, ¿quieres continuar? ");
      if (respuesta == true) {
        return true;
      } else {
        return false;
      }
    }
  </script>

</head>