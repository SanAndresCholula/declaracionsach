<?php
require'head.php';
?>
<title>Dasboard <?php echo $_SESSION['usuario']?></title>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="../../panelUsuario.php" class="nav-link text-white">Salir del Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
      <a href="../../../function/cerrar-sesion.php" class="nav-link text-white">Cerrar sesión</a>
      </li>
      
    </ul>
  </nav> 

  <!-- /.navbar -->

<?php
require'aside.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0 text-white">Dashboard: <?php echo $dependencia?></h1>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard Av1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
   
        <!-- /.row (main row) -->
        <div class="row">
            <!-- .row -->
            <div class="col-md-4">
                <div class="image view view-first">
                    <img class="thumb-image" style="width: 100%; display: block;" src="images/profiles/<?php echo $profile_pic ?>" alt=" image">
                </div>
                <span class="btn btn-my-button btn-file" style="width: 345px; margin-top: 5px;">
                    <form method="post" id="formulario" enctype="multipart/form-data" class="m-0 text-white">
                        Cambiar Imagen de perfil: <small>recomendada 250x250</small> <input type="file" name="file">
                    </form>
                </span>
                <div id="respuesta"></div>
                <br>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <!-- <div id="result"></div> -->
                <div class="box box-primary">
                    <!-- general form elements -->
                    <div class="box-header with-border">
                        <h3 class="box-title text-white">Datos Personales: </h3>
                    </div> <!-- /.box-header -->
                    <form role="form" method="post" action="action/updprofile2.php">
                        <div class="box-body text-white">
                            <div class="form-group ">
                                <label for="fullname">Nombre Completo</label>
                                <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $fullname ?>" onfocus="this.blur" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input name="email" type="email" class="form-control" id="email" value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $phono ?>">
                            </div>
                            <div class="form-group">
                                <label for="dependencia">Área</label>
                                <input name="dependencia" type="text" class="form-control" id="dependencia" value="<?php echo $dependencia ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña Actual</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="*******">
                            </div>
                            <div class="form-group">
                                <label for="new_password">Nueva Contraseña</label>
                                <input name="new_password" type="password" class="form-control" placeholder="*******" id="new_password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_new_password">Confirmar Nueva Contraseña</label>
                                <input name="confirm_new_password" type="password" class="form-control" placeholder="*******" id="confirm_new_password">
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button name="token" type="submit" class="btn btn-success">Actualizar Datos</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <?php require '../../categorias/new.php'; ?><br>
        
      </div><!-- /.container-fluid -->
     
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<!-- footer -->
<?php
        require 'pages/footer.php';
        ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- image user -->
<script>
    $(function() {
        $("input[name='file']").on("change", function() {
            var formData = new FormData($("#formulario")[0]);
            var ruta = "action/uploadprofile.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos) {
                    $("#respuesta").html(datos);
                }
            });
        });
    });
</script>
</body>
</html>
