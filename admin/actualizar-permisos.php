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
   eliminarPermisos($usuario);
    $categorias = getTodasCategorias();
        //Reasignamos sus permisos
    foreach($categorias as $categoria):
        if(isset($_POST['categoria'.$categoria[0]] ))
            asignarPermisos($usuario, $categoria[0]);
           // echo "Se ha marcado la categoria con id:".$categoria[0];
    endforeach;
echo '<script>
                alert("Felicidades, la imagen se registro exitosamente.");
                 window.location.href = "editarUsuario.php";
             </script>';
   header('Location: editarPermisos.php?usuario='.$usuario);
    desconectar();
?>
