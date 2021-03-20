<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="#" class="brand-link">
      <img src="../img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Declara<b>SACH</b></span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="../img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block" title="<?php echo $afuncionario ?>"><?php echo $afuncionario ?></a>
            <a href="#" class="d-block" title="<?php echo $nfuncionario ?>"><?php echo $nfuncionario ?></a>
         </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="fas fa-file-alt"></i>&nbsp;
                  <p>
                     Mis declaraciones
                     <i class="fas fa-angle-left right"></i>
                     <!-- <span class="badge badge-info right">6</span> -->
                  </p>
               </a>
               <?php if ($tipo_declaracion == 0) { ?>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-ban"></i>
                           <p>&nbsp;Ninguna declaracion</p>
                        </a>
                     </li>
                  </ul>
               <?php } else { ?>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-poll-h"></i>
                           <p>&nbsp;Ver mis declaraciones</p>
                        </a>
                     </li>
                  </ul>
               <?php } ?>
            </li>
            <!-- <li class="nav-header"></li> -->
            <li class="nav-item align-items-end">
               <a href="#" class="nav-link">
                  <i class="fas fa-question"></i>&nbsp;
                  <p>
                     Ayuda
                     <i class="fas fa-angle-left right"></i>
                     <!-- <span class="badge badge-info right">6</span> -->
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-toggle="modal" data-target="#help">
                        <i class="fas fa-info"></i>
                        <p>&nbsp;Ver Tipos de declaración</p>
                     </a>
                  </li>
                  <li class="nav-item">
                <a href="../document/pdf/NORMAS E INSTRUCTIVO DE LLENADO DeclaraNet.pdf" class="nav-link" target="_blank">
                <i class="fas fa-info"></i>
                  <p>Instructivo de llenado</p>
                </a>
              </li>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>