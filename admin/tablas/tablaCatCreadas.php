<?php
  require '../../function/funciones.php';
            conectar();
  $categorias = getTodasCategorias();

?>

<!-- start buscador -->
<style>
    #FiltrarCategoria{
        border-top-right-radius: 20px
    }
</style>
<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarCategoria').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaCategoria tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaCategoria tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });

</script>

<script type="text/javascript">
    function ConfirmDelete2() {
        var respuesta = confirm("Estas seguro de eliminar la categoria?");
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
            <input id="FiltrarCategoria" type="text" class="form-control" placeholder="Ingrese Nombre de la categoria" aria-label="Usuario" aria-describedby="basic-addon1">
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
                    <th>Nombre de categoría</th>
                    <th> Edición</th>
                </tr>
            </thead>

            <tbody class="BusquedaRapidaCategoria">
                <?php foreach( $categorias as $categoria ): ?>
                <tr>
                    <td>
                        <?= $categoria[0] ?>
                    </td>
                    <td>
                        <?= $categoria[1] ?>
                    </td>
                    <td><a href="./editarCategoria.php?id=<?= $categoria[0] ?>" title="Editar"><i class="fas fa-edit fa-2x"></i></a></td>
                    <td>
                        <a href="eliminarCategoria.php?id=<?= $categoria[0] ?>" title="Borrar" onclick="return ConfirmDelete2()"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
