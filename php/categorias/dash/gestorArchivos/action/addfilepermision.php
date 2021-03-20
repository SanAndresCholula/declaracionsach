<?php
	session_start();

	include "../../config/config.php";

	//hacer una consulta para que el usuario no pueda darle dos o mas veces permisos por un archivo

	if(!empty($_POST)){
		$dependencia=$_POST["dependencia"];
		$user = mysqli_query($con, "select * from usuarios where dependencia='$dependencia' ");

		while ($rowu=mysqli_fetch_array($user)) {
				$user_id=$rowu['usuario'];
		}

		$id=$_POST["file_id"];
		$file = mysqli_query($con, "select * from file where id=$id ");

		while ($rowf=mysqli_fetch_array($file)) {
				$file_id=$rowf['id'];
				$file_code=$rowf['code'];
		}

		if($user_id!=null){	
			if($user_id!=$_SESSION["usuario"]){

				$user_id= $user_id;
				$file_id = $file_id;
				$p_id= $_POST["p_id"];
				$remi = $_POST['user'];
				// $created_at = "NOW()";

				$sql = "insert into permision (p_id,file_id,usuario,remitente, created_at)";
				$sql .= "value ('$p_id',\"$file_id\",'$user_id','$remi', NOW())";

				$query=mysqli_query($con, $sql);
				if ($query) {
					// echo "Agregado exitosamente!";
					header("location: ../filepermision.php?id=".$file_code."&success");
				} else {
					// echo "Hubo un error al dar los permisos!";
					header("location: ../filepermision.php?id=".$file_code."&error");
				}

			}else{
				// echo "No puedes agregarte ati mismo!";
				header("location: ../filepermision.php?id=".$file_code."&error2");
			}

		}else{
			// echo "El usuario no existe!";
			header("location: ../filepermision.php?id=".$file_code."&error3&not_found");
		}
	}

?>