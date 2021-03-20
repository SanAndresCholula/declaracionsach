<?php
require 'headPages.php';
?>
<title>Mis resguardos | <?php echo $_SESSION['usuario'] ?></title>

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
            <div class="col-sm-6">
              <h1 class="text-white">Mis archivos resguardados</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><?php echo $_SESSION['usuario'] ?></h3>
                </div>
                <!-- /.card-header -->
                <?php
                $query = "SELECT  id_reporte, comentario, name, date, dependencia FROM reporte WHERE usuario = '" . $_SESSION['usuario'] . "' ORDER BY date DESC";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <div class="card-body">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <td><b>Id</b></td>
                        <td><b>Comentario del reporte</b></td>
                        <td><b>Nombre Archivo</b></td>
                        <td>Fecha Captura o modificación</td>
                        <td>Dependencia</td>
                        <td>Acciones</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      while ($row = $resultado->fetch_assoc()) { ?>
                        <tr>
                          <td>
                            <?php echo $row['id_reporte']; ?>
                          </td>

                          <td>
                            <?php echo $row['comentario']; ?>
                          </td>
                          <td>
                            <a href="upload/<?php echo $_SESSION['usuario']."/".$row['name'] ?>" download="mi_archivo/<?php echo $row['name'] ?>">
                              <?php echo $row['name'] ?>&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
                          </td>
                          <td>
                            <?php echo $row['date'] ?>
                          </td>
                          <td>
                            <?php echo $row['dependencia'] ?>
                          </td>
                          <td>

                            <a style="display: inline;" href="updateUploadFile.php?id=<?php echo $row['id_reporte']; ?>" title="Editar reportes" onclick="deshabilitar(this)"><i class="fas fa-edit fa-2x"></i></a>

                            <a style="display: inline;" href="deleteUploadFile.php?id=<?php echo $row['id_reporte']; ?>" title="Eliminar reportes"><i class="fas fa-trash-alt fa-2x"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'footer.php';
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="../plugins/popper/popper.min.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../plugins/datatables/datatables.min.js"></script>

  <!-- para usar botones en datatables JS -->
  <script src="../plugins/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="../plugins/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="../plugins/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="../plugins/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
  <script src="../plugins/datatables/main.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>

</body>

</html>