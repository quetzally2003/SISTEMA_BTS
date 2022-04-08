<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA: CATEGORIAS</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>
<body class="with-side-menu">
	<div class="page-content">
		<div class="container-fluid">
			<section class="box-typical box-typical-full-height-with-header">
				<header class="box-typical-header box-typical-header-bordered">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
						<h3>MERCH</h3>
						</div>
						<div class="tbl-cell tbl-cell-actions">
							<button type="button" class="action-btn view active">
								<i class="font-icon font-icon-view-grid"></i>
							</button>
							<button type="button" class="action-btn view">
								<i class="font-icon font-icon-view-rows"></i>
							</button>
							<button type="button" class="action-btn view">
								<i class="font-icon font-icon-view-cascade"></i>
							</button>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
							<img src="../../public/img/al1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/al2.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/al3.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/al4.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/army bomb.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>	
					</div><!--.gallery-grid-->
					<center><p></p>MERCH DE BTS</center>

					<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
							<img src="../../public/img/astr4.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
							<img src="../../public/img/astr3.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
							<img src="../../public/img/astr1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
							<img src="../../public/img/astr2.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->

						<div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item">
							<img src="../../public/img/astro.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>
						</div><!--.gallery-col-->
						<center><p>MERCH DE ASTRO</p></center>
						
						<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/exo3.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>	
					</div><!--.gallery-grid-->

					<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/exo2.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>	
					</div><!--.gallery-grid-->

					<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/exo1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>	
					</div><!--.gallery-grid-->

					<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/exo5.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>	
					</div><!--.gallery-grid-->

					<div class="gallery-col">
							<article class="gallery-item">
								<img src="../../public/img/exo.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
								</div>
							</article>	
					</div><!--.gallery-grid-->
					
                     </div><!--.gallery-grid-->
					<center><p></p>MERCH DE EXO</center>

				</div><!--.box-typical-body-->
			</section><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	</script>
<script src="public/js/app.js"></script>
<?php require_once("../MainJs/js.php");?>
</body>
</html>
<?php
  } else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>