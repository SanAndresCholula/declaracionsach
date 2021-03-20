<?php
require '../config/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../index.php');
}
conectar();
// Conexion a la base de datos
require_once('bdd.php');

if (isset($_POST['title'])){
	$title = $_POST['title'];
	$id_np1 = $_POST['np'];
	$id_tp1 = $_POST['tp'];
	$id_secre1 = $_POST['secre'];
	$enlace = $_POST['enlace'];
	$id_benef1 = $_POST['id_benef1'];
	$color = $_POST['color'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$horastart = $_POST['horastart'];
	$horaend = $_POST['horaend'];
	$id_user1 = $_POST['id_user1'];
	$entrega = $_POST['entrega'];
	ini_set('date.timezone','America/Mexico_City');
	$date = date('Y-m-d H:i:s');

	//iniciar transaccion si falla algun INSERT borrara lo anterior
	$conexion = mysqli_connect('localhost', 'root', '', 'bd_pak');
	mysqli_set_charset($conexion, 'utf8');
	$conexion->autocommit(FALSE);

	$query = "INSERT INTO programas(id_tp1, id_np1, id_secre1, enlace)VALUE($id_tp1, $id_np1, $id_secre1,'$enlace')";
	$resultado = mysqli_query($conexion, $query) or die($conexion->error);
	$id_prog1 = mysqli_insert_id($conexion);


	// query2
	$query = "INSERT INTO events(title, color, horastart, horaend,start, end, id_benef1, id_user1, id_prog1, entrega, date) values ('$title','$color','$horastart', '$horaend', '$start', '$end', $id_benef1, $id_user1, $id_prog1,'$entrega','$date')";
	$resultado = mysqli_query($conexion, $query) or die($conexion->error);


	if (!mysqli_commit($conexion)) {
		echo '<script type="text/javascript>
                   alert("Lo siento!, Error al registrar" );
                   window.history.go(-1);
                   </script>';
		exit();
	} else {
		echo '<script>
        alert("Felicidades, el evento se registro correctamente.");
        window.history.go(-1);
     </script>';
	}
	/* Cerrar la conexión */
	mysqli_close($conexion);

}
// header('Location: ' . $_SERVER['HTTP_REFERER']);


// Conexion a la base de datos
// require_once('bdd.php');

// if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['id_benef1']) && isset($_POST['id_user1'])){
	
// 	$title = $_POST['title'];
// 	$start = $_POST['start'];
// 	$end = $_POST['end'];
// 	$color = $_POST['color'];
// 	$id_benef1 = $_POST['id_benef1'];
// 	$id_user1 = $_POST['id_user1'];
// 	$id_np1 = $_POST['np'];
// 	$id_tp1 = $_POST['tp'];
// 	$id_secre1 = $_POST['secre'];
// 	$enlace = $_POST['enlace'];


// 	$query = "INSERT INTO programas(id_tp1, id_np1, id_secre1, enlace)VALUE($id_tp1, $id_np1, $id_secre1,'$enlace')";
// 	$resultado = mysqli_query($bdd, $query) or die($bdd->error);
// 	$id_prog1 = mysqli_insert_id($bdd);

// 	$sql = "INSERT INTO events(title, start, end, color, id_benef1, id_user1, id_prog1) values ('$title', '$start', '$end', '$color', $id_benef1, $id_user1, $id_prog1)";
	
// 	$query = $bdd->prepare( $sql );
// 	if ($query == false) {
// 	 print_r($bdd->errorInfo());
// 	 die ('Erreur prepare');
// 	}
// 	$sth = $query->execute();
// 	if ($sth == false) {
// 	 print_r($query->errorInfo());
// 	 die ('Erreur execute');
// 	}

// }
// echo '<script>
// alert("Felicidades, el evento se agrego exitosamente ");
// window.history.go(-1);
// </script>';

	
?>
