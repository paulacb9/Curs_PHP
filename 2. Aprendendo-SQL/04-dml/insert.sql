# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUE(null, 'Paula', 'C Blanch', 'pcordonb@gmail.com', '12345de', '2022-10-12');
INSERT INTO usuarios VALUE(null, 'Elisa', 'Vieira', 'elisa23@gmail.com', '12re', '2022-10-12');

# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #    
INSERT INTO usuarios(email, password) VALUE('admin@admin.com','admin');
