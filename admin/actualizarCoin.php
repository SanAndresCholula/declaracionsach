<?php
    require '../function/funciones.php';
    //Validacion de la sesion como administrador:
    if(! haIniciadoSesion() || ! esAdmin() )
    {
        header('Location: ../index.php');
    }
        //Verificación del parametro POST :
    if( isset($_POST['txtUsuario']) )
        $usuario = $_POST['txtUsuario'];
    else header('Location: index.php');

        // Actualizar permisos
    conectar();

        //Eliminamos todos los permisos
   eliminarPermisosCoin($usuario);
    $categorias = getTodosFormatos();
        //Reasignamos sus permisos
    foreach($categorias as $categoria):
        if(isset($_POST['categoria'.$categoria[0]] ))
            asignarPermisosCoin($usuario, $categoria[0]);
           echo "Se ha marcado la categoria con id:".$categoria[0];
    endforeach;

   header('Location: Permisos.php?usuario='.$usuario);
    desconectar();
?>
