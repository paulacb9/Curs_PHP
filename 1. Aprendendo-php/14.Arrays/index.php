<?php

/* 
ARRAYS
Un array es una colección o un conjunto de datos/valores, bajo un único nombre. 
Para acceder a esos valores podemos usar un indice numero o alfanumerico.
*/

$pelicula = "Batman";
$peliculas = array('Batman','Spiderman','Harry Potter');
$cantantes = ['2pac','Drake','Lady Gaga'];

// Array asociativo -> datos que se mandan por GET o POST es array asociativo
$personas = array(
    'nombre' => 'Paula',
    'apellido' => 'C Blanch',
    'web' => 'monkeywistes.com'
);

// Recorrer con FOR
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
    for($i = 0;$i < count($peliculas); $i++){
        echo "<li>".$peliculas[$i]."</li>";
    }
echo "</ul>";

// Recorrer con Foreach
echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
    foreach ($cantantes as $cantante) { // recorreme toda la array de $cantantes y en cada iteración me creas una variable que se llame $cantante
        echo "<li>".$cantante."</li>";
    }
echo "</ul>";

// Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Paula',
        'email' => 'pcordon@gmail.com'    
    ),
    array(
        'nombre' => 'Elisa',
        'email' => 'elisamiriam@hotmail.com'   
    ),
    array(
        'nombre' => 'Joel',
        'email' => 'joel123@gmail.es'    
    )
);
/*var_dump($contactos);
echo($contactos[1]['nombre']); */
foreach ($contactos as $key => $contacto) {
    echo($contacto['nombre'])."<br>";
}

