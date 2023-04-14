<?php
/*
// Abrir archivo
$archivo = fopen("fichero_text.txt", "a+");

// Leer contenido
while(!feof($archivo)){
    // solo lee una linea, por eso poner el while
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

// Escribir
fwrite($archivo, "***Soy un texto metido por PHP***");

// Cerrar archivo
fclose($archivo);
 */

// Copiar un fichero
// copy('fichero_text.txt', 'fichero_copiado.txt') or die('Error al copiar');

// Renombrar
//rename('fichero_copiado.txt', 'archivito.txt');

// Eliminar
//unlink('archivito.txt') or die('Error al borrar');

if(file_exists('fichero_text1.txt')){
    echo "El archivo existe";
}else{
    echo "El archivo NO existe";
}
