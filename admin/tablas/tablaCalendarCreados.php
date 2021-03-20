<?php
require '../../function/funciones.php';
conectar();
$formatos = getTodosCalendar();

?>
<!-- start buscador -->
<style>
    #FiltrarFormatoExcel {
        border-top-right-radius: 20px
    }
</style>
<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarFormatoCalendar').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaFormatoCalendar tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaFormatoCalendar tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
</script>

<script type="text/javascript">
    function ConfirmDelete() {
        var respuesta = confirm("Estas seguro de querer eliminar el formato status calendar?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

<div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input id="FiltrarFormatoCalendar" type="text" class="form-control" placeholder="Ingrese Nombre del formato" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<!-- end buscador -->
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th># ID</th>
                    <th>Nombre del formato Calendar</th>
                    <th>Edición</th>
                </tr>
            </thead>

            <tbody class="BusquedaRapidaFormatoCalendar">
                <?php foreach ($formatos as $formato) : ?>
                    <tr>
                        <td>
                            <?= $formato[0] ?>
                        </td>
                        <td>
                            <?= $formato[1] ?>
                        </td>
                        <td>
                            <a href="./editarCalendar.php?id=<?= $formato[0] ?>" title="Editar"><i class="fas fa-edit fa-2x"></i></a>
                            <a href="eliminarCalendar.php?id=<?= $formato[0] ?>" title="Borrar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>