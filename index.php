<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SolBoVo</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />
    <script src="cssalert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="cssalert/sweetalert.css">
	<!-- boxed bg -->
</head>
<body  id="page-top" class="index">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="150" height="50" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Inicio</a>
						</li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Registrar  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="Formulariorecinto.php">Nuevo Recinto</a></li>
                                <li><a href="Formulariofilial.php">Nuevo Filial</a></li>
								<li><a href="Formulariovotacion.php">Nueva Votación</a></li>
                            </ul>
                        </li>
                        <li>
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Ver registros  <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="Verrecintos.php">Ver Recintos</a></li>
								<li><a href="Verfilial.php">Ver Filiales</a></li>
								<li><a href="grafics/2.php">Ver Estadísticas de Votación</a></li>
							</ul>	
						</li>
						<li>
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Config  <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="login.php">Login</a></li>
								<li><a href="Logout.php">Salir de <?php echo "$usuario";?></a></li>
							</ul>	
						</li>
                        <li><a href="portfolio.html"></a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"></a>
						</li>
                        <li><a href="contact.html"></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

	
</body>
</html>