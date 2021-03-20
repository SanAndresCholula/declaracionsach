<?php
require_once('bdd.php');
require '../../../../function/funciones.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../../index.php');
}
conectar();
$usuario = $_SESSION['usuario'];
$categorias = getCategoriasPorUser();
$formatos = getFormatosPorUser();
$coin = getCoinPorUser();
$calendar = getCalendarPorUser();

$query1 = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
while ($row = mysqli_fetch_array($query1)) {
   $is_secretaria = $row['is_secretaria'];
}
    if($is_secretaria){
        $sql2 = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE usuario= '$usuario'");
        while ($ids = mysqli_fetch_array($sql2)){
           $id_s = $ids['id_secretaria'];
        }
        $res = "SELECT E.id, E.title, E.description, E.responsable, E.start, E.end, E.color, E.dependencia, U.id_secretaria FROM usuarios U INNER JOIN events E ON U.usuario = E.usuario WHERE U.id_secretaria = $id_s";
        $req = $bdd->prepare($res);
        $req->execute();
        $events = $req->fetchAll();
        
        }else{
        $sql4 = "SELECT id, title, description, responsable, start, end, color, dependencia FROM events WHERE usuario = '$usuario'";

        $req = $bdd->prepare($sql4);
        $req->execute();
        $events = $req->fetchAll();
}

// $sql = "SELECT id, title, description, responsable, start, end, color FROM events WHERE usuario = '$usuario'";

// $req = $bdd->prepare($sql);
// $req->execute();
// $events = $req->fetchAll();


$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
while ($row = mysqli_fetch_array($query)) {
    $fullname = $row['usuario'];
    $email = $row['email'];
    $profile_pic = $row['image'];
    $created_at = $row['date'];
    $phono = $row['telefono'];
    $dependencia = $row['dependencia'];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../plugins/datatables/bootstrap.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.css">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->

    <link rel="stylesheet" href="../plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="../plugins/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/dash.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../../../../img/icon.png" type="image/x-icon">
    <style>
        /* pointer solo lectura */
        input[readonly]{
            cursor: no-drop;
        }
    </style>
    
<!-- confirmar accion -->
    <script type="text/javascript">
    function ConfirmMod() {
        var respuesta = confirm("Se modificará para toda la secretaria y direcciones a la que perteneces, ¿estas seguro?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }

</script>

</head>