<?php

  require_once 'conexion.php';
  
  //listar los productos
  function listarProductos(){    
      $productos = array();
      $sql = "SELECT * FROM PRODUCTOS ORDER BY NOMBRE ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($producto = mysqli_fetch_assoc($resultado)){
          array_push($productos, $producto);
      } 
      
      return $productos;
  }

  //registar un producto
  function registrarProducto($nombre,$marca,$presentacion,$cantidad,$precio){
      
      $sql = "INSERT INTO PRODUCTOS VALUES('$nombre','$marca','$presentacion',$cantidad,$precio)";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);      
  }

   //eliminar un producto 
  function eliminarProductoNombre($nombre){
      $sql = "DELETE FROM PRODUCTOS WHERE NOMBRE = '$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Buscar producto por nombre
  function buscarProducto($nombre){
      $sql = "SELECT * FROM PRODUCTOS WHERE NOMBRE = '$nombre'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $producto = mysqli_fetch_assoc($resultado);
       
       return $producto;
  }

  //modificar un producto
  function modificarProducto($nombre,$marca,$presentacion,$cantidad,$precio){
      $sql = "UPDATE PRODUCTOS SET MARCA='$marca',PRESENTACION='$presentacion',CANTIDAD=$cantidad,PRECIO=$precio WHERE NOMBRE='$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }


?>