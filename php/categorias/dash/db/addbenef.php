<?php
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $type = $_FILES['photo']['type'];
    $temp = $_FILES['photo']['tmp_name'];

    // // fecha actual 
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
    $usuario = $_POST['capturo'];
    // variables de los name
    $a_paterno = $_POST['a_paterno'];
    $a_materno = $_POST['a_materno'];
    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $ine = $_POST['ine'];
    $curp = $_POST['curp'];
    $genero = $_POST['sexo'];
    $nacimiento = $_POST['nacimiento'];
    $id_sec1 = $_POST['seccion'];

    $id_col = $_POST['colonia'];
    $sql = mysqli_query($conexion, "SELECT * FROM colonia WHERE id_col = $id_col");
    while ($dato = mysqli_fetch_array($sql)) {
        $colonia = $dato['colonia'];
    }

    $id_cp = $_POST['cp'];
    $sql1 = mysqli_query($conexion, "SELECT * FROM c_postal WHERE id_cp = $id_cp");
    while ($dato1 = mysqli_fetch_array($sql1)) {
        $cp = $dato1['cp'];
    }

    $calle = $_POST['calle'];
    $num_ext = $_POST['num_ext'];
    $num_int = $_POST['num_int'];
    $direccion = $calle;
    $direccion = 'Calle ' . $calle . ' Ext ' . $num_ext . ' Int ' . $num_int . ', Col ' . $colonia . ' CP ' . $cp . ' San Andrés Cholula, Puebla.';

    $id_np1 = $_POST['np'];
    $id_tp1 = $_POST['tp']; // otra tabla

    $observaciones = $_POST['comentario'];

    //  crear carpeta
     $directorio = "archivos/$usuario";
    if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
    }
    move_uploaded_file($temp, $directorio . "/" . $name);

    $directorio = $directorio . "/" . $name;

        // query
        $query = ("INSERT INTO beneficiario(`a_paterno`, `a_materno`, `nombres`, `telefono`,`ine`, `curp`,`nacimiento`,`direccion`,`observaciones`,`f_alta`,id_tp1, id_np1,id_sex)VALUES('$a_paterno','$a_materno','$nombres','$telefono','$ine','$curp','$nacimiento','$direccion','$observaciones','$date', $id_tp1, $id_np1, $genero");

        // $query1 = "INSERT INTO capt(usuario)VALUES('$capturo')";
        // $result = mysqli_query($conexion, $query1);

    //ejecutar consulta
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        echo '<script type="text/javascript>
                  alert("Lo siento!, Error al registrar" );
                  window.history.go(-1);
               </script>';
    } else {
        echo '<script>
                  alert("Felicidades, el registro s()e agrego exitosamente.");
                  window.history.go(-1);
               </script>';
    }
}
