CREATE TABLA usuarios_table (
id_usuario Int,
Nombre_completo Char(100),
Correo_electronico VarChar(100),
Tipo_usuario Char(100),
);

CREATE TABLA libros_table (
id_libro Int,
Titulo Char(100),
Autor Char(100),
Genero Char(100),
Ano_publicacion Int,
);

CREATE TABLA prestamos_table (
id_prestamo Int,
id_usuario Int,
id_libro Int,
fecha_prestamo Int,
Fecha_devolucion Int,
);