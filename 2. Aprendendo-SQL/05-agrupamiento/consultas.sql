# CONSULTAS DE AGRUPAMIENTO #
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTA DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=4;

/*
AVG         Sacar la medio
COUNT       Contar el numero de elementos
MAX         Valor maximo del grupo
MIN         Valor minimo del grupo
SUM         Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
/* Logico para poner ex: precio medio de un producto */
SELECT MAX(id) AS 'Maximo Id', titulo FROM entradas;
SELECT SUM(id) AS 'Suma de Id' FROM entradas;
