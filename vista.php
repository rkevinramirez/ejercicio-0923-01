<!DOCTYPE html>                 
<html lang="es">
    <head>
        <title>Listado de unidades</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0">
    </head>
    <body>
        <header>
            <h1>Listado de unidades</h1>
        </header>
        <section>
        <table>
        <tr>
	        <th>ID</th>
	        <th>Nombre</th>
	        <th>Abreviado</th>
	        </tr>
	        <?php foreach ($datos as $fila){ ?>
	    <tr>
	        <th><?php echo $fila ['id_unidad_medida'] ?></th>
	        <th><?php echo $fila ['nombre'] ?></th>
	        <th><?php echo $fila ['abreviado'] ?></th>
	    </tr>
	        <?php } ?>
        </table>
        	
        </section>
        <footer>
            &copy;Ejercicio 23/09
            
        </footer>
    </body>
</html>