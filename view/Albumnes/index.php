<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA: Nuevo Ticket</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>

<head lang="es">
</head>
<body class="with-side-menu">
	<div class="page-content">
		<div class="container-fluid">
			<div class="cards-grid" data-columns>
				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
                                        <img src="../../public/img/album14.jpg" alt="300" height="300">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Quetzally Alegria</a></p>
										<p class="color-blue-grey-lighter">12 days sep - 17 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/album1.jpg" alt="">
							</div>
							<header class="title"><a href="#">ME ENCANTO MUCHO</a></header>
							<p>Se los recomiendo mucho,me gusto que me lo entregaran de buen material el producto</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								701
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-220-1.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Angelica Alvaro</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
                         </div>
						 <div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/astro2.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">ME GUSTO EL BUEN SERVICIO</a></header>
							<p>Volveria comprar aquí en la página </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								123
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-64-4.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Geni Mar</a></p>
										<p class="color-blue-grey-lighter">15 days dic - 45 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/al3.jpg" alt="">
							</div>
							<header class="title"><a href="#">chicaaas!!!! me enamore de estas diadena, se las recomiendo </a></header>
							<p>ARMYS</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								123
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-92-1.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Luis Alejandro</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/al1.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Me gusto </a></header>
							<p>Lo compre por que a mi novia le gusta estos tipos de cosas, pero nunca pense que eran de buena </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								123
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/video-preview.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Mayra Medina </a></p>
										<p class="color-blue-grey-lighter">14 days ago -  1 hora read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/astro1.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Soy nueva, pero viendo todo el producto se los recomiendo </a></header>
							<p>no sean desconfiadas en comprar el producto </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								123
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/user.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Marcos Juarez</a></p>
										<p class="color-blue-grey-lighter">11 days january - 01 h read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/album12.jpg" alt="">
							</div>
							<header class="title"><a href="#">I LOVE BTS</a></header>
							<p>QUIEROO!! quiero comprar más álbumnes</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								569
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-64-2.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Jesus Velazquez</a></p>
										<p class="color-blue-grey-lighter">08 days june - 2 h read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/exo.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">OH YEA!!!</a></header>
							<p>Si valio la pena gastar mi beca </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								1332
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-64-3.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Galilea Fuentes</a></p>
										<p class="color-blue-grey-lighter">01 days nov - 12 h read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/mamamoo.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Me muerooo!!!, ya lo necesitaba</a></header>
							<p>Si!!! ya lista para ir concierto</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								145
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/gif.gif" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Monse Lopéz</a></p>
										<p class="color-blue-grey-lighter">05 days may - 03 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/album9.jpg" alt="">
							</div>
							<header class="title"><a href="#">En este paso me quedare pobre!!</a></header>
							<p>Pero enserio, aprovechen a comprar</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								204
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-64-1.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tom Holland</a></p>
										<p class="color-blue-grey-lighter"> 01 days sep - 6 h read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/TXT.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Si valio la pena :)</a></header>
							<p>Hoy si no duermo en el sillón jajaja :v</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								1694
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/photo-92-3.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Min Sasha</a></p>
										<p class="color-blue-grey-lighter">04 days dic - 24 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/astro6.jpg" alt="">
							</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">Me gusto en todos los aspectos</a></header>
							<p>Si volveria a comprar en esta página, ya que me gusto el buen trato y la calidad del producto </p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								107
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

				<div class="card-grid-col">
					<article class="card-typical">
						<div class="card-typical-section">
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="../../public/img/olivia.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Olivi Rodrigo</a></p>
										<p class="color-blue-grey-lighter">12 days march - 05 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/album18.jpg" alt="" aling="rigth">
							</div>
							<header class="title"><a href="#">Me enamore de estes album</a></header>
							<p>Me estoy convertiendome en army, si volveria a comprar aquí</p>
						</div>
						<div class="card-typical-section">
							<div class="card-typical-linked">in <a href="#">Coders Life</a></div>
							<a href="#" class="card-typical-likes">
								<i class="font-icon font-icon-heart"></i>
								12
							</a>
						</div>
					</article><!--.card-typical-->
				</div><!--.card-grid-col-->

			</div><!--.card-grid-->
			<div class="clear"></div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->
		$(function() {
			$('.card-user').matchHeight();
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