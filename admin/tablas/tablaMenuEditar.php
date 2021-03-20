<?php
  require '../../function/funciones.php';
            conectar();
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

            <thead class="cabeceraTabla" style="background:#000;color: #ffffff;font-size: 15px;">
                <tr>
                    <th>Id</th>
                    <th>Categorias</th>
                    <th>Formatos</th>
                    <th>COIN</th>
                    <!-- <th>Reportes</th>
                    <th>Enviar</th>
                    <th>Recibidos</th> -->
                    <th>Botones</th>
                    <th>Acciones</th>


                </tr>
            </thead>

            <tbody class="BusquedaRapidaAlerts">
                <?php
                    $insert="SELECT * FROM menu ORDER BY id DESC" ;
                    $result=mysqli_query($conexion, $insert);
                    while($ver=$result->fetch_assoc()){
                    ?>
                <tr>
                    <td>
                        <?php echo $ver['id']?>
                    </td>
                    <td>
                        <?php echo $ver['categorias']?>
                    </td>
                    <td>
                        <?php echo $ver['formatos']?>
                    </td>
                    <td>
                        <?php echo $ver['coin']?>
                    </td>
                    <!-- <td>
                        <?php echo $ver['reportes']?>
                    </td>
                    <td>
                        <?php echo $ver['enviar']?>
                    </td>
                    <td>
                        <?php echo $ver['recibidos']?>
                    </td> -->
                    <td>
                        <?php echo $ver['botones']?>
                    </td>
                    <td>
                        <a href="editarMenu.php?id=<?php echo $ver['id'];?>" title="Editar"><i class="fas fa-edit fa-2x"></i></a>

                        <a href="eliminarMenuRestriccion.php?id=<?php echo $ver['id'];?>" title="Borrar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </td>

                </tr>
                <?php
                }
                    desconectar();
                ?>

            </tbody>

        </table>
        <!--   <button type="button" class="btn btn-success btn-md" onclick="javascript:imprim2();"><i class="fas fa-print"></i>&nbsp;Imprimir</button>-->
    </div>
</div>
