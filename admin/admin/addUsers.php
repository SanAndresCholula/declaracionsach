<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../index.php');
}
conectar();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

ini_set('date.timezone','America/Mexico_City');
$date = date('Y-m-d H:i:s');
$image = "default.png";
$creadoX = $_POST['creadoX'];

$host = gethostname();
$ip = gethostbyname("www.w3schools.com");
$info = php_uname();

$admin = (!empty($_POST['admin'])) ? $_POST['admin'] : 0;
// start si es usuario administrador
if($admin == 1){
$m_u = (!empty($_POST['modulo_usuarios'])) ? $_POST['modulo_usuarios'] : 1;
$m_db_b = (!empty($_POST['modulo_db_benef'])) ? $_POST['modulo_db_benef'] : 1;
$m_c_b = (!empty($_POST['modulo_capt_benef'])) ? $_POST['modulo_capt_benef'] : 1;
$m_db_a = (!empty($_POST['modulo_db_apoyos'])) ? $_POST['modulo_db_apoyos'] : 1;
$m_p = (!empty($_POST['modulo_programasymas'])) ? $_POST['modulo_programasymas'] : 1;
$m_c_s = (!empty($_POST['modulo_catalogo_seccional'])) ? $_POST['modulo_catalogo_seccional'] : 1;

$p_usuarios_a = (!empty($_POST['p_usuarios_a'])) ? $_POST['p_usuarios_a'] : 1;
$p_usuarios_e = (!empty($_POST['p_usuarios_e'])) ? $_POST['p_usuarios_e'] : 1;
$p_usuarios_d = (!empty($_POST['p_usuarios_d'])) ? $_POST['p_usuarios_d'] : 1;

$p_bd_benef_a = (!empty($_POST['p_bd_benef_a'])) ? $_POST['p_bd_benef_a'] : 1;
$p_bd_benef_e = (!empty($_POST['p_bd_benef_e'])) ? $_POST['p_bd_benef_e'] : 1;
$p_bd_benef_d = (!empty($_POST['p_bd_benef_d'])) ? $_POST['p_bd_benef_d'] : 1;

$p_bd_apoyos_a = (!empty($_POST['p_bd_apoyos_a'])) ? $_POST['p_bd_apoyos_a'] : 1;
$p_bd_apoyos_e = (!empty($_POST['p_bd_apoyos_e'])) ? $_POST['p_bd_apoyos_e'] : 1;
$p_bd_apoyos_d = (!empty($_POST['p_bd_apoyos_d'])) ? $_POST['p_bd_apoyos_d'] : 1;

$p_programas_a = (!empty($_POST['p_programas_a'])) ? $_POST['p_programas_a'] : 1;
$p_programas_e = (!empty($_POST['p_programas_e'])) ? $_POST['p_programas_e'] : 1;
$p_programas_d = (!empty($_POST['p_programas_d'])) ? $_POST['p_programas_d'] : 1;

$p_cat_seccional_a = (!empty($_POST['p_cat_seccional_a'])) ? $_POST['p_cat_seccional_a'] : 1;
$p_cat_seccional_e = (!empty($_POST['p_cat_seccional_e'])) ? $_POST['p_cat_seccional_e'] : 1;
$p_cat_seccional_d = (!empty($_POST['p_cat_seccional_d'])) ? $_POST['p_cat_seccional_d'] : 1;

$p_des_db_users = (!empty($_POST['p_des_db_users'])) ? $_POST['p_des_db_users'] : 1;
$p_des_db_benef = (!empty($_POST['p_des_db_benef'])) ? $_POST['p_des_db_benef'] : 1;
$p_des_db_apoyos = (!empty($_POST['p_des_db_apoyos'])) ? $_POST['p_des_db_apoyos'] : 1;
$p_des_db_programas = (!empty($_POST['p_des_db_programas'])) ? $_POST['p_des_db_programas'] : 1;
$p_des_db_cat_sec = (!empty($_POST['p_des_db_cat_sec'])) ? $_POST['p_des_db_cat_sec'] : 1;

 //$conexion = mysqli_connect('localhost', 'proye178_pak', '@Pr0y3ct04k', 'proye178_pak');
$conexion = mysqli_connect('localhost', 'root', '', 'bd_pak');
mysqli_set_charset($conexion, 'utf8');
$conexion->autocommit(FALSE);

// query1
$query1 = "INSERT INTO permisos_acciones(p_usuarios_a, p_usuarios_e, p_usuarios_d, p_bd_benef_a, p_bd_benef_e, p_bd_benef_d, p_bd_apoyos_a, p_bd_apoyos_e, p_bd_apoyos_d, p_programas_a, p_programas_e, p_programas_d, p_cat_seccional_a, p_cat_seccional_e, p_cat_seccional_d, p_des_db_users, p_des_db_benef, p_des_db_apoyos, p_des_db_programas, p_des_db_cat_sec) 
VALUES ($p_usuarios_a, $p_usuarios_e, $p_usuarios_d, $p_bd_benef_a, $p_bd_benef_e, $p_bd_benef_d, $p_bd_apoyos_a, $p_bd_apoyos_e, $p_bd_apoyos_d, $p_programas_a, $p_programas_e, $p_programas_d, $p_cat_seccional_a, $p_cat_seccional_a, $p_cat_seccional_a, $p_des_db_users, $p_des_db_benef, $p_des_db_apoyos, $p_des_db_programas, $p_des_db_cat_sec )";
$resultado1 = mysqli_query($conexion, $query1);
$id_per_acc = mysqli_insert_id($conexion);

$query2 = "INSERT INTO modulos(crud_usuarios, db_benef, capt_benef, db_apoyos, programas, catalogo_seccional)
VALUES ($m_u, $m_db_b, $m_c_b, $m_db_a, $m_p, $m_c_s)";
$resultado2 = mysqli_query($conexion, $query2);
$id_modulo = mysqli_insert_id($conexion);

$query3 = "INSERT INTO permiso_user_modulo (id_modulo1,id_per_acc1) 
VALUES ($id_modulo,$id_per_acc)";
$resultado3 = mysqli_query($conexion, $query3);
$id_permiso_user_modulo = mysqli_insert_id($conexion);


 $query4 = "INSERT INTO users (username, email,password,phone,date, admin,image,creadoX,id_permiso_user_modulo1) 
 VALUES ('$username','$email','$password','$phone','$date','$admin','$image','$creadoX || $host || $ip',$id_permiso_user_modulo)";

  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM users WHERE username = '$username'");
  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de este usuario ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
    exit;
  }
 $resultado4 = mysqli_query($conexion, $query4);

 if (!mysqli_commit($conexion)) {
  echo '<script type="text/javascript>
           alert("Lo siento!, Error al registrar" );
           window.history.go(-1);
           </script>';
  exit();

} else {
  echo '<script>
alert("Felicidades, el usuario Administrador se registro correctamente.");
window.history.go(-1);
</script>';
}
mysqli_close($conexion);
// fin usuario administrador

}else{
// usuario normal

$m_u = (!empty($_POST['modulo_usuarios'])) ? $_POST['modulo_usuarios'] : 0;
$m_db_b = (!empty($_POST['modulo_db_benef'])) ? $_POST['modulo_db_benef'] : 0;
$m_c_b = (!empty($_POST['modulo_capt_benef'])) ? $_POST['modulo_capt_benef'] : 0;
$m_db_a = (!empty($_POST['modulo_db_apoyos'])) ? $_POST['modulo_db_apoyos'] : 0;
$m_p = (!empty($_POST['modulo_programasymas'])) ? $_POST['modulo_programasymas'] : 0;
$m_c_s = (!empty($_POST['modulo_catalogo_seccional'])) ? $_POST['modulo_catalogo_seccional'] : 0;

$p_usuarios_a = (!empty($_POST['p_usuarios_a'])) ? $_POST['p_usuarios_a'] : 0;
$p_usuarios_e = (!empty($_POST['p_usuarios_e'])) ? $_POST['p_usuarios_e'] : 0;
$p_usuarios_d = (!empty($_POST['p_usuarios_d'])) ? $_POST['p_usuarios_d'] : 0;

$p_bd_benef_a = (!empty($_POST['p_bd_benef_a'])) ? $_POST['p_bd_benef_a'] : 0;
$p_bd_benef_e = (!empty($_POST['p_bd_benef_e'])) ? $_POST['p_bd_benef_e'] : 0;
$p_bd_benef_d = (!empty($_POST['p_bd_benef_d'])) ? $_POST['p_bd_benef_d'] : 0;

$p_bd_apoyos_a = (!empty($_POST['p_bd_apoyos_a'])) ? $_POST['p_bd_apoyos_a'] : 0;
$p_bd_apoyos_e = (!empty($_POST['p_bd_apoyos_e'])) ? $_POST['p_bd_apoyos_e'] : 0;
$p_bd_apoyos_d = (!empty($_POST['p_bd_apoyos_d'])) ? $_POST['p_bd_apoyos_d'] : 0;

$p_programas_a = (!empty($_POST['p_programas_a'])) ? $_POST['p_programas_a'] : 0;
$p_programas_e = (!empty($_POST['p_programas_e'])) ? $_POST['p_programas_e'] : 0;
$p_programas_d = (!empty($_POST['p_programas_d'])) ? $_POST['p_programas_d'] : 0;

$p_cat_seccional_a = (!empty($_POST['p_cat_seccional_a'])) ? $_POST['p_cat_seccional_a'] : 0;
$p_cat_seccional_e = (!empty($_POST['p_cat_seccional_e'])) ? $_POST['p_cat_seccional_e'] : 0;
$p_cat_seccional_d = (!empty($_POST['p_cat_seccional_d'])) ? $_POST['p_cat_seccional_d'] : 0;

$p_des_db_users = (!empty($_POST['p_des_db_users'])) ? $_POST['p_des_db_users'] : 0;
$p_des_db_benef = (!empty($_POST['p_des_db_benef'])) ? $_POST['p_des_db_benef'] : 0;
$p_des_db_apoyos = (!empty($_POST['p_des_db_apoyos'])) ? $_POST['p_des_db_apoyos'] : 0;
$p_des_db_programas = (!empty($_POST['p_des_db_programas'])) ? $_POST['p_des_db_programas'] : 0;
$p_des_db_cat_sec = (!empty($_POST['p_des_db_cat_sec'])) ? $_POST['p_des_db_cat_sec'] : 0;

 //$conexion = mysqli_connect('localhost', 'proye178_pak', '@Pr0y3ct04k', 'proye178_pak');
$conexion = mysqli_connect('localhost', 'root', '', 'bd_pak');
mysqli_set_charset($conexion, 'utf8');
$conexion->autocommit(FALSE);

// query1
$query1 = "INSERT INTO permisos_acciones(p_usuarios_a, p_usuarios_e, p_usuarios_d, p_bd_benef_a, p_bd_benef_e, p_bd_benef_d, p_bd_apoyos_a, p_bd_apoyos_e, p_bd_apoyos_d, p_programas_a, p_programas_e, p_programas_d, p_cat_seccional_a, p_cat_seccional_e, p_cat_seccional_d, p_des_db_users, p_des_db_benef, p_des_db_apoyos, p_des_db_programas, p_des_db_cat_sec) 
VALUES ($p_usuarios_a, $p_usuarios_e, $p_usuarios_d, $p_bd_benef_a, $p_bd_benef_e, $p_bd_benef_d, $p_bd_apoyos_a, $p_bd_apoyos_e, $p_bd_apoyos_d, $p_programas_a, $p_programas_e, $p_programas_d, $p_cat_seccional_a, $p_cat_seccional_a, $p_cat_seccional_a, $p_des_db_users, $p_des_db_benef, $p_des_db_apoyos, $p_des_db_programas, $p_des_db_cat_sec )";
$resultado1 = mysqli_query($conexion, $query1);
$id_per_acc = mysqli_insert_id($conexion);

$query2 = "INSERT INTO modulos(crud_usuarios, db_benef, capt_benef, db_apoyos, programas, catalogo_seccional)
VALUES ($m_u, $m_db_b, $m_c_b, $m_db_a, $m_p, $m_c_s)";
$resultado2 = mysqli_query($conexion, $query2);
$id_modulo = mysqli_insert_id($conexion);

$query3 = "INSERT INTO permiso_user_modulo (id_modulo1,id_per_acc1) 
VALUES ($id_modulo,$id_per_acc)";
$resultado3 = mysqli_query($conexion, $query3);
$id_permiso_user_modulo = mysqli_insert_id($conexion);


 $query4 = "INSERT INTO users (username, email,password,phone,date, admin,image,creadoX,id_permiso_user_modulo1) 
 VALUES ('$username','$email','$password','$phone','$date','$admin','$image','$creadoX || $host || $ip',$id_permiso_user_modulo)";

  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM users WHERE username = '$username'");
  if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
                alert("El nombre de este usuario ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
    exit;
  }
 $resultado4 = mysqli_query($conexion, $query4);

// echo var_dump($query1);
  if (!mysqli_commit($conexion)) {
    echo '<script type="text/javascript>
             alert("Lo siento!, Error al registrar" );
             window.history.go(-1);
             </script>';
    exit();
  } else {
    echo '<script>
  alert("Felicidades, el usuario se registro correctamente.");
  window.history.go(-1);
</script>';
  }
  /* Cerrar la conexión */
  mysqli_close($conexion);
}