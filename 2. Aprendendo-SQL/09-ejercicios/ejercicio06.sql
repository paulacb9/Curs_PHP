/* 
6. Visualizar el nombre y los apellidos de los vendedores en una misma columna, 
su fecha de registro y el dia de la semana en que se registrarón
 */

SELECT CONCAT(nombre, ' ', apellido) AS 'nombre y apellidos', 
        fecha_alta, DAYNAME(fecha_alta) FROM vendedores;
