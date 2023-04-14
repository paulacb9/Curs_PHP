<?php

session_start();

echo $variable_normal."<br>"; //No existe, no declarada
echo $_SESSION['variable_persistente']; // Existe, porque es de sesion

