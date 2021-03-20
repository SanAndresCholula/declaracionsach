<?php
   include '../function/funciones.php';
     conectar();
/*recibiendo datos de los name en una variable */
    $categoria = $_POST["categorias"];
    $formatos = $_POST["formatos"];
    $coin = $_POST['coin'];
    $botones = $_POST["botones"];



/* crear la consulta para insertar sql con una variable $insertar */
    $insertar = "INSERT INTO menu(categorias, formatos, coin, botones) VALUES('$categoria','$formatos','$coin','$botones')";

//ejecutar consulta
    $resultado =  mysqli_query($conexion, $insertar);
    if(!$resultado){
        echo '<script>
                alert("Lo siento!, Error al registrar el arreglo");
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el arreglo se registro exitosamente.");
                window.history.go(-1);
             </script>';
    }

    desconectar();
