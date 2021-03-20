<?php
$conexion = null;

function conectar()
{
   global $conexion;

   $conexion = mysqli_connect('Localhost', 'root', '', 'db_declara_sach');
   mysqli_set_charset($conexion, 'utf8');

   // if (mysqli_connect_error()) {
   //    echo 'fallo';
   // } else {
   //    echo 'conectado';
   // }

}

function validarLogin($usuario, $password)
{
   global $conexion;
   ini_set('date.timezone', 'America/Mexico_City');
   $date = date('Y-m-d H:i:s');

   $consulta = sprintf("SELECT * FROM usuarios WHERE usuario='" . $usuario . "' AND pass='" . $password . "' ");
   $respuesta = mysqli_query($conexion, $consulta);


   if ($fila = mysqli_fetch_row($respuesta)) {
      session_start();
      $_SESSION['id_usuario'] = $fila[0];
      $_SESSION['usuario'] = $usuario;
      $_SESSION['admin'] = $fila[16];

      $_SESSION['p_apellido'] = $fila[2];
      $_SESSION['s_apellido'] = $fila[3];
      $_SESSION['nombres'] = $fila[1];

      $id = $_SESSION['id_usuario'] = $fila[0];

      $query = "UPDATE usuarios SET fecha_ultimo_acceso = '$date' WHERE id_usuario = '$id' ";
      echo $respuesta = mysqli_query($conexion, $query);

      return true;
   }
   return false;
}
function esAdmin()
{
   return $_SESSION['admin'];
}
function haIniciadoSesion()
{
   session_start();
   return isset($_SESSION['usuario']);
}
function desconectar()
{
   global $conexion;
   mysqli_close($conexion);
}

