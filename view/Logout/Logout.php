<?php
    require_once("../../config/Conexion.php");
    session_destroy();
    header("Location:".conectar::ruta()."index.php");
    exit();
?>