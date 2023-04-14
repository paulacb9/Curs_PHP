/* 
22. Mostrar listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de vendedor y su nombre
 */

SELECT c.id, c.nombre AS 'nombre cliente', v.id, v.nombre AS 'nombre vendedor' FROM clientes c
    INNER JOIN vendedores v ON c.vendedor_id=v.id;


# con apellidos también #
# Esto es una unión#
SELECT c.id, c.nombre AS 'nombre cliente', v.id, CONCAT(v.nombre, ' ', v.apellido) AS 'nombre vendedor' 
    FROM clientes c
    INNER JOIN vendedores v ON c.vendedor_id=v.id;

# Esto es una consulta multitabla #
SELECT c.id, c.nombre AS 'nombre cliente', v.id, CONCAT(v.nombre, ' ', v.apellido) AS 'nombre vendedor' 
    FROM clientes c, vendedores v
    WHERE c.vendedor_id=v.id;

/* A nivel de rendimiento es mejor hacer una unión 
que una consulta multitabla */