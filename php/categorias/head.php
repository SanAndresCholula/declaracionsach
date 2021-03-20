<?php
  require '../../function/funciones.php';
  if(! haIniciadoSesion() )
  {
      header('Location: ../../index.php');
  }

  conectar();
  $categorias = getCategoriasPorUser();
  $formatos = getFormatosPorUser();
  $coin = getCoinPorUser();
  $calendar = getCalendarPorUser();
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Reportes de actividades ayuntamiento San Andres Cholula 2018 - 2021">
    <meta name="keywords" content="Formatos SACH Ayuntaminento San Andres Cholula">
    <meta name="author" content="ISC Jose Uriel Guerra Trinidad">
    <meta name="copyright" content="H. Ayuntamiento de San Andres Cholula 2018 - 2021">
    <meta name="robots" content="index">

    <link rel="icon" href="../../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/tablas.css">
    <!--help-->
    <script type="text/jscript" src="../../js/help.js"></script>
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- Custom styles for this template -->
    <link href="../../css/cover.css" rel="stylesheet">


    <!-- =========================
    //////////////Esta pagina fue desarrollada por el Departamento//////////////////////
    ////////////////////de Innovacion Tecnologica SACH 2018 - 2021///////////////////
    /////////////////////////by ISC Jose Uriel Guerra Trinidad======================-->
