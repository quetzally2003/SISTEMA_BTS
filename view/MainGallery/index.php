<?php
  require_once("../../config/Conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA:Favoritos</title>
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
							<h3></h3>
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
							<center><H2 class="gallery-item-title"><b>Categorias de Albumnes<b></H2></center>
								<div class="gallery-hover-layout">
								<img src="../../Public/img/album1.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album2.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album3.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album4.jpg" alt="300" height="300"> <align="left">
						</div>
									<div class="gallery-hover-layout-in">
										<p class="gallery-item-title"></p>
										<center><p><b>ALBUMNES DE LA ERA "LOVE YOURSELF"<b></p></center>
										<div class="btn-group">	
										<div class="gallery-col">

							         <article class="gallery-item">
								<img src="../../Public/img/album5.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album6.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album7.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album8.jpg" alt="300" height="300"> <align="left">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
									<p class="gallery-item-title"></p>
									<center><p><b>ALBUMNES DE LA ERA "MAP OF THE SOUL 7"<b></p></center>
									<div class="btn-group">		
									<img src="../../Public/img/album9.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album10.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album11.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album12.jpg" alt="300" height="300"> <align="left">		
									</div>
								</div>
							</article>
							        <center><p><b>ALBUMNES DE LA ERA "YOUNG FOREVER" <b></p></center>
									<div class="gallery-hover-layout">
								<img src="../../Public/img/album13.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/album14.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/al1.jpg" alt="300" height="300"> <align="left">
								<img src="../../Public/img/al2.jpg" alt="300" height="300"> <align="left">

						</div>
										
						</div>
							</article>
						</div>
	<script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script>
		$(function() {
			$('.gallery-item').matchHeight({
				target: $('.gallery-item .gallery-picture')
			});
		});
	</script>
	<script src="public/js/app.js"></script>
	<?php require_once("../MainJs/js.php");?>
</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>