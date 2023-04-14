/* 
VISTAS:
Las podemos definir como una consulta almacenada en la base de datos 
quese utiliza como una tabla virtual.
Y no almacena datos, sino que utiliza asociaciones y los datos originales
de las tablas, de forma que siempre se mantiene actualizada.
 */

CREATE VIEW entradas_con_nombres AS 
    SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'categoria' 
        FROM entradas e
        INNER JOIN usuarios u ON e.usuario_id = u.id
        INNER JOIN categorias c ON e.categoria_id = c.id;

# Eliminar view #
DROP VIEW entradas_con_nombres;