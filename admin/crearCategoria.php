<?php
include'../function/funciones.php';
conectar();

//recibimos datos de los name
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$ruta = $_POST['ruta'];
$admin = $_POST['admin'];


if(copy($_POST['admin'], $ruta)){


rename($ruta, "../php/categorias/$ruta");
//permisos para crear carpeta
if(!file_exists($ruta)){
    mkdir($ruta, 0777, true);
  }

}else{
echo 'fallo';
}



//crear la consulta para insertar datos
$sql = "INSERT INTO categorias(categoria, descripcion, ruta, admin) VALUES('$categoria', '$descripcion', '$ruta', '$admin')";


//validar categoriaque no se repitan
   $verificar_Cat = mysqli_query($conexion, "SELECT * FROM categorias WHERE categoria = '$categoria'");
    if(mysqli_num_rows($verificar_Cat) > 0){
        echo '<script>
                alert("La categoria ya esta registrado, intente con otro por favor");
                window.history.go(-1);
             </script>';
        exit;
    }

//ejecutar consulta
$resultado = mysqli_query($conexion, $sql);

if(!$resultado){
echo'<script>
    alert("Lo siento! error al registrar la categoria");
    window.history.go(-1);
</script>';
}else{
echo'<script>
    alert("Felicidades, nueva categoria registrada exitosamente");
    window.history.go(-1);
</script>';
}

?>
