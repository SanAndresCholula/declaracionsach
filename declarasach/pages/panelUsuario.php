<!DOCTYPE html>
<html lang="es">

<?php
include 'head.php';
?>
<title>Tipo de Declaración | DeclaraSACH <?php echo $afuncionario . ' ' . $nfuncionario ?></title>

<body class="hold-transition dark-mode sidebar-mini sidebar-collapse ">

   <div class="wrapper">
      <!-- Navbar -->
      <?php
      include 'navbar.php';
      include 'aside.php';
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Declaración seleccionada: <?php
                                                               $tipo = $tipo_declaracion;
                                                               switch ($tipo) {
                                                                  case 1:
                                                                     echo '<strong>Inicial</strong>';
                                                                     break;
                                                                  case 2:
                                                                     echo '<strong>Modificatoria</strong>';
                                                                     break;
                                                                  case 3:
                                                                     echo '<strong>Conclusión</strong>';
                                                                     break;
                                                               }

                                                               ?></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="format.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Panel de usuario</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- main -->
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <section class="col-lg-12 connectedSortable">
                     <!-- solid sales graph -->
                     <div class="card collapsed-card">
                        <div class="card-header border-0" style="background: #007bff; color:white">
                           <h3 class="card-title">
                              <i class="fas fa-poll-h"></i>
                              ¡Realiza la encuesta aquí por favor!
                           </h3>
                         
                           <div class="card-tools">
                              <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                                 <i class="fas fa-plus"></i>
                              </button>
                           </div>

                        </div>
                        <div class="card-body">
                           <section class="content">
                              <div class="container-fluid">
                                 <div class="row">
                                    <div class="col-12 col-sm-12">
                                       <div class="card card-primary card-tabs">
                                          <div class="card-header p-0 pt-1">
                                             <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                <li class="nav-item">
                                                   <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">Generales</a>
                                                </li>
                                                <li class="nav-item">
                                                   <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                   <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
                                                </li>
                                                <li class="nav-item">
                                                   <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="card-body">
                                             <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                                   <?php 
                                                   include 'forms/formUsuario.php';
                                                   include 'forms/formGenerales.php'; 
                                                   include 'forms/formCurricular.php';
                                                   include 'forms/formLaboral.php';
                                                   ?>

                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">

                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">

                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">

                                                </div>
                                             </div>
                                          </div>
                                          <!-- /.card -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </section>
      </div>
   </div>
   <!-- Main Footer -->
   <?php
   include 'footer.php';
   ?>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Tipos de Declaración</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-12 col-sm-6">
                     <p>De acuerdo a lo señalado en el artículo 33 de la Ley General de Responsabilidades Administrativas son los siguientes:</p>
                     <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                           <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                              <li class="pt-2 px-3">
                                 <h3 class="card-title">Tipos</h3>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Declaración Inicial</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Declaración de Modificación</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Declaración de Conclusión</a>
                              </li>
                           </ul>
                        </div>
                        <div class="card-body">
                           <div class="tab-content" id="custom-tabs-one-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                 <strong>Declaración Inicial:</strong> Se lleva a cabo al tomar posesión de un cargo
                                 público dentro de cualquier dependencia de la Administración Pública
                                 Federal, para presentarla, se cuenta con 60 días naturales a partir de la
                                 fecha de ingreso.
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                 <strong>Declaración de Modificación:</strong> Se presenta durante el mes de mayo
                                 de cada año.
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                 <strong>Declaración de Conclusión:</strong> Se realiza a la conclusión del
                                 cargo y tendrá 60 días para presentarla.
                              </div>
                           </div>
                        </div>
                        <!-- /.card -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
         </div>
      </div>
   </div>
   <!-- REQUIRED SCRIPTS -->
   <!-- jQuery -->
   <script src="../../plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap -->
   <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- toastr notificaciones -->
   <script src="../../plugins/toastr/toastr.min.js"></script>
   <script src="../dist/js/tipo_dec.js"></script>
   <!-- Select2 -->
   <script src="../../plugins/select2/js/select2.full.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../dist/js/adminlte.min.js"></script>
   <!-- MostrarForm -->
   <script src="../dist/js/mostrarForms.js"></script>
   <!-- InputMask -->
   <script src="../../plugins/moment/moment.min.js"></script>
   <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
   
   <script>
  $(function () {
    

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>

</html>