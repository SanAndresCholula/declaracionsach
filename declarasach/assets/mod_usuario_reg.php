<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}
conectar();
//  datos del uploadfile
if (isset($_POST['submit']) != "") {
    // // fecha actual 
    ini_set('date.timezone', 'America/Mexico_City');
    $date1 = date('Y-m-d H:i:s');
    // variables de los name
    $id = $_POST['id'];
    $nombres = $_POST['nombre'];
    $a_paterno = $_POST['paterno'];
    $a_materno = $_POST['materno'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];
    $homoclave = $_POST['homoclave'];
    $correo = $_POST['correo'];
    $correo2 = $_POST['correo2'];
    $password = $_POST['password'];
    $nom_usuario = $_POST['nom_usuario'];
    $ip = gethostbyname("www.w3schools.com");

    // crear carpeta con nombre del funcionario
    $b = $a_paterno . " " . $a_materno . " " . $nombres;
    $directorio = "archivos/$b";
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    //   fin
    $query = "UPDATE usuarios SET nombres = '$nombres', p_apellido = '$a_paterno', s_apellido = '$a_paterno', curp= '$curp', rfc= '$rfc',homoclave= '$homoclave',pass= '$password',email_inst= '$correo',email_pers= '$correo2', ip_ultimo_acceso= '$ip', usuario= '$nombres' WHERE id_usuario = $id ";
     $result = mysqli_query($conexion, $query);
     if (!$result) {
         echo '<script>
                   alert("Lo siento!, Error al actualizar");
                   window.history.go(-1);
                </script>';
     } else {
         echo '<script>
                   alert("Felicidades, los registros se actualizaron exitosamente.");
                   window.history.go(-1);
                </script>';
     }
    }
?>
