<?php
  require_once("../../config/Conexion.php");
  if(isset($_SESSION[usu_id])){
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
    <title>sistema :Albumnes</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/Nav.php");?>
	<div class="page-content">
		<div class="container-fluid">
			Consultar
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../Mainjs/Js.php");?>
</body>
</html>
<?php
  } else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>