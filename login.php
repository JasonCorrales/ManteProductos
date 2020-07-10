<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <section>
            <br>
            <h1>INGRESAR</h1>
            <form method="post" action="manteUsuarios.php">		
                    <input type="text" placeholder="Correo" name="correo" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" name="accion" value="Ingresar">
            </form>
        </section>
        <footer>
        <p>&copy; 2020 Todos los derechos reservados UTC<p>
        </footer>          
    </body>
</html>