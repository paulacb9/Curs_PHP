/* 
5. Mostrar todos los vendedores con su nombre y el numero de dias que
llevan en el consecionario.
 */

SELECT nombre, DATEDIFF(CURDATE(), fecha_alta) AS 'DIAS' FROM vendedores;
