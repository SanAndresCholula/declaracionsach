<?php

// Conexion a la base de datos
require_once('bdd.php');

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['responsable']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color']) && isset($_POST['usuario'])){
	
	$title = $_POST['title'];
	$description = $_POST['description'];
	$responsable = $_POST['responsable'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	$usuario = $_POST['usuario'];
	$dependencia = $_POST['dependencia'];

	$sql = "INSERT INTO events(title, description, responsable, start, end, color, usuario, dependencia) values ('$title','$description', '$responsable', '$start', '$end', '$color', '$usuario', '$dependencia')";
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
