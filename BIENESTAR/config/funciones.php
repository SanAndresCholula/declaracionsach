<?php
$conexion = null;

function conectar()
{
    global $conexion;
    //$conexion = mysqli_connect('localhost', 'empatika_root', '@admin_Admin123@', 'empatika_admin');
    //$conexion = mysqli_connect('localhost', 'proye178_pak', '@Pr0y3ct04k', 'proye178_pak');
    //$conexion = mysqli_connect('localhost', 'root', '@itroot', 'bd_bienestar');
    $conexion = mysqli_connect('localhost', 'root', '', 'bd_bienestar');

    mysqli_set_charset($conexion, 'utf8');

    // if(mysqli_connect_error()) { echo("fallo"); } else{ echo("conectado"); }

}

function validarLogin($usuario, $clave)
{
    global $conexion;
    $consulta = sprintf("SELECT * FROM users WHERE username='" . $usuario . "' AND password='" . $clave . "' ");

    $respuesta = mysqli_query($conexion, $consulta);

    if ($fila = mysqli_fetch_row($respuesta)) {
        session_start();
        $_SESSION['id_user'] = $fila[0];
        $_SESSION['admin'] = $fila[6];
        $_SESSION['username'] = $fila[2];
        return true;
    }
    return false;
}

function esAdmin()
{
    return $_SESSION['admin'];
}

function desconectar()
{
    global $conexion;
    mysqli_close($conexion);
}

function haIniciadoSesion()
{
    session_start();
    return isset($_SESSION['username']);
}

function getSecciones()
{
    global $conexion;
    $respuesta = mysqli_query($conexion, "CALL verSecciones()");
    // return $respuesta->fetch_all();
    $respuestas_array = array();
    while ($fila = $respuesta->fetch_row())
        $respuestas_array[] = $fila;
    return $respuestas_array;
}

function getSecretarias()
{
    global $conexion;
    $respuesta = mysqli_query($conexion, "SELECT * FROM secretaria");
    // return $respuesta->fetch_all();
    $respuestas_array = array();
    while ($fila = $respuesta->fetch_row())
        $respuestas_array[] = $fila;
    return $respuestas_array;
}

function rol_permisos()
{
    global $conexion;
    $id = $_SESSION['id_user'];;
    $respuesta = mysqli_query($conexion, "SELECT 
 U.id_user, U.username, U.email, U.password, U.phone, U.admin,
 M.crud_usuarios, M.db_benef, M.capt_benef, M.db_apoyos, M.programas, M.catalogo_seccional,
 P_a.p_usuarios_a, P_a.p_usuarios_e, P_a.p_usuarios_d, P_a.p_bd_benef_a, P_a.p_bd_benef_e, P_a.p_bd_benef_d, P_a.p_bd_apoyos_a, P_a.p_bd_apoyos_e, P_a.p_bd_apoyos_d, P_a.p_programas_a, P_a.p_programas_e, P_a.p_programas_d, P_a.p_cat_seccional_a, P_a.p_cat_seccional_e, P_a.p_cat_seccional_d, p_des_db_users, p_des_db_benef, p_des_db_apoyos, p_des_db_programas, p_des_db_cat_sec
 
 FROM users U 
 INNER JOIN permiso_user_modulo P_u ON U.id_permiso_user_modulo1 = P_u.id_permiso_user_modulo 
 INNER JOIN modulos M ON P_u.id_modulo1 = M.id_modulo
 INNER JOIN permisos_acciones P_a ON P_u.id_per_acc1 = P_a.id_per_acc 
 WHERE id_user = $id");

    $respuestas_array = array();
    while ($fila = $respuesta->fetch_row())
        $respuestas_array[] = $fila;
    return $respuestas_array;
}

function getEstatusColors()
{
    global $conexion;
    $respuesta = mysqli_query($conexion, "SELECT * FROM colors");
    // return $respuesta->fetch_all();
    $respuestas_array = array();
    while ($fila = $respuesta->fetch_row())
        $respuestas_array[] = $fila;
    return $respuestas_array;
}


function getBeneficiarios()
{
    global $conexion;
    $respuesta = mysqli_query($conexion, "SELECT 
        b.id_benef, b.a_paterno, b.a_materno, b.nombres, 
        g.telefono,g.ine,g.curp, g.nacimiento, 
        s.genero,
        u.username,
        ns.seccion,
        l.localidad,
        CONCAT( ca.calle,' Ext ', ca.exte,' Int ',ca.inte) AS domicilio,
        co.colonia,
        cp.cp,
        tp.nom_tp,
        np.nom_p,
        com.observaciones, com.file,
        f.f_alta
        from beneficiario b 
        INNER JOIN generales g on b.id_gene1 = g.id_gene 
        INNER JOIN sexo s on g.id_sex = s.id_sexo
        INNER JOIN capt c on g.id_capt1 = c.id_capt
        INNER JOIN users u on c.id_user1 = u.id_user
        INNER JOIN secdom sd on b.id_secdom1 = sd.id_secdom
        INNER JOIN n_seccion ns on sd.id_nsec1 = ns.id_nsec
        INNER JOIN localidad l on sd.id_loc1 = l.id_loc
        INNER JOIN direccion d on sd.id_direc1 = d.id_direc 
        INNER JOIN calle ca on  d.id_calle1 = ca.id_calle
        INNER JOIN colonia co on d.id_col1 = co.id_col
        INNER JOIN c_postal cp on d.id_cp1 = cp.id_cp
        INNER JOIN programas pr on b.id_prog1 = pr.id_prog
        INNER JOIN tipo_programa tp on pr.id_tp1 = tp.id_tp
        INNER JOIN nom_programa np on pr.id_np1 = np.id_np
        INNER JOIN comentarios com on b.id_com1 = com.id_com
        INNER JOIN fechas f on b.id_fechas1 = f.id_fechas limit 100");
    //return $respuesta->fetch_all();
    $respuestas_array = array();
    while ($fila = $respuesta->fetch_row())
        $respuestas_array[] = $fila;
    return $respuestas_array;
}
