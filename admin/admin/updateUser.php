<?php
session_start();

if (!isset($_SESSION['id_user']) && $_SESSION['id_user'] == null) {
	header("location: ../");
}

include "../config/funciones.php";
conectar();

$id = $_SESSION['id_user'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (isset($_POST['token'])) {
	$update = mysqli_query($conexion, "UPDATE users set username=\"$fullname\", email=\"$email\", phone=\"$phone\"  WHERE id_user=$id ");
	if ($update) {
		echo '<script>
			alert("Datos del usuario ' . $_SESSION['username'] . ' actualizados exitosamente.");
			window.history.go(-1);
		</script>';
	} else {
		// echo "error".mysqli_error($con);
	}

	// CHANGE PASSWORD
	if ($_POST['password'] != "") {

		$password = $_POST['password'];
		$new_password = $_POST['new_password'];
		$confirm_new_password = $_POST['confirm_new_password'];

		if ($_POST['new_password'] == $_POST['confirm_new_password']) {

			$sql = mysqli_query($conexion, "SELECT * from users where id_user=$id ");
			while ($row = mysqli_fetch_array($sql)) {
				$p = $row['password'];
			}

			if ($p == $password) { //comprobamos que la contraseña sea igual a la anterior

				$update_passwd = mysqli_query($conexion, "UPDATE users set password=\"$new_password\" where id_user=$id");
				if ($update_passwd) {

					echo '<script>
    					alert("Constraseña actualizada");
   						 window.history.go(-1);
						</script>';
				}
			} else {
				echo '<script>
					alert("la contrasena no coincide la contraseña con la anterior");
					window.history.go(-1);
				</script>';
			}
		} else {
			echo '<script>
				alert("las nuevas  contraseñas no coinciden");
				window.history.go(-1);
			</script>';
		}
	}
} else {
	header("location: ../");
}
desconectar();