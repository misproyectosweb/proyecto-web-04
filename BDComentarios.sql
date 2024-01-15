CREATE DATABASE IF NOT EXISTS comentarios;

USE comentarios;

CREATE TABLE usuarios
(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    direccion TEXT NOT NULL,
    solicitud TEXT NOT NULL,
    comentario TEXT    
)

-- Muestra la estructura de la base de datos
DESCRIBE usuarios;

-- Inserta datos en la base de datos. Inserción de prueba
INSERT INTO usuarios (id, nombre, telefono, correo, direccion, solicitud, comentario) VALUES
('1','Paulo Gómez', '88661144', 'paulogomez@hola.com', 'Moravia', 'Oración por salud', 'Me gusta la página');

-- Mostrar los registros en la tabla de la base de datos
SELECT * FROM usuarios;

DELETE FROM usuarios;

DROP TABLE usuarios;

-- Reiniciar el ID de una tabla en MySQL
ALTER TABLE usuarios AUTO_INCREMENT = 1;