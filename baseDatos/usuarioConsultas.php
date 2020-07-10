<?php

  require_once 'conexion.php';
 
    //Buscar usuario por correo y password
  function buscarUsuario($correo,$password){
      $sql = "SELECT * FROM USUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  
?>