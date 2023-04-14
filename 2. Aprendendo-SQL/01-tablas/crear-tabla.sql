/*
int(nº caracteres)              ENTERO
integer(nº caracteres)          ENTERO (maximo 255)
vachar(nº caracteres)           STRING / ALFANUMERICO (maximo 255)
char(nº caracteres)             STRING / ALFANUMERICO
float(nº cifras, nº decimales)  DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MAS GRANDES
TEXT        65535 caracteres
MEDIUMTEXT  16 millones caracteres
LONGTEXT    4 billones de caracteres

// ENTEROS MAS GRANDE
*/

/* 
CREAR TABLA
 */
CREATE TABLE usuarios (
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default 'hola que tal',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

