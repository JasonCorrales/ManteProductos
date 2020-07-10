<?php
require_once './baseDatos/usuarioConsultas.php';

  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
              if(!empty($usuario)){
                  $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:index.php');
              }else{
                  header('location:login.php');
              }
          break;          
      }
  }

  
  function validarUsuario(){
      
    $correo = $_POST['correo']; 
    $password = $_POST['password'];
    
    $usuario = buscarUsuario($correo,$password);          
    return $usuario;
  }
  
?>
