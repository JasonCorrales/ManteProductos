<?php
  require_once './baseDatos/productoConsultas.php';   

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarProducto();
            header("location:index.php");
            break;
        case 'actualizar':
            actualizarProducto();
            header("location:index.php");
            break;            
    }
  }
  
  // Aqui entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarProducto();
            header("location:index.php");
            break;       
    }
  }  

  function guardarProducto(){
      $nombre = $_POST['nombre'];
      $marca = $_POST['marca'];
      $presentacion = $_POST['presentacion'];
      $cantidad = $_POST['cantidad'];
      $precio = $_POST['precio'];

      registrarProducto($nombre,$marca,$presentacion,$cantidad,$precio);
  }
  
  function eliminarProducto(){
      $nombre = $_GET['nombre'];
      eliminarProductoNombre($nombre);
  }
  
  function actualizarProducto(){
      $nombre = $_POST['nombre'];
      $marca = $_POST['marca'];
      $presentacion = $_POST['presentacion'];
      $cantidad = $_POST['cantidad'];
      $precio = $_POST['precio'];

      modificarProducto($nombre,$marca,$presentacion,$cantidad,$precio);   
  }
  
?>












