<?php
  require_once("../../config/Conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>SISTEMA:Compras</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>
	<div class="page-content">
		<div class="container-fluid">
			<section class="card">
				<div class="card-block">
					<h5 class="with-border">COMPRA</h5>

					<div class="row">
						<div class="col-xs-12">
						<fieldset class="form-group">
								<label class="form-label" for="exampleInputEmail1">Descripcion de la compra</label>
								<textarea rows="4" class="form-control" placeholder="Escribir texto" data-autosize></textarea>
							</fieldset>
						</div>
					</div><!--.row-->

					<h5 class="with-border m-t-lg">Datos personales</h5>

					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" for="exampleInput"> Nombre</label>
								<input type="text" class="form-control maxlength-simple" id="exampleInput" placeholder="Nombre" maxlength="50">
								<small class="text-muted">Maximo 50 caracteres</small>
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" for="exampleInputEmail1">Correo Electronico</label>
								<input type="email" class="form-control maxlength-custom-message" id="exampleInputEmail1" placeholder="Correo" maxlength="50">
								<small class="text-muted">Maximo 50 Caracteres</small>
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" for="exampleInputPassword1">Contraseña</label>
								<input type="password" class="form-control maxlength-always-show" id="exampleInputPassword1" placeholder="Contrasena" maxlength="10">
								<small class="text-muted">Maximo 10 caracteres</small>
							</fieldset>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12">
							<fieldset class="form-group">
								<label class="form-label" for="exampleInputEmail1">Descripcion</label>
								<textarea rows="2" class="form-control maxlength-simple" placeholder="Haga una breve descripcion de su ubicacion" maxlength="20"></textarea>
							</fieldset>
						</div>
					</div>

					<h5 class="with-border m-t-lg">Contraseña</h5>
                    <div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="form-group">
								<label class="form-label" for="hide-show-password">Contraseña</label>
								<input id="hide-show-password" type="password" class="form-control" value="">
							</div>
						</div>
					</div>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/autosize/autosize.min.js"></script>
	<script src="js/lib/bootstrap-maxlength/bootstrap-maxlength.js"></script>
	<script src="js/lib/bootstrap-maxlength/bootstrap-maxlength-init.js"></script>
	<script src="js/lib/hide-show-password/bootstrap-show-password.min.js"></script>
	<script src="js/lib/hide-show-password/bootstrap-show-password-init.js"></script>

	<script>
		$(function() {
			autosize($('textarea[data-autosize]'));
		});
	</script>
<script src="js/app.js"></script>
<?php require_once("../MainJs/js.php");?>
</body>
</html>
<?php
  } else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>