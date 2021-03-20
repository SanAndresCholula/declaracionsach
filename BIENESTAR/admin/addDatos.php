<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../../index.php');
}
$conexion = conectar();
//  datos del uploadfile
if (isset($_POST['submit']) != "") {
  // // fecha actual 
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  // variables de los name
  $id_user = $_POST['id_user'];
  $usuario = $_POST['usuario'];
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

// imagen INE start
  $nameine = (!empty($_FILES['photoine']['name'])) ? $_FILES['photoine']['name'] : 'SIN IMAGEN.jpg';
  $size = (!empty($_FILES['photoine']['size'])) ? $_FILES['photoine']['size'] : 0;
  $type = (!empty($_FILES['photoine']['type'])) ? $_FILES['photoine']['type'] : '';
  $temp = (!empty($_FILES['photoine']['tmp_name'])) ? $_FILES['photoine']['tmp_name'] : '';
  if ($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif' && $type != 'application/pdf' && $type != '' ) {
    echo "Error ine, el archivo debe ser en formato jpg, jpeg, png o pdf";
  } else if ($size > 1024 * 1024) {
    echo "Error, el tamaño máximo permitido es un 1MB";
  } else {
    //  crear carpeta ine
    $directorio = "archivos/$b/ine";
    if (!file_exists($directorio)) {
      mkdir($directorio, 0777, true);
    }
    move_uploaded_file($temp, $directorio . "/" . $nameine);

    $directorio = $directorio . "/" . $nameine;
    // imagen INE end

    $curp = (!empty($_POST['curp'])) ? $_POST['curp'] : 'SIN DATO';

    $namecurp = (!empty($_FILES['photocurp']['name'])) ? $_FILES['photocurp']['name'] : 'SIN IMAGEN.jpg';
    $size = (!empty($_FILES['photocurp']['size'])) ? $_FILES['photocurp']['size'] : 0;
    $type = (!empty($_FILES['photocurp']['type'])) ? $_FILES['photocurp']['type'] : '';
    $temp = (!empty($_FILES['photocurp']['tmp_name'])) ? $_FILES['photocurp']['tmp_name'] : '';
    if ($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif' && $type != 'application/pdf' && $type != '') {
      echo "Error curp, el archivo debe ser en formato jpg, jpeg, png o pdf";
    } else if ($size > 1024 * 1024) {
      echo "Error, el tamaño máximo permitido es un 1MB";
    } else {
      // crear carpeta curp 
      $directorio = "archivos/$b/curp";
      if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
      }
      move_uploaded_file($temp, $directorio . "/" . $namecurp);

      $directorio = $directorio . "/" . $namecurp;
      //   fin

      $otrodoc = (!empty($_POST['otrodoc'])) ? $_POST['otrodoc'] : 'SIN DOCUMENTACIÓN EXTRA';

      $nameotro = (!empty($_FILES['photootro']['name'])) ? $_FILES['photootro']['name'] : 'SIN IMAGEN.jpg';
      $size = (!empty($_FILES['photootro']['size'])) ? $_FILES['photootro']['size'] : 0;
      $type = (!empty($_FILES['photootro']['type'])) ? $_FILES['photootro']['type'] : '';
      $temp = (!empty($_FILES['photootro']['tmp_name'])) ? $_FILES['photootro']['tmp_name'] : '';
      if ($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif' && $type != 'application/pdf' && $type != '') {
        echo "Error otro, el archivo debe ser en formato jpg, jpeg, png o pdf";
      } else if ($size > 1024 * 1024) {
        echo "Error, el tamaño máximo permitido es un 1MB";
      } else {
        // crear carpeta curp 
        $directorio = "archivos/$b/otrosDocumentos";
        if (!file_exists($directorio)) {
          mkdir($directorio, 0777, true);
        }
        move_uploaded_file($temp, $directorio . "/" . $nameotro);
        $directorio = $directorio . "/" . $nameotro;
        //   fin


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
        
         //$conexion = mysqli_connect('localhost', 'proye178_pak', '@Pr0y3ct04k', 'proye178_pak');
        //$conexion = mysqli_connect('localhost', 'root', '@itroot', 'bd_bienestar');
        $conexion = mysqli_connect('localhost', 'root', '', 'bd_bienestar');
        mysqli_set_charset($conexion, 'utf8');
        $conexion->autocommit(FALSE);

        // query1
        $query = "INSERT INTO calle(calle,inte,exte)VALUE('$calle','$num_int','$num_ext')";
        $resultado1 = mysqli_query($conexion, $query);
        $u_id_calle = mysqli_insert_id($conexion);

        // query1
        $query = "INSERT INTO direccion(id_calle1, id_col1, id_cp1)VALUE($u_id_calle, $id_col, $id_cp)";
        $resultado2 = mysqli_query($conexion, $query);
        $u_id_direc = mysqli_insert_id($conexion);

        // query3
        $query = "INSERT INTO secdom(id_nsec1,id_direc1,id_loc1)VALUE($id_nsec1, $u_id_direc, $id_loc1)";
        $resultado3 = mysqli_query($conexion, $query);
        $u_id_secdom = mysqli_insert_id($conexion);

        // query4
        $query = "INSERT INTO fechas(f_alta)VALUE('$date')";
        $resultado4 = mysqli_query($conexion, $query);
        $u_id_fechas = mysqli_insert_id($conexion);

        // query5
        $query = "INSERT INTO comentarios(observaciones, img_ine, img_curp, img_otro)VALUE('$observaciones', '$nameine', '$namecurp', '$nameotro')";
        $resultado5 = mysqli_query($conexion, $query);
        $u_id_com = mysqli_insert_id($conexion);

        // query6
        $query = "INSERT INTO capt(id_user1)VALUE($id_user)";
        $resultado6 = mysqli_query($conexion, $query);
        $u_id_capt = mysqli_insert_id($conexion);

        // query7
        $query = "INSERT INTO generales(telefono, ine, curp, otrodoc, nacimiento, edad, id_sex, id_capt1)VALUE('$telefono','$ine','$curp','$otrodoc','$nacimiento', $edad, $genero,$u_id_capt)";
        $resultado7 = mysqli_query($conexion, $query);
        $u_id_gene = mysqli_insert_id($conexion);
        $id_barcode = $u_id_gene;

        // query8
        $alphabeth = "ABCDEFGHIJKLMNOPQRSTUVWYZ1234567890";
        $code = "";
        for ($i = 0; $i < 10; $i++) {
          $code .= $alphabeth[rand(0, strlen($alphabeth) - 1)];
          $code = $code;
          $barcode = $id_barcode . $code;
        }
        $query = "INSERT INTO beneficiario(a_paterno, a_materno, nombres, imgbenef, id_gene1, id_secdom1, id_com1, id_fechas1, barcode1)
                    VALUE('$a_paterno','$a_materno','$nombres', '$image',$u_id_gene, $u_id_secdom, $u_id_com, $u_id_fechas, '$barcode')";

        $verificar_nombre = mysqli_query($conexion, "SELECT a_paterno, a_materno, nombres FROM beneficiario WHERE a_paterno = '$a_paterno' AND a_materno = '$a_materno' AND nombres = '$nombres' ");
        if (mysqli_num_rows($verificar_nombre) > 0) {
          echo '<script>
              alert("El nombre del beneficiario ya se encuentra registrado en la base de datos, ingrese el siguiente beneficiario por favor");
              window.history.go(-1);
           </script>';
          exit;
        }
        $resultado8 = mysqli_query($conexion, $query);
        $u_id_benef = mysqli_insert_id($conexion);
        $id_barcode = $u_id_benef;

        // query9
        $query = "INSERT INTO barcode(id_barcode,barcode, f_generado)VALUE($id_barcode,'$barcode','$date')";
        $resultado9 = mysqli_query($conexion, $query);

        if (!mysqli_commit($conexion)) {
          echo '<script type="text/javascript>
                   alert("Lo siento!, Error al registrar" );
                   window.history.go(-1);
                   </script>';
          exit();
        } else {
          echo '<script>
        alert("Felicidades, el beneficiario se registro correctamente.");
        window.history.go(-1);
     </script>';
        }
        // /* Cerrar la conexión */
        mysqli_close($conexion);
      }
    }
  }
}
