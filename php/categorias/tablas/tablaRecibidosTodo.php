<?php
require'head.php';
?>

<!doctype html>
<!-- start buscador -->

<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarRecibidos').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaRecibidosTodos tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaRecibidosTodos tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });

</script>

<div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input id="FiltrarRecibidos" type="text" class="form-control" placeholder="Ingrese Nombre de usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<!-- end buscador -->
<!-- body -->
<?php
                                        $query="SELECT  id_destinatario, destinatario, comentario, remitente, name, date FROM destinatario WHERE destinatario = '".$_SESSION['usuario']."' ";
                                        $resultado = mysqli_query($conexion, $query);
                                    ?>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="background: rgba(0,0,0,5)">
            <thead>
                <tr>

                    <td><b>Destinatario</b></td>
                    <td><b>Comentario</b></td>
                    <td><b>Remitente</b></td>
                    <td><b>Nombre Archivo</b></td>
                    <td>Fecha Captura</td>
                    <td>Acciones</td>

                </tr>
            <tbody class="BusquedaRapidaRecibidosTodos" style="color:#000;font-size:15px">
                <?php

                                            while($row=$resultado->fetch_assoc()){ ?>
                <tr>
                    <!--<td>
    <?php echo $row['id_destinatario'];?>
</td>-->

                    <td>
                        <?php echo $row['destinatario'];?>
                    </td>
                    <td>
                        <?php echo $row['comentario']?>
                    </td>
                    <td>
                        <?php echo $row['remitente']?>
                    </td>
                    <td>
                        <a href="../../admin/sendFile/<?php echo $row['name']?>" download="recibido/<?php echo $row['name']?>">
                            <?php echo $row['name']?>&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
                    </td>
                    <td>
                        <?php echo $row['date']?>
                    </td>
                    <!--<td>
    <a style="display: inline;" href="../categorias/modificarRep.php?id=<?php echo $row['id_reporte'];?>" title="Editar reportes"><i class="fas fa-edit fa-2x"></i></a>

    <a style="display: inline;" href="eliminarRep.php?id=<?php echo $row['id_reporte'];?>" title="Eliminar reportes"><i class="fas fa-trash-alt fa-2x"></i></a>
</td>-->
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
