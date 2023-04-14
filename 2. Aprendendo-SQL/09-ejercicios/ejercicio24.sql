/* 
24. Listar los encargos con el nombre del coche, el nombre del cliente
y el nombre de la ciudad, pero unicamente cuando sean de Barcelona.
 */

SELECT e.id, c.modelo, cl.nombre, cl.ciudad FROM encargos e
    INNER JOIN coches c ON c.id = e.coche_id
    INNER JOIN clientes cl  ON cl.id = e.cliente_id
    WHERE cl.ciudad = 'Barcelona';
    