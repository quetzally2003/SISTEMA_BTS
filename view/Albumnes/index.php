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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Inicio de albumnes</title>

	<link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="public/image/png" sizes="144x144">
	<link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="public/image/png" sizes="114x114">
	<link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="public/image/png" sizes="72x72">
	<link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="public/image/png">
	<link href="public/img/favicon.png" rel="icon" type="public/image/png">
	<link href="public/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="public/css/separate/elements/cards.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
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
                                        <img src="public/img/album14.jpg" alt="300" height="300">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Fernanda Quetzally Rejon Alegria</a></p>
										<p class="color-blue-grey-lighter">viva mexico</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/gall-img-1.jpg" alt="">
							</div>
							<header class="title"><a href="#">vivaaaa mexico</a></header>
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
											<img src="../../public/img/avatar-1-64.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
							<p>ARMYS </p>
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
											<img src="../../public/img/avatar-2-64.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../public/img/gall-img-4.jpg" alt="">
							</div>
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
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
											<img src="../../img/photo-64-3.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
							<p>ARMYS </p>
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
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
							<p>ARMYS </p>
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
											<img src="../../public/img/avatar-3-64.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
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
								<img src="../../img/gall-img-5.jpg" alt="">
							</div>
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
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
											<img src="../../public/img/photo-64-2.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
							<p>ARMYS </p>
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
											<img src="../../img/avatar-1-64.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
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
											<img src="../../img/photo-64-2.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<div class="photo">
								<img src="../../img/gall-img-6.jpg" alt="">
							</div>
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
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
											<img src="../../img/avatar-2-64.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
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
											<img src="../../img/photo-64-3.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
										<p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
									</div>
									<div class="tbl-cell tbl-cell-status">
										<a href="#" class="font-icon font-icon-star active"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-typical-section card-typical-content">
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
							<p>ARMYS </p>
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
											<img src="../../img/avatar-3-64.png" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Colins</a></p>
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
								<img src="../../img/gall-img-7.jpg" alt="" aling="rigth">
							</div>
							<header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
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

			</div><!--.card-grid-->
			<div class="clear"></div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="public/js/lib/jquery/jquery.min.js"></script>
	<script src="public/js/lib/tether/tether.min.js"></script>
	<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="jpublic/s/plugins.js"></script>

	<script src="public/js/lib/salvattore/salvattore.min.js"></script>
	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script>
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