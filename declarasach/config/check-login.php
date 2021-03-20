<?php
require 'funciones.php';
$usuario = $_POST['usuario'];
$password = $_POST['password'];
conectar();

if (validarLogin($usuario, $password)) {
   // Accedemos al sistema
   if (esAdmin())
      header('Location: ../admin/index.php');
   else header('Location: ../pages/format.php');
} else {
   // Sino volvemos al formulario inicial
?>
   <script>
      alert('Los datos ingresados son incorrectos.')
      location.href = "../../index.php";
   </script>
<?php
   desconectar();
}
?>