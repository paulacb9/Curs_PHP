/* 
14. Visualizar las unidades totales vendidas de cada coche a cada cliente.
Mostrando el nombre del coche, numero de cliente y la suma de unidades.
 */

SELECT c.modelo AS 'coche', cl.nombre AS 'cliente', SUM(e.cantidad) AS 'unidades' FROM encargos e
    INNER JOIN coches c ON c.id=e.coche_id
    INNER JOIN clientes cl ON cl.id=e.cliente_id
    GROUP BY e.coche_id, e.cliente_id;
