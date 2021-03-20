<?php
require'../function/funciones.php';

//validacion de la sesión como administrador
if(!haIniciadoSesion() || !esAdmin() )
{
    header('Location: ../index.php');
}

//verificacion del patrametro POST
if(isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtDescripcion']) && isset($_POST['txtRuta']) )
{
    $id = $_POST['txtId'];
    $name = $_POST['txtNombre'];
    $descripcion= $_POST['txtDescripcion'];
    $ruta = $_POST['txtRuta'];

}
else header('Location: ../admin/index.php');

conectar();

editarCategoria($id, $name, $descripcion, $ruta);

header('Location: editarCategoria.php?id='.$id);

desconectar();

?>
