<?php
   include '../function/funciones.php';
     conectar();
/*recibiendo datos de los name en una variable */
    $dependencia = $_POST['dependencia'];
    $azul = $_POST["azul"];
    $turquesa = $_POST["turquesa"];
    $verde = $_POST["verde"];
    $amarillo = $_POST["amarillo"];
    $naranja = $_POST["naranja"];
    $rojo = $_POST["rojo"];
    $negro = $_POST["negro"];
    $id_secretaria = $_POST["id_secretaria"];
    $ruta = $_POST['ruta'];
    $is_secretaria = (isset($_POST['is_secretaria']))?1:0;

    ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');

/* crear la consulta para insertar sql con una variable $insertar */
    $insertar = "INSERT INTO status_cal( dependencia, azul, turquesa, verde, amarillo, naranja, rojo, negro, id_secretaria, date, ruta, is_secretaria) VALUES('$dependencia', '$azul','$turquesa','$verde','$amarillo','$naranja','$rojo','$negro',$id_secretaria, '$date', '$ruta',$is_secretaria)";


//ejecutar consulta
    $resultado =  mysqli_query($conexion, $insertar);
    if(!$resultado){
        echo '<script>
                alert("Lo siento!, Error al registrar el Status");
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el Status se registro exitosamente.");
                window.history.go(-1);
             </script>';
    }

//cerrar la conexion
    //mysqli_close($conexion);
    desconectar();
