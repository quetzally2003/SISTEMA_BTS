<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA: Compras</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>
<body class="with-side-menu">
	<div class="page-content">
		<div class="container-fluid">
			<section class="box-typical box-typical-full-height">
				<div class="box-typical-center">
					<div class="box-typical-center-in prices-page">
						<header class="prices-page-title">Añadir una protección</header>
						<p class="prices-page-subtitle"></p>
						<article class="price-card">
							<header class="price-card-header">MÁS ELEGIDO</header>
							<div class="price-card-body">
							<div class="price-card-amount-lbl">2 semana de garantía extendida</div>
								<div class="price-card-amount">Us$4.50</div>
								<div class="price-card-amount-lbl">sin interés</div>
								<ul class="price-card-list">
									<li><i class="font-icon font-icon-ok"></i>Daños accidentales en el producto</li>
									<li><i class="font-icon font-icon-ok"></i>Robo en el trancurso del envio</li>
								</ul>
								<div class="clear"></div>
								<a href="#" class="btn btn-rounded">Añadir protección</a>
							</div>
						</article>
						<article class="price-card">
							<header class="price-card-header">Estandar</header>
							<div class="price-card-body">
							<div class="price-card-amount-lbl">1 mes de garantía extendida</div>
								<div class="price-card-amount">Us$9.63</div>
								<div class="price-card-amount-lbl">sin interés</div>
								<div class="price-card-label">Our most popular plan</div>
								<ul class="price-card-list">
									<li><i class="font-icon font-icon-ok"></i>Daños accidentales en el producto</li>
									<li><i class="font-icon font-icon-ok"></i>Robo en el trancurso del envio</li>
								</ul>
								<div class="clear"></div>
								<a href="#" class="btn btn-rounded">Añadir protección</a>
							</div>
						</article>
						<article class="price-card">
							<header class="price-card-header">Premium</header>
							<div class="price-card-body">
								<div class="price-card-amount">Us$13.00</div>
								<div class="price-card-amount-lbl">sin interés</div>
								<ul class="price-card-list">
									<li><i class="font-icon font-icon-ok"></i>Daños accidentales en el producto</li>
									<li><i class="font-icon font-icon-ok"></i>Robo en el trancurso del envio</li>
								</ul>
								<div class="clear"></div>
								<a href="#" class="btn btn-rounded">Añadir protección</a>
							</div>
						</article>
						<article class="price-card">
							<header class="price-card-header">Ultra</header>
							<div class="price-card-body">
								<div class="price-card-amount">Us$20.13</div>
								<div class="price-card-amount-lbl">sin interés</div>
								<ul class="price-card-list">
									<li><i class="font-icon font-icon-ok"></i>Daños accidentales en el producto</li>
									<li><i class="font-icon font-icon-ok"></i>Robo en el trancurso del envio</li>
								</ul>
								<div class="clear"></div>
								<a href="#" class="btn btn-rounded">Añadir protección</a>
							</div>
						</article>
						<div class="prices-page-bottom">
							<p>Larger plans are available on request.</p>
							<p>Save 10% by signing up for a year in advance. <a href="#">Contact us</a> for more information.</p>
						</div>
					</div>
				</div>
			</section><!--.box-typical.prices-page-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><!--.modal-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

<script src="js/app.js"></script>
<?php require_once("../MainJs/js.php");?>
</body>
</html>
<?php
  } else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>