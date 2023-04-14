/* 
16. Obtener listado de clientes atendidos por el vendedor 'David Lopez'
 */

SELECT * FROM clientes WHERE vendedor_id = 
    (SELECT id FROM vendedores WHERE nombre = 'David' AND apellido = 'Lopez' );

SELECT * FROM clientes WHERE vendedor_id = 
    (SELECT id FROM vendedores WHERE id = 1 );