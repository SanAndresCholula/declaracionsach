<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta name="description" content="Reportes de actividades ayuntamiento San Andres Cholula 2018 - 2021">
   <meta name="keywords" content="Formatos SACH Ayuntaminento San Andres Cholula">
   <meta name="author" content="ISC Jose Uriel Guerra Trinidad">
   <meta name="copyright" content="H. Ayuntamiento de San Andres Cholula 2018 - 2021">
   <meta name="robots" content="index">
   <title>Control de Reportes Digitales SACH</title>

   <link rel="icon" href="img/icon.ico" type="image/x-icon">
   <!--Bootsrap-->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!--Fontawesome CDN-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   <!--Custom styles-->
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <!-- swipe css -->
   <link rel="stylesheet" href="css/swiper-bundle.css">
   <style>
      .swiper-container {
         width: 100%;
         padding-top: 50px;
         padding-bottom: 50px;
      }

      .swiper-slide {
         background-position: center;
         background-size: cover;
         width: 400px;
         height: 350px
      }
   </style>
</head>

<body oncontextmenu="return false">
   <div class="container" id="login" style="padding-top: 5%;">

      <div class="row justify-content-center">
         <h3 class="text-white"><i class="fa fa-arrow-left" aria-hidden="true"></i> Desliza el login y selecciona una plataforma <i class="fa fa-arrow-right" aria-hidden="true"></i></h3>
      </div>
      <div class="swiper-container">
         <div class="swiper-wrapper">
            <!-- 1 slide -->
            <div class="swiper-slide" style="background-image:url(img/logoIT.png)">
               <div class="d-flex justify-content-center">
                  <div class="container">
                     <div class="d-flex justify-content-center h-100">
                        <div class="card">
                           <div class="card-header">
                              <h3 style="padding: 25px">Control de Reportes Digitales</h3>
                              <div class="d-flex justify-content-end social_icon">
                                 <a href="https://www.facebook.com/SnAndresOficial/?ref=br_rs" target="_blank" title="Visita nuestra Fanpage"><span><i class="fab fa-facebook-square"></i></span></a>
                                 <a href="mailto:soporteit@sach.gob.mx" title="Manda un correo para solicitar soporte"><span><i class="fas fa-envelope"></i></span></a>
                                 <a href="https://twitter.com/SnAndresOficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" title="visita nuestra pagina"><span><i class="fab fa-twitter-square"></i></span></a>
                                 <a href="https://api.whatsapp.com/send?phone=+52 12212096482" target="_blank" title="Dudas manda mensaje al administrador del sitio"><span><i class="fab fa-whatsapp"></i></span></a>
                              </div>
                           </div>
                           <div class="card-body">
                              <!-- a tiempo -->
                              <form action="function/check-login.php" method="post">
                                 <!--<form action="closed/index.php" method="post">-->
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="txtUsuario" placeholder="Ingresa Usuario" pattern="[A-Za-z0-9_-@]{1,100}" required>
                                 </div>
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="txtClave" placeholder="contraseña" required>
                                 </div>
                                 <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn">
                                    <button type="reset" class="btn float-left btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- DECLARA-SACH -->
            <div class="swiper-slide" style="background-image:url(declarasach/img/declara_logo.png); ">
               <div class="d-flex justify-content-center">
                  <div class="container">
                     <div class="d-flex justify-content-center h-100">
                        <div class="card">
                           <div style="padding: 5px;" class="card-header">
                              <h3 style="padding: 5px">DeclaraSACH</h3>
                              <div class="d-flex justify-content-end social_icon">
                                 <a href="https://api.whatsapp.com/send?phone=+52 12212096482" target="_blank" title="Dudas manda mensaje al administrador del sitio"><span><i class="fab fa-whatsapp"></i></span></a>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="declarasach/config/check-login.php" method="post">
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="usuario" placeholder="Ingresa Usuario" pattern="[A-Za-z0-9_-@]{1,100}" required>

                                 </div>
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="contraseña" required>
                                 </div>
                                 <div class="form-group">
                                    <input type="submit" value="Acceder" class="btn float-right login_btn" onclick="fecha_acceso()" id="fecha">
                                    <button type="reset" class="btn float-left btn-success"><i class="fas fa-broom"></i> Limpiar</button>

                                 </div>
                              </form>
                              <div style="margin-top: 75px">
                                 <h5>
                                    <a href="forgot-password.html" style="color: #fff;">Olvide mi contraseña</a>
                                 </h5>
                                 <h5>
                                    <a href=" declarasach/registrar.php" class="text-left" style="color: #fff;">Registrarse</a>
                                 </h5>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- DIF -->
            <div class="swiper-slide" style="background-image:url(DIF/images/dif_vertical.png); ">
               <div class="d-flex justify-content-center">
                  <div class="container">
                     <div class="d-flex justify-content-center h-100">
                        <div class="card">
                           <div class="card-header">
                              <h3 style="padding: 25px">DIF Municipal</h3>
                              <div class="d-flex justify-content-end social_icon">
                                 <a href="https://www.facebook.com/DIFSnAndresOficial/" target="_blank" title="Visita nuestra Fanpage"><span><i class="fab fa-facebook-square"></i></span></a>
                                 <a href="mailto:secretariadesalud1821@gmail.com" title="Manda un correo al titular: C. Gelasia F. Elias Amaxalt "><span><i class="fas fa-envelope"></i></span></a>
                                 <a href="https://twitter.com/snandresoficial?lang=es" target="_blank" title="visita nuestra página"><span><i class="fab fa-twitter-square"></i></span></a>
                                 <a href="https://goo.gl/maps/jCYfrjXnUBN4RsNN8" target="_blank" title="Ubicación"><span><i class="fa fa-map-marker"></i></span></a>
                                 <!-- <a href="https://api.whatsapp.com/send?phone=+52 12212096482" target="_blank" title="Dudas manda mensaje al administrador del sitio"><span><i class="fab fa-whatsapp"></i></span></a> -->
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="DIF/config/check-login.php" method="post">
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="usuario" placeholder="Ingresa Usuario" pattern="[A-Za-z0-9_-@]{1,100}" required>

                                 </div>
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="contraseña" required>
                                 </div>
                                 <div class="form-group">
                                    <input type="submit" value="Acceder" class="btn float-right login_btn">
                                    <button type="reset" class="btn float-left btn-success"><i class="fas fa-broom"></i> Limpiar</button>

                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- BIENESTAR -->
            <div class="swiper-slide" style="background-image:url(BIENESTAR/images/bienestar.png)">
               <div class="d-flex justify-content-center">
                  <div class="container">
                     <div class="d-flex justify-content-center h-100">
                        <div class="card">
                           <div class="card-header">
                              <h3 style="padding: 25px">Bienestar Social</h3>
                              <div class="d-flex justify-content-end social_icon">
                                 <a href="https://www.facebook.com/BienestarSnAndresOficial" target="_blank" title="Visita nuestra Fanpage"><span><i class="fab fa-facebook-square"></i></span></a>
                                 <a href="https://twitter.com/snandresoficial?lang=es" target="_blank" title="visita nuestra página"><span><i class="fab fa-twitter-square"></i></span></a>
                                 <a href="https://goo.gl/maps/e9Sc8QKTQQKQ2T398" target="_blank" title="Ubicación"><span><i class="fa fa-map-marker"></i></span></a>
                                 <!-- <a href="https://api.whatsapp.com/send?phone=+52 12212096482" target="_blank" title="Dudas manda mensaje al administrador del sitio"><span><i class="fab fa-whatsapp"></i></span></a> -->
                              </div>
                           </div>
                           <div class="card-body">
                              <!-- a tiempo -->
                              <form action="BIENESTAR/config/check-login.php" method="post">

                                 <!--<form action="closed/index.php" method="post">-->
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="usuario" placeholder="Ingresa Usuario" pattern="[A-Za-z0-9_-@]{1,100}" required>

                                 </div>
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="contraseña" required>
                                 </div>
                                 <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn">
                                    <button type="reset" class="btn float-left btn-success"><i class="fas fa-broom"></i> Limpiar</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="swiper-slide" style="background-image:url(./images/nature-4.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./images/nature-5.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./images/nature-6.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./images/nature-7.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./images/nature-8.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./images/nature-9.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./images/nature-10.jpg)"></div> -->


         </div>
         <!-- Add Pagination -->
         <div class="swiper-pagination"></div>
      </div>

      <footer class="mastfoot mt-auto" style="position:fixed;
   left:0px;
   bottom:25px;
   height:30px;
   width:100%;
   background-color: transparent;">
         <div class="inner">
            <p style="color: #fff;padding: 10px">Realizado por : Innovación Tecnológica 2018 - 2021 <a href="">SACH</a>, by <a href="">ISC-JUGT</a>. Ext. 105</p>
         </div>
      </footer>
   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <!-- swipe js -->
   <script src="js/swiper-bundle.js"></script>
   <!-- Initialize Swiper -->
   <script>
      var swiper = new Swiper('.swiper-container', {
         effect: 'coverflow',
         grabCursor: true,
         centeredSlides: true,
         slidesPerView: 'auto',
         coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
         },
         pagination: {
            el: '.swiper-pagination',
         },
      });
   </script>
</body>

</html>