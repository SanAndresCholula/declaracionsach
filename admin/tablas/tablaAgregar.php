<?php
require '../../function/funciones.php';
conectar();
  $usuarios = getUsuarios();
?>
<!-- start buscador -->

<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarUsuario').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaUsuarios tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaUsuarios tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });

</script>

<script type="text/javascript">
    function ConfirmDelete() {
        var respuesta = confirm("Estas seguro de querer eliminar al usuario? ");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }

</script>


<link rel="stylesheet" href="../../css/tablas.css">
<div class="row">

    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input id="FiltrarUsuario" type="text" class="form-control" placeholder="Ingrese Nombre de usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<!-- end buscador -->
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table class="table table-hover table-striped" style="width:100%;font-size:15px">

            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dependencia</th>
                    <th scope="col">Alta</th>
                    <th scope="col">Secretaría</th>
                    <th scope="col">Id secretaria</th>
                    <th scope="col">Ultima modificación</th>

                    <!--<th scope="col">Agregar Imagen</th>-->
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>

                </tr>
            </thead>
            <tbody class="BusquedaRapidaUsuarios">

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
                        $ver[7]."||".
                        $ver[8]."||".
                        $ver[9];
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
                       <?php echo $ver[9]?> 
                    </td>
                    <td>
                        <?php echo $ver[11]?>
                    </td>
                    <td>
                        <?php echo $ver[10]?>
                    </td>

                    <!--<td>

<a href="imgPerfil.php?id=<?php echo $ver[0];?>"><button class="btn btn-success" name="borrar">Agregar</button></a>
</td>-->
                    <td>

                        <a href="actualizarUsuario.php?usuario=<?php echo $ver[0];?>"><i class="fas fa-edit fa-2x"></i></a>
                    </td>
                    <td>
                        <a href="eliminarUser.php?usuario=<?php echo $ver[0];?>" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </td>
                </tr>
                <?php
                }
                desconectar();
                ?>
            </tbody>


        </table>
    </div>
</div>
