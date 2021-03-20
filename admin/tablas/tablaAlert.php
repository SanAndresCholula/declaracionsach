<?php
  require '../../function/funciones.php';
            conectar();
?>

<style>
    label{
        color:#fff;
        font-size: 18px
    }
    .col-12{
        margin-top: 50px
    }
</style>

<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarAlerts').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaAlerts tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaAlerts tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });

</script>

<script type="text/javascript">
    function ConfirmDelete() {
        var respuesta = confirm("Estas seguro de querer eliminar el alert? ");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }

</script>


<!-- body -->

<div class="col-md-6 col-md-offset-3">

    <form id="test_upload" name="test_upload" action="uploadAlert.php" enctype="multipart/form-data" method="post">

        <div class="form-group"><br>
            <label for="fecha">Fecha de Publicacion</label>
            <input type="datetime" class="form-control" name="fecha" value="<?php   ini_set('date.timezone','America/Mexico_City'); echo date('Y-m-d H:i:s');?>" readonly="readonly">
        </div>

        <div class="form-group">
            <label for="noticia">Esta alerta sera visualizada en la página de usuarios</label>
            <textarea class="form-control" id="noticia" name="noticia" rows="3" required></textarea>
        </div>
        <div>
            <input class="btn btn-primary btn-md" type="submit" name="submit" value="Notificar" style="margin-top:10px" />

        </div>

    </form>

</div>

<div class="col-12">
    <link rel="stylesheet" href="../../css/tablas.css">
    <div class="row">

        <div class="col-sm-8"></div>
        <div class="col-sm-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input id="FiltrarAlerts" type="text" class="form-control" placeholder="Ingrese Nombre de usuario" aria-label="Usuario" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <div class="table-responsive">
            <table class="table table-hover table-striped" style="width:100%;font-size:15px">

                <thead class="cabeceraTabla" style="background:#000;color: #ffffff;font-size: 15px;">
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Noticia</th>
                        <th>Editar</th>
                        <th>Borrar</th>


                    </tr>
                </thead>

                <tbody class="BusquedaRapidaAlerts">
                    <?php
                    $insert="SELECT * FROM news ORDER BY id DESC" ;
                    $result=mysqli_query($conexion, $insert);
                    while($ver=$result->fetch_assoc()){
                    ?>
                    <tr>
                        <td>
                            <?php echo $ver['id']?>
                        </td>
                        <td>
                            <?php echo $ver['fecha']?>
                        </td>
                        <td>
                            <?php echo $ver['contenido']?>
                        </td>
                        <td>
                            <a href="editarNew.php?id=<?php echo $ver['id'];?>" title="Editar"><i class="fas fa-edit fa-2x"></i></a>
                        </td>
                        <td>
                            <a href="eliminarNew.php?id=<?php echo $ver['id'];?>" title="Borrar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt fa-2x"></i></a>
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
</div>
<
