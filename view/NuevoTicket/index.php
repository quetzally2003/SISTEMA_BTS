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
	<?php require_once("../MainNav/nav.php");?>

	<div class="page-content">
		<div class="container-fluid">
		<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li><a href="#">Nuevo Ticket</a></li>
								
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				<p>
				   Desde esta ventana podrá generar nuevos tickets	
			    </p>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podrá generar nuevos ticket de Mesa de Ayuda
				</p>

				<h5 class="m-t-lg with-border">Ingrese Información</h5>
				
				
				<div class="row">
				
				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria</label>
							<select id="exampleSelect" class="form-control">
								<option>software</option>
								<option>hardware</option>
								<option>otros</option>
							</select>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1"> titulo</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ingresa el titulo de ticket" >
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Descripcion</label>
							<div class="summernote-theme-10" >
								<textarea class="summernote" id="tick_descrip" name="name"></textarea>
							</div>
						</fieldset>
					</div>
				</div><!--.row-->
			</div>  
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="Nuevoticket.js"></script>
</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>