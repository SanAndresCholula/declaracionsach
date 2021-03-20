<?php
  require '../function/funciones.php';
            conectar();
?>
<div class="table-responsive">
<table class="table table-hover table-striped">

<thead>
    <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Correo</th>
        <th scope="col">Clave</th>
        <th scope="col">Admin</th>
        <th scope="col">N° Nómina</th>
        <th scope="col">Imagen</th>
        <th scope="col">Dependencia</th>
        <th scope="col">Fecha</th>
        <th scope="col">Agregar Imagen</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>

    </tr>
</thead>
<tbody>
    <?php
            $sentencia = "SELECT * FROM usuarios";
            $resultado = mysqli_query($conexion, $sentencia);

            while($ver = mysqli_fetch_row($resultado)){
                $datos = $ver[0]."||".
                         $ver[1]."||".
                         $ver[2]."||".
                         $ver[3]."||".
                         $ver[4]."||".
                         $ver[5]."||".
                         $ver[6]."||".
                    $ver[7];
            ?>

    <tr>
        <td>
            <?php echo $ver[0]?>
        </td>
        <td>
            <?php echo $ver[1]?>
        </td>
        <td>
            <?php echo $ver[2]?>
        </td>
        <td>
            <?php echo $ver[3]?>
        </td>
        <td>
            <?php echo $ver[4]?>
        </td>
        <td>
            <?php echo $ver[5]?>
        </td>
        <td>
            <?php echo $ver[6]?>
        </td>
        <td>
            <?php echo $ver[7]?>
        </td>
        <td>

            <a href="imgPerfil.php?id=<?php echo $ver[0];?>"><button class="btn btn-success" name="borrar">Agregar</button></a>
        </td>
        <td>

            <a href="actualizarUsuario.php?usuario=<?php echo $ver[0];?>"><button class="btn btn-warning">Editar</button></a>
        </td>
        <td>
            <a href="eliminarUser.php?usuario=<?php echo $ver[0];?>"><button class="btn btn-danger">Eliminar</button>
            </a>
        </td>
    </tr>
    <?php
            }
                                desconectar();
             ?>
</tbody>


</table>
</div>
