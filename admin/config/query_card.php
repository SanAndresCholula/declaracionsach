<?php
   $id_benef = $_GET['id'];
        $query = "SELECT id_benef, a_paterno, a_materno, nombres FROM beneficiario WHERE id_benef = $id_benef";
        $resultado = mysqli_query($conexion, $query) or die($conexion->error);
        $row = $resultado->fetch_assoc();
        $nomCompleto = $row['a_paterno'] . " " . $row['a_materno'] . " " . $row['nombres'];

        $count_events = "SELECT count('id_benef1') FROM events WHERE id_benef1 = $id_benef";
        $res = mysqli_query($conexion, $count_events);
        $rowcount = mysqli_fetch_array($res);
        $num_events = $rowcount[0];

        $query = mysqli_query($conexion, "SELECT e.id, e.title, e.horastart, e.horaend, e.start, e.end, e.color, e.id_user1, e.entrega, p.id_prog, p.id_tp1, p.id_np1, p.id_secre1, p.enlace 
        FROM events e 
        INNER JOIN programas p on e.id_prog1 = p.id_prog 
        WHERE id_benef1 = $id_benef ");
        while ($cal = mysqli_fetch_array($query)) {
            $c_tp = $cal['id_tp1'];
            $c_np = $cal['id_np1'];
            $c_s = $cal['id_secre1'];
            $c_e = $cal['enlace'];
            $hs = $cal['horastart'];
            $he = $cal['horaend'];
        }
        require_once('bdd.php');
        $sql = "SELECT e.id, e.title, e.horastart, e.horaend, e.start, e.end, e.color, e.id_user1, e.entrega, p.id_prog, p.id_tp1, p.id_np1, p.id_secre1, p.enlace 
        FROM events e 
        INNER JOIN programas p on e.id_prog1 = p.id_prog 
        WHERE id_benef1 = $id_benef ";
        $req = $bdd->prepare($sql);
        $req->execute();
        $events = $req->fetchAll();