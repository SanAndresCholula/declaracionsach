<?php
  require '../function/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $usuarios = getUsuarios();
  $categorias = getTodasCategorias();
  $formatos = getTodosFormatos();
  desconectar();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Reportes de actividades ayuntamiento San Andres Cholula 2018 - 2021">
<meta name="keywords" content=" SACH Ayuntaminento San Andres Cholula Reportes, actividades del personal, intranet, oficios☀">
<meta name="author" content="ISC Jose Uriel Guerra Trinidad">
<meta name="copyright" content="H. Ayuntamiento de San Andres Cholula 2018 - 2021">
<meta name="robots" content="index">


<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">

<!-- Custom styles for this template -->
<link href="../css/mainAdmin.css" rel="stylesheet">
<!--  favicon  -->
<link rel="icon" href="../img/icon.ico" type="image/x-icon">
<!-- Custom styles for this template -->
<link rel="stylesheet" href="../css/tablas.css">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<script src="../js/jquery.min.js"></script>
<script src="../js/function.js"></script>

<!-- =========================
    //////////////Esta pagina fue desarrollada por el Departamento//////////////////////
    ////////////////////de Innovacion Tecnologica SACH 2018 - 2021///////////////////
    /////////////////////////by ISC Jose Uriel Guerra Trinidad======================-->
