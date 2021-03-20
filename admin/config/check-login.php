<?php
    require 'funciones.php';
    $usuario = $_POST['usuario'];
    $clave = $_POST['password'];
    conectar();

    if( validarLogin($usuario, $clave) ) {
    // Accedemos al sistema
        if( esAdmin() )
            header('Location: ../admin/dash.php');
        else header('Location: ../admin/dash.php');
    } else {
    // Sino volvemos al formulario inicial
?>
    <script>
        alert('Los datos ingresados son incorrectos.')
        location.href = "../index.php";

    </script>
    <?php
    desconectar();
}
?>
