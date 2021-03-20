<?php
  require '../../function/funciones.php';
            conectar();
  $categorias = getTodasCategorias();

?>
<!doctype html>
<!-- start buscador -->

<link rel="stylesheet" href="../../css/imgExcel.css">
<script>
    $(document).ready(function () {
        (function ($) {
            $('#FiltrarformatosTodo').keyup(function () { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaFormatosTodos tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaFormatosTodos tr').filter(function () {
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
            <input id="FiltrarformatosTodo" type="text" class="form-control" placeholder="Ingrese Nombre de usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<!-- end buscador -->

<!-- body -->

<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="background: rgba(0,0,0,5)">
            <thead>
                <tr style="color:#000">
                    <td><b>Link para visualizar</b></td>
                    <td><b>Nombre Archivo</b></td>
                    <td>Contraseña</td>
                    <!--    <td>Acciones</td>-->

                </tr>
            <tbody class="BusquedaFormatosTodos" style="color:#000;font-size:15px">
                <?php
                                        $query="SELECT * FROM `formatos` ORDER by titulo ASC";
                                        $resultado = mysqli_query($conexion, $query);
                                    ?>
                <tr>

                    <?php while($row=$resultado->fetch_assoc()){ ?>
                    <td>
                        <a href="<?= $row['ruta']?>" target="_blank" title="accede al formato, recuerda la contraseña"><img src="../img/excel.png" alt="Excel" class="img_excel"></a>
                    </td>

                    <td>
                        <?php echo $row['titulo']?>
                    </td>

                    <td>
                        <b>
                            <?php echo $row['clave']?></b>
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