<!DOCTYPE html>
<html lang="es">

<?php
include 'head.php';
?>
<title>Tipo de Declaración | DeclaraSACH <?php echo $afuncionario ?></title>

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
                     <h1 class="m-0">Tipos de Declaración</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="format.php">Inicio</a></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid ">
               <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4 col-lg-4">
                     <div class="card card-primary collapsed-card">
                        <div class="card-header">
                           <h3 class="card-title">Selecciona tu tipo de Declaración</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                              </button>
                           </div>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                           <form action="../assets/add_tipo_dec.php" method="post">
                              <div class="btn-group" role="group">
                                 <div class="row">
                                    <div class="col-4">
                                       <div class="input-group form-group">
                                          <button class="btn btn-app" name="btn_inicial" id="btn_inicial">
                                             <span class="badge bg-purple">1</span>
                                             <i class="fas fa-file-alt"></i> Declaración Inicial
                                             <input type="radio" name="tipo_declaracion" value="1" required>
                                          </button>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="input-group form-group">
                                          <button class="btn btn-app" name="btn_modificacion" id="btn_modificacion">
                                             <span class="badge bg-teal">2</span>
                                             <i class="fas fa-file-medical"></i> Declaración Modificación
                                             <input type="radio" name="tipo_declaracion" value="2" required>
                                          </button>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="input-group form-group">
                                          <button class="btn btn-app" name="btn_conclusion" id="btn_conclusion">
                                             <span class="badge bg-info">3</span>
                                             <i class="fas fa-file-excel"></i> Declaración Conclusión
                                             <input type="radio" name="tipo_declaracion" value="3" required>
                                             <input type="hidden" name="id_usuario" value="<?php echo $id;
                                                                                             ?>">
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group justify-content-between align-items-end">
                                       <button type="submit" name="enviar" id="enviar" class="btn btn-block btn-outline-success btn-flat">Siguiente <i class="fas fa-arrow-right"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
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
   <!-- AdminLTE App -->
   <script src="../dist/js/adminlte.min.js"></script>

</body>

</html>