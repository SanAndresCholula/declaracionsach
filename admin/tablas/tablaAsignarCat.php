<?php
  require '../../function/funciones.php';
            conectar();
  $usuarios = getUsuarios();
?>
<!-- start buscador -->

<script>
    $(document).ready(function () {
        (function ($) {
            $('#FiltrarUsuarioCat').keyup(function () { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaUsuariosCat tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaUsuariosCat tr').filter(function () {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
</script>

<div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input id="FiltrarUsuarioCat" type="text" class="form-control" placeholder="Ingrese Nombre de usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<!-- end buscador -->

<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th># ID</th>
                    <th>Nombre de usuario</th>
                    <th>Categorias</th>
                </tr>
            </thead>
            <tbody class="BusquedaRapidaUsuariosCat">
                <?php
          $i = 1;
          foreach( $usuarios as $usuario ):
        ?>
                <tr>
                    <td>
                        <?= $i++; ?>
                    </td>
                    <td>
                        <?= $usuario[0] ?>
                    </td>
                    <td style="text-align: center"><a href="./editarPermisos.php?usuario=<?= $usuario[0] ?>" title="Editar"><i class="fas fa-edit fa-2x"></i></a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>