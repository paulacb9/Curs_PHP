# CONSULTA CON UNA CONDICIÓN #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACIÓN:
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No nulo         is not null
Como            like
No es como      not like
*/

/*
OPERADORES LOGICOS:
O               OR
Y               AND
No              NOT
*/

/*
COMODINES:
Cualquier cantidad de caracteres:   %
Un caracter desconocido:            _
*/

#EJEMPLOS#

# 1. Sacar el nombre y los apellidos de los usuarios que se registrarón en 2022 #
SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) = 2022;

# 2. Sacar el nombre y los apellidos de los usuarios que NO se registrarón en 2022 #
SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) != 2022 OR ISNULL(fecha);

# 3. Mostrar email de usuario cuyo apellido contenga la letra 'A' y contraseña '12345de' #
SELECT email FROM usuarios WHERE apellido LIKE '%a%' AND password = '12345de';

# 4. Sacar todos los registros de la tabla usuarios cuyo año sea par #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Sacar todos los registros de la tabla usuarios cuyo año sea impar #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 != 0);

# 6. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y registrados antes de 2020 y mostrar en nombre en mayusculas #
SELECT UPPER(nombre) AS 'nombre', apellido FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;


# CLAUSULA LIMIT #
SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 3;
SELECT * FROM usuarios LIMIT 2,1; /* a partir del 2, solo 1 usuario */