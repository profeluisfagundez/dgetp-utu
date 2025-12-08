CREATE DATABASE IF NOT EXISTS `finanzas`;
use finanzas;
CREATE TABLE IF NOT EXISTS `retiros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `metodo_pago` tinyint(4) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `fecha_retiro` timestamp NOT NULL DEFAULT current_timestamp(),
  `cantidad` float NOT NULL DEFAULT 0,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `ingresos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `metodo_pago` tinyint(4) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp(),
  `cantidad` float NOT NULL DEFAULT 0,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;