<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.php');
}
conectar();
$rol = rol_permisos();
$usuario = $_SESSION['id_user'];

$query = mysqli_query($conexion, "SELECT * FROM users WHERE id_user = '$usuario' ");
while ($row = mysqli_fetch_array($query)) {
  $fullname = $row['username'];
  $email = $row['email'];
  $password = $row['password'];
  $phone = $row['phone'];
  $date = $row['date'];
  $admin = $row['admin'];
  $image = $row['image'];
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
  <!-- FixHeader CSS -->
  <link rel="stylesheet" href="../css/fixedHeader.dataTables.min.css">
  <!-- daterange picker selector rango de fechas -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="../images//logo.ico" type="image/x-icon">
  <!-- preloader CSS -->
  <link rel="stylesheet" href="../css/preloader.css">

  <!-- multiselect -->


  <!--  -->
  <style>
    #containerText {
      width: 100%;
      text-align: justify;
    }

    #left {
      float: left;
      width: 33%;
    }

    #left2 {
      float: left;
      width: 50%;
    }

    #center {
      display: inline-block;
      margin: 0 auto;
      width: 33%;
    }

    #right {
      float: right;
      width: 33%;
    }

    #right2 {
      float: right;
      width: 50%;
    }

    #accion {
      pointer-events: none;
      cursor: not-allowed;
      opacity: 0.5;
    }

    #bloquear {
      pointer-events: none;
      background-color: gray;
      cursor: not-allowed;
      opacity: 0.5;
    }

    .wrapper .content-wrapper {
      min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px));
      height: 10%;
      background-image: url('../images/2.jpg');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* pointer solo lectura */
    input[readonly] {
      cursor: no-drop;
    }
  </style>

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

  <!-- Generar PDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <!-- validar formularios -->
  <script src="../js/validar.js"></script>



</head>