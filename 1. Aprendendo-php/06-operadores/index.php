<?php

// Operadores aritméticos
$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'<br>';
echo 'Resta: '.($numero1-$numero2).'<br>';

// Operadores incremento y decremento
$year = 2022;
// Incremento
// $year = $year + 1;
$year++;
// Decremento
// $year = $year - 1;
$year--;
// Pre-incremento
// $year = 1 + $year;
++$year;
// Pre-decremento ?????????????
// $year = 1 - $year;
--$year;
echo $year.'<br>';

// Operadores de asignación
$edad = 29;
echo $edad.'<br>';
// $edad = $edad + 5;
echo ($edad+=5).'<br>';
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';

?>
