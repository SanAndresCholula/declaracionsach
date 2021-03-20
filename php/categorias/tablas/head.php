<?php
  require '../../../function/funciones.php';
  if(! haIniciadoSesion() )
  {
      header('Location: ../../../index.php');
  }

  conectar();
  $categorias = getCategoriasPorUser();
  $formatos = getFormatosPorUser();
?>
