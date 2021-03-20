<?php
   include '../function/funciones.php';
     conectar();
/*recibiendo datos de los name en una variable */
    $Usuario = $_POST["usuario"];
    $Email = $_POST["email"];
    $Clave = $_POST["clave"];
    $Id_sec = $_POST['id_secretaria'];
    $Admin = $_POST["admin"];
    $Telefono = $_POST["telefono"];
    $Dependencia = $_POST['dependencia'];
    $id_secretaria = $_POST['id_secretaria'];
    $Image = "default.png";
    $Is_sec = $_POST['is_secretaria'];


    ini_set('date.timezone','America/Mexico_City');
  $date = date('Y-m-d H:i:s');

/* crear la consulta para insertar sql con una variable $insertar */
    $insertar = "INSERT INTO usuarios( usuario, email,  clave, admin, telefono, dependencia, date, image, is_active, is_secretaria, id_secretaria) VALUES('$Usuario','$Email','$Clave',$Admin,'$Telefono','$Dependencia','$date', '$Image', 1, $Is_sec, $Id_sec)";

// validar usuarios y contraseñas que no se repitan... window.history.go(-1) retrocede una pagina anterior
   $verificar_Usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$Usuario'");
    if(mysqli_num_rows($verificar_Usuario) > 0){
        echo '<script>
                alert("El usuario ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
        exit;
    }

//ejecutar consulta
    $resultado =  mysqli_query($conexion, $insertar);
    if(!$resultado){
        echo '<script>
                alert("Lo siento!, Error al registrar al usuario");
                window.history.go(-1);
             </script>';
    } else {
        echo '<script>
                alert("Felicidades, el usuario se registro exitosamente.");
                window.history.go(-1);
             </script>';
    }

//cerrar la conexion
    //mysqli_close($conexion);
    desconectar();
