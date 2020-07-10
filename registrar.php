<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>REGISTRAR UN PRODUCTO</h1>
    <form method="post" action="manteProductos.php">		
        <input type="text" placeholder="Nombre" name="nombre" required>
        <input type="text" placeholder="Marca"  name="marca" required>
        <input type="text" placeholder="Presentación" name="presentacion" required>                
        <input type="text" placeholder="Cantidad" name="cantidad" required>
        <input type="text" placeholder="Precio" name="precio" required>
        <input type="submit" name="accion" value="registrar">
    </form>
</section>
<?php include_once 'include/pie.php'; ?>