<?php
    $conexion = null;

    function conectar()
    {
        global $conexion;
    //$conexion = mysqli_connect('localhost', 'root', '@itroot', 'crd');
    $conexion = mysqli_connect('localhost', 'root', '', 'crd');
        mysqli_set_charset($conexion, 'utf8');
    //  if(mysqli_connect_error()) { echo("fallo"); } else{ echo("conectado"); }

    // Url donde estara el proyecto, debe terminar con un "/" al final
    $base_url="http://localhost/crd/php/categorias/";

    }

    function getTodasCategorias()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM categorias");
        // return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila = $respuesta->fetch_row())
          $respuestas_array[] = $fila;
        return $respuestas_array;
    }


    function getTodosFormatos(){
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM formatos");
        // return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila = $respuesta->fetch_row())
          $respuestas_array[] = $fila;
        return $respuestas_array;
    }

     function getTodosCoin(){
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM coin");
        // return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila = $respuesta->fetch_row())
          $respuestas_array[] = $fila;
        return $respuestas_array;
    }

    function getTodosCalendar(){
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM status_cal");
        // return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila = $respuesta->fetch_row())
          $respuestas_array[] = $fila;
        return $respuestas_array;
    }

    function getCategoriasPorUser()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT C.categoria, C.descripcion, C.ruta FROM permisos P INNER JOIN categorias C ON P.ID_Categoria = C.ID_Categoria WHERE usuario = '".$_SESSION['usuario']."'");
        // return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila = $respuesta->fetch_row())
            $respuestas_array[] = $fila;
        return $respuestas_array;
    }

    function getFormatosPorUser()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT F.ruta, F.titulo, F.clave FROM permisos_formatos P INNER JOIN formatos F ON  P.id_formato = F.id_formato WHERE usuario = '".$_SESSION['usuario']."' " );
        //return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila2 = $respuesta->fetch_row())
            $respuestas_array[] = $fila2;
        return $respuestas_array;
    }

      function getCoinPorUser()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT C.ruta, C.titulo, C.clave FROM permisos_coin P INNER JOIN coin C ON  P.id_coin = C.id_coin WHERE usuario = '".$_SESSION['usuario']."' " );
        //return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila2 = $respuesta->fetch_row())
            $respuestas_array[] = $fila2;
        return $respuestas_array;
    }

    function getCalendarPorUser()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT S.ruta, S.dependencia FROM permisos_calendar P INNER JOIN status_cal S ON  P.id = S.id WHERE usuario = '".$_SESSION['usuario']."' " );
        //return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila2 = $respuesta->fetch_row())
            $respuestas_array[] = $fila2;
        return $respuestas_array;
    }

    function getCalendarPorUserEvents()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT S.ruta, S.dependencia FROM permisos_calendar P INNER JOIN status_cal S ON  P.id = S.id WHERE usuario = '".$_SESSION['usuario']."' " );
        //return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila2 = $respuesta->fetch_row())
            $respuestas_array[] = $fila2;
        return $respuestas_array;
    }

    function getCategoriaPorId($id)
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM categorias WHERE ID_Categoria =  ".$id);
        return mysqli_fetch_row($respuesta);
    }

  function getFormatoPorId($id)
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM formatos WHERE id_formato =  ".$id);
        return mysqli_fetch_row($respuesta);
    }
    

    function getUsuarios()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE admin<>1");
        // return $respuesta->fetch_all();
        $respuestas_array = array();
        while ($fila = $respuesta->fetch_row())
          $respuestas_array[] = $fila;
        return $respuestas_array;
    }


    function validarLogin($usuario, $clave)
    {
    global $conexion;
    $consulta = sprintf("SELECT * FROM usuarios WHERE usuario='".$usuario."' AND clave='".$clave."' " );
    $respuesta = mysqli_query($conexion, $consulta);

    if( $fila = mysqli_fetch_row($respuesta) )
    {
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['admin'] = $fila[3];
    return true;
    }
    return false;
    }

    function eliminarPermisos($usuario)
    {
        global $conexion;
        mysqli_query($conexion, "DELETE FROM permisos WHERE usuario='".$usuario."'");
    }

    function eliminarPermisosFormatos($usuario)
    {
        global $conexion;
        mysqli_query($conexion, "DELETE FROM permisos_formatos WHERE usuario='".$usuario."'");
    }

    function eliminarPermisosCoin($usuario)
    {
        global $conexion;
        mysqli_query($conexion, "DELETE FROM permisos_coin WHERE usuario='".$usuario."'");
    }

    function eliminarPermisosCalendar($usuario)
    {
        global $conexion;
        mysqli_query($conexion, "DELETE FROM permisos_calendar WHERE usuario='".$usuario."'");
    }


    function asignarPermisos($usuario, $idCat)
    {
        global $conexion;
        mysqli_query($conexion, "INSERT INTO permisos VALUES('".$usuario."', ".$idCat.")");
    }

      function asignarPermisosFormatos($usuario, $idCat)
    {
        global $conexion;
        mysqli_query($conexion, "INSERT INTO permisos_formatos VALUES('".$usuario."', ".$idCat.")");

    }
    
    function asignarPermisosCoin($usuario, $idCat)
    {
        global $conexion;
        mysqli_query($conexion, "INSERT INTO permisos_coin VALUES('".$usuario."',".$idCat.")");
    }

    function asignarPermisosCalendar($usuario, $idCat)
    {
        global $conexion;
        mysqli_query($conexion, "INSERT INTO permisos_calendar VALUES('".$usuario."',".$idCat.")");
    }

    function tienePermiso($usuario, $idCat)
    {
        global $conexion;
        $result = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM permisos WHERE usuario='".$usuario."' AND ID_Categoria=".$idCat);
        $row = mysqli_fetch_assoc($result);
        $numero = $row['total'];
        return $numero > 0;
    }

    function tienePermisoFormatos($usuario, $idCat)
    {
        global $conexion;
        $result = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM permisos_formatos WHERE usuario='".$usuario."' AND id_formato=".$idCat);
        $row = mysqli_fetch_assoc($result);
        $numero = $row['total'];
        return $numero > 0;
    }


     function tienePermisoCoin($usuario, $idCat)
    {
        global $conexion;
        $result = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM permisos_coin WHERE usuario='".$usuario."' AND id_coin=".$idCat);
        $row = mysqli_fetch_assoc($result);
        $numero = $row['total'];
        return $numero > 0;
    }

    function tienePermisoCalendar($usuario, $idCat)
    {
        global $conexion;
        $result = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM permisos_calendar WHERE usuario='".$usuario."' AND id=".$idCat);
        $row = mysqli_fetch_assoc($result);
        $numero = $row['total'];
        return $numero > 0;
    }

    function editarCategoria($id, $nombre, $descripcion, $ruta)
    {
        global $conexion;
        mysqli_query($conexion, "UPDATE categorias SET categoria='".$nombre."', descripcion='".$descripcion."', ruta='".$ruta."' WHERE ID_Categoria = ".$id);
    }

    function haIniciadoSesion()
    {
        session_start();
        return isset( $_SESSION['usuario'] );

    }

    function esAdmin()
    {
        return $_SESSION['admin'];
    }

    function tienePrivilegios1()
    {
        return $_SESSION['privilegios1'];
    }

    function desconectar()
    {
        global $conexion;
        mysqli_close($conexion);
    }

