<?php
require 'headPages.php';
?>
<style>
    .whiteEvent {
        background-color: #ffffff;
    }
</style>
<title>Agenda | <?php echo $_SESSION['usuario'] ?></title>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        require 'navPages.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        require 'asidePages.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="text-white">Calendario: <?php echo $dependencia ?></h1>
                        </div>
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Calendario</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sticky-top mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Estatus de actividades</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- the events -->
                                        <?php

                                        $id = $_SESSION['usuario'];
                                        $query = "SELECT id FROM permisos_calendar WHERE usuario = '$id'";
                                        $resultado = mysqli_query($conexion, $query);
                                        $row = $resultado->fetch_assoc();

                                        $idp = $row['id'];

                                        $sentencia = "SELECT * FROM status_cal WHERE id = $idp ";
                                        $resultado = mysqli_query($conexion, $sentencia);

                                        while ($ver = mysqli_fetch_row($resultado)) {
                                            $datos = $ver[0] . "||" .
                                                $ver[2] . "||" .
                                                $ver[3] . "||" .
                                                $ver[4] . "||" .
                                                $ver[5] . "||" .
                                                $ver[6] . "||" .
                                                $ver[7] . "||" .
                                                $ver[8];
                                        ?>
                                            <div id="external-events">
                                                <form class="form_status" action="editCalendar.php" method="POST">
                                                    <input type="hidden" name="id" value="<?= $ver[0] ?>">
                                                    <div class="form-group">
                                                        <label for="azul" style="color:#0071c5;"><i class="fas fa-square"></i> Azul oscuro</label>
                                                        <textarea id="azul" class="form-control input-sm" name="azul" rows="1" style="max-width:100%; min-width:100%"><?php echo $ver[2]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="turqyesa" style="color:#40E0D0;"><i class="fas fa-square"></i> Turquesa</label>
                                                        <textarea id="turquesa" class="form-control input-sm" name="turquesa" rows="1" style="max-width: 100%; min-width:100%"><?php echo $ver[3]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="verde" style="color:#008000;"><i class="fas fa-square"></i> Verde</label>
                                                        <textarea id="verde" class="form-control input-sm" name="verde" rows="1" style="max-width: 100%; min-width:100%"><?php echo $ver[4]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="amarillo" style="color:#FFD700;"><i class="fas fa-square"></i> Amarillo</label>
                                                        <textarea id="amarillo" class="form-control input-sm" name="amarillo" rows="1" style="max-width: 100%; min-width:100%"><?php echo $ver[5]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="naranja" style="color:#FF8C00;"><i class="fas fa-square"></i> Naranja</label>
                                                        <textarea id="naranja" class="form-control input-sm" name="naranja" rows="1" style="max-width: 100%; min-width:100%"><?php echo $ver[6]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rojo" style="color:#FF0000;"><i class="fas fa-square"></i> Rojo</label>
                                                        <textarea id="rojo" class="form-control input-sm" name="rojo" rows="1" style="max-width: 100%; min-width:100%"><?php echo $ver[7]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="negro" style="color:#000000;"><i class="fas fa-square"></i> Negro</label>
                                                        <textarea id="negro" class="form-control input-sm" name="negro" rows="1" style="max-width: 100%; min-width:100%"><?php echo $ver[8]; ?></textarea>
                                                    </div>
                                                <?php
                                            }
                                                ?>
                                                <button type="submit" class="btn btn-primary" onclick="return ConfirmMod()">Modificar</button>
                                                </form>

                                            </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col calendar -->
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-body p-0">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php
        require 'footer.php';
        ?>

        <!-- Modal -->
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="addEvent.php">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Titulo</label>
                                <div class="col-sm-12">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Titulo de la actividad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-12">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Seleccionar un status</option>
                                        <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                        <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                                        <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                                        <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                                        <option style="color:#000000;" value="#000000">&#9724; Negro</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="description" id="description" style="max-width:100%" placeholder="Describe la actividad a realizar"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="responsable" class="col-sm-2 control-label">Responsable</label>
                                <div class="col-sm-12">
                                    <input type="text" name="responsable" class="form-control" id="responsable" placeholder="Responsable de la actividad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="responsable" class="col-sm-2 control-label">Dependencia</label>
                                <div class="col-sm-12">
                                    <input type="text" name="dependencia" class="form-control" id="dependencia" value="<?php echo $dependencia ?>" readonly onfocus="this.blur" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="start" class="form-control" id="start">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="end" class="col-sm-2 control-label">Fecha Final</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="end" class="form-control" id="end">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $usuarioCal = $_SESSION['usuario']; ?>
                                <input id="usuario" class="form-control" type="hidden" name="usuario" id="usuario" value="<?php echo $usuarioCal ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="editEventTitle.php">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Titulo</label>
                                <div class="col-sm-12">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-12">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Seleccionar</option>
                                        <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                        <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                                        <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                                        <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                                        <option style="color:#00000;" value="#000000">&#9724; Negro</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="description" id="description" style="max-width:100%"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="responsable" class="col-sm-2 control-label">Responsable</label>
                                <div class="col-sm-12">
                                    <input type="text" name="responsable" class="form-control" id="responsable" placeholder="Titulo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="responsable" class="col-sm-2 control-label">dependencia</label>
                                <div class="col-sm-12">
                                    <input type="text" name="dependencia" class="form-control" id="dependencia" readonly onfocus="this.blur" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
                                <div class="col-sm-12">
                                    <input type="text" name="start" class="form-control" id="start" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="end" class="col-sm-2 control-label">Fecha Final</label>
                                <div class="col-sm-12">
                                    <input type="text" name="end" class="form-control" id="end" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label class="text-danger"><input type="checkbox" name="delete"> Eliminar Evento</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="form-control" id="id">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- FullCalendar -->
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar/fullcalendar.min.js'></script>
    <script src='js/fullcalendar/fullcalendar.js'></script>
    <script src='js/fullcalendar/locale/es.js'></script>

    <!-- Page specific script -->
    <script>
        $(document).ready(function() {

            var date = new Date();
            var yyyy = date.getFullYear().toString();
            var mm = (date.getMonth() + 1).toString().length == 1 ? "0" + (date.getMonth() + 1).toString() : (date.getMonth() + 1).toString();
            var dd = (date.getDate()).toString().length == 1 ? "0" + (date.getDate()).toString() : (date.getDate()).toString();

            $('#calendar').fullCalendar({
                header: {
                    language: 'es',
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay  agendaWeek,agendaDay',

                },
                defaultDate: yyyy + "-" + mm + "-" + dd,
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {

                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd').modal('show');
                },
                eventRender: function(event, element) {
                    element.bind('dblclick', function() {
                        $('#ModalEdit #id').val(event.id);
                        $('#ModalEdit #title').val(event.title);
                        $('#ModalEdit #color').val(event.color);
                        $('#ModalEdit #description').val(event.description);
                        $('#ModalEdit #responsable').val(event.responsable);
                        $('#ModalEdit #dependencia').val(event.dependencia);
                        $('#ModalEdit #start').val(event.start);
                        $('#ModalEdit #end').val(event.end);
                        $('#ModalEdit').modal('show');
                    });
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position

                    edit(event);

                },
                eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur

                    edit(event);

                },
                events: [
                    <?php foreach ($events as $event) :

                        $start = explode(" ", $event['start']);
                        $end = explode(" ", $event['end']);
                        if ($start[1] == '00:00:00') {
                            $start = $start[0];
                        } else {
                            $start = $event['start'];
                        }
                        if ($end[1] == '00:00:00') {
                            $end = $end[0];
                        } else {
                            $end = $event['end'];
                        }
                    ?> {
                            id: '<?php echo $event['id']; ?>',
                            title: '<?php echo $event['title']; ?>',
                            description: '<?php echo $event['description']; ?>',
                            responsable: '<?php echo $event['responsable']; ?>',
                            dependencia: '<?php echo $event['dependencia']; ?>',
                            start: '<?php echo $start; ?>',
                            end: '<?php echo $end; ?>',
                            color: '<?php echo $event['color']; ?>',

                        },
                    <?php endforeach; ?>
                ]
            });

            function edit(event) {
                start = event.start.format('YYYY-MM-DD HH:mm:ss');
                if (event.end) {
                    end = event.end.format('YYYY-MM-DD HH:mm:ss');
                } else {
                    end = start;
                }

                id = event.id;

                Event = [];
                Event[0] = id;
                Event[1] = start;
                Event[2] = end;

                $.ajax({
                    url: 'editEventDate.php',
                    type: "POST",
                    data: {
                        Event: Event
                    },
                    success: function(rep) {
                        if (rep == 'OK') {
                            alert('Evento se ha guardado correctamente');
                        } else {
                            alert('No se pudo guardar. Inténtalo de nuevo.');
                        }
                    }
                });
            }

        });
    </script>
</body>

</html>