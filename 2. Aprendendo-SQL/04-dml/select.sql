# MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellido FROM usuarios;

# MOSTRAR TODOS LOS COMPOS #
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;
SELECT id, email, (id+7) AS 'OPERACION' FROM usuarios;

# ORDENAR OPERACIONES #
SELECT id, email, (7+7) AS 'OPERACION' FROM usuarios ORDER BY email;
SELECT id, email FROM usuarios ORDER BY email DESC;
SELECT id, email  FROM usuarios ORDER BY email ASC; 

# FUNCIONES MATEMATICAS #
SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.05) AS 'OPERACION' FROM usuarios;          # redondeo
SELECT FLOOR(7.05) AS 'OPERACION' FROM usuarios;         # redondeo a la baja
SELECT ROUND(id, 2) AS 'OPERACION' FROM usuarios;        # poner 2 dec

# FUNCIONES PARA TEXTOS #
SELECT CONCAT(nombre, ' ', apellido) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellido) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellido)) AS 'CONVERSION' FROM usuarios;
SELECT email, LENGTH(CONCAT(nombre, ' ', apellido)) AS 'CONVERSION' FROM usuarios;
SELECT TRIM(CONCAT('   ', nombre, ' ', apellido, '   ')) AS 'CONVERSION' FROM usuarios;  # elimina los espacios inecesarios

# FUNCIONES PARA FECHAS #
SELECT email, fecha, CURDATE() AS 'fecha actual' FROM usuarios;  # fecha actual
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Dias de diferencia' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'Dia semana' FROM usuarios;
SELECT email, DAYOFMONTH(fecha) AS 'Dia semana' FROM usuarios;

# FUNCIONES GENERALES #
SELECT email, ISNULL(apellido) FROM usuarios;
SELECT email, STRCMP('Hola','Hola1') FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT IFNULL(apellido, 'Este campo esta vacio') FROM usuarios;