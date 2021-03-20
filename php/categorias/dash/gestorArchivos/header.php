<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header" >
            <a href="home.php" class="logo" style="padding-left:0;background-color: #007bff;">
                <!-- Logo -->
                <img src="../../../../img/icon.png" alt="San andres cholula" style="width:50px;">
                <span class="brand-text font-weight-light">Archivos</span>
            </a>
            <nav class="navbar navbar-static-top" style="background-color: #007bff;">
                <a href="#" class="nav-link" data-toggle="offcanvas" role="button"><i class="fas fa-bars " style="color: white;padding-top:20px"></i>
                    <!-- Sidebar toggle button-->
                   
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../images/profiles/<?php echo $profile_pic; ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $fullname; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <!-- User image -->
                                    <img src="../images/profiles/<?php echo $profile_pic; ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $fullname; ?>
                                        <small>Miembro desde el: <?php $created_at=date('d/M/Y', strtotime($created_at)); echo $created_at ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <!-- Menu Footer-->
                                    <div class="pull-right">
                                        <a href="../index.php" class="btn btn-default btn-flat">Regresar</a>
                                    </>
                                    <div class="pull-right">
                                        <a href="../../../../function/cerrar-sesion.php" class="btn btn-default btn-flat">Cerrar sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
