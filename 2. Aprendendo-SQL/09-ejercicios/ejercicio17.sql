/* 
17. Obtener un listado con los encargos registrados por el clientes 'Fruteria Antonia Inc'
 */

SELECT * FROM encargos WHERE cliente_id =
    (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');

SELECT e.id AS 'Nº ENCARGO', e.cantidad, cl.nombre, c.modelo, e.fecha FROM encargos e
    INNER JOIN clientes cl ON cl.id = e.cliente_id
    INNER JOIN coches c ON c.id = e.coche_id
    WHERE e.cliente_id IN
     (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');