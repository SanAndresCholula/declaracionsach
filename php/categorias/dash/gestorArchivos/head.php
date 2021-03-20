<?php
    session_start();
    include "../config/config.php";

    if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
        header("location: ../../../../index.php");
    }
    $my_user_id=$_SESSION['usuario'];
    $query=mysqli_query($con,"SELECT * FROM usuarios WHERE usuario='$my_user_id' ");
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
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Gestor de archivos SACH <?php echo $my_user_id?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" >
    <!--favicon-->
    <link rel="icon" href="../../../../img/icon.ico">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"> -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

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

    <!-- micss -->
    <link rel="stylesheet" href="css/micss.css">
    <style>
        .skin-black .main-header .logo {
            background-color: #dd4b39;
            color: #fff;
        }

        .skin-black .main-header .logo:hover {
            background-color: #dd4b39;
            color: #fff;
        }

        .skin-black .main-header .navbar {
            background-color: #dd4b39;
            color: #fff;
        }

        .skin-black .main-header li.user-header {
            background-color: #dd4b39;
            color: #fff;
        }

        .skin-black .main-header .navbar .sidebar-toggle:hover {
            background-color: #dd4b39;
            color: #fff;
        }

        .skin-black .main-header .navbar>.sidebar-toggle {
            color: #fff;
            border-right: 1px solid #dd4b39;
        }



        .skin-black .main-header .navbar .nav>li>a:hover,
        .skin-black .main-header .navbar .nav>li>a:active,
        .skin-black .main-header .navbar .nav>li>a:focus,
        .skin-black .main-header .navbar .nav .open>a,
        .skin-black .main-header .navbar .nav .open>a:hover,
        .skin-black .main-header .navbar .nav .open>a:focus,
        .skin-black .main-header .navbar .nav>.active>a {
            background: #dd4b39;
            color: #fff;
        }

        .skin-black .main-header .navbar .nav>li>a:hover,
        .skin-black .main-header .navbar .nav>li>a:active,
        .skin-black .main-header .navbar .nav>li>a:focus,
        .skin-black .main-header .navbar .nav .open>a,
        .skin-black .main-header .navbar .nav .open>a:hover,
        .skin-black .main-header .navbar .nav .open>a:focus,
        .skin-black .main-header .navbar .nav>.active>a:hover {
            background: #d24837;
            color: #fff;
        }

        .skin-black .main-header .navbar .nav>li>a,
        .skin-black .main-header .navbar .nav>li>a:active,
        .skin-black .main-header .navbar .nav>li>a:focus,
        .skin-black .main-header .navbar .nav .open>a,
        .skin-black .main-header .navbar .nav .open>a:hover,
        .skin-black .main-header .navbar .nav .open>a:focus,
        .skin-black .main-header .navbar .nav>.active>a {
            color: #fff;
        }

        .skin-black .main-header .navbar .navbar-custom-menu .navbar-nav>li>a,
        .skin-black .main-header .navbar .navbar-right>li>a {
            border-left: 1px solid #dd4b39;
            border-right-width: 0;
        }

        .skin-black .main-header>.logo {
            background-color: #d24837;
            color: #fff;
            border-bottom: 0 solid transparent;
            border-right: 1px solid #dd4b39;
        }

        .skin-black .main-header>.logo:hover {
            background-color: #d24837;
        }
    /* pointer solo lectura */
        input[readonly]{
            cursor: no-drop;
        }
        .content-wrapper {
        background-image: url('dist/1.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
        }
        h1,h2, h3{
            color: #fff;
        }
    </style>

</head>
