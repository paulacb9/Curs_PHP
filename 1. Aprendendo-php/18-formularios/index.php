<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charest="utf-8" />
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre"> Nombre: </label>
            <p><input type="text" name="nombre" disabled="disabled" placeholder="desactivado"></p>
            
            <label for="apellido"> Apellido: </label>
            <p><input type="text" name="apellido" autofocus="autofocus" minlength="5" pattern="[A-Z ] " ></p>

            <label for="boton"> Botón: </label>
            <p><input type="button" name="boton" value="Clicame"></p>
            
            <label for="sexo"> Sexo: </label>
            <p>
                Hombre:<input type="checkbox" name="sexo" value="hombre">
                Mujer: <input type="checkbox" name="sexo" value="mujer" checked="checked">
                Otro: <input type="checkbox" name="sexo" value="otro">
            </p>
            
            <label for="color"> Color: </label>
            <p><input type="color" name="color"></p>

            <label for="fecha" required="required"> Fecha: </label> <!-- No se utiliza mucho, es HTML5, porque no funciona en todos los exploradores (antiguos)-->
            <p><input type="date" name="fecha"></p>

            <label for="correo"> Email: </label>
            <p><input type="email" name="correo"></p>
            
            <label for="archivo"> Archivo: </label>
            <p><input type="file" name="archivo" multiple="multiple"></p>
            
            <label for="numero"> Numero: </label>
            <p><input type="number" name="numero"></p>
            
            <label for="pass"> Contraseña: </label>
            <p><input type="password" name="pass"></p>
            
            <label for="continente"> Continente: </label>
            <p>
                <input type="radio" name="continente" value="America del Sur"> America del Sur
                <input type="radio" name="continente" value="Europa"> Europa
                <input type="radio" name="continente" value="Asia"> Asia
            </p>
            
            <label for="web"> Pagina web: </label>
            <p><input type="url" name="web"></p>
            
            <textarea></textarea><br>
            
            <label for="peli"> Peliculas: </label><br>
            <select name="peli">
                <option value="Spiderman">Spiderman</option>
                <option value="Resident Evil">Resident Evil</option>
                <option value="Harry Poter">Harry Potter</option>
                <option value="El Quinto Elemento">El Quinto Elemento</option>
            </select>

            <p><input type="submit" name="Enviar"></p>
        </form>
        
    </body>
</html>
