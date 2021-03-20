<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
  header('Location: ../index.php');
}
conectar();

if (isset($_POST['submit']) != "") {
  $id = $_POST['id_user'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $admin = (!empty($_POST['admin'])) ? $_POST['admin'] : 0;
  ini_set('date.timezone', 'America/Mexico_City');
  $date = date('Y-m-d H:i:s');
  $modificadoX = $_POST['modificadoX'];
  /* $caption1=$_POST['caption'];
    $link=$_POST['link'];*/
  $host = gethostname();
  $ip = gethostbyname("www.w3schools.com");
  $info = php_uname();

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

  $query = "UPDATE
  users U
  INNER JOIN permiso_user_modulo P_u ON U.id_permiso_user_modulo1 = P_u.id_permiso_user_modulo 
  INNER JOIN modulos M ON P_u.id_modulo1 = M.id_modulo
  INNER JOIN permisos_acciones P_a ON P_u.id_per_acc1 = P_a.id_per_acc 
  SET

  U.username = '$username', 
  U.email = '$email', 
  U.password = '$password', 
  U.phone = '$phone', 
  U.admin = $admin, 
  U.fecha_modificado = '$date',
  U.modificadoX = '$modificadoX || $host || $ip',
  M.crud_usuarios = $m_u, 
  M.db_benef = $m_db_b, 
  M.capt_benef = $m_c_b, 
  M.db_apoyos = $m_db_a, 
  M.programas = $m_p, 
  M.catalogo_seccional = $m_c_s, 
  P_a.p_usuarios_a = $p_usuarios_a, 
  P_a.p_usuarios_e = $p_usuarios_e, 
  P_a.p_usuarios_d = $p_usuarios_d, 
  P_a.p_bd_benef_a = $p_bd_benef_a , 
  P_a.p_bd_benef_e = $p_bd_benef_e , 
  P_a.p_bd_benef_d = $p_bd_benef_d , 
  P_a.p_bd_apoyos_a = $p_bd_apoyos_a, 
  P_a.p_bd_apoyos_e = $p_bd_apoyos_e, 
  P_a.p_bd_apoyos_d = $p_bd_apoyos_d, 
  P_a.p_programas_a = $p_bd_apoyos_a, 
  P_a.p_programas_e = $p_bd_apoyos_e, 
  P_a.p_programas_d = $p_bd_apoyos_d, 
  P_a.p_cat_seccional_a = $p_cat_seccional_a, 
  P_a.p_cat_seccional_e = $p_cat_seccional_e, 
  P_a.p_cat_seccional_d = $p_cat_seccional_d,
  P_a.p_des_db_users = $p_des_db_users,
  P_a.p_des_db_benef = $p_des_db_benef, 
  P_a.p_des_db_apoyos = $p_des_db_apoyos,
  P_a.p_des_db_programas = $p_des_db_programas,
  P_a.p_des_db_cat_sec = $p_des_db_cat_sec
  WHERE id_user = $id ";

  // var_dump($query);

  //ejecutar consulta
  $result = mysqli_query($conexion, $query);
  if (!$result) {
    echo '<script>
                  alert("Lo siento!, Error al actualizar tu usuario");
                  window.history.go(-2);
               </script>';
  } else {
    echo '<script>
                  alert("Felicidades, el usuario se actualizo exitosamente.");
                  window.history.go(-2);
               </script>';
  }
}
