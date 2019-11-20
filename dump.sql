CREATE DATABASE IF NOT EXISTS develop;
USE develop;

CREATE TABLE `datos` (
  `id` int(8) unsigned NOT NULL auto_increment,
  `nombre` varchar(70) default NULL,
  `direccion` varchar(120) default NULL,
  `fechaCreacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE datos add column telefono varchar(25) after direccion;
