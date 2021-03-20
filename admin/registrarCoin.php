<?php
   include '../function/funciones.php';
     conectar();
/*recibiendo datos de los name en una variable */
    $Vinculo = $_POST["vinculo"];
    $Nombre = $_POST["nombre"];
    $Clave = $_POST["clave"];

    ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');

/* crear la consulta para insertar sql con una variable $insertar */
    $insertar = "INSERT INTO coin( ruta, titulo, date, clave) VALUES('$Vinculo','$Nombre','$date','$Clave')";

// validar usuarios y contraseñas que no se repitan... window.history.go(-1) retrocede una pagina anterior
   $verificar_Formato = mysqli_query($conexion, "SELECT * FROM coin WHERE titulo = '$Nombre'");
    if(mysqli_num_rows($verificar_Formato) > 0){
        echo '<script>
                alert("El formato ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
        exit;
    }

//ejecutar consulta
    $resultado =  mysqli_query($conexion, $insertar);
    if(!$resultado){
        echo '<script>
                alert("Lo siento!, Error al registrar el formato");
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el formato se registro exitosamente.");
                window.history.go(-1);
             </script>';
    }

//cerrar la conexion
    //mysqli_close($conexion);
    desconectar();
