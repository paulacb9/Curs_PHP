/* 
8. Visualizar todos los coches en cuyo marca exista la letra 'A' y que 
empiezen por 'F', y cuyo modelo exista la letra 'E'.
 */

SELECT * FROM coches WHERE marca LIKE '%a%' 
        AND marca LIKE 'F%'
        AND modelo LIKE '%e%';
