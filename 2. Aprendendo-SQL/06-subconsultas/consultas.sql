/* 
SUBCONSULTAS:
- Son consultas que se ajecutan dentro de otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la
consulta principal.
- Jugando con las claves ajenas / foraneas.
 */

# Sacar usuarios con entradas #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA #
SELECT nombre, apellido FROM usuarios WHERE id IN
    (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# Sacar todas las entradas de la categoria accion utilizando su nombre #
SELECT titulo FROM entradas WHERE categoria_id IN
    (SELECT id FROM categorias WHERE nombre = 'Accion');

# Mostrar las categorias con 3 o más entradas #
SELECT nombre FROM categorias WHERE id IN
    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)) >= 3;

# Mostrar los usuarios que crearon una entrada un martes #
SELECT * FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

# Mostrar el nombre del usuario que tenga mas entradas #
SELECT CONCAT(nombre, ' ', apellido) AS 'El usuario con más entradas' FROM usuarios WHERE id =
    (SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorias sin entradas #
SELECT * FROM categorias WHERE id NOT IN
    (SELECT categoria_id FROM entradas);
