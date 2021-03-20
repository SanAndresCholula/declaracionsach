<?php
include "../../config/config.php";

// Count Download 
$id = $_GET["id"];
$count = $_GET["count"] + 1;
$sql = mysqli_query($con, "UPDATE file SET download ='$count' WHERE id ='" . $id . "' ");
//end count donwload
// insertar quien descarga y fecha
ini_set('date.timezone', 'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$userdown = $_GET['user'];





$id_code = $_GET["code"];
$file = mysqli_query($con, "select * from file where code='$id_code'");

while ($rows = mysqli_fetch_array($file)) {
	$filename = $rows['filename'];
	$user_id = $rows['usuario'];
	$is_folder = $rows['is_folder'];


	$query = ("INSERT INTO user_down (user_down, id_fdown, user_upfile, date) VALUES ('$userdown', $id,'$user_id','$date')");
$result = mysqli_query($con, $query);
}

$url = "../storage/data/" . $user_id . "/";


if (!$is_folder) {
	$fullurl = $url . $filename;
	header("Content-Disposition: attachment; filename=$filename");
	readfile($fullurl);
}
