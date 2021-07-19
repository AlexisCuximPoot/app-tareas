-- Código de creación de la base de datos.
CREATE DATABASE `tareas` /*!40100 COLLATE 'utf8_general_ci' */

-- Crear tabla
CREATE TABLE `tareas` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(150) NOT NULL,
	`descripcion` TEXT NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci';