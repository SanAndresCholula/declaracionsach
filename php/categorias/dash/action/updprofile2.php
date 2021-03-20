<?php
session_start();

if (!isset($_SESSION['usuario']) && $_SESSION['usuario'] == null) {
	header("location: ../");
}

include "../config/config.php";


$id = $_SESSION['usuario'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dependencia = $_POST['dependencia'];

if (isset($_POST['token'])) {
	$update = mysqli_query($con, "UPDATE usuarios set usuario=\"$fullname\", email=\"$email\", telefono=\"$phone\", dependencia =\"$dependencia\"  where usuario='$id' ");
	if ($update) {
		echo '<script>
			alert("Datos del usuario ' . $_SESSION['usuario'] . ' actualizados exitosamente.");
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

			$sql = mysqli_query($con, "SELECT * from usuarios where usuario='$id'");
			while ($row = mysqli_fetch_array($sql)) {
				$p = $row['clave'];
			}

			if ($p == $password) { //comprobamos que la contraseña sea igual a la anterior

				$update_passwd = mysqli_query($con, "UPDATE usuarios set clave=\"$new_password\" where usuario='$id'");
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
