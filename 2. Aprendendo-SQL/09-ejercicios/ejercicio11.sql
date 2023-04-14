/* 
11. Visualizar todos los cargos de los vendedores y el numero de vendedores
que hay en cada cargo.
 */

SELECT cargo, COUNT(id) AS 'Numero de vendedores' FROM vendedores
        GROUP BY cargo ORDER BY COUNT(id) DESC;

