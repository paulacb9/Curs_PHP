<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Imrpimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - masterphp.es</h1>
        
        <?="Bienvenido al curso más grande de PHP"?>
        
        <?php
            // Titular de la sección 
            echo "<h3> Listado de videojuegos </h3>";
            
            /*
                Esta es una lista
                de videjuegos
                modernos
            */
            echo "<ul>"
                ."<li>GTA</li>"
                ."<li>Fifa</li>"
                ."<li>Mario Bros</li>"
                ."</ul>";
            
            // Parrafo explicativo
            echo "<p>Esta es toda"." - "."lista de juegos</p>";
        ?>
    </body>
</html>

