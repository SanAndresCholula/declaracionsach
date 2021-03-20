<?php
  require '../../function/funciones.php';
            conectar();
  $categorias = getTodasCategorias();

?>
<!-- start buscador -->

<script>
    $(document).ready(function() {
        (function($) {
            $('#FiltrarEnviados').keyup(function() { //FiltrarUsuario = id input de busqueda
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapidaEnviados tr').hide(); //BusquedaRapidaUsuarios class del tbody de la tabla de busqueda
                $('.BusquedaRapidaEnviados tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });

</script>

<script type="text/javascript">
    function ConfirmDelete4() {
        var respuesta = confirm("Estas seguro de querer eliminar este archivo enviado?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }

</script>

<?php
                                        $query="SELECT id_destinatario, destinatario, comentario, remitente, name, date FROM destinatario  WHERE destinatario ='superadministrador' ORDER BY destinatario ASC";
                                        $resultado = mysqli_query($conexion, $query);
                                    ?>
<div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input id="FiltrarEnviados" type="text" class="form-control" placeholder="Ingrese destinatario, fecha etc." aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
    </div>
</div>


<!-- end buscador -->
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered ListaTabla header_fijo" id="Topicos_Datatable" style="background: rgba(0,0,0,0.3)">
            <thead>
                <tr>
                    <td><b>Id</b></td>
                    <td><b>Destinatario</b></td>
                    <td><b>Comentario</b></td>
                    <td><b>Remitente</b></td>
                    <td><b>Nombre Archivo</b></td>
                    <td>Fecha Captura</td>
                    <td>Acciones</td>

                </tr>
            <tbody class="BusquedaRapidaEnviados">
                <?php

                                            while($row=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td>
                        <?php echo $row['id_destinatario'];?>
                    </td>

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
                        <a href="sendFile/<?php echo $row['name']?>" download="enviado/<?php echo $row['name']?>" title="Descargar archivo">
                            <?php echo $row['name']?></a>
                    </td>
                    <td>
                        <?php echo $row['date']?>
                    </td>
                    <td>
                        <a style="display: inline;" href="modificarEnv.php?id=<?php echo $row['id_destinatario'];?>" title="Editar archivo enviado"><i class="fas fa-edit fa-2x"></i></a>

                        <a style="display: inline;" href="eliminarEnviado.php?id=<?php echo $row['id_destinatario'];?>" title="Eliminar archivo enviado" onclick="return ConfirmDelete4()"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
