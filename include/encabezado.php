<?php require_once './baseDatos/productoConsultas.php'; 
   if(!isset($_SESSION['usuarioLogueado'])){
       header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):?>
                <li><a href="registrar.php">Registrar</a></li>
                <li><a href="index.php">Productos</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            <?php endif;?>
            </ul>
        </nav>