<?php
// Conexion a la base de datos
require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])) {


	$id = $_POST['id'];

	$sql = "DELETE FROM events WHERE id = $id";
	$query = $bdd->prepare($sql);
	if ($query == false) {
		print_r($bdd->errorInfo());
		die('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}
} elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id']) && isset($_POST['entrega']) && isset($_POST['enlace'])) {
	// $id_benef1 = $_POST['id_benef1'];
	$id = $_POST['id'];
	$title = $_POST['title'];
	$id_np1 = $_POST['np'];
	$id_tp1 = $_POST['tp'];
	$id_secre1 = $_POST['secre'];
	$enlace = $_POST['enlace'];
	$id_benef1 = $_POST['id_benef1'];
	$color = $_POST['color'];
	$id_user1 = $_POST['id_user1'];
	$entrega = $_POST['entrega'];

	$sql = "UPDATE events SET  title = '$title', color = '$color', entrega = '$entrega' WHERE id = $id ";
	ECHO $query = "UPDATE programas SET id_tp1 = $id_tp1, id_np1 = $id_np1, id_secre1 = $id_secre1, enlace = '$enlace' WHERE id_prog = $id ";


	$query = $bdd->prepare($sql);
	if ($query == false) {
		print_r($bdd->errorInfo());
		die('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}
}
echo '<script>
alert("El evento se modifico exitosamente ");
window.history.go(-1);
</script>';
