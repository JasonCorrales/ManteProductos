<?php include_once 'include/encabezado.php'; 
  if(isset($_GET['nombre'])){
      $nombre  = $_GET['nombre'];
      $producto = buscarProducto($nombre);
  }
?>
<section>
    <br>
    <h1>EDITAR UN PRODUCTO</h1>
    <form method="post" action="manteProductos.php">		
        <input type="text" placeholder="Nombre" name="nombre" required value="<?=$producto['nombre'];?>">
        <input type="text" placeholder="Marca"  name="marca" required value="<?=$producto['marca'];?>">
        <input type="text" placeholder="Presentación" name="presentacion" required value="<?=$producto['presentacion'];?>">                
        <input type="text" placeholder="Cantidad" name="cantidad" required value="<?=$producto['cantidad'];?>">
        <input type="text" placeholder="Precio" name="precio" required value="<?=$producto['precio'];?>">
        <input type="submit" name="accion" value="actualizar">
    </form>
</section>
<?php include_once 'include/pie.php'; ?>