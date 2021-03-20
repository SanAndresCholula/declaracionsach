<?php
  require '../function/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $usuarios = getUsuarios();

?>
<!DOCTYPE html>
<html lang="es">

<style>
    label {
        color: #fff;
        font-size: 20px
    }

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edición de alertas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link href="../css/mainAdmin.css" rel="stylesheet">

    <link rel="icon" href="../img/icon.ico" type="image/x-icon">

    <!-- Custom styles for this template -->
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
        include 'menu-superior.php';
        ?>

        <main role="main" class="inner cover">

            <p class="lead" id="text">Panel: Edición de alertas </p>
            <hr class="style-one">

            <center>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card">
                                <?php
                                    $id=$_GET['id'];


                    $insert="SELECT * FROM news WHERE id = '$id' ORDER BY id ASC" ;
                    $result=mysqli_query($conexion, $insert);
                    while($ver=$result->fetch_assoc()){
                    ?>

                                <form id="test_upload" name="test_upload" action="mod_new.php" enctype="multipart/form-data" method="post">

                                    <div class="form-group"><br>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    </div>

                                    <div id="contenedor" class="form-group">
                                        <label for="noticia">Edita tu alerta, recuerda usar separadores de notas!</label>
                                        <textarea name="noticia" rows="5" cols="70" id="noticia"><?php echo $ver['contenido'];?></textarea>

                                    </div>
                                    <div>
                                        <input class="btn btn-primary btn-md" type="submit" name="submit" value="Modificar alerta" style="margin:10px" />
                                        <a class="btn btn-danger" href="alert.php">Regresar</a>
                                    </div>
                                    <?php
                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="lead">Realizado: Innovación Tecnológica 2018 - 2021 <a href="">SACH</a>, by <a href="">#4411</a>.</p>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>
