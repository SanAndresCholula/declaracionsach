<?php
require '../config/funciones.php';

conectar();
if (isset($_POST['enviar']) != "") {
   $tipo_declaracion = $_POST['tipo_declaracion'];
   $id = $_POST['id_usuario'];

   $query = "UPDATE usuarios SET tipo_declaracion = $tipo_declaracion WHERE id_usuario = $id";
   $result = mysqli_query($conexion, $query);
   header("Location: ../pages/panelUsuario.php");
};