<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../index.php');
}
conectar();
//  datos del uploadfile
if (isset($_POST['submit']) != "") {
    // // fecha actual 
    ini_set('date.timezone', 'America/Mexico_City');
    $date = date('Y-m-d H:i:s');
    // variables de los name
    $id_user = $_POST['id_user'];
    $usuario = $_POST['usuario'];
    $id_benef = $_POST['id_benef'];
    $a_paterno = $_POST['a_paterno'];
    $a_materno = $_POST['a_materno'];
    $nombres = $_POST['nombres'];

    // crear carpeta con nombre del beneficiario
    $b = $a_paterno . " " . $a_materno . " " . $nombres;
    $directorio = "archivos/$b";
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    //   fin
    $telefono = (!empty($_POST['telefono'])) ? $_POST['telefono'] : 'SIN TELÉFONO';
    $ine = (!empty($_POST['ine'])) ? $_POST['ine'] : 'SIN DATO';
    $curp = (!empty($_POST['curp'])) ? $_POST['curp'] : 'SIN DATO';
    $otrodoc = (!empty($_POST['otrodoc'])) ? $_POST['otrodoc'] : 'SIN DOCUMENTACIÓN EXTRA';
    $genero = $_POST['sexo'];
    $nacimiento = $_POST['nacimiento'];
    $edad = $_POST['edad'];
    $id_nsec1 = (!empty($_POST['seccion'])) ? $_POST['seccion'] : '1';
    $id_loc1 = $_POST['localidad'];
    $id_cp = $_POST['cp'];
    $id_col = $_POST['colonia'];
    $observaciones = (!empty($_POST['comentario'])) ? $_POST['comentario'] : 'SIN OBSERVACIONES';
    $calle = $_POST['calle'];
    $num_ext = $_POST['num_ext'];
    $num_int = $_POST['num_int'];
    $image = "default.png";

    //iniciar transaccion si falla algun INSERT borrara lo anterior
   $query = "UPDATE
    beneficiario b
    INNER JOIN generales g on b.id_gene1 = g.id_gene
    INNER JOIN secdom sd on b.id_secdom1 = sd.id_secdom
    INNER JOIN direccion d on sd.id_direc1 = d.id_direc
    INNER JOIN calle ca on d.id_calle1 = ca.id_calle
    INNER JOIN cp_combo cp on d.id_cp1 = cp.id_cpcombo
    INNER JOIN comentarios com on b.id_com1 = com.id_com
    SET
    b.a_paterno = '$a_paterno', 
    b.a_materno='$a_materno', 
    b.nombres='$nombres',
    g.telefono='$telefono',
    g.ine='$ine',
    g.curp='$curp', 
    g.nacimiento='$nacimiento', 
    g.edad= '$edad', 
    g.otrodoc='$otrodoc',
    g.id_sex = '$genero',
    sd.id_nsec1 = '$id_nsec1',
    sd.id_loc1 = '$id_loc1',
    d.id_col1 = '$id_col',
    d.id_cp1 ='$id_cp',
    ca.calle='$calle', 
    ca.exte='$num_ext', 
    ca.inte='$num_int',
    com.observaciones = '$observaciones'
    WHERE id_benef = $id_benef ";


    $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    if (!$result) {
        echo '<script>
                  alert("Lo siento!, Error al actualizar");
                  window.history.go(-2);
               </script>';
    } else {
        echo '<script>
                  alert("Felicidades, los registros se actualizaron exitosamente.");
                  window.history.go(-2);
               </script>';
    }
}
