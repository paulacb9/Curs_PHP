/* 
21. Obtener los nombres y ciudades de los clientes con encargos de 3 unidades
adelante.
 */

SELECT nombre, ciudad FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE cantidad >= 3);


SELECT c.nombre AS 'nombre cliente', c.ciudad, e.cantidad AS 'cantidad encargos' FROM clientes c 
    INNER JOIN encargos e ON e.cliente_id = c.id
    WHERE c.id IN
        (SELECT cliente_id FROM encargos WHERE cantidad >= 3);

