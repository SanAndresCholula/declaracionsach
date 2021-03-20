<?php
  require 'head.php';
?>

<!doctype html>
<!-- start buscador -->

<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarEnviadosTodo').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaEnviadosTodos tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaEnviadosTodos tr').filter(function() {
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
            <input id="FiltrarEnviadosTodo" type="text" class="form-control" placeholder="Ingrese Nombre de usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<!-- end buscador -->

<!-- body -->
<?php
                                        $query="SELECT  id_reporte, comentario, name, date, dependencia FROM reporte ORDER BY date DESC";
                                        $resultado = mysqli_query($conexion, $query);
                                    ?>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="background: rgba(0,0,0,5)">
            <thead>
                <tr style="color:#000">
                    <td><b>Id</b></td>
                    <td><b>Comentario del reporte</b></td>
                    <td><b>Nombre Archivo</b></td>
                    <td>Fecha Captura</td>
                    <td>Dependencia</td>
                    <td>Acciones</td>

                </tr>
            <tbody class="BusquedaRapidaEnviadosTodos" style="color:#000;font-size:15px">
                <?php

                                            while($row=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td>
                        <?php echo $row['id_reporte'];?>
                    </td>

                    <td>
                        <?php echo $row['comentario'];?>
                    </td>
                    <td>
                        <a href="upload/<?php echo $row['name']?>" download="mi_archivo/<?php echo $row['name']?>">
                            <?php echo $row['name']?>&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
                    </td>
                    <td>
                        <?php echo $row['date']?>
                    </td>
                    <td>
                        <?php echo $row['dependencia']?>
                    </td>
                    <td>
                        <!--<a style="display: inline;" href="../categorias/modificarRep.php?id=<?php echo $row['id_reporte'];?>" title="Editar reportes"><i class="fas fa-edit fa-2x"></i></a>

<a style="display: inline;" href="eliminarRep.php?id=<?php echo $row['id_reporte'];?>" title="Eliminar reportes"><i class="fas fa-trash-alt fa-2x"></i></a>-->
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
